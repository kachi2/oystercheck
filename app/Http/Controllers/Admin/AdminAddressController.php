<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Verification;
use App\Models\AddressVerification;

class AdminAddressController extends Controller
{
    //
 
    public function AddressIndex($slug){
        $slug = Verification::where(['slug' => $slug])->first();
        $data['slug'] = Verification::where(['slug' => $slug->slug])->first();
        $data['success'] = AddressVerification::where(['status'=>'successful', 'verification_id'=>$slug->id])->get();
        $data['failed'] = AddressVerification::where(['status'=>'failed', 'verification_id'=>$slug->id])->get();
        $data['pending'] = AddressVerification::where(['status'=>'pending', 'verification_id'=>$slug->id])->get();          
        $data['logs'] = AddressVerification::where(['verification_id'=>$slug->id])->latest()->get();
        return view('admin.address.index', $data);
    } 
}
