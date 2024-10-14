<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\CandidateVerification;
use Illuminate\Support\Facades\Session;

class AdminCandidateController extends Controller
{ 
    //
    public function CandidateIndex(){
        $candidate['candidate'] = Candidate::get();
        $candidate['verified'] = Candidate::where(['status'=>'approved'])->get();
        $candidate['rejected'] = Candidate::where(['status'=>'rejected'])->get();
        return view('admin.candidates.index', $candidate);
    }
 
    public function candidateDetails($id){
        $data['verified'] = Candidate::where([ 'status'=>'verified'])->get();
        $data['rejected'] = Candidate::where([ 'status'=>'rejected'])->get();  
        $candidate = Candidate::where('id', decrypt($id))->first();
        $data['candidates'] = Candidate::all();
        $data['candidate'] = Candidate::where('user_id', $candidate->user_id)->first();
        $data['services'] = CandidateVerification::where('user_id', $candidate->user_id)->get();
        return view('admin.candidates.details', $data);
    }


    public function FileDownload($id){
        $file = CandidateVerification::where('id', decrypt($id))->first();
        $location = public_path()."/assets/candidates/".$file->doc;
        return response()->download($location);
    }


    public function statusUpdate(Request $request, $id){
        $status = CandidateVerification::where('id', decrypt($id))->first();
        if($request->status == 1 ){
            CandidateVerification::where('id', $status->id)
                ->update([
                'status' => 'approved'
                ]);
            Session::flash('alert', 'success');
            Session::flash('message', 'Document Marked as Approved');
            return back();
        }else if($request->status == 2){
            CandidateVerification::where('id', $status->id)
            ->update([
            'status' => 'failed'
            ]);
        Session::flash('alert', 'warning');
        Session::flash('message', 'Document Marked as Rejected');
            return back();
        }else{
            Session::flash('alert', 'info');
            Session::flash('message', 'No changes made, check your request and try again');
            return back();

        }
    }

    public function QAUpdate(Request $request, $id){
        $status = CandidateVerification::where('id', decrypt($id))->first();
        if($request->qa == 1 ){
            CandidateVerification::where('id', $status->id)
                ->update([
                    'QA_approved' => 'approved'
                ]);
            Session::flash('alert', 'success');
            Session::flash('message', 'Document Marked as Approved');
            return back();
        }else if($request->qa == 2){
            CandidateVerification::where('id', $status->id)
            ->update([
                'QA_approved' => 'failed'
            ]);
        Session::flash('alert', 'warning');
        Session::flash('message', 'Document Marked as Rejected');
            return back();
        }else{
            Session::flash('alert', 'info');
            Session::flash('message', 'No changes made, check your request and try again');
            return back();

        }
    }
    public function QAReview(Request $request, $id){
        $status = CandidateVerification::where('id', decrypt($id))->first();
        if(isset($request->reviews) ){
            CandidateVerification::where('id', $status->id)
                ->update([
                    'QA_review' => $request->reviews
                ]);
    }
    Session::flash('alert', 'success');
    Session::flash('message', 'Document Review Saved');
    return back();
}


public function VerifyCandidate(Request $request, $id){
    $status = CandidateVerification::where(['user_id' => decrypt($id), 'status' => 'pending'])->get();  
    if(!isset($status)){
        Session::flash('alert', 'error');
        Session::flash('message', 'Some documents are still pending, please review');
        return back();
    } 
    if($request->verify == 1 ){
      //  dd(decrypt($id));
        Candidate::where('user_id', decrypt($id))
            ->update([
                'status' => 'verified'
            ]);
            Session::flash('alert', 'success');
            Session::flash('message', 'Candidate documents verified successfully');
            return back();
    }elseif($request->verify == 2){
        Candidate::where('user_id', decrypt($id))
            ->update([
                'status' => 'rejected'
            ]);
            Session::flash('alert', 'error');
            Session::flash('message', 'Candidate documents Marked as Rejected');
            return back();
    }else{
        Session::flash('alert', 'info');
        Session::flash('message', 'No changes made, check input and try again');
        return back();
    }
}

public function UserCandidates(){
    $candidate = Candidate::get();
    return view('admin.users.candidates', ['candidate'=> $candidate]);
}
}
