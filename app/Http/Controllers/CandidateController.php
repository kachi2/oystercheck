<?php

namespace App\Http\Controllers;

use App\Mail\UserAccount;
use App\Mail\UserOnboard;
use App\Models\CandidateService;
use App\Models\User;
use App\Models\Candidate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\CandidateVerification;
use App\Models\Client;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Traits\sandbox;
use Illuminate\Support\Facades\Validator;

class CandidateController extends Controller
{
    use sandbox;
    public function __construct()
    {
       // $this->middleware('auth:admin');
    }

    public function GeneratePassword($name){
        $pass = substr($name, 0, 5).rand(111,999);
        return $pass;
    }
    
    public function CandidateIndex(){
     
        $candidate['candidate'] = Candidate::where(['client_id' => client_id(), 'is_sandbox' => $this->sandbox()])->get();
        $candidate['pending'] = Candidate::where(['client_id' => client_id(), 'status'=>'pending','status'=>null, 'is_sandbox' => $this->sandbox()])->get();
        $candidate['verified'] = Candidate::where(['client_id' => client_id(), 'status'=>'verified', 'is_sandbox' => $this->sandbox()])->get();
        $candidate['rejected'] = Candidate::where(['client_id'=> client_id(), 'status'=>'rejected', 'is_sandbox' => $this->sandbox()])->get();
        return view('users.candidates.index', $candidate);
    }

    public function CadidateCreate(){
        
        $candidate['candidates'] = Candidate::where(['client_id' => client_id(), 'is_sandbox' => $this->sandbox()])->get();
        $candidate['pending'] = Candidate::where(['client_id' => client_id(), 'status'=>'pending', 'is_sandbox' => $this->sandbox()])->get();
        $candidate['verified'] = Candidate::where(['client_id' => client_id(), 'status'=>'approved', 'is_sandbox' => $this->sandbox()])->get();
        $candidate['rejected'] = Candidate::where(['client_id'=> client_id(), 'status'=>'rejected', 'is_sandbox' => $this->sandbox()])->get();
       
      
        return view('users.candidates.create', $candidate)
        ->with('verifications', CandidateService::get());
    }

    public function CadidateStore(Request $request){
        //check if email exist 

        $valid = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'company_name' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
        ]);

        if($valid->fails()){
            Session::flash('alert', 'error');
            Session::flash('message', 'Some fields are missing, please check');
            return back()->withInput($request->all())->withErrors($valid);
        }
        $check = User::where('email', $request->email)->first();
        if($check){
            Session::flash('alert', 'error');
            Session::flash('message', 'A User with this email already exist, if you forgot the password, contact the Administrator.');
            return back()->withInput($request->all());
        }
        //create user account

        DB::beginTransaction();

        try{
        if(isset($request->first_name)){
            $data['firstname'] = $request->first_name;
           }
           if(isset($request->last_name)){
            $data['lastname'] = $request->last_name;
           }
           if(isset($request->email)){
            $data['email'] = $request->email;
           }
           $password =$this->GeneratePassword($request->first_name);
           $data['password'] = Hash::make($password);
           $data['user_type'] = 1;
           $data['role_id'] = 1;
           $data['status'] = 'pending';

            //dd($data);
          $create = User::create($data);
          if($create){
          $data['password']  = $password;
        //   Mail::to($request->email)->send( new UserAccount($data));
          Mail::to($request->email)->send( new UserOnboard($data));
          sleep(2);
          $candidate = User::latest()->first();
          Candidate::create([
            'user_id' => $candidate->id,
            'client_id' => client_id(),
            'email' => $request->email,
            'phone' => $request->phone,
            'state'=>$request->state,
            'city' => $request->city,
            'address'=>$request->address, 
            'country' => $request->country,
            'company' => $request->company,
            'email_status' => 'Email Sent',
            'status' => 'not verified',
            'is_sandbox' => $this->sandbox()
          ]);
          foreach($request->verifyServices as $key => $value){
            CandidateVerification::create([
                'user_id' => $candidate->id,
                'client_id' => client_id(),
                'candidate_services_id' => $value,
                'status' => 'pending',
                'is_paid' => '0',
              ]);
          }
        }
        DB::commit();
        Session::flash('alert', 'success');
        Session::flash('message', 'Candidate Created Successfully');
        return redirect()->back();
          }catch(\Exception $e){
            DB::rollBack();
            Session::flash('alert', 'error');
            Session::flash('message', 'Unable to create candidate, please try again'.$e->getMessage());
            return redirect()->back()->withInput($request->all());
          }
        
              
          
    }

    public function CandidateDetails($id){
        
        $data['pending'] = Candidate::where(['client_id' => client_id(), 'status'=>'pending', 'status'=>null, 'is_sandbox' => $this->sandbox()])->get();
        $data['candidates'] = Candidate::where(['client_id' => client_id(), 'is_sandbox' => $this->sandbox()])->get();
        $data['verified'] = Candidate::where(['client_id' => client_id(), 'status'=>'verified', 'is_sandbox' => $this->sandbox()])->get();
        $data['rejected'] = Candidate::where(['client_id'=> client_id(), 'status'=>'rejected', 'is_sandbox' => $this->sandbox()])->get();
        $candidate = Candidate::where('id', decrypt($id))->first();
        $data['candidate'] = Candidate::where(['user_id' => $candidate->user_id, 'is_sandbox' => $this->sandbox()])->first();
        $data['services'] = CandidateVerification::where('user_id', $candidate->user_id)->get();
        return view('users.candidates.details', $data); 
    }


    // public function CandidateFileUpload(){
     
    // }

    public function candidateHomePage(){
        $user = User::where('id', auth()->user()->id)->first();
        if($user->user_type == 1){
            Candidate::where('user_id', $user->id)->update(['email_status' => 'Email Read']);
            $service = CandidateVerification::where(['user_id' => $user->id])->where('doc', '=', null)->get();
            // dd($service);
            return view('users.onboarding.uploads', ['service'=> $service]);
        }else{
            return redirect('home');
        }
    }

    public function CandidateFileStore(Request $request){  
  

        foreach($request->images as $key => $image){
            $name =  $image->getClientOriginalName();
            $fileName = \pathinfo($name, PATHINFO_FILENAME);
            $ext =  $image->getClientOriginalExtension();
            $exts =  ['pdf', 'jpg', 'jpeg', 'png'];
            if(!in_array(strtolower($ext), $exts)){
                Session::flash('alert', 'error');
                Session::flash('message', 'File Format not Accepted, try again');
                return redirect()->back();
            }
            $fileName = $fileName.'.'.$ext;
            $upload =  CandidateVerification::where(['id' => $request->candidate[$key], 'user_id' => auth()->user()->id ])->first();
            if($upload->doc == null){
            $image->move('assets/candidates', $fileName);
            $upload->update([
                'doc' => $fileName
            ]);
            $alert = 'success';
            $message = 'Files uploaded Successfully';
           
        }else{
            $alert = 'error';
            $message = 'you cannot replace  '.$upload->doc. ', file already exist';
           
        }
        }
        if($upload){
            Session::flash('alert', $alert);
            Session::flash('message', $message);
            return redirect()->back();
        }else{
        Session::flash('alert', 'error');
        Session::flash('message', 'File upload failed, try again');
        return redirect()->back();
        }

    }

    public function viewCandidateDocuments(){
        $documents = CandidateVerification::where('user_id', auth()->user()->id)->get();
        return view('users.onboarding.index', ['service'=> $documents]);
    }
}
