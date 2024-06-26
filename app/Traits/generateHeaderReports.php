<?php

namespace App\Traits;
use App\Models\User;
use App\Models\BusinessVerification;
use App\Models\FieldInput;
use App\Models\BusinessVerificationDetail;
use App\Models\Verification;
use App\Models\IdentityVerificationDetail;
use App\Models\Wallet;
use App\Models\IdentityVerification;
use App\Models\AddressVerification;
use App\Models\AddressVerificationDetail;
use App\Models\States;
use App\Traits\sandbox;

Trait generateHeaderReports
{
    use sandbox;


public function generateHeaderReports($slug){
    $user = User::where('id', auth()->user()->id)->first();
    $slug = Verification::where(['slug' => $slug->slug])->first();
    $data['slug'] = Verification::where(['slug' => $slug->slug])->first();
    $data['success'] = BusinessVerification::where(['status'=>'successful', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
    $data['failed'] = BusinessVerification::where(['status'=>'failed', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
    $data['pending'] = BusinessVerification::where(['status'=>'pending', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
    $data['fields'] = FieldInput::where(['slug'=>$slug->slug])->get();
    $data['wallet']= Wallet::where('user_id', $user->id)->first();
   // $data['verified'] = BusinessVerificationDetail::where(['user_id'=>auth()->user()->id, 'slug'=>$slug->slug])->latest()->first();           
    $data['logs'] = BusinessVerification::where(['user_id' => $user->id, 'verification_id'=>$slug->id])->latest()->get();
    return $data;
}

    public function generateIdentityReport($slug){
        $user = auth()->user();;
        $data['slug'] = Verification::where('slug', $slug->slug)->first();
        $data['success'] = IdentityVerification::where(['status'=>'successful', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
        $data['failed'] = IdentityVerification::where(['status'=>'failed', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
        $data['pending'] = IdentityVerification::where(['status'=>'pending', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
        $data['fields'] = FieldInput::where(['slug'=>$slug->slug])->get();
        $data['wallet']= Wallet::where('user_id', $user->id)->first();
       // $data['verified'] = IdentityVerificationDetail::where(['user_id'=>auth()->user()->id, 'slug'=>$slug->slug])->latest()->first();           
        $data['logs'] = IdentityVerification::where(['user_id' => $user->id, 'verification_id'=>$slug->id])->latest()->get(); 
        return $data;
    }

    public function generateAddressReport($slug){

        $user = User::where('id', auth()->user()->id)->first();
        $slug = Verification::where(['slug' => $slug])->first();
        $address_verifications = AddressVerification::where(['user_id' => $user->id, 'verification_id'=>$slug->id, 'is_sandbox' => $this->sandbox()])->latest()->get();
        // dd($address_verifications[0]?->user_id);

        $data['verifications'] = $address_verifications;
        $data['slug'] = $slug;
        if(count($address_verifications) > 0){
        $data['address_verifications'] = $address_verifications->load('addressVerificationDetail');
        $data['results'] = AddressVerificationDetail::where(['address_verification_id'=>$address_verifications[0]?->id, 'status' => 'completed'])->count();
         }
        $data['fields'] = FieldInput::where(['slug'=>'candidate'])->get();
        $data['states'] = States::get();
        $data['wallet']= Wallet::where('user_id', $user->id)->first();
    return $data;   
    }

    public function generateCreateCandidateData($slug){
        $user = User::where('id', auth()->user()->id)->first();
        $slug = Verification::where(['slug' => $slug])->first();
        $data['slug'] = $slug;
        // $data['success'] = AddressVerification::where(['status'=>'successful', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
        // $data['failed'] = AddressVerification::where(['status'=>'failed', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
        // $data['pending'] = AddressVerification::where(['status'=>'pending', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
        $data['fields'] = FieldInput::where(['slug'=>'candidate'])->get();
        $data['wallet']= Wallet::where('user_id', $user->id)->first();
    //    $data['logs'] = AddressVerification::where(['user_id' => $user->id, 'verification_id'=>$slug->id])->latest()->get();
    return $data;   
    }

    public function generateAddressReportVerify($slug){
        $user = User::where('id', auth()->user()->id)->first();
        $slug = Verification::where(['slug' => $slug])->first();
        $data['slug'] = $slug;
        // $data['success'] = AddressVerification::where(['status'=>'successful', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
        // $data['failed'] = AddressVerification::where(['status'=>'failed', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
        // $data['pending'] = AddressVerification::where(['status'=>'pending', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
        $data['fields'] = FieldInput::where(['slug'=>$slug->slug])->get();
        $data['wallet']= Wallet::where('user_id', $user->id)->first();
        // $data['logs'] = AddressVerification::where(['user_id' => $user->id, 'verification_id'=>$slug->id])->latest()->get();
    return $data;   
    }
}


