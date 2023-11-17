<?php 
namespace App\Traits;
use App\Models\IdentityVerification;
use App\Models\Transaction;
use App\Models\ActivityLog;

trait VerifyIndex{
    
    public function IdentityIndex(){

        $data['success'] = IdentityVerification::where(['status'=>'found', 'is_sandbox' => 1])->get();
        $data['failed'] = IdentityVerification::where(['status'=>'not-found', 'is_sandbox' => 1])->get();
        $data['pending'] = IdentityVerification::where(['status'=>'null',  'is_sandbox' => 1])->get();
        $data['logs'] = IdentityVerification::where(['is_sandbox' => 1])->latest()->take(5)->get();;
        $data['recents'] = IdentityVerification::where(['is_sandbox' => 1])->latest()->take(5)->get();
        $data['activity'] = ActivityLog::take(10)->latest()->get();
        $data['transactions'] = Transaction::latest()->get();
        $data['activity'] = ActivityLog::take(10)->latest()->get();
        return $data;
    }
 
}

