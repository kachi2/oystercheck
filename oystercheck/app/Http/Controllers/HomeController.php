<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Verification;
use App\Models\Wallet;
use App\Models\IdentityVerification;
use App\Models\FieldInput;
use App\Models\IdentityVerificationDetail;
use App\Models\Transaction;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $data['success'] = IdentityVerification::where(['status'=>'successful',  'user_id'=> $user->id])->get();
        $data['failed'] = IdentityVerification::where(['status'=>'failed', 'user_id'=> $user->id])->get();
        $data['pending'] = IdentityVerification::where(['status'=>'pending', 'user_id'=> $user->id])->get();
        $data['wallet']= Wallet::where('user_id', $user->id)->first();
        $data['logs'] = IdentityVerification::where(['user_id' => $user->id])->latest()->get();
        $data['recents'] = IdentityVerification::where(['user_id' => $user->id])->latest()->take(5)->get();
        $data['transactions'] = Transaction::latest()->take(5)->get();
        return view('users.home', $data);
    }

    public function VerifyIndex($slug){
        $user = auth()->user();
        $slug = strtoupper($slug);
        $slug = Verification::where('slug', $slug)->first();
        $data['slug'] = Verification::where('slug', $slug->slug)->first();
        $data['success'] = IdentityVerification::where(['status'=>'successful', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
        $data['failed'] = IdentityVerification::where(['status'=>'failed', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
        $data['pending'] = IdentityVerification::where(['status'=>'pending', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
        $data['fields'] = FieldInput::where(['slug'=>$slug->slug])->get();
        $data['wallet']= Wallet::where('user_id', $user->id)->first();
        $data['verified'] = IdentityVerificationDetail::where(['user_id'=>$user->id])->latest()->first();           
        $data['logs'] = IdentityVerification::where(['user_id' => $user->id, 'verification_id'=>$slug->id])->latest()->get();
        return view('users.individual.identityVerify', $data);
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
}
