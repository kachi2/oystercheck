<?php

namespace App\Http\Controllers;

use App\Mail\UserAccount;
use App\Mail\UserOnboard;
use App\Models\CandidateService;
use App\Models\User;
use App\Models\Candidate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\CandidateVerification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    //
    public function RedirectUser(){
        if(auth()->user()->user_type == 3)
        return redirect()->route('admin.index');
    }

    public function GeneratePassword($name){
        $pass = substr($name, 0, 5).rand(111,999);
        return $pass;
    }
    
    public function CandidateIndex(){
       $this->RedirectUser();
        $candidate['candidate'] = Candidate::where('client_id', auth()->user()->id)->get();
        $candidate['pending'] = Candidate::where(['client_id' => auth()->user()->id, 'status'=>'pending'])->get();
        $candidate['verified'] = Candidate::where(['client_id' => auth()->user()->id, 'status'=>'approved'])->get();
        $candidate['rejected'] = Candidate::where(['client_id'=> auth()->user()->id, 'status'=>'rejected'])->get();
        return view('users.candidates.index', $candidate);
    }

    public function CadidateCreate(){
        $this->RedirectUser();
        $candidate['candidates'] = Candidate::where('client_id', auth()->user()->id)->get();
        $candidate['pending'] = Candidate::where(['client_id' => auth()->user()->id, 'status'=>'pending'])->get();
        $candidate['verified'] = Candidate::where(['client_id' => auth()->user()->id, 'status'=>'approved'])->get();
        $candidate['rejected'] = Candidate::where(['client_id'=> auth()->user()->id, 'status'=>'rejected'])->get();
       
        return view('users.candidates.create', $candidate)
        ->with('verifications', CandidateService::get());
    }

    public function CadidateStore(Request $request){
        //check if email exist 
        $check = User::where('email', $request->email)->first();
        if($check){
            Session::flash('alert', 'error');
            Session::flash('message', 'A User with this email already exist, if you forgot the password, contact the Administrator.');
            return redirect()->back();
        }
        //create user account
        if(isset($request->name)){
            $data['name'] = $request->name;
           }
           if(isset($request->email)){
            $data['email'] = $request->email;
           }
           $password =$this->GeneratePassword($request->name);
           $data['password'] = Hash::make($password);
           $data['user_type'] = 1;
           $data['role_id'] = 1;
          $create = User::create($data);
          if($create){
          $data['password']  = $password;
          Mail::to($request->email)->send( new UserAccount($data));
          Mail::to($request->email)->send( new UserOnboard($data));
          sleep(5);
          $candidate= User::latest()->first();
          Candidate::create([
            'user_id' => $candidate->id,
            'client_id' => auth()->user()->id,
            'phone' => $request->phone,
            'state'=>$request->state,
            'city' => $request->city,
            'address'=>$request->address,
            'country' => $request->country,
            'company' => $request->company,
            'email_status' => 'Email Sent',
            'status' => 'not verified'
          ]);
          foreach($request->verifyServices as $key => $value){
            CandidateVerification::create([
                'user_id' => $candidate->id,
                'client_id' => auth()->user()->id,
                'candidate_services_id' => $value,
                'status' => 'pending',
                'is_paid' => '0',
                
              ]);
          }
        Session::flash('alert', 'success');
        Session::flash('message', 'Candidate Created Successfully');
        return redirect()->back();
          }else{
              Session::flash('alert', 'error');
              Session::flash('message', 'Unable to create candidate, please try again');
              return redirect()->back();
          }
    }

    public function CandidateDetails($id){
        $this->RedirectUser();
        $data['pending'] = Candidate::where(['client_id' => auth()->user()->id, 'status'=>'pending'])->get();
        $data['candidates'] = Candidate::where('client_id', auth()->user()->id)->get();
        $data['verified'] = Candidate::where(['client_id' => auth()->user()->id, 'status'=>'verified'])->get();
        $data['rejected'] = Candidate::where(['client_id'=> auth()->user()->id, 'status'=>'rejected'])->get();
        $candidate = Candidate::where('id', decrypt($id))->first();
        $data['candidate'] = Candidate::where('user_id', $candidate->user_id)->first();
        $data['services'] = CandidateVerification::where('user_id', $candidate->user_id)->get();
        return view('users.candidates.details', $data);
    }


    public function CandidateFileUpload(){
        $this->RedirectUser();
        $user = User::where('id', auth()->user()->id)->first();
                Candidate::where('user_id', $user->id)->update(['email_status' => 'Email Read']);
        $service = CandidateVerification::where('user_id', $user->id)->get();
        return view('users.onboarding.uploads', ['service'=> $service]);
    }

    public function CandidateFileStore(Request $request){  
        foreach($request->images as $key => $image){
            $name =  $image->getClientOriginalName();
            $fileName = \pathinfo($name, PATHINFO_FILENAME);
            $ext =  $image->getClientOriginalExtension();
            $fileName = $fileName.'.'.$ext;
            $image->move('assets/candidates', $fileName);
            $upload =  CandidateVerification::where('id', $request->candidate[$key])
            ->update([
                'doc' => $fileName
            ]);
        }
        if($upload){
            Session::flash('alert', 'success');
            Session::flash('message', 'Files uploaded successfully');
            return redirect()->back();
        }else{
        Session::flash('alert', 'error');
        Session::flash('message', 'File upload failed, try again');
        return redirect()->back();
        }

    }

    public function candidateHomePage(){
        $this->RedirectUser();
        $service = CandidateVerification::where('user_id', auth()->user()->id)->get();
        return view('users.onboarding.index', ['service'=> $service]);
        
    }
   
}
