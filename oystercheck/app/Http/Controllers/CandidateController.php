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

    public function GeneratePassword($name){
        $pass = substr($name, 0, 5).rand(111,999);
        return $pass;
    }
    public function CandidateIndex(){
        $candidate['candidate'] = Candidate::where('client_id', auth()->user()->id)->get();
        $candidate['verified'] = Candidate::where(['client_id' => auth()->user()->id, 'status'=>'verified'])->get();
        $candidate['pending'] = Candidate::where(['client_id'=> auth()->user()->id, 'status'=>'pending'])->get();
        return view('users.candidates.index', $candidate);
    }

    public function CadidateCreate(){
        return view('users.candidates.create')
        ->with('verifications', CandidateService::get());
    }

    public function CadidateStore(Request $request){

        //check if email exist 
        $check = User::where('email', $request->email)->first();
        if($check){
            Session::flash('alert', 'error');
            Session::flash('message', 'The email is already registered');
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
        
        $data['candidates'] = Candidate::where('client_id', auth()->user()->id)->get();
        $data['verified'] = Candidate::where(['client_id' => auth()->user()->id, 'status'=>'verified'])->get();
        $data['pending'] = Candidate::where(['client_id'=> auth()->user()->id, 'status'=>'pending'])->get();
        $candidate = Candidate::where('id', decrypt($id))->first();
        $data['candidate'] = Candidate::where('user_id', $candidate->user_id)->first();
        $data['services'] = CandidateVerification::where('user_id', $candidate->user_id)->get();

        return view('users.candidates.details', $data);
    }


    public function CandidateFileUpload(){
        $user = User::where('id', auth()->user()->id)->first();
        $service = CandidateVerification::where('user_id', $user->id)->get();
        return view('users.onboarding.uploads', compact('service', $service));
    }

    public function CandidateFileStore(Request $request){
        //dd($request->all());
        foreach($request->all() as $key => $files){
           $upload =  CandidateVerification::where('id', $key)
            ->update([
                'doc' => $files
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

        $service = CandidateVerification::where('user_id', auth()->user()->id)->get();
        return view('users.onboarding.index', compact('service', $service));
        
    }
   
}