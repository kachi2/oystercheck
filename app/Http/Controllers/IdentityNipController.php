<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\NipVerification;
use Illuminate\Support\Facades\DB;
use App\Models\Wallet;
use App\Models\IdentityVerification;
use App\Traits\GenerateRef;
use App\Models\User;
use Illuminate\Support\Facades\Session;


class IdentityNipController extends Controller
{
    use GenerateRef;
    public function processNip(Request $request, $slug)
    {
       $validator = Validator::make($request->all(), [
            'pin' => 'bail|required',
            'last_name' => 'bail|required|string|alpha',
            'first_name' => 'bail|nullable|string|alpha',
            'validate_data' => 'bail|nullable|dob',
            'compare_image' => 'bail|nullable',
            'dob' => 'bail|nullable|date',
            'image' => 'bail|nullable|image|mimes:jpg,jpeg,png',
            'subject_consent' => 'bail|accepted'
        ]);

        if ($validator->fails()) {
            Session::flash('alert', 'error');
            Session::flash('message', $validator->errors()->first());
            return redirect()->back()->withInput($request->all());
        }
        $ref = $this->GenerateRef();
        $userWallet = Wallet::where('user_id', auth()->user()->id)->first();
      //  dd($userWallet);
        $requestData = [
            'id' => $request->pin,
            'lastName'=>$request->last_name,
            'isSubjectConsent' => $request->subject_consent ? true : false,
        ];

        if ($request->validate_data) {
            $data = [];
            $request->first_name != null ? $data['firstName'] = $request->first_name : null;
            $request->dob != null ? $data['dateOfBirth'] = $request->dob : null;
            $requestData['validations']['data'] = $data;
        }
        if ($request->compare_image) {
            $selfie = [];
            if ($request->file('image')) {
                $image_url = cloudinary()->upload($request->file('image')->getRealPath(), [
                    'folder' => 'oysterchecks/identityVerifications/passport'
                ])->getSecurePath();
                if ($image_url) {
                    $selfie['image'] = $image_url;
                    $requestData['validations']['selfie'] = $selfie;
                }
            }
        }
       
        DB::beginTransaction();
        try {
            $curl = curl_init();
            $encodedRequestData = json_encode($requestData, true);
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api.sandbox.youverify.co/v2/api/identity/ng/passport",
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
                            'folder' => 'oysterchecks/identityVerifications/passport'
                        ])->getSecurePath();
                    }
                    if ($decodedResponse['data']['signature'] != null) {
                        $response_signature = cloudinary()->upload($decodedResponse['data']['signature'], [
                            'folder' => 'oysterchecks/identityVerifications/passport'
                        ])->getSecurePath();
                    }

                   // dd($decodedResponse);
                    NipVerification::create([
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
                        'middle_name' => $decodedResponse['data']['middleName'],
                        'last_name' => $decodedResponse['data']['lastName'],
                        'expired_date' => $decodedResponse['data']['expiredDate'],
                        'notify_when_id_expire' => $decodedResponse['data']['notifyWhenIdExpire'],
                        'image' => $decodedResponse['data']['image'] != null ? $response_image : null,
                        'signature' => $decodedResponse['data']['signature'] != null ? $response_signature : null,
                        'issued_at' => $decodedResponse['data']['issuedAt'],
                        'issued_date' => $decodedResponse['data']['issuedDate'],
                        'phone' => $decodedResponse['data']['mobile'],
                        'dob' => $decodedResponse['data']['dateOfBirth'],
                        'subject_consent' => true,
                        'pin' => $request->pin,
                        'type' => 'nip',
                        'gender' => $decodedResponse['data']['gender'] != null ? $decodedResponse['data']['gender'] : null,
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
