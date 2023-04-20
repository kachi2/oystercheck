<?php 
namespace App\Traits;
use App\Models\IdentityVerification;
use App\Models\Transaction;
use App\Models\ActivityLog;

trait VerifyIndex{
    
    public function IdentityIndex(){
        $data['success'] = IdentityVerification::where(['status'=>'found'])->get();
        $data['failed'] = IdentityVerification::where(['status'=>'not-found'])->get();
        $data['pending'] = IdentityVerification::where(['status'=>null])->get();
        $data['logs'] = IdentityVerification::latest()->take(5)->get();
        $data['recents'] = IdentityVerification::latest()->take(5)->get();
        $data['transactions'] = Transaction::latest()->get();
        $data['activity'] = ActivityLog::take(10)->latest()->get();
        return $data;
    }
 
}

