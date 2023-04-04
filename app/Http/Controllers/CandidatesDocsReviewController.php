<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\CandidateService;
use App\Models\CandidateVerification;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CandidatesDocsReviewController extends Controller
{
    //

    public function __construct(Auth $user)
    {    
        
        return $this->middleware('clients');
    }


    public function ApproveDoc($service){

        dd(decrypt($service));
        if(isset($service)){
            $candidate = CandidateVerification::where('id', decrypt($service))->first();
            dd($candidate);
        }

    }

}
