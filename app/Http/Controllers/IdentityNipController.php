<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\NipVerification;
use Illuminate\Support\Facades\DB;
use App\Models\Wallet;
use App\Models\IdentityVerification;
use App\Traits\GenerateRef;
use App\Models\Transaction;
use App\Traits\sandbox;
use App\Models\User;
use Illuminate\Support\Facades\Session; 


class IdentityNipController extends Controller
{
    use GenerateRef;
    use sandbox;
    public function processNip(Request $request, $slug)
    {
       $validator = Validator::make($request->all(), [
            'pin' => 'bail|required',
            'last_name' => 'bail|required|string|alpha',
            'first_name' => 'bail|nullable|string|alpha',
            'validate_data' => 'bail|nullable',
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
        if($this->sandbox() == 0){
            if($request->pin != 'A11111111'){
                Session::flash('alert', 'error');
                Session::flash('message', 'Use Test data only for test mode');
                return redirect()->back();
            }
        }
        $ref = $this->GenerateRef();
        if($this->sandbox() == 1){
        $userWallet = Wallet::where('user_id', auth()->user()->id)->first();
        if (isset($slug->discount) && $slug->discount > 0) {
            $amount = ($slug->fee - $slug->discount);
        } else {
            $amount = $slug->fee;
        }
        if ($userWallet->avail_balance < $amount) {
            Session::flash('alert', 'error');
            Session::flash('message', 'Your walllet is too low for this transaction');
            return back();
        }
    }
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
                CURLOPT_URL => $this->ReqUrl()."identity/ng/passport",
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
                Session::flash('alert', 'error');
                Session::flash('message', 'Something went wrong, try again');
                return back();
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
                        $reasons = 'Payment for '.$slug->name;
                        $account = $request->pin ;
                        $this->chargeUser($amount, $reference , $reasons, $account);
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
            Session::flash('alert', 'error');
            Session::flash('message', 'Something went wrong, try again');
            return back();
        }
    }


    public function chargeUser($amount, $ext_ref, $type, $account)
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
            'service_type' => $account,
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
