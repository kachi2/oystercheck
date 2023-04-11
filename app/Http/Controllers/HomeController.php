<?php
namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\BusinessVerification;
use Illuminate\Http\Request;
use App\Models\Verification;
use App\Models\Wallet;
use App\Models\User;
use App\Models\Client;
use App\Models\UserActivity;
use Illuminate\Support\Facades\Auth;
use App\Models\IdentityVerification;
use Illuminate\Support\Facades\Hash;
use App\Models\CandidateVerification;
use App\Models\FieldInput;
use App\Traits\GenerateRef;
use App\Models\AddressVerification;
use App\Models\IdentityVerificationDetail;
use App\Traits\sandbox;
use App\Models\Transaction;
use Illuminate\Support\Facades\Session;
use App\Models\FundRequest;

use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    use GenerateRef;
    use sandbox;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       return $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    
    public function Home()
    {
        $user = auth()->user();
        if($user->user_type == 1){   
        $service = CandidateVerification::where('user_id', $user->id)->get();
        return view('users.onboarding.uploads', ['service'=> $service]);
        }
        $data['success'] = IdentityVerification::where(['status'=>'found',  'user_id'=> $user->id, 'is_sandbox' => $this->sandbox()])->get();
        $data['failed'] = IdentityVerification::where(['status'=>'not-found', 'user_id'=> $user->id, 'is_sandbox' => $this->sandbox()])->get();
        $data['pending'] = IdentityVerification::where(['status'=>'null', 'user_id'=> $user->id, 'is_sandbox' => $this->sandbox()])->get();
        $data['wallet']= Wallet::where('user_id', $user->id)->first();
        $data['logs'] = IdentityVerification::where(['user_id' => $user->id, 'is_sandbox' => $this->sandbox()])->latest()->get();
        $data['recents'] = IdentityVerification::where(['user_id' => $user->id, 'is_sandbox' => $this->sandbox()])->latest()->take(5)->get();
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
        $user = auth()->user();
        if($user->user_type == 1){   
        $service = CandidateVerification::where('user_id', $user->id)->get();
        return view('users.onboarding.uploads', ['service'=> $service]);
        }
        return view('users.instructions');
    }

    public function VerifyIndexReturn($slug)
    {
   
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

    public function UserReports(){
        return view('users.reports.reports')
        ->with('verifications', Verification::get());
    }

    public function getReports(Request $request){
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
        $user = User::where('id', auth()->user()->id)->first();
        $client = Client::where('user_id', $user->id)->first();
        $clients = $this->GetClientProfile($client);
        return view('users.accounts.profile_settings', $clients, [
            'user' =>  $user,
            'activities' => ActivityLog::where('user_id',  $user->id)->latest()->get(),
            'client' => $client,
           
        ]);
    }

    public function updateUserDetails(Request $request){
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

    public function GetClientProfile($client){
        if($client->user->firstname != null && $client->user->email != null && $client->user->phone != null){
            $clients['profileInfo'] = 1;
        }else{
            $clients['profileInfo'] = null;
        }

        if($client->email != null && $client->logo != null && $client->company_name != null  && $client->description != null  && $client->reg_number != null && $client->tax_number != null) {
            $clients['basicInfo'] = 1;
        }else{
            $clients['basicInfo'] = null;
        }
        if( $client->company_address != null && $client->company_phone != null && $client->facebook != null && $client->linkedin != null && $client->instagram != null) {
            $clients['busContact'] = 1;
        }else{
            $clients['busContact'] = null;
        }

        if( $client->cac != null && $client->others != null) {
            $clients['Vdocs'] = 1;
        }else{
            $clients['Vdocs'] = null;
        }
        return $clients;
    }
  
    public function AccountActivate(){
        $user = User::whereId(auth()->user()->id)->first();
        $client = Client::where('user_id', $user->id)->first();
        if($client->is_admin_verified != 1){
            Session::flash('message', 'Request failed, Kindly provide the requested information to fully verify your account');
            Session::flash('alert', 'error');
            return redirect()->back();
        }

        if($client->is_activated != 1){
        $client->update(['is_activated' => 1]);
        Session::flash('message', 'Request completed Successfully, Account fully activated');
            Session::flash('alert', 'success');
            return redirect()->back();
    }else{
        $client->update(['is_activated' => 0]);
        Session::flash('message', 'Account Successfully switched to test mode');
            Session::flash('alert', 'error');
            return redirect()->back();
    }
    }

    public function ActivityLog(){
        $user = User::whereId(auth()->user()->id)->first();
    return view('users.accounts.activities', [
        'activities' => ActivityLog::where('user_id',  $user->id)->latest()->get(),
    ]);
    
    }
}
