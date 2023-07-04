<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\GenerateRef;
use App\Models\NinVerification;
use App\Models\Wallet;
use App\Traits\sandbox;
use App\Models\User;
use App\Models\Transaction;
use App\Models\IdentityVerification;
use Illuminate\Support\Facades\{Session, Validator, DB};

class IdentityNinController extends Controller
{
    use GenerateRef;
    use sandbox;

    public function processNin(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'bail|nullable|string|alpha',
            'last_name' => 'bail|nullable|string|alpha',
            'validate_data' => 'bail|nullable',
            'compare_image' => 'bail|nullable|required_with:image,dob',
            'dob' => 'bail|nullable|date',
            'image' => 'bail|nullable|image|mimes:jpg,jpeg,png',
            'subject_consent' => 'bail|required|accepted'
        ]);

        if ($validator->fails()) {
            
            Session::flash('alert', 'error');
            Session::flash('message', 'Failed! There was some errors in your input');
            return redirect()->back();
        }
        if($this->sandbox() == 0 ){
            if($request->pin != '12312121212'){
                Session::flash('alert', 'error');
                Session::flash('message', 'Forbidden: Only Test IDs are allowed');
                return redirect()->back();
            }
        }
        $ref = $this->GenerateRef();
        if($this->sandbox() == 1 ){
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
                CURLOPT_URL => $this->ReqUrl()."identity/ng/nin",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 1,
                CURLOPT_TIMEOUT => 2180,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $encodedRequestData,
                CURLOPT_HTTPHEADER => [
                    "Content-Type: application/json",
                    "Token: ".$this->reqToken(),
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
                            'folder' => 'oysterchecks/identityVerifications/nin'
                        ])->getSecurePath();
                    }
                    if ($decodedResponse['data']['signature'] != null) {
                        $response_signature = cloudinary()->upload($decodedResponse['data']['signature'], [
                            'folder' => 'oysterchecks/identityVerifications/nin'
                        ])->getSecurePath();
                    }
                    NinVerification::create([
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
                        'first_name' => $decodedResponse['data']['firstName'],
                        'middle_name' => !empty($decodedResponse['data']['middleName']) ? $decodedResponse['data']['middleName'] : null,
                        'last_name' => $decodedResponse['data']['lastName'],
                        'image' => $decodedResponse['data']['image'] != null ? $response_image : null,
                        'signature' => $decodedResponse['data']['signature'] != null ? $response_signature : null,
                        'phone' => $decodedResponse['data']['mobile'],
                        'email' => $decodedResponse['data']['email'],
                        'birth_state' => $decodedResponse['data']['birthState'],
                        'nok_state' => $decodedResponse['data']['nokState'],
                        'religion' => $decodedResponse['data']['religion'],
                        'birth_lga' => $decodedResponse['data']['birthLGA'],
                        'birth_country' => $decodedResponse['data']['birthCountry'],
                        'dob' => $decodedResponse['data']['dateOfBirth'],
                        'subject_consent' => true,
                        'pin' => $request->pin,
                        'type' => 'nin',
                        'gender' => isset($decodedResponse['data']['gender']) ? $decodedResponse['data']['gender'] : null,
                        'country' => 'Nigeria',
                        'all_validation_passed' => $decodedResponse['data']['allValidationPassed'],
                        'requested_at' => $decodedResponse['data']['requestedAt'],
                        'last_modified_at' => $decodedResponse['data']['lastModifiedAt'],
                        'is_sandox' => $this->sandbox(),
                    ]);

                    IdentityVerification::create([
                        'verification_id' => $slug->id,
                        'user_id' => auth()->user()->id,
                        'ref' => $ref,
                        'status' => $decodedResponse['data']['status'],
                        'first_name' => $decodedResponse['data']['firstName'],
                        'last_name' => $decodedResponse['data']['lastName'],
                        'pin' => $request->pin,
                        'is_sandox' => $this->sandbox(),
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
