<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ImageVerification;
use App\Traits\GenerateRef;
use App\Traits\sandbox;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\IdentityVerification;
use App\Models\Wallet;
use Illuminate\Support\Facades\Session;

class IdentityImageController extends Controller
{
    use GenerateRef;
    use sandbox;

    public function processImage(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), [
            'first_image' => 'bail|required|image|mimes:jpg,jpeg,png',
            'second_image' => 'bail|required|image|mimes:jpg,jpeg,png',
            'subject_consent' => 'bail|required|accepted'
        ]);

        if ($validator->fails()) {
         //   dd($validator->errors());
            Session::flash('alert', 'error');
            Session::flash('message', 'Failed! There was some errors in your input');
            return redirect()->back();
        }

        if($this->sandbox() == 0 ){
            if($request->pin != '11111111111'){
                Session::flash('alert', 'error');
                Session::flash('message', 'Use Test data only for test mode');
                return redirect()->back();
            }
        }

        $ref = $this->GenerateRef();
        $userWallet = Wallet::where('user_id', auth()->user()->id)->first();
        $requestData = [
            'isSubjectConsent' => $request->subject_consent ? true : false,
        ];

        if ($request->file('first_image') && $request->file('second_image')) {
            $first_image_url = cloudinary()->upload($request->file('first_image')->getRealPath(), [
                'folder' => 'oysterchecks/identityVerifications/facialCompare'
            ])->getSecurePath();

            $second_image_url = cloudinary()->upload($request->file('second_image')->getRealPath(), [
                'folder' => 'oysterchecks/identityVerifications/facialCompare'
            ])->getSecurePath();

            if ($first_image_url && $second_image_url) {
                $requestData['image1'] = $first_image_url;
                $requestData['image2'] = $second_image_url;
            }
        }

        DB::beginTransaction();
        try {
            $curl = curl_init();
            $encodedRequestData = json_encode($requestData, true);
            curl_setopt_array($curl, [
                CURLOPT_URL => $this->ReqUrl()."/identity/compare-image",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 1,
                CURLOPT_TIMEOUT => 2180,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $encodedRequestData,
                CURLOPT_HTTPHEADER => [
                    "Content-Type: application/json",
                    "Token: ".$this->ReqToken()
                ],
            ]);

            $response = curl_exec($curl);
            if (curl_errno($curl)) {
                dd('error:' . curl_errno($curl));
            } else {
                $decodedResponse = json_decode($response, true);
                // dd($decodedResponse);
                if ($decodedResponse['success'] == true && $decodedResponse['statusCode'] == 200) {
                    ImageVerification::create([
                        'verification_id' => $slug->id,
                        'user_id' => auth()->user()->id,
                        'ref' => $ref,
                        'service_reference' => $decodedResponse['data']['id'],
                        'status' => $decodedResponse['data']['status'],
                        'reason' => $decodedResponse['data']['reason'],
                        'selfie_validation' => $decodedResponse['data']['selfieValidation'],
                        'image_comparison' => $decodedResponse['data']['imageComparison'],
                        'subject_consent' => true,
                        'all_validation_passed' => $decodedResponse['data']['allValidationPassed'],
                        'type' => 'compare-images',
                        'country' => 'Nigeria',
                        'all_validation_passed' => $decodedResponse['data']['allValidationPassed'],
                        'requested_at' => $decodedResponse['data']['requestedAt'],
                        'last_modified_at' => $decodedResponse['data']['lastModifiedAt'],
                        'is_sandbox' => $this->sandbox()
                    ]);
                    IdentityVerification::create([
                        'verification_id' => $slug->id,
                        'user_id' => auth()->user()->id,
                        'ref' => $ref,
                        'status' => $decodedResponse['data']['status'],
                        'first_name' => 'compare-images',
                        'last_name' => $decodedResponse['data']['reason'],
                        'pin' => $decodedResponse['data']['id'],
                        'is_sandbox' => $this->sandbox()
                    ]);
                    DB::commit();
                    Session::flash('alert', 'success');
                    Session::flash('message', 'Verification Successful');
                    return redirect()->route('identityIndex', $slug->slug);
                }else{
                    Session::flash('alert', 'error');
                    Session::flash('message', $decodedResponse['message']);
                    return back()->withInput($request->all());
                }
            }
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
