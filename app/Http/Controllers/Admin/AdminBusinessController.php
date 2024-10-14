<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Verification;
use App\Models\CacVerification;
use App\Models\TinVerification;
use App\Models\BusinessVerification;
use App\Models\BusinessVerificationDetail;

class AdminBusinessController extends Controller
{
    //

    public function businessIndex($slug){
        $slug = Verification::where(['slug' => $slug])->first();
        if ($slug) { 
            if ($slug->slug == 'cac') {
                $data['slug'] = $slug;
                $data['success'] = CacVerification::where(['status' => 'found', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();
                $data['failed'] = CacVerification::where(['status' => 'not_found', 'verification_id' => $slug->id,  'is_sandbox' => $this->sandboxData()])->get();
                $data['pending'] = CacVerification::where(['status' => 'pending', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();
                $data['logs'] = CacVerification::where([ 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->latest()->get();
                return view('admin.business.index', $data);
            } elseif ($slug->slug == 'tin') {
                $data['slug'] = $slug;
                $data['success'] = TinVerification::where(['status' => 'found', 'verification_id' => $slug->id,'is_sandbox' => $this->sandboxData()])->get();
                $data['failed'] = TinVerification::where(['status' => 'not_found', 'verification_id' => $slug->id,  'is_sandbox' => $this->sandboxData()])->get();
                $data['pending'] = TinVerification::where(['status' => 'pending', 'verification_id' => $slug->id,  'is_sandbox' => $this->sandboxData()])->get();
                $data['logs'] = TinVerification::where(['verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->latest()->get();
                return view('admin.business.index', $data);
            } else {
            }
        }
    }


    public function businessDetails($slug,$verification_id){
        $verification_id = decrypt($verification_id);
        if($slug == 'cac'){
            $cac_verification = CacVerification::where(['id'=>$verification_id,  'is_sandbox' => $this->sandboxData() ])->first();
            if($cac_verification){
                return view('users.business.reports.cac_report', ['cac_verification'=>$cac_verification]);
            }
        }elseif($slug == 'tin'){
            $tin_verification = TinVerification::where(['id'=>$verification_id, 'is_sandbox' => $this->sandboxData()])->first();
            if($tin_verification){
                return view('users.business.reports.tin_report', ['tin_verification'=>$tin_verification]);
            }
        }else{

        }
    }

public function sandboxData() {
    return 0;
}
}
