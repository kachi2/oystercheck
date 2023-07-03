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
          'status' => 'failed',
          'final_doc' => null,
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

  public function RequestVerification($id)
  {
    $candidate = CandidateVerification::whereId(decrypt($id))->first();
    return view('users.candidates.checks', [
      'candidate' => $candidate,
      'slug' => CandidateVerification::where('id', $candidate->candidate_services_id)->first()

    ]);
  }
}
