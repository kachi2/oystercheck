<?php

namespace App\Http\Controllers;

use App\Models\BusinessVerification;
use Illuminate\Support\FAcades\Session;
use Illuminate\support\Facades\Validator;
use App\Models\Verification;
use App\Models\Transaction;
use App\Traits\GenerateRef;
use Illuminate\Http\Request;
use App\Traits\generateHeaderReports;
use App\Models\User;
use App\Models\FieldInput;
use App\Models\Wallet;
use App\Models\BusinessVerificationDetail;


class BusinessController extends Controller
{
    //
    use GenerateRef;
    use generateHeaderReports;

    public function RedirectUser(){
        if(auth()->user()->user_type == 3)
        return redirect()->route('admin.index');
    }
    public function Index($name){
        $this->RedirectUser();
        $user = User::where('id', auth()->user()->id)->first();
       $slug = Verification::where(['slug' => $name])->first();
       $data['slug'] = Verification::where(['slug' => $name])->first();
       $data['success'] = BusinessVerification::where(['status'=>'successful', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
       $data['failed'] = BusinessVerification::where(['status'=>'failed', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
       $data['pending'] = BusinessVerification::where(['status'=>'pending', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
       $data['fields'] = FieldInput::where(['slug'=>$slug->slug])->get();
       $data['wallet']= Wallet::where('user_id', $user->id)->first();
       $data['logs'] = BusinessVerification::where(['user_id' => $user->id, 'verification_id'=>$slug->id])->latest()->get();
        return view('users.business.index', $data);
    }

    public function businessStore(Request $request, $slug){
        $validate = Validator::make($request->all(),[
            'company_name' => 'required'
        ]);
        $ref = $this->GenerateRef();
        $slug = Verification::where('slug', $slug)->first();
        $userWallet = Wallet::where('user_id', auth()->user()->id)->first();
        if($validate->fails()){
            Session::flash('alert', 'error');
            Session::flash('message', 'Please provide the data to verify');
            return redirect()->back();
        }
 $createVerify =  BusinessVerification::create([
                'verification_id' => $slug->id,
                'ref' => $ref,
                'service_ref' => $request->company_name,
                'user_id' => auth()->user()->id,
                'fee' => $slug->fee,
                'discount'=>$slug->discount,
                'status' => 'pending'
                ]);
        if($createVerify){
            if(isset($slug->discount) && $slug->discount > 0){
                $amount = ($slug->discount * $slug->fee)/100;
            }else{
                $amount = $slug->fee;
            }
            if($userWallet->avail_balance < $amount){
                Session::flash('alert', 'error');
                Session::flash('message', 'Your walllet is too low for this transaction');
                return back();
            }
                $this->chargeUser($amount, $ref, $slug->report_type);
                    $res = BusinessVerificationDetail::where(['service_ref'=>$request->company_name, 'status'=>'VERIFIED'])->latest()->first();  
                    if($res){
                       // var_dump($res);
                        BusinessVerification::where(['user_id'=> auth()->user()->id])->latest()->first()
                        ->update(['status' => 'successful']);
                        Session::flash('alert', 'success');
                        Session::flash('message', $slug->slug.' Verification Completed Successfully');
                        $data = $this->generateHeaderReports($slug);
                  // return $data['slug'];
                        return view('users.business.index', $data)->with('verified', $res);
                    }
                   $res = $this->BusinessVerify($request, $ref);
                   if($res['data']['details']['background_model']['status'] == 'VERIFIED'){
                    BusinessVerification::where(['user_id'=> auth()->user()->id])->latest()->first()
                    ->update(['status' => 'successful']);
                    $data = $this->generateHeaderReports($slug);
                    Session::flash('alert', 'success');
                    Session::flash('message', $slug->slug.' Verification Completed Successfully');
                   return view('users.business.index', $data)->with('verified', $res);
                   }
                }else{
                    $this->RefundUser($slug->fee, $ref, $slug->report_type);
                    Session::flash('alert', 'error');
                    Session::flash('message', 'An error occured, please try again');
                    return redirect()->back();
                }
    }

    public function chargeUser($amount, $ext_ref, $type){
        $user = User::where('id', auth()->user()->id)->first();
        $wallet = Wallet::where('user_id', $user->id)->first();
        $newWallet = $user->wallet->avail_balance - $amount;
         $update = Wallet::where('user_id', $user->id)
        ->update([
                'prev_balance' => $wallet->avail_balance,
                'avail_balance' => $newWallet,
        ]);
        $refs = $this->GenerateRef();
        Transaction::create([
                 'ref' => $refs,
                  'user_id' => $user->id,
                  'external_ref' => $ext_ref,
                  'purpose' => 'Payment for '.$type,
                   'service_type' => $type,
                  'type'  => 'DEBIT', 
                  'amount' => $amount, 
                 'prev_balance' => $wallet->avail_balance, 
                 'avail_balance' => $newWallet
        ]);
        return $update;
   }

   public function BusinessVerify($request, $reference){
    $this->RedirectUser();
    $business = BusinessVerification::where('user_id', auth()->user()->id)->latest()->first();
    $curl = curl_init();
            $data = [
                "company_name" => $request->company_name, 
            ];
            $datas = json_encode($data, true);
            //return $datas;
        curl_setopt_array($curl, [
          CURLOPT_URL => "https://api.youverify.co/v1/backgrounds/cac",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 2180,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => $datas,
          CURLOPT_HTTPHEADER => [
            "Content-Type: application/json",
            "Token: 49c11a7ef799f5695c943ba4d3d1ddcc"
          ],
        ]);
        $response = curl_exec($curl);
        $res = json_decode($response, true);
        return $res;
        if($res['status_code'] == 200){
            if(isset($res['data']['details']['background_model']['data']['data']['name'])){
              $company_name =  $res['data']['details']['background_model']['data']['data']['name'];
            }else{
                $company_name = null;
            }
            if(isset($res['data']['details']['background_model']['data']['data']['registrationNumber'])){
                $registrationNumber =  $res['data']['details']['background_model']['data']['data']['registrationNumber'];
              }else{
                  $registrationNumber = null;
              }
              if(isset($res['data']['details']['background_model']['data']['data']['registrationDate'])){
                $registrationDate =  $res['data']['details']['background_model']['data']['data']['registrationDate'];
              }else{
                  $registrationDate = null;
              }
              if(isset($res['data']['details']['background_model']['data']['data']['address'])){
                $address =  $res['data']['details']['background_model']['data']['data']['address'];
              }else{
                  $address = null;
              }
              if(isset($res['data']['details']['background_model']['data']['data']['state'])){
                $state =  $res['data']['details']['background_model']['data']['data']['state'];
              }else{
                  $state = null;
              }
              if(isset($res['data']['details']['background_model']['data']['data']['lga'])){
                $lga =  $res['data']['details']['background_model']['data']['data']['lga'];
              }else{
                  $lga = null;
              }
              if(isset($res['data']['details']['background_model']['data']['data']['city'])){
                $city =  $res['data']['details']['background_model']['data']['data']['city'];
              }else{
                  $city = null;
              }
              if(isset($res['data']['details']['background_model']['data']['data']['phoneNumber'])){
                $phoneNumber =  $res['data']['details']['background_model']['data']['data']['phoneNumber'];
              }else{
                  $phoneNumber = null;
              }
              if(isset($res['data']['details']['background_model']['data']['data']['websiteEmail'])){
                $websiteEmail =  $res['data']['details']['background_model']['data']['data']['websiteEmail'];
              }else{
                  $websiteEmail = null;
              }
              if(isset($res['data']['details']['background_model']['status'])){
                $stats =  $res['data']['details']['background_model']['status'];
              }else{
                  $stats = null;
              }
              BusinessVerificationDetail::create([
                'business_verification_id' => $business->id, 
                'ref' => $reference, 
                'service_ref' => $company_name, 
                'user_id' => $business->user_id, 
                'fee' => $business->fee,
                 'reg_no' => $registrationNumber, 
                 'reg_date' => $registrationDate , 
                 'phone' => $phoneNumber, 
                 'website' => $websiteEmail, 
                 'address' => $address, 
                 'state' => $state,
                  'lga' => $lga, 
                  'city' => $city, 
                  'status' =>$stats
              ]);
       // var_dump($res);
        return $res;
    }else{
        return 'failed';
    }
   }

   public function RefundUser($amount, $ext_ref, $type){
    $user = User::where('id', auth()->user()->id)->first();
    $wallet = Wallet::where('user_id', $user->id)->first();
    $newWallet = $user->wallet->avail_balance + $amount;
     Wallet::where('user_id', $user->id)
    ->update([
            'prev_balance' => $wallet->avail_balance,
            'avail_balance' => $newWallet,
    ]);
    $refs = $this->GenerateRef();
    Transaction::create([
             'ref' => $refs,
              'user_id' => $user->id,
              'external_ref' => $ext_ref,
              'purpose' => 'Payment for '.$type,
               'service_type' => $type,
              'type'  => 'CREDIT', 
              'amount' => $amount, 
             'prev_balance' => $wallet->avail_balance, 
             'avail_balance' => $newWallet
    ]);
}

    public function bizSort(Request $request, $name){

       // dd($name);
        if($request->sort == 'success'){
            $user = User::where('id', auth()->user()->id)->first();
            $slug = Verification::where(['slug' => $name])->first();
            $data['slug'] = Verification::where(['slug' => $name])->first();
            $data['success'] = BusinessVerification::where(['status'=>'successful', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
            $data['failed'] = BusinessVerification::where(['status'=>'failed', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
            $data['pending'] = BusinessVerification::where(['status'=>'pending', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
            $data['fields'] = FieldInput::where(['slug'=>$slug->slug])->get();
            $data['wallet']= Wallet::where('user_id', $user->id)->first();
            $data['logs'] = BusinessVerification::where(['user_id'=>auth()->user()->id, 'status'=>'successful'])->get();
           
        }
        if($request->sort == 'failed'){
            $user = User::where('id', auth()->user()->id)->first();
            $slug = Verification::where(['slug' => $name])->first();
            $data['slug'] = Verification::where(['slug' => $name])->first();
            $data['success'] = BusinessVerification::where(['status'=>'successful', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
            $data['failed'] = BusinessVerification::where(['status'=>'failed', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
            $data['pending'] = BusinessVerification::where(['status'=>'pending', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
            $data['fields'] = FieldInput::where(['slug'=>$slug->slug])->get();
            $data['wallet']= Wallet::where('user_id', $user->id)->first();
            $data['logs'] = BusinessVerification::where(['user_id'=>auth()->user()->id, 'status'=>'failed'])->get();
           
        }
        if($request->sort == 'pending'){
            $user = User::where('id', auth()->user()->id)->first();
            $slug = Verification::where(['slug' => $name])->first();
            $data['slug'] = Verification::where(['slug' => $name])->first();
            $data['success'] = BusinessVerification::where(['status'=>'successful', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
            $data['failed'] = BusinessVerification::where(['status'=>'failed', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
            $data['pending'] = BusinessVerification::where(['status'=>'pending', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
            $data['fields'] = FieldInput::where(['slug'=>$slug->slug])->get();
            $data['wallet']= Wallet::where('user_id', $user->id)->first();
            $data['logs'] = BusinessVerification::where(['user_id'=>auth()->user()->id, 'status'=>'pending'])->get();
           // dd($data);
        }
        return view('users.business.index', $data);
    }

    public function BusinessDetails($id){
        $slug = BusinessVerification::where('id', decrypt($id))->first();
        $user = User::where('id', auth()->user()->id)->first();
        $data['slug'] = BusinessVerification::where('id', decrypt($id))->first();
        $data['success'] = BusinessVerification::where(['status'=>'successful', 'verification_id'=>$slug->verification_id, 'user_id'=> $user->id])->get();
        $data['failed'] = BusinessVerification::where(['status'=>'failed', 'verification_id'=>$slug->verification_id, 'user_id'=> $user->id])->get();
        $data['pending'] = BusinessVerification::where(['status'=>'pending', 'verification_id'=>$slug->verification_id, 'user_id'=> $user->id])->get();
        $data['logs'] = BusinessVerification::where(['user_id' => $user->id, 'verification_id'=>$slug->verification_id])->latest()->get();
        $data['verified'] = BusinessVerificationDetail::where(['service_ref' => $slug->service_ref])->latest()->first();
          return view('users.business.details', $data);
    }
}
