<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\PvcVerification;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\IdentityVerification;
use App\Traits\GenerateRef;
use App\Models\Wallet;

use Illuminate\Http\Request;

class IdentityPvcController extends Controller
{
    use GenerateRef;
    public function processPvc(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), [
            'pin' => 'bail|required|alpha_num|size:19',
            'first_name' => 'bail|nullable|string|alpha',
            'last_name' => 'bail|nullable|string|alpha',
            'validate_data' => 'bail|nullable|required_with:first_name,dob',
            'dob' => 'bail|nullable|date',
            'subject_consent' => 'bail|required|accepted'
        ]);

        if ($validator->fails()) {
            Session::flash('alert', 'error');
            Session::flash('msg', 'Failed! There was some errors in your input');
            return redirect()->back();
        }

        $ref = $this->GenerateRef();
        $userWallet = Wallet::where('user_id', auth()->user()->id)->first();
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

        DB::beginTransaction();
        try {
            $curl = curl_init();
            $encodedRequestData = json_encode($requestData, true);
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api.sandbox.youverify.co/v2/api/identity/ng/pvc",
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
                    PvcVerification::create([
                        'verification_id' => $slug->id,
                        'user_id' => auth()->user()->id,
                        'ref' => $ref,
                        'service_reference' => $decodedResponse['data']['id'],
                        'validations' => isset($decodedResponse['data']['validations']) ? $decodedResponse['data']['validations'] : null,
                        'status' => $decodedResponse['data']['status'],
                        'reason' => $decodedResponse['data']['reason'],
                        'data_validation' => $decodedResponse['data']['dataValidation'],
                        'selfie_validation' => $decodedResponse['data']['selfieValidation'],
                        'first_name' => $decodedResponse['data']['firstName'],
                        'middle_name' => !empty($decodedResponse['data']['middleName']) ? $decodedResponse['data']['middleName'] : null,
                        'last_name' => $decodedResponse['data']['lastName'],
                        'dob' => $decodedResponse['data']['dateOfBirth'],
                        'subject_consent' => true,
                        'pin' => $request->pin,
                        'type' => 'pvc',
                        'country' => 'Nigeria',
                        'all_validation_passed' => $decodedResponse['data']['allValidationPassed'],
                        'requested_at' => $decodedResponse['data']['requestedAt'],
                        'last_modified_at' => $decodedResponse['data']['lastModifiedAt'],
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