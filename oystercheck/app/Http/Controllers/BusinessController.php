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

    public function Index($name){
        if(auth()->user()->user_type == 3)
        return redirect()->route('admin.index');
        
        $user = User::where('id', auth()->user()->id)->first();
       $slug = Verification::where(['slug' => $name])->first();
       $data['slug'] = Verification::where(['slug' => $name])->first();
       $data['success'] = BusinessVerification::where(['status'=>'successful', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
       $data['failed'] = BusinessVerification::where(['status'=>'failed', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
       $data['pending'] = BusinessVerification::where(['status'=>'pending', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
       $data['fields'] = FieldInput::where(['slug'=>$slug->slug])->get();
       $data['wallet']= Wallet::where('user_id', $user->id)->first();
       //$data['verified'] = BusinessVerification::where(['user_id'=>auth()->user()->id, 'slug'=>$slug->slug])->latest()->first();           
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
            Session::flash('msg', 'Please provide the data to verify');
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
                Session::flash('msg', 'Your walllet is too low for this transaction');
                return back();
            }else{
                $charge = $this->chargeUser($amount, $ref, $slug->report_type);
                if($charge){
                    $res = BusinessVerificationDetail::where(['service_ref'=>$request->company_name, 'status'=>'VERIFIED'])->latest()->first();  
                    if($res){
                       // var_dump($res);
                        BusinessVerification::where(['user_id'=> auth()->user()->id])->latest()->first()
                        ->update(['status' => 'successful']);
                        $data = $this->generateHeaderReports($slug);
                  // return $data['slug'];
                        return view('users.business.index', $data);
                    }
                   $res = $this->BusinessVerify($request, $ref);
                   if($res['data']['details']['background_model']['status'] == 'VERIFIED'){
                    BusinessVerification::where(['user_id'=> auth()->user()->id])->latest()->first()
                    ->update(['status' => 'successful']);
                    $data = $this->generateHeaderReports($slug);
                   return view('users.business.index', $data);
                   }
                   return $res;
                }else{
                    Session::flash('alert', 'error');
                    Session::flash('message', 'An error occured, please try again');
                    return redirect()->back();
                }
            }
            }else{
                Session::flash('alert', 'error');
                Session::flash('message', 'Action failed, try again later');
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
            "Token: a00ab3e6537fdf1e4e4c39fa355de3ec"
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
}
