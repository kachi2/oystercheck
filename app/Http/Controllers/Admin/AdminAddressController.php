<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Verification;
use App\Models\AddressVerification;
use App\Models\AddressVerificationDetail;

class AdminAddressController extends Controller
{ 
    // 
    public function AddressIndex($slug){
        $slug = Verification::where(['slug' => $slug])->first();
        $data['slug'] = Verification::where(['slug' => $slug->slug])->first();
    
        $data['success'] = AddressVerification::where(['status'=>'completed', 'verification_id'=>$slug->id])->get();
        $data['failed'] = AddressVerification::where(['status'=>'failed', 'verification_id'=>$slug->id])->get();
        $data['pending'] = AddressVerification::where(['status'=>'pending', 'verification_id'=>$slug->id])->get();          
        $data['logs'] = AddressVerification::where(['verification_id'=>$slug->id])->latest()->get();
        return view('admin.address.index', $data); 
    } 

    public function AddressDetails($id){ 
        $address = AddressVerification::where('id', decrypt($id))->first();
        $data['addressVerifications'] = AddressVerification::all();
        $data['addressVerification'] = AddressVerification::where('id', $address->id)->first();
        $data['addressVerificationDetail'] = AddressVerificationDetail::where('address_verification_id', $address->id)->first();
        
        $data['agent'] = $data['addressVerificationDetail'] && $data['addressVerificationDetail']->agent 
        ? json_decode($data['addressVerificationDetail']->agent, true) 
        : null;

        $data['images'] = $data['addressVerificationDetail'] && $data['addressVerificationDetail']->images 
        ? json_decode($data['addressVerificationDetail']->images, true) 
        : [];
        return view('admin.address.details', $data); 
    }
}
