<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Verification;
use App\Models\IdentityVerification;

class AdminIdentityController extends Controller
{
    //
    public function getVerify($slug){
        $slug = strtoupper($slug);
        $slug = Verification::where('slug', $slug)->first();
        $data['slug'] = Verification::where('slug', $slug->slug)->first();
        $data['success'] = IdentityVerification::where(['status'=>'successful', 'verification_id'=>$slug->id])->get();
        $data['failed'] = IdentityVerification::where(['status'=>'failed', 'verification_id'=>$slug->id])->get();
        $data['pending'] = IdentityVerification::where(['status'=>'pending', 'verification_id'=>$slug->id])->get();           
        $data['logs'] = IdentityVerification::where(['verification_id'=>$slug->id])->latest()->get();
        return view('admin.verifications.verify', $data);
    }  
}
