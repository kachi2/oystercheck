<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Session, Validator, DB};
use App\Models\BankVerification;
use App\Models\IdentityVerification;
use App\Models\Wallet;
use App\Models\Transaction;
use App\Models\User;

class IdentityBankController extends Controller
{
    
    public function processBankAccount(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), [
            'account_number' => 'bail|required|numeric|digits:10',
            'bank' => 'bail|required|alpha_num',
            'bank_name'=>'bail|required|string',
            'subject_consent' => 'bail|required|accepted'
        ]);
        // dd($request->all());
        if ($validator->fails()) {
            // dd($validator->errors());
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
            'accountNumber' => $request->account_number,
            'bankCode'=> $request->bank,
            'isSubjectConsent' => $request->subject_consent ? true : false,
        ];

        DB::beginTransaction();
        try {
            $curl = curl_init();
            $encodedRequestData = json_encode($requestData, true);
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api.sandbox.youverify.co/v2/api/identity/ng/bank-account-number/resolve",
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
                    $reasons = $decodedResponse['data']['reason'];
                    $reference = $decodedResponse['data']['id'];
                    BankVerification::create([
                        'verification_id' => $slug->id,
                        'user_id' => auth()->user()->id,
                        'ref' => $ref,
                        'service_reference' => $decodedResponse['data']['id'],
                        'status' => $decodedResponse['data']['status'],
                        'reason' => $decodedResponse['data']['reason'],
                        'data_validation' => $decodedResponse['data']['dataValidation'],
                        'selfie_validation' => $decodedResponse['data']['selfieValidation'],
                        'subject_consent' => true,
                        'account_number' => $request->account_number,
                        'bank_code' => $request->bank,
                        'bank_name' => $request->bank_name,
                        'bank_details' => isset($decodedResponse['data']['bankDetails']) ? $decodedResponse['data']['bankDetails'] : null,
                        'type' => 'bank-account',
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
                        'first_name' => $decodedResponse['data']['dataValidation'],
                        'last_name' => $request->bank_name,
                        'pin' =>  $request->account_number,
                    ]);

                    DB::commit();
                    Session::flash('alert', 'success');
                    Session::flash('message', 'Verification Successful');
                    if($this->sandbox() == 1){
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
