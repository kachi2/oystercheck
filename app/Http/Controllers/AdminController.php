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
use Illuminate\Support\Facades\Mail;
use App\Models\Wallet;
use App\Models\Notification;
use App\Models\Business;
use App\Models\Candidate;
use App\Models\Client;
use App\Models\Profile;
use App\Models\Service;
use App\Models\UserActivity;
use App\Mail\UserReg;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //
    use GenerateRef;

    public function __construct()
    {
        $this->middleware('admin');
 
    }

    public function sendMail($data){
        Mail::to($data['email'])->send(new UserReg($data));
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

    public function AddressIndex($slug){
        $this->RedirectUser();
        $slug = Verification::where(['slug' => $slug])->first();
        $data['slug'] = Verification::where(['slug' => $slug->slug])->first();
        $data['success'] = AddressVerification::where(['status'=>'successful', 'verification_id'=>$slug->id])->get();
        $data['failed'] = AddressVerification::where(['status'=>'failed', 'verification_id'=>$slug->id])->get();
        $data['pending'] = AddressVerification::where(['status'=>'pending', 'verification_id'=>$slug->id])->get();          
        $data['logs'] = AddressVerification::where(['verification_id'=>$slug->id])->latest()->get();
        return view('admin.address.index', $data);
    }

    public function CandidateIndex(){
        $candidate['candidate'] = Candidate::get();
        $candidate['verified'] = Candidate::where(['status'=>'approved'])->get();
        $candidate['rejected'] = Candidate::where(['status'=>'rejected'])->get();
        return view('admin.candidates.index', $candidate);
    }

    public function candidateDetails($id){
        $this->RedirectUser();
        $data['verified'] = Candidate::where([ 'status'=>'verified'])->get();
        $data['rejected'] = Candidate::where([ 'status'=>'rejected'])->get();  
        $candidate = Candidate::where('id', decrypt($id))->first();
        $data['candidates'] = Candidate::all();
        $data['candidate'] = Candidate::where('user_id', $candidate->user_id)->first();
        $data['services'] = CandidateVerification::where('user_id', $candidate->user_id)->get();
        return view('admin.candidates.details', $data);
    }

    public function UserCandidates(){
        $candidate = Candidate::get();
        return view('admin.users.candidates', ['candidate'=> $candidate]);
    }

    public function UserClients(){
        $clients = Client::get();
        return view('admin.clients.index', ['clients'=> $clients]);
    }

    public function clientCandidates($id){
        $candidate = Candidate::where('client_id', decrypt($id))->get();
        return view('admin.clients.candidate', ['candidate'=> $candidate]);
    }

    public function createClient(){
      return view('admin.clients.create');
    }

    public function ClientStore(Request $request){
        
        $valid = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
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
        $pass = $this->generatePass($request->name);
        $name = explode(' ', $request->name);
        $data = [
            'firstname' => $name[0],
            'lastname' => $name[1],
            'email' => $request->email,
            'password' => Hash::make($pass),
            'user_type' => 2
        ];
        $create = User::create($data);
        if($create){
            $data['password'] = $pass;
            $this->sendMail($data);
        }
        sleep(2);
       $user = User::latest()->first();
        Wallet::create([
            'user_id' => $user->id,
            'book_balance' => 0,
            'avail_balance' => 0,
            'total_balance' => 0,
        ]);
           if(request()->file('image')){
            $image_url = cloudinary()->upload($request->file('image')->getRealPath(), [
                'folder' => 'oysterchecks/clientProfile'
            ])->getSecurePath();

           }else{
            $image = 'default.png';
           }
        Client::create([
            'company_name' => $request->company_name,
            'company_email' => $request->company_email,
            'company_address' => $request->company_address,
            'company_phone' => $request->company_phone,
            'user_id' => $user->id,
            'image'=>$image
        ]);

        Session::flash('alert', 'success');
        Session::flash('message', 'Client created successfully');
        return back();


    }

    public function administratorIndex(){
        return view('admin.admin.index')->with('admins', Admin::get());
    }

    public function AdministratorCreate(){

        return view('admin.admin.create')->with('roles', Role::get());
    }

    public function AdministratorStore(Request $request){

        $valid = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
            'company_name' => 'required',
            'company_email' =>'required',
        ]);

        if($valid->fails()){
            Session::flash('alert', 'error');
            Session::flash('message', 'Some Fields are missing');
            return redirect()->back()->withInput($request->all())->withErrors($valid);
        }

        $pass = $this->generatePass($request->name);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($pass),
            'user_type' => 2
        ];
        $create = User::create($data);
        if($create){
            $data['password'] = $pass;
            $this->sendMail($data);
        }
        sleep(2);
        $user = User::latest()->first();
        Admin::create([
            'company_name' => $request->company_name,
            'company_email' => $request->company_email,
            'company_address' => $request->company_address,
            'company_phone' => $request->company_phone,
            'role' => $request->role,
            'user_id' => $user->id,
        ]);
        Session::flash('alert', 'success');
        Session::flash('message', 'Administrator created successfully');
        return back();

    }

    public function FileDownload($id){
        $file = CandidateVerification::where('id', decrypt($id))->first();
        $location = public_path()."/assets/candidates/".$file->doc;
        return response()->download($location);
    }

    public function statusUpdate(Request $request, $id){
        $status = CandidateVerification::where('id', decrypt($id))->first();
        if($request->status == 1 ){
            CandidateVerification::where('id', $status->id)
                ->update([
                'status' => 'approved'
                ]);
            Session::flash('alert', 'success');
            Session::flash('message', 'Document Marked as Approved');
            return back();
        }else if($request->status == 2){
            CandidateVerification::where('id', $status->id)
            ->update([
            'status' => 'failed'
            ]);
        Session::flash('alert', 'warning');
        Session::flash('message', 'Document Marked as Rejected');
            return back();
        }else{
            Session::flash('alert', 'info');
            Session::flash('message', 'No changes made, check your request and try again');
            return back();

        }
    }

    public function QAUpdate(Request $request, $id){
        $status = CandidateVerification::where('id', decrypt($id))->first();
        if($request->qa == 1 ){
            CandidateVerification::where('id', $status->id)
                ->update([
                    'QA_approved' => 'approved'
                ]);
            Session::flash('alert', 'success');
            Session::flash('message', 'Document Marked as Approved');
            return back();
        }else if($request->qa == 2){
            CandidateVerification::where('id', $status->id)
            ->update([
                'QA_approved' => 'failed'
            ]);
        Session::flash('alert', 'warning');
        Session::flash('message', 'Document Marked as Rejected');
            return back();
        }else{
            Session::flash('alert', 'info');
            Session::flash('message', 'No changes made, check your request and try again');
            return back();

        }
    }


    public function paymentUpdate(Request $request, $id){
        $status = CandidateVerification::where('id', decrypt($id))->first();
        if($request->payment == 1 ){
            CandidateVerification::where('id', $status->id)
                ->update([
                    'is_paid' => 1
                ]);
            Session::flash('alert', 'success');
            Session::flash('message', 'Document Marked as Paid');
            return back();
        }else if($request->payment == 2){
            CandidateVerification::where('id', $status->id)
            ->update([
                'is_paid' => 2
            ]);
        Session::flash('alert', 'warning');
        Session::flash('message', 'Document Marked as Not Paid');
            return back();
        }else{
            Session::flash('alert', 'info');
            Session::flash('message', 'No changes made, check your request and try again');
            return back();

        }
    }


    public function QAReview(Request $request, $id){
        $status = CandidateVerification::where('id', decrypt($id))->first();
        if(isset($request->reviews) ){
            CandidateVerification::where('id', $status->id)
                ->update([
                    'QA_review' => $request->reviews
                ]);
    }
    Session::flash('alert', 'success');
    Session::flash('message', 'Document Review Saved');
    return back();
}

        public function VerifyCandidate(Request $request, $id){
            $status = CandidateVerification::where(['user_id' => decrypt($id), 'status' => 'pending'])->get();  
            if(!isset($status)){
                Session::flash('alert', 'error');
                Session::flash('message', 'Some documents are still pending, please review');
                return back();
            } 
            if($request->verify == 1 ){
              //  dd(decrypt($id));
                Candidate::where('user_id', decrypt($id))
                    ->update([
                        'status' => 'verified'
                    ]);
                    Session::flash('alert', 'success');
                    Session::flash('message', 'Candidate documents verified successfully');
                    return back();
            }elseif($request->verify == 2){
                Candidate::where('user_id', decrypt($id))
                    ->update([
                        'status' => 'rejected'
                    ]);
                    Session::flash('alert', 'error');
                    Session::flash('message', 'Candidate documents Marked as Rejected');
                    return back();
            }else{
                Session::flash('alert', 'info');
                Session::flash('message', 'No changes made, check input and try again');
                return back();
            }
        }
}
