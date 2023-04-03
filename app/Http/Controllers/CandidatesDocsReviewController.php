<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Models\User;

class CandidatesDocsReviewController extends Controller
{
    //

    public function __construct(User $user)
    {     
        if($user->user_type != 2){
            return redirect('home');
        }
    }

    public function ApproveDoc($id){
        if(decrypt($id)){

            $candidate = Candidate::where('');
        }

    }

}
