<?php

namespace App\Http\Controllers;

use App\Models\FieldInput;
use App\Models\PepSactionVerification;
use Illuminate\Http\Request;
use App\Models\Verification;
use App\Models\Transaction;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\Wallet;
use App\Traits\GenerateRef;
use Illuminate\Support\Facades\DB;
use App\Traits\sandbox;
use App\Models\User;

class SanctionPepController extends Controller
{
    use GenerateRef;
    use sandbox;

    public function SanctionPepIndex($slug){
        $slug = Verification::where('slug', $slug)->first();
        $user = User::where('id', auth()->user()->id)->first();
        $data['slug'] = Verification::where('slug', $slug->slug)->first();
        $data['success'] = PepSactionVerification::where(['status' => 'cleared', 'verification_id' => $slug->id, 'user_id' => $user->id])->get();
        $data['failed'] = PepSactionVerification::where(['status' => 'not_cleared', 'verification_id' => $slug->id, 'user_id' => $user->id])->get();
        $data['pending'] = PepSactionVerification::where(['status' => 'review_required', 'verification_id' => $slug->id, 'user_id' => $user->id])->get();
        $data['wallet'] = Wallet::where('user_id', $user->id)->first();
        $data['logs'] = PepSactionVerification::where(['user_id' => auth()->user()->id])->latest()->get();
        return view('users.aml.media.index', $data);
    }


    public function SanctionPepCheck($slug){
        $slug = Verification::where('slug', $slug)->first();
        $data['slug'] = Verification::where('slug', $slug->slug)->first();
        $data['fields'] = FieldInput::where(['slug' => $slug->slug])->get();
        return view('users.aml.media.check', $data);
    }

    public function SanctionPepVerify($slug, Request $request){
        $validator = Validator::make($request->all(), [
            'first_name' => 'bail|string|required',
            'last_name' => 'bail|string|required',
            'middle_name' => 'required',
            'subject_consent' => 'bail|required|accepted'
        ]);

        if ($validator->fails()) {
            Session::flash('alert', 'error');
            Session::flash('message', 'Failed! There was some errors in your input');
            return redirect()->back();
        }
        $slug = Verification::where('slug', $slug)->first();
        $ref = $this->GenerateRef();
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
        $requestData = [
            'firstName' => $request->first_name,
            'lastName' => $request->last_name,
            'middleName' => $request->middle_name,
            "isSubjectConsent" => "true"
        ];

        DB::beginTransaction();
        try {
            $curl = curl_init();
            $encodedRequestData = json_encode($requestData, true);
          //  dd(  $encodedRequestData );
            curl_setopt_array($curl, [
                CURLOPT_URL => $this->reqUrl()."verifications/aml-checks",
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
                Session::flash('alert', 'error');
                Session::flash('message', 'Something went wrong, try again');
                return back();
            } else {
                $decodedResponse = json_decode($response, true);
                // dd($decodedResponse);
                if ($decodedResponse['success'] == true && $decodedResponse['statusCode'] == 200) {
                   PepSactionVerification::create([
                        'verification_id' => $slug->id,
                        'user_id' => auth()->user()->id,
                        'ref' => $ref,
                        'status' => $decodedResponse['data']['status'],
                        'first_name' => $decodedResponse['data']['firstName'],
                        'last_name' => $decodedResponse['data']['lastName'],
                        'middle_name' => $decodedResponse['data']['middleName'],
                        'pepList' => json_encode($decodedResponse['data']['pepList']),
                        'sanctionList' => json_encode($decodedResponse['data']['sanctionList']),
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
                    return redirect()->route('user.aml_pep_sanction', $slug->slug);
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

    public function chargeUser($amount, $ext_ref, $reason, $account)
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
            'purpose' => $reason,
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

    public function SanctionPepGetReport($ref){
        return view('users.aml.media.reports.report', [
            'transactions' => PepSactionVerification::where('id', decrypt($ref))->first()
        ]);
    }
}
