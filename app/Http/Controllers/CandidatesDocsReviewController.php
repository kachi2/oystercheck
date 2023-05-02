<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\CandidateService;
use App\Models\CandidateVerification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Verification;
use Illuminate\Support\Facades\Auth;

class CandidatesDocsReviewController extends Controller
{
    //

    public function __construct(Auth $user)
    {    
        
        return $this->middleware('clients');
    }


    public function ApproveDoc($service){

      //  dd(decrypt($service));
        if(isset($service)){
            $candidate = CandidateVerification::where('id', decrypt($service))->first();
          if($candidate->doc == null){
            Session::flash('alert', 'error');
            Session::flash('message', 'Candidate document is empty');
            return back();
          }
        if($candidate->status == 'approved' || $candidate->status == 'failed' ) return back();
        $candidate->update(['status' => 'approved']);
        Session::flash('alert', 'success');
        Session::flash('message', 'Document approved successfully');
        return back();
        }
        return back();
    }

    public function DisapproveDoc($service){

        if(isset($service)){
            $candidate = CandidateVerification::where('id', decrypt($service))->first();
          if($candidate->doc == null){
            Session::flash('alert', 'error');
            Session::flash('message', 'Candidate document is empty');
            return back();
          }
        if($candidate->status == 'approved' || $candidate->status == 'failed' ) return back();
    
        $candidate->update(['status' => 'failed']);
        Session::flash('alert', 'error');
        Session::flash('message', 'Document Rejected successfully');
        return back();
        }
        return back();
    }

    public function RequestVerification($id){
      $candidate = CandidateVerification::whereId(decrypt($id))->first();
      return view('users.candidates.checks', [
       'candidate' => $candidate,
        'slug' => CandidateVerification::where('id', $candidate->candidate_services_id)->first()

      ]);
    }

}
