<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AddressVerification;
use App\Traits\GenerateRef;
use App\Models\ActivityLog;
use App\Models\CandidateVerification;
use App\Models\IdentityVerification;
use App\Models\BusinessVerification;
use Illuminate\Support\Facades\Hash;
use App\Models\BusinessVerificationDetail;
use App\Models\AddressVerificationDetail;
use App\Models\IdentityVerificationDetail;
use App\Models\Transaction;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use App\Models\CandidateService;
use App\Models\FundRequest;
use App\Models\Verification;
use App\Models\Role;
use App\Models\Wallet;
use App\Models\Notification;
use App\Models\Business;
use App\Models\Candidate;
use App\Models\Client;
use App\Models\Profile;
use App\Models\Service;
use App\Models\UserActivity;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //
    use GenerateRef;

    public function __construct()
    {
        $this->middleware('admin');
 
    }

    public function RedirectUser(){
        if(auth()->user()->user_type !== 3)
        return redirect()->route('home');
    }

    public function Index(){
        $this->RedirectUser();
        $data['success'] = IdentityVerification::where(['status'=>'successful'])->get();
        $data['failed'] = IdentityVerification::where(['status'=>'failed'])->get();
        $data['pending'] = IdentityVerification::where(['status'=>'pending'])->get();
        $data['logs'] = IdentityVerification::latest()->get();
        $data['recents'] = IdentityVerification::latest()->take(5)->get();
        $data['transactions'] = Transaction::latest()->take(5)->get();
        $data['activity'] = ActivityLog::take(10)->latest()->get();
        return view('admin.verifications.index', $data);
    }

    public function getVerify($slug){
        $this->RedirectUser();
        $slug = strtoupper($slug);
        $slug = Verification::where('slug', $slug)->first();
        $data['slug'] = Verification::where('slug', $slug->slug)->first();
        $data['success'] = IdentityVerification::where(['status'=>'successful', 'verification_id'=>$slug->id])->get();
        $data['failed'] = IdentityVerification::where(['status'=>'failed', 'verification_id'=>$slug->id])->get();
        $data['pending'] = IdentityVerification::where(['status'=>'pending', 'verification_id'=>$slug->id])->get();           
        $data['logs'] = IdentityVerification::where(['verification_id'=>$slug->id])->latest()->get();
        return view('admin.verifications.verify', $data);
    }  
    
    public function businessIndex($slug){
        $this->RedirectUser();
        $slug = Verification::where(['slug' => $slug])->first();
        $data['slug'] = Verification::where(['slug' => $slug->slug])->first();
        $data['success'] = BusinessVerification::where(['status'=>'successful', 'verification_id'=>$slug->id])->get();
        $data['failed'] = BusinessVerification::where(['status'=>'failed', 'verification_id'=>$slug->id])->get();
        $data['pending'] = BusinessVerification::where(['status'=>'pending', 'verification_id'=>$slug->id])->get();          
        $data['logs'] = BusinessVerification::where(['verification_id'=>$slug->id])->latest()->get();
        return view('admin.business.index', $data);
    }

    public function businessDetails($id){
        $this->RedirectUser();
        $slug = BusinessVerification::where('id', decrypt($id))->first();
        $data['slug'] = BusinessVerification::where('id', decrypt($id))->first();
        $data['success'] = BusinessVerification::where(['status'=>'successful', 'verification_id'=>$slug->verification_id])->get();
        $data['failed'] = BusinessVerification::where(['status'=>'failed', 'verification_id'=>$slug->verification_id])->get();
        $data['pending'] = BusinessVerification::where(['status'=>'pending', 'verification_id'=>$slug->verification_id])->get();
        $data['logs'] = BusinessVerification::where([ 'verification_id'=>$slug->verification_id])->latest()->get();
        $data['verified'] = BusinessVerificationDetail::where(['service_ref' => $slug->service_ref])->latest()->first();
      return view('admin.business.details', $data);
    }

    public function CandidateIndex(){
        $candidate['candidate'] = Candidate::get();
        $candidate['verified'] = Candidate::where(['status'=>'verified'])->get();
        $candidate['pending'] = Candidate::where(['status'=>'pending'])->get();
        return view('admin.candidates.index', $candidate);
    }

    public function candidateDetails($id){
        $this->RedirectUser();
        $data['verified'] = Candidate::where([ 'status'=>'verified'])->get();
        $data['pending'] = Candidate::where([ 'status'=>'pending'])->get();  
        $candidate = Candidate::where('id', decrypt($id))->first();
        $data['candidates'] = Candidate::all();
        $data['candidate'] = Candidate::where('user_id', $candidate->user_id)->first();
        $data['services'] = CandidateVerification::where('user_id', $candidate->user_id)->get();
        return view('admin.candidates.details', $data);
    }

    public function UserCandidates(){
        $candidate = Candidate::get();
        return view('admin.users.candidates', compact('candidate', $candidate));
    }

    public function UserClients(){
        $clients = Client::get();
        return view('admin.clients.index', compact('clients', $clients));
    }

    public function clientCandidates($id){
        $candidate = Candidate::where('client_id', decrypt($id))->get();
        return view('admin.clients.candidate', compact('candidate', $candidate));
    }

    public function createClient(){
      return view('admin.clients.create');
    }

    public function ClientStore(Request $request){

        $valid = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users', 
            'company_name' => 'required',
            'company_phone' => 'required',
            'company_address'=> 'required',
            'company_email' => 'required',
        ]);

        if($valid->fails()){
            Session::flash('alert', 'error');
            Session::flash('message', 'Some Fields are missing');
            return redirect()->back();
        }

        //create a client account 
        $pass = Hash::make($this->generatePass($request->name));
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $pass,
            'user_type' => 2
        ];
        User::create($data);

        return $data;


    }
}
