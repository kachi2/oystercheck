<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Verification;
use App\Models\User;
use App\Models\AdverseMedia;
use App\Models\AdverseMediaCategory;
use App\Models\FieldInput;
use Illuminate\Support\Facades\Validator;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Traits\GenerateRef;
use App\Traits\sandbox;
use App\Models\Wallet;
class AdverseMediaController extends Controller
{
    //
    use GenerateRef;
    use sandbox;


    public function AdverseMediaIndex($slug)
    {
        $slug = Verification::where('slug', $slug)->first();
        $user = User::where('id', auth()->user()->id)->first();
        $data['slug'] = Verification::where('slug', $slug->slug)->first();
        $data['no_match_found'] = AdverseMedia::where(['status' => 'no-match-found', 'verification_id' => $slug->id, 'user_id' => $user->id])->get();
        $data['potential_high_risk'] = AdverseMedia::where(['status' => 'potential-high-risk', 'verification_id' => $slug->id, 'user_id' => $user->id])->get();
        $data['potential_medium_risk'] = AdverseMedia::where(['status' => 'potential-medium-risk', 'verification_id' => $slug->id, 'user_id' => $user->id])->get();
        $data['total_request'] = AdverseMedia::where(['verification_id' => $slug->id, 'user_id' => $user->id])->get();
        $data['wallet'] = Wallet::where('user_id', $user->id)->first();
        $data['logs'] = AdverseMedia::where(['user_id' => auth()->user()->id])->latest()->get();

        return view('users.aml.adversemedia.index', $data);
    }

    public function AdverseMediaCheck($slug){
        $slug = Verification::where('slug', $slug)->first();
        $data['slug'] = Verification::where('slug', $slug->slug)->first();
        $data['fields'] = FieldInput::where(['slug' => $slug->slug])->get();
        $data['category'] = AdverseMediaCategory::get();
        return view('users.aml.adversemedia.check', $data);
    }

    public function AdverseMediaVerify($slug, Request $request){

        $validator = Validator::make($request->all(), [
            'query_type' => 'bail|string|required',
            'query_name' => 'bail|string|required',
            'queryCountry' => 'required|array',
            'queryTags' => 'required|array',
            'daterange' => 'required',
        ]);
        if ($validator->fails()) {
            Session::flash('alert', 'error');
            Session::flash('message', $validator->errors()->first());
            return redirect()->back();
        }

      $slug = Verification::where('slug', $slug)->first();
      $ref = $this->GenerateRef();
      if($this->sandbox() == 1){
      $userWallet = Wallet::where('user_id', auth()->user()->id)->first();
      if (isset($slug->discount) && $slug->discount > 0) {
          $amount = ( $slug->fee - $slug->discount);
      } else {
          $amount = $slug->fee;
      }
      if ($userWallet->avail_balance < $amount) {
          Session::flash('alert', 'error');
          Session::flash('message', 'Your walllet is too low for this transaction');
          return back();
      }
  }
        $dates = explode('-', $request->daterange);

    // dd(trim(str_replace('/','-',$dates[1])));
      $requestData = [
          'query' => $request->query_name,
          'type' => $request->query_type,
          'country' => $request->queryCountry,
          'startDate' => trim(str_replace('/','-',$dates[0])),
          'endDate' => trim(str_replace('/','-',$dates[1])),
          'tags' => $request->queryTags,
          "isSubjectConsent" => "true"
      ];

      DB::beginTransaction();
      try {
          $curl = curl_init();
          $encodedRequestData = json_encode($requestData, true);
        //  dd(  $encodedRequestData );
          curl_setopt_array($curl, [
              CURLOPT_URL => $this->reqUrl()."identity/adverse-media",
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
            //   dd($decodedResponse);
              if ($decodedResponse['success'] == true && $decodedResponse['statusCode'] == 200) {
                 AdverseMedia::create([
                      'verification_id' => $slug->id,
                      'user_id' => auth()->user()->id,
                      'ref' => $decodedResponse['data']['id'],
                      'query' => $decodedResponse['data']['query'],
                      'reason' => $decodedResponse['data']['reason'],
                      'weightedScore' => $decodedResponse['data']['weightedScore'],
                      'status' => $decodedResponse['data']['status'],
                      'queryTags' => json_encode($decodedResponse['data']['queryTags']),
                      'queryStartDate' => $decodedResponse['data']['queryStartDate'],
                      'queryEndDate' => $decodedResponse['data']['queryEndDate'],
                      'total' => $decodedResponse['data']['total'],
                      'media' => json_encode($decodedResponse['data']['media']),
                      'tagsAnalysis' => json_encode($decodedResponse['data']['tagsAnalysis']),
                      'type' => $decodedResponse['data']['type'],
                      'metadata' => json_encode($decodedResponse['data']['metadata']),
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
                  return redirect()->route('user.aml_'.$slug->slug, $slug->slug);
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

  public function AdverseMediaGetReport($ref){
      return view('users.aml.adversemedia.reports.report', [
          'transactions' => AdverseMedia::where('id', decrypt($ref))->first()
      ]);
  }
     
    }
