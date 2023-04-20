<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Verification;
use App\Models\BusinessVerification;
use App\Models\BusinessVerificationDetail;

class AdminBusinessController extends Controller
{
    //

    public function businessIndex($slug){
        $slug = Verification::where(['slug' => $slug])->first();
        $data['slug'] = Verification::where(['slug' => $slug->slug])->first();
        $data['success'] = BusinessVerification::where(['status'=>'successful', 'verification_id'=>$slug->id])->get();
        $data['failed'] = BusinessVerification::where(['status'=>'failed', 'verification_id'=>$slug->id])->get();
        $data['pending'] = BusinessVerification::where(['status'=>'pending', 'verification_id'=>$slug->id])->get();          
        $data['logs'] = BusinessVerification::where(['verification_id'=>$slug->id])->latest()->get();
        return view('admin.business.index', $data);
    }


    public function businessDetails($id){
        $slug = BusinessVerification::where('id', decrypt($id))->first();
        $data['slug'] = BusinessVerification::where('id', decrypt($id))->first();
        $data['success'] = BusinessVerification::where(['status'=>'successful', 'verification_id'=>$slug->verification_id])->get();
        $data['failed'] = BusinessVerification::where(['status'=>'failed', 'verification_id'=>$slug->verification_id])->get();
        $data['pending'] = BusinessVerification::where(['status'=>'pending', 'verification_id'=>$slug->verification_id])->get();
        $data['logs'] = BusinessVerification::where([ 'verification_id'=>$slug->verification_id])->latest()->get();
        $data['verified'] = BusinessVerificationDetail::where(['service_ref' => $slug->service_ref])->latest()->first();
      return view('admin.business.details', $data);
    }

}
