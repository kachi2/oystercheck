<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Verification;
use App\Models\{BankVerification, BvnVerification,NipVerification, PvcVerification, NinVerification, NdlVerification, PhoneVerification, ImageVerification};
use App\Models\IdentityVerification;

class AdminIdentityController extends Controller
{
    // 
    public function getVerify($slug){
        $user = auth()->user();
        $slug = Verification::where('slug', $slug)->first();
        if ($slug) {
            $data['slug'] = $slug;
            if ($slug->slug == 'bvn') {
                $data['success'] = BvnVerification::where(['status' => 'found', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();
                $data['failed'] = BvnVerification::where(['status' => 'not_found', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();
                $data['pending'] = BvnVerification::where(['status' => 'pending', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();         
                $data['logs'] = BvnVerification::where([ 'verification_id' => $slug->id, 'is_sandbox' => 1])->latest()->get();
                return view('admin.verifications.verify', $data);
            } elseif ($slug->slug == 'nip') {
                $data['success'] = NipVerification::where(['status' => 'found', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();
                $data['failed'] =  NipVerification::where(['status' => 'not_found', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();
                $data['pending'] = NipVerification::where(['status' => 'pending', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();          
                $data['logs'] = NipVerification::where([ 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->latest()->get();
                return view('admin.verifications.verify', $data);
            } elseif ($slug->slug == 'nin') {
                $data['success'] = NinVerification::where(['status' => 'found', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();
                $data['failed'] =  NinVerification::where(['status' => 'not_found', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();
                $data['pending'] = NinVerification::where(['status' => 'pending', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();           
                $data['logs'] = NinVerification::where(['verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->latest()->get();
                return view('admin.verifications.verify', $data);
            } elseif ($slug->slug == 'pvc') {
                $data['success'] = PvcVerification::where(['status' => 'found', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();
                $data['failed'] =  PvcVerification::where(['status' => 'not_found', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();
                $data['pending'] = PvcVerification::where(['status' => 'pending', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();
                $data['logs'] = PvcVerification::where([ 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->latest()->get();
                return view('admin.verifications.verify', $data);
            } elseif ($slug->slug == 'ndl') {
                $data['success'] = NdlVerification::where(['status' => 'found', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();
                $data['failed'] =  NdlVerification::where(['status' => 'not_found', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();
                $data['pending'] = NdlVerification::where(['status' => 'pending', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();
                $data['logs'] = NdlVerification::where([ 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->latest()->get();
                return view('admin.verifications.verify', $data);
            } elseif ($slug->slug == 'compare-images') {
                $data['success'] = ImageVerification::where(['status' => 'found', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();
                $data['failed'] =  ImageVerification::where(['status' => 'not_found', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();
                $data['pending'] = ImageVerification::where(['status' => 'pending', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();
                $data['logs'] = ImageVerification::where([ 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->latest()->get();
                return view('admin.verifications.verify', $data);
            } elseif ($slug->slug == 'bank-account') {
                $data['success'] = BankVerification::where(['status' => 'found', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();
                $data['failed'] =  BankVerification::where(['status' => 'not_found', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();
                $data['pending'] = BankVerification::where(['status' => 'pending', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();
                $data['logs'] = BankVerification::where(['verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->latest()->get();
                return view('admin.verifications.verify', $data);
            } elseif ($slug->slug == 'phone-number') {
                $data['success'] = PhoneVerification::where(['status' => 'found', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();
                $data['failed'] =  PhoneVerification::where(['status' => 'not_found', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();
                $data['pending'] = PhoneVerification::where(['status' => 'pending', 'verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->get();
                $data['logs'] = PhoneVerification::where(['verification_id' => $slug->id, 'is_sandbox' => $this->sandboxData()])->latest()->get();
                return view('admin.verifications.verify', $data);
            }
        } else {
            return back();
        }
    }  

    public function verificationReport($slug, $verificationId){
        $verificationId = decrypt($verificationId);
        $slug = Verification::where('slug', $slug)->first();
        $data['slug'] = $slug;
        if ($slug) {
            if ($slug->slug == 'bvn') { 
                $bvn_verification = BvnVerification::where(['id'=>$verificationId])->first();
                if($bvn_verification){
                    return view('admin.verifications.identity_reports.bvn_report', ['bvn_verification'=>$bvn_verification]);
                }
            } elseif ($slug->slug == 'nip') {
                $nip_verification = NipVerification::where(['id'=>$verificationId])->first();
                if($nip_verification){ 
                    return view('admin.verifications.identity_reports.nip_report', ['nip_verification'=>$nip_verification]);
                }
            } elseif ($slug->slug == 'nin') {
                $nin_verification = NinVerification::where(['id'=>$verificationId])->first();

                if($nin_verification){
                    return view('admin.verifications.identity_reports.nin_report', ['nin_verification'=>$nin_verification]);
                }
            } elseif ($slug->slug == 'pvc') {
                $pvc_verification = PvcVerification::where(['id'=>$verificationId])->first();

                if($pvc_verification){
                    return view('admin.verifications.identity_reports.pvc_report', ['pvc_verification'=>$pvc_verification]);
                }
            } elseif ($slug->slug == 'ndl') {
                $ndl_verification = NdlVerification::where(['id'=>$verificationId])->first();

                if($ndl_verification){
                    return view('admin.verifications.identity_reports.ndl_report', ['ndl_verification'=>$ndl_verification]);
                }
            } elseif ($slug->slug == 'compare-images') {
                $image_verification = ImageVerification::where(['id'=>$verificationId])->first();

                if($image_verification){
                    return view('admin.verifications.identity_reports.image_report', ['image_verification'=>$image_verification]);
                }
            } elseif ($slug->slug == 'bank-account') {
                $bank_verification = BankVerification::where(['id'=>$verificationId])->first();

                if($bank_verification){
                    return view('admin.verifications.identity_reports.bank_report', ['bank_verification'=>$bank_verification]);
                }
            } elseif ($slug->slug == 'phone-number') {
                $phone_verification = PhoneVerification::where(['id'=>$verificationId])->first();
                if($phone_verification){
                    return view('admin.verifications.identity_reports.phone_report', ['phone_verification'=>$phone_verification]);
                }
            }
        } else {

        }
    }

    public function sandboxData(){
        return 0;
    }
}
