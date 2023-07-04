<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\PhoneVerification;
use Illuminate\Support\Facades\DB;
use App\Models\IdentityVerification;
use App\Traits\GenerateRef;
use App\Models\Transaction;
use App\Traits\sandbox;
use App\Models\Wallet;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class IdentityPhoneNumberController extends Controller
{
    use GenerateRef;
    use sandbox;
    public function processPhoneNumber(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), [
            'phone_number' => 'bail|required',
            'advance_search' => 'bail|nullable',
            'subject_consent' => 'bail|required|accepted'
        ]);

        if ($validator->fails()) {
            // dd($validator->errors());
            Session::flash('alert', 'error');
            Session::flash('message', 'Failed! There was some errors in your input');
            return redirect()->back();
        }
        if($this->sandbox() == 0){
            if($request->phone_number != '08000000000'){
                Session::flash('alert', 'error');
                Session::flash('message', 'Use Test data only for test mode');
                return redirect()->back();
            }
        }
        if($this->sandbox() == 1){
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
    }
        $ref = $this->GenerateRef();
        $userWallet = Wallet::where('user_id', auth()->user()->id)->first();
        $requestData = [
            'mobile' => $request->phone_number,
            'isSubjectConsent' => $request->subject_consent ? true : false,
        ];

        if ($request->advance_search) {
            $advance_search = true;
            $requestData['advanceSearch'] = $advance_search;
        }

        DB::beginTransaction();
        try {
            $curl = curl_init();
            $encodedRequestData = json_encode($requestData, true);
            curl_setopt_array($curl, [
                CURLOPT_URL => $this->sandbox()."identity/ng/phone",
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
            Session::flash('message', 'Something went wrong');
            return back();
            } else {
                $decodedResponse = json_decode($response, true);
                // dd($decodedResponse);
                if ($decodedResponse['success'] == true && $decodedResponse['statusCode'] == 200) {
                    if (isset($decodedResponse['data']['image']) && $decodedResponse['data']['image'] != null) {
                        $response_image = cloudinary()->upload($decodedResponse['data']['image'], [
                            'folder' => 'oysterchecks/identityVerifications/phoneNumber'
                        ])->getSecurePath();
                    }
                    PhoneVerification::create([
                        'verification_id' => $slug->id,
                        'user_id' => auth()->user()->id,
                        'ref' => $ref,
                        'service_reference' => $decodedResponse['data']['id'],
                        'address' => isset($decodedResponse['data']['address']) ? $decodedResponse['data']['address'] : null,
                        'validations' => isset($decodedResponse['data']['validations']) ? $decodedResponse['data']['validations'] : null,
                        'status' => $decodedResponse['data']['status'],
                        'reason' => $decodedResponse['data']['reason'],
                        'data_validation' => $decodedResponse['data']['dataValidation'],
                        'selfie_validation' => $decodedResponse['data']['selfieValidation'],
                        'phone_details' => isset($decodedResponse['data']['phoneDetails']) ? $decodedResponse['data']['phoneDetails'] : null,
                        'first_name' => isset($decodedResponse['data']['firstName']) ? $decodedResponse['data']['firstName'] : null,
                        'middle_name' => isset($decodedResponse['data']['middleName']) && !empty($decodedResponse['data']['middleName']) ? $decodedResponse['data']['middleName'] : null,
                        'last_name' => isset($decodedResponse['data']['lastName']) ? $decodedResponse['data']['lastName'] : null,
                        'image' => isset($decodedResponse['data']['image']) && $decodedResponse['data']['image'] != null ? $response_image : null,
                        'email' => isset($decodedResponse['data']['email']) ? $decodedResponse['data']['email'] : null,
                        'nin' => isset($decodedResponse['data']['nin']) ? $decodedResponse['data']['nin'] : null,
                        'birth_state' => isset($decodedResponse['data']['birthState']) ? $decodedResponse['data']['birthState'] : null,
                        'religion' => isset($decodedResponse['data']['religion']) ? $decodedResponse['data']['religion'] : null,
                        'birth_lga' => isset($decodedResponse['data']['birthLGA']) ? $decodedResponse['data']['birthLGA'] : null,
                        'birth_country' => isset($decodedResponse['data']['birthCountry']) ? $decodedResponse['data']['birthCountry'] : null,
                        'dob' => isset($decodedResponse['data']['dateOfBirth']) ? $decodedResponse['data']['dateOfBirth'] : null,
                        'subject_consent' => true,
                        'phone_number' => $request->phone_number,
                        'type' => 'phone-number',
                        'gender' => isset($decodedResponse['data']['gender']) ? $decodedResponse['data']['gender'] : null,
                        'country' => 'Nigeria',
                        'all_validation_passed' => $decodedResponse['data']['allValidationPassed'],
                        'advance_search' => $request->advance_search ? true : false,
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
                        'pin' => $request->phone_number,
                        'is_sandbox' => $this->sandbox()
                    ]);

                    DB::commit();
                    Session::flash('alert', 'success');
                    Session::flash('message', 'Verification Successful');
                    if($this->sandbox() == 0){
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
            Session::flash('alert', 'error');
            Session::flash('message', 'Something went wrong, try again');
            return back();
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
