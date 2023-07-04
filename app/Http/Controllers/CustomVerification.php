<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CandidateVerification;
use Illuminate\Support\Facades\Session;


class CustomVerification extends Controller
{
    //


    public function RequestVerification($id)
    {
      $candidate = CandidateVerification::whereId(decrypt($id))->first();
  
      // dd($candidate);
      return view('users.candidates.checks', [
        'candidate' => $candidate,
        'slug' => CandidateVerification::where('id', $candidate->candidate_services_id)->first()
  
      ]);
    }

    public function RequestVerificationStore(Request $request, $id){
      $data = CandidateVerification::where(['id' => decrypt($id), 'is_adminReview' => 0])->first();
      if($data){
        $data->update(['is_adminReview' => 1]);
        Session::flash('alert', 'success');
        Session::flash('message', 'Request Sent Successfully');
        return back();
      }
      Session::flash('alert', 'error');
      Session::flash('message', 'Request failed, please wait while we complete previous request');
      return back();
      
    }
}
