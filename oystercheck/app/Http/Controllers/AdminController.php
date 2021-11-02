<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AddressVerification;
use App\Models\ActivityLog;
use App\Models\CandidateVerification;
use App\Models\IdentityVerification;
use App\Models\BusinessVerification;
use App\Models\BusinessVerificationDetail;
use App\Models\AddressVerificationDetail;
use App\Models\IdentityVerificationDetail;
use App\Models\Transaction;
use App\Models\Admin;
use App\Models\CandidateService;
use App\Models\FundRequest;
use App\Models\Verification;
use App\Models\Role;
use App\Models\Wallet;
use App\Models\Notification;
use App\Models\Business;
use App\Models\Candidate;
use App\Models\Client;
use App\Models\Profile;
use App\Models\Service;
use App\Models\UserActivity;

class AdminController extends Controller
{
    //

    public function __construct(User $user )
    {
        $user = request()->user;
        $this->middleware('admin');
    }

    public function Index(){
        $data['success'] = IdentityVerification::where(['status'=>'successful'])->get();
        $data['failed'] = IdentityVerification::where(['status'=>'failed'])->get();
        $data['pending'] = IdentityVerification::where(['status'=>'pending'])->get();
        $data['logs'] = IdentityVerification::latest()->get();
        $data['recents'] = IdentityVerification::latest()->take(5)->get();
        $data['transactions'] = Transaction::latest()->take(5)->get();
        $data['activity'] = ActivityLog::take(10)->latest()->get();
        return view('admin.verifications.index', $data);
    }

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
