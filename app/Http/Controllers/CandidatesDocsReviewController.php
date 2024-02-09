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


  public function ApproveDoc(Request $request, $service)
  {


      // dd(decrypt($service));
    if (isset($service)) {
      $candidate = CandidateVerification::where('id', decrypt($service))->first();
      if ($candidate->doc == null) {
        Session::flash('alert', 'error');
        Session::flash('message', 'Candidate document is empty');
        return back();
      }
      if ($candidate->status == 'approved' || $candidate->status == 'failed') return back();
      if ($request->file('image')) {
        $image =  $request->file('image');
        $name =  $image->getClientOriginalName();
        $fileName = \pathinfo($name, PATHINFO_FILENAME);
        $ext =  $image->getClientOriginalExtension();
        $fileName = $fileName . '.' . $ext;
        $image->move('assets/candidates', $fileName);
      }


      $candidate->update(['status' => 'approved', 'final_doc' => $fileName, 'review' => $request->note]);
      Session::flash('alert', 'success');
      Session::flash('message', 'Document approved successfully');
      return back();
    }
    return back();
  }

  public function DisapproveDoc(Request $request, $service)
  {

    if (isset($service)) {
      $candidate = CandidateVerification::where('id', decrypt($service))->first();
      if ($candidate->doc == '' || $candidate->doc ==  null) {
        Session::flash('alert', 'error');
        Session::flash('message', 'Candidate document is empty');
        return back();
      }
      if ($candidate->status == 'approved' || $candidate->status == 'failed') return back();
      if($request->reupload == '1'){
        $candidate->update([
          'status' => 'retry',
          'final_doc' => null,
          'doc' => null,
          'review' => $request->note
          ]);
      }else{
        $candidate->update([
          'status' => 'failed',
          'final_doc' => $candidate->doc,
          'review' => $request->note
          ]);
      }
    
      Session::flash('alert', 'error');
      Session::flash('message', 'Document Rejected successfully');
      return back();
    }
    return back();
  }

  public function ApproveCandidate($user_id){
    $candidate = Candidate::whereUserId(decrypt($user_id))->first();
    if($candidate){
      $status = [];
      $check = CandidateVerification::where(['user_id' => $candidate->user_id])->where(['status' => 'pending'])->orwhere(['status' => 'failed'])->orWhere(['status' => null])->get();
    
      if(count($check) > 0){
        Session::flash('alert', 'error');
        Session::flash('message', 'Please approve all documents before proceeding with this step, some documents are either pending or cancelled');
        return back();
      }
        $candidate->update([
          'status' => 'verified'
        ]);
        Session::flash('alert', 'success');
        Session::flash('message', 'Weldone!!!, Candidate Approved successfully');
        return back();
    }
  }


  public function DisApproveCandidate($user_id){
    $candidate = Candidate::whereUserId(decrypt($user_id))->first();
    if($candidate){
      $check = CandidateVerification::where(['user_id' => $candidate->user_id])->where(['status' => 'pending'])->orwhere(['status' => 'approved'])->orWhere(['status' => null])->get();
      if(count($check) > 0){
        Session::flash('alert', 'error');
        Session::flash('message', 'Please reject all documents before proceeding with this step, some documents are either pending or approved');
        return back();
      }
      // $services = CandidateVerification::whereUserId($candidate->user_id)->get();
      // foreach($services as $service){
      //   array_push($status, $service['status']);
      // }

      // if(count(array_unique($status)) > 1){
      //   Session::flash('alert', 'error');
      //   Session::flash('message', 'Please reject all documents before proceeding with this step, some documents are either pending or approved');
      //   return back();
      // }else{

        $candidate->update([
          'status' => 'rejected'
        ]);
        Session::flash('alert', 'warning');
        Session::flash('message', 'Weldone!!!, Candidate Rejected successfully');
        return back();
      } 
    // }
  }

}
