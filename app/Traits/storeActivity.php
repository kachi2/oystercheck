<?php 
namespace App\Traits;
use Illuminate\Http\Request;
use App\Models\ActivityLog;

trait storeActivity {


    public function StoreActivity(Request $request, $user)
    {
        ActivityLog::create([
            'user_id' => $user->id,
            'activity' => $request->activity,
            'ip_address' => $request->Ip(),
            'user_agent' => $request->userAgent(),
        ]);
    }



}