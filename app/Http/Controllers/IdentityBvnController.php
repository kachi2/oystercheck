<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\BvnVerification;
use App\Models\IdentityVerification;
use App\Traits\GenerateRef;
use Illuminate\Support\Facades\DB;
use App\Models\Wallet;

class IdentityBvnController extends Controller
{
    use GenerateRef;
    //


    public function processBvn(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), [
            'pin' => 'bail|required|alpha_num',
            'first_name' => 'bail|nullable|string|alpha',
            'last_name' => 'bail|nullable|string|alpha',
            'validate_data' => 'bail|nullable',
            'compare_image' => 'bail|nullable',
            'dob' => 'bail|nullable|date',
            'image' => 'bail|nullable|image|mimes:jpg,jpeg,png',
            'advance_search' => 'bail|nullable',
            'subject_consent' => 'bail|required|accepted'
        ]);
        if ($validator->fails()) {
            Session::flash('alert', 'error');
            Session::flash('message', 'Failed! There was some errors in your input');
            return redirect()->back();
        }

        
        $ref = $this->GenerateRef();
        Wallet::where('user_id', auth()->user()->id)->first();
        $requestData = [
            'id' => $request->pin,
            'isSubjectConsent' => $request->subject_consent ? true : false,
        ];

        if ($request->validate_data) {
            $data = [];
            $request->first_name != null ? $data['firstName'] = $request->first_name : null;
            $request->last_name != null ? $data['lastName'] = $request->last_name : null;
            $request->dob != null ? $data['dateOfBirth'] = $request->dob : null;
            $requestData['validations']['data'] = $data;
        }
        if ($request->compare_image) {
            $selfie = [];
            if ($request->file('image')) {
                $image_url = cloudinary()->upload($request->file('image')->getRealPath(), [
                    'folder' => 'oysterchecks/identityVerifications/bvn'
                ])->getSecurePath();
                if ($image_url) {
                    $selfie['image'] = $image_url;
                    $requestData['validations']['selfie'] = $selfie;
                }
            }
        }
        if ($request->advance_search) {
            $should_retrieve_nin = true;
            $requestData['shouldRetrivedNin'] = $should_retrieve_nin;
        }

  
        DB::beginTransaction();
        try {
            $curl = curl_init();
            $encodedRequestData = json_encode($requestData, true);
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api.sandbox.youverify.co/v2/api/identity/ng/bvn",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 1,
                CURLOPT_TIMEOUT => 2180,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $encodedRequestData,
                CURLOPT_HTTPHEADER => [
                    "Content-Type: application/json",
                    "Token: N0R9AJ4L.PWYaM5cXggThkdCtkVSCsWz4fMsfeMIp6CKL"
                ],
            ]);

            $response = curl_exec($curl);
            if (curl_errno($curl)) {
                dd('error:' . curl_errno($curl));
            } else {
                $decodedResponse = json_decode($response, true);
                // dd($decodedResponse);
                if ($decodedResponse['success'] == true && $decodedResponse['statusCode'] == 200) {
                    if ($decodedResponse['data']['image'] != null) {
                        $response_image = cloudinary()->upload($decodedResponse['data']['image'], [
                            'folder' => 'oysterchecks/identityVerifications/bvn'
                        ])->getSecurePath();
                    }
                    BvnVerification::create([
                        'verification_id' => $slug->id,
                        'user_id' => auth()->user()->id,
                        'ref' => $ref,
                        'service_reference' => $decodedResponse['data']['id'] != null ? $decodedResponse['data']['id'] : null,
                        'validations' => isset($decodedResponse['data']['validations']) ? $decodedResponse['data']['validations'] : null,
                        'status' => $decodedResponse['data']['status'],
                        'reason' => $decodedResponse['data']['reason'] != null ? $decodedResponse['data']['reason'] : null,
                        'data_validation' => $decodedResponse['data']['dataValidation'],
                        'selfie_validation' => $decodedResponse['data']['selfieValidation'],
                        'first_name' => $decodedResponse['data']['firstName'] != null ? $decodedResponse['data']['firstName'] : null,
                        'middle_name' => $decodedResponse['data']['middleName'] != null ? $decodedResponse['data']['middleName'] : null,
                        'last_name' => $decodedResponse['data']['lastName'] != null ? $decodedResponse['data']['lastName'] : null,
                        'image' => $decodedResponse['data']['image'] != null ? $response_image : null,
                        'enrollment_branch' => $decodedResponse['data']['enrollmentBranch'] != null ? $decodedResponse['data']['enrollmentBranch'] : null,
                        'enrollment_institution' => $decodedResponse['data']['enrollmentInstitution'] != null ? $decodedResponse['data']['enrollmentInstitution'] : null,
                        'phone' => $decodedResponse['data']['mobile'] != null ? $decodedResponse['data']['mobile'] : null,
                        'dob' => $decodedResponse['data']['dateOfBirth'] != null ? $decodedResponse['data']['dateOfBirth'] : null,
                        'subject_consent' => true,
                        'pin' => $request->pin,
                        'should_retrieve_nin' => $decodedResponse['data']['shouldRetrivedNin'],
                        'type' => 'bvn',
                        'gender' => $decodedResponse['data']['gender'] != null ? $decodedResponse['data']['gender'] : null,
                        'country' => 'Nigeria',
                        'all_validation_passed' => $decodedResponse['data']['allValidationPassed'],
                        'requested_at' => $decodedResponse['data']['requestedAt'] != null ? $decodedResponse['data']['requestedAt'] : null,
                        'last_modified_at' => $decodedResponse['data']['lastModifiedAt'] != null ? $decodedResponse['data']['lastModifiedAt'] : null,
                    ]);
                    IdentityVerification::create([
                        'verification_id' => $slug->id,
                        'user_id' => auth()->user()->id,
                        'ref' => $ref,
                        'status' => $decodedResponse['data']['status'],
                        'first_name' => $decodedResponse['data']['firstName'],
                        'last_name' => $decodedResponse['data']['lastName'],
                        'pin' => $request->pin,
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
