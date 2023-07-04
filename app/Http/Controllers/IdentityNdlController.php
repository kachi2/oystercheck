<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NdlVerification;
use App\Traits\GenerateRef;
use App\Models\Wallet;
use App\Models\IdentityVerification;
use App\Models\User;
use App\Models\Transaction;
use App\Traits\sandbox;
use Illuminate\Support\Facades\{Session, Validator, DB};

class IdentityNdlController extends Controller
{
    use GenerateRef;
    use sandbox;
    public function processNdl(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), [
            'pin' => 'bail|required|alpha_num|size:12',
            'first_name' => 'bail|nullable|string|alpha',
            'last_name' => 'bail|nullable|string|alpha',
            'validate_data' => 'bail|nullable|required_with:first_name',
            'compare_image' => 'bail|nullable|required_with:image',
            'dob' => 'bail|nullable|date',
            'image' => 'bail|nullable|image|mimes:jpg,jpeg,png',
            'subject_consent' => 'bail|required|accepted'
        ]);

        if ($validator->fails()) {
            // dd($validator->errors());
            Session::flash('alert', 'error');
            Session::flash('message', 'Failed! There was some errors in your input');
            return redirect()->back();
        }

        if($this->sandbox() == 0){
            if($request->pin != 'AAA00000AA00'){
                Session::flash('alert', 'error');
                Session::flash('message', 'Use Test data only for test mode');
                return redirect()->back();
            }
        }
        $ref = $this->GenerateRef();
        $userWallet = Wallet::where('user_id', auth()->user()->id)->first();
        if (isset($slug->discount) && $slug->discount > 0) {
            $amount = ($slug->discount * $slug->fee) / 100;
        } else {
            $amount = $slug->fee;
        }
        if ($userWallet->avail_balance < $amount) {
            Session::flash('alert', 'error');
            Session::flash('message', 'Your walllet is too low for this transaction');
            return back();
        }
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
                    'folder' => 'oysterchecks/identityVerifications/nin'
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
                CURLOPT_URL => $this->reqUrl()."identity/ng/drivers-license",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 1,
                CURLOPT_TIMEOUT => 2180,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $encodedRequestData,
                CURLOPT_HTTPHEADER => [
                    "Content-Type: application/json",
                    "Token: ".$this->reqToken()
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
                            'folder' => 'oysterchecks/identityVerifications/nin'
                        ])->getSecurePath();
                    }
                    NdlVerification::create([
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
                        'expired_date' => $decodedResponse['data']['expiredDate'],
                        'issued_date' => $decodedResponse['data']['issuedDate'],
                        'state_of_issuance' => $decodedResponse['data']['stateOfIssuance'],
                        'notify_when_id_expire' => $decodedResponse['data']['notifyWhenIdExpire'],
                        'image' => $decodedResponse['data']['image'] != null ? $response_image : null,
                        'phone' => $decodedResponse['data']['mobile'],
                        'email' => $decodedResponse['data']['email'],
                        'dob' => $decodedResponse['data']['dateOfBirth'],
                        'subject_consent' => true,
                        'pin' => $request->pin,
                        'type' => 'nin',
                        'gender' => isset($decodedResponse['data']['gender']) ? $decodedResponse['data']['gender'] : null,
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
                        'first_name' => $decodedResponse['data']['firstName'],
                        'last_name' => $decodedResponse['data']['lastName'],
                        'pin' => $request->pin,
                        'is_sandbox' => $this->sandbox()
                    ]);

                    DB::commit();
                    Session::flash('alert', 'success');
                    Session::flash('message', 'Verification Successful');
                    if($this->sandbox() == 1){
                        $reference = $decodedResponse['data']['id'];
                        $reasons = $decodedResponse['data']['reason'];
                        $this->chargeUser($amount, $reference , $reasons );
                    }
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

    public function chargeUser($amount, $ext_ref, $type)
    {
        $user = User::where('id', auth()->user()->id)->first();
        $wallet = Wallet::where('user_id', $user->id)->first();
        $newWallet = $user->wallet->avail_balance - $amount;
        $update = Wallet::where('user_id', $user->id)
            ->update([
                'book_balance' => $wallet->avail_balance,
                'avail_balance' => $newWallet,
            ]);
        $refs = $this->GenerateRef();
        Transaction::create([
            'ref' => $refs,
            'user_id' => $user->id,
            'external_ref' => $ext_ref,
            'purpose' => $type,
            'service_type' => $type,
            'total_amount_payable' => $amount,
            'payment_method' => 'Wallet Payment',
            'type'  => 'DEBIT',
            'amount' => $amount,
            'prev_balance' => $wallet->avail_balance,
            'avail_balance' => $newWallet
        ]);
        return $update;
    }
}
