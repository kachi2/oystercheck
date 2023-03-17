<?php
namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\BusinessVerification;
use Illuminate\Http\Request;
use App\Models\Verification;
use App\Models\Wallet;
use App\Models\User;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use App\Models\IdentityVerification;
use Illuminate\Support\Facades\Hash;
use App\Models\CandidateVerification;
use App\Models\FieldInput;
use App\Traits\GenerateRef;
use App\Models\AddressVerification;
use App\Models\IdentityVerificationDetail;
use App\Models\Transaction;
use Illuminate\Support\Facades\Session;
use App\Models\FundRequest;

use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    use GenerateRef;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->API_Token = 'FLWSECK_TEST-4b55ad219d2376bebfb6bc146b02a781-X';
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

        public function RedirectUser(){
            if(auth()->user()->user_type == 3)
            return redirect()->route('admin.index');
        }
    
    public function Home()
    {
        $this->RedirectUser();
        $user = auth()->user();
        if($user->user_type == 1){   
        $service = CandidateVerification::where('user_id', $user->id)->get();
        return view('users.onboarding.uploads', ['service'=> $service]);
        }
        $data['success'] = IdentityVerification::where(['status'=>'successful',  'user_id'=> $user->id])->get();
        $data['failed'] = IdentityVerification::where(['status'=>'failed', 'user_id'=> $user->id])->get();
        $data['pending'] = IdentityVerification::where(['status'=>'pending', 'user_id'=> $user->id])->get();
        $data['wallet']= Wallet::where('user_id', $user->id)->first();
        $data['logs'] = IdentityVerification::where(['user_id' => $user->id])->latest()->get();
        $data['recents'] = IdentityVerification::where(['user_id' => $user->id])->latest()->take(5)->get();
        $data['transactions'] = Transaction::where('user_id', $user->id)->latest()->take(5)->get();
        $data['activity'] = ActivityLog::where('user_id', $user->id)->take(10)->get();
        return view('users.home', $data);
    }

    public function GetData()
    {
        $data['data'] = IdentityVerification::latest()->take(5)->get();
        return response()->json($data);
    }

    public function gettingStarted()
    {
        return view('users.instructions');
    }
    // public function VerifyIndex($slug){
    //     $this->RedirectUser();
    //     $user = auth()->user();
    //     $slug = strtoupper($slug);
    //     $slug = Verification::where('slug', $slug)->first();
    //     $data['slug'] = Verification::where('slug', $slug->slug)->first();
    //     $data['success'] = IdentityVerification::where(['status'=>'successful', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
    //     $data['failed'] = IdentityVerification::where(['status'=>'failed', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
    //     $data['pending'] = IdentityVerification::where(['status'=>'pending', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
    //     $data['fields'] = FieldInput::where(['slug'=>$slug->slug])->get();
    //     $data['wallet']= Wallet::where('user_id', $user->id)->first();
    //     $data['verified'] = IdentityVerificationDetail::where(['user_id'=>$user->id])->latest()->first();           
    //     $data['logs'] = IdentityVerification::where(['user_id' => $user->id, 'verification_id'=>$slug->id])->latest()->get();
    //     return view('users.individual.identityVerify', $data);
    // }


    public function VerifyIndexReturn($slug)
    {
        $this->RedirectUser();
        $user = auth()->user();
        $slug = strtoupper($slug);
        $slug = Verification::where('slug', $slug)->first();
        $data['slug'] = Verification::where('slug', $slug->slug)->first();
        $data['success'] = IdentityVerification::where(['status'=>'successful', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
        $data['failed'] = IdentityVerification::where(['status'=>'failed', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
        $data['pending'] = IdentityVerification::where(['status'=>'pending', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
        $data['fields'] = FieldInput::where(['slug'=>$slug->slug])->get();
        $data['wallet']= Wallet::where('user_id', $user->id)->first();
        $data['verified'] = IdentityVerificationDetail::where(['first_name'=>'IBIYEMI'])->latest()->first();           
        $data['logs'] = IdentityVerification::where(['user_id' => $user->id, 'verification_id'=>$slug->id])->latest()->get();
        return $data;
    }

    public function UserTransactions(){
        $this->RedirectUser();
        $user = User::where('id', auth()->user()->id)->first();
        $data['balances'] = Wallet::where('user_id', $user->id)->first();
        $data['transactions'] = Transaction::where('user_id', $user->id)->latest()->paginate();
        return view('users.accounts.transactions', $data);
    }

    public function fundRequest(Request $request){
        $required_data = $request->only('customAmount', 'paymentMethod');
        $validator = Validator::make($required_data, [
            'customAmount' => 'bail|required|integer|gte:5000',
            'paymentMethod' => 'bail|required|string|in:card,bank_transfer'
        ]);
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()], 401);
        }

        // if($request->paymentMethod == 'card'){
        //     Session::flash('alert', 'success');
        //     Session::flash('message', 'Wallet top-up completed successfully');
        //     return redirect()->back();
        // }
        if($required_data['paymentMethod'] == 'bank_transfer'){
            $user = auth()->user();
            $tax = (7.5*$required_data['customAmount'])/100;
            $funds =  FundRequest::create([
                'reference' => generateReference(24),
                 'user_id' => $user->id,
                 'amount' => $required_data['customAmount'],
                 'tax' => $tax,
                 'total_amount' => $tax + $required_data['customAmount'],
                 'payment_method' => $required_data['paymentMethod']
             ]);

        }
     if($funds){
        return response()->json(['success'=> true, 'statusCode'=> 201, 'message' => 'Fund Request Successful', 'data' => $funds], 201);
        //  Session::flash('alert', 'success');
        //  Session::flash('message', 'Fund request send, your account will be credited once payment is approved');
        //  return redirect()->back();
     }
    }

    public function PaymentVerify(Request $request, $trxref){
        $trnx_ref_exists = Transaction::where(['external_ref' => $trxref])->first();
        if ($trnx_ref_exists) {
      ;      return response()->json(['error'=>'Transaction not found, Please contact support']);
            exit();
        }

        $cURLConnection = curl_init();
        curl_setopt($cURLConnection, CURLOPT_URL, 'https://api.flutterwave.com/v3/transactions/'.$trxref.'/verify/');
        curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Authorization: Bearer ".$this->API_Token
        ));
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true); 
        $se = curl_exec($cURLConnection);
        curl_close($cURLConnection);  
        $resp = json_decode($se, true);

      // dd($resp);
        if ($resp['status'] == 'error') {
            Session::flash('message', 'Transaction not found, Please contact support');
            return response()->json(['error'=>'Transaction not found, Please contact support']);
        }
        $chargeResponsecode = $resp['status'];
        $chargeAmount = $resp['data']['amount'];
       // $chargeCurrency = $resp['data']['currency'];
        $custemail = $resp['data']['customer']['email'];
        $payment_id = $resp['data']['tx_ref'];
        $external_ref = $resp['data']['flw_ref'];
        if (($chargeResponsecode == "success")) {     
            //Give Value and return to Success page
            $transactionRef = $this->GenerateRef();
            $getUser = User::where('email', $custemail)->first();
            $wallet = Wallet::where('user_id', $getUser->id)->first();
            $ownerNewBalance = $wallet->avail_balance + $chargeAmount;
            Wallet::where(['user_id' => $getUser->id])->update(['avail_balance' => $ownerNewBalance, 'prev_balance' => $wallet->avail_balance]);
           Transaction::create([
                'user_id' => $getUser->id,
                'ref'=>$transactionRef,
                'type'=>'CREDIT',
                'purpose' => 'WALLET TOP-UP',
                'external_ref'=>$external_ref,
                'amount'=>$chargeAmount,
                'prev_balance' =>$wallet->avail_balance,
                'avail_balance' => $ownerNewBalance 
            ]);

            ActivityLog::create([
                'user_id' => auth()->user()->id,
                'activity' => 'Topup Wallet Balance',
                'ip_address' => $request->Ip(),
                'user_agent' => $request->UserAgent(),
            ]);
            
            return response()->json($se);
          
        } else {
            return response()->json($se);
        }
    }

    public function UserReports(){
        $this->RedirectUser();
        return view('users.reports.reports')
        ->with('verifications', Verification::get());
    }

    public function getReports(Request $request){
        $this->RedirectUser();
        $id = $request->verification_id;
        $user = User::where('id', auth()->user()->id)->first();
        $verify = Verification::where('id', decrypt($id))->first();
       
        if($verify->report_type == 'business'){
            $reports = BusinessVerification::where(['slug' => $verify->slug, 'user_id'=>$user->id])->latest()->get();
            return redirect()->back()
                ->with('reports', $reports);
        }else if($verify->report_type == 'address'){
            $reports = AddressVerification::where(['slug' => $verify->slug, 'user_id'=>$user->id])->latest()->get();
            return redirect()->back()
                ->with('reports', $reports);
        }else{
           
            $reports = IdentityVerification::where(['verification_id' => $verify->id, 'user_id'=>$user->id])->latest()->get();
          
            return view('users.reports.reports')
                    ->with('verifications', Verification::get())
                ->with('reports', $reports);
        }

    }

    public function Profile(){
        $this->RedirectUser();
        return view('users.accounts.profile_settings')
        ->with('user', User::where('id', auth()->user()->id)->first());
    }

    public function updateUserDetails(Request $request){
        $this->RedirectUser();
        $user = User::where('id', auth()->user()->id)->first();
        if($request->name){
            User::where('id', $user->id)->update(['name' => $request->name]);
        }

        if($request->company_name){
            $data['company_name'] = $request->company_name;
        }
        if($request->company_email){
            $data['company_email'] = $request->company_email;
        }
        if($request->company_phone){
            $data['company_phone'] = $request->company_phone;
        }
        if($request->company_address){
            $data['company_address'] = $request->company_address;
        }
        if($request->company_logo){
                $image = $request->company_logo;
                $ext =  $image->getClientOriginalExtension();
                $dd = md5(time());
                $fileName = $dd.'.'.$ext;
                $image->move('assets/images',$fileName);
              $data['image'] = $fileName;
        }
         Client::where('user_id', $user->id)->update($data);
         Session::flash('alert', 'success');
         Session::flash('message', 'Details updated successfully');

         ActivityLog::create([
             'user_id' => auth()->user()->id,
             'activity' => 'Updated Account Details',
             'ip_address' => $request->Ip(),
             'user_agent' => $request->UserAgent(),
         ]);
        return redirect()->back();
    }

    public function passwordUpdate(Request $request){
        $this->RedirectUser();
        $this->validate($request, [
            'oldPassword' => 'required',
            'password' => 'required|min:6|confirmed',
            ]);
     
           $hashedPassword = auth()->user()->password;
            
            if (Hash::check($request->oldPassword , $hashedPassword)) {
            if (!Hash::check($request->password , $hashedPassword)) {
                  $users =user::find(Auth()->user()->id);
                  $users->password = bcrypt($request->password);
                  user::where( 'id' , auth()->user()->id)->update( array( 'password' =>  $users->password));
                  Session::flash('message', 'Password Updated Successfully');
                  Session::flash('alert', 'success');
                  ActivityLog::create([
                    'user_id' => auth()->user()->id,
                    'activity' => 'Changed User Passsword',
                    'ip_address' => $request->Ip(),
                    'user_agent' => $request->UserAgent(),
                ]);
                  return redirect()->back()->with('success', 'Details/Pass Updated Successfully');
                }
                else{
                    Session::flash('message', 'Old Password / New Password Cannot be the Same');
                    Session::flash('alert', 'error');
                    return redirect()->back()->with('error', 'Old Password / New Password Cannot be the Same');}
            } else{
                Session::flash('message', 'Old Password is Incorrect');
                Session::flash('alert', 'error');
                return redirect()->back()->with('error', 'Old Password is Incorrect');
            }
    }
    public function Logouts(){
        Auth::logout();
        //Auth::guard('web')->logout();
        return redirect()->intended('login');
    }
}
