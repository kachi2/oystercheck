<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Verification;
use App\Models\CandidateVerification;
use Illuminate\Support\Facades\Session;

class AdminPaymentController extends Controller
{
    //

    public function paymentUpdate(Request $request, $id){
        $status = CandidateVerification::where('id', decrypt($id))->first();
        if($request->payment == 1 ){
            CandidateVerification::where('id', $status->id)
                ->update([
                    'is_paid' => 1
                ]);
            Session::flash('alert', 'success');
            Session::flash('message', 'Document Marked as Paid');
            return back();
        }else if($request->payment == 2){
            CandidateVerification::where('id', $status->id)
            ->update([
                'is_paid' => 2
            ]);
        Session::flash('alert', 'warning');
        Session::flash('message', 'Document Marked as Not Paid');
            return back();
        }else{
            Session::flash('alert', 'info');
            Session::flash('message', 'No changes made, check your request and try again');
            return back();

        }
    }
}
