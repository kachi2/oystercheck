<?php

namespace App\Http\Controllers;

use App\Mail\EmployeeReferenceMail;
use App\Models\EmployeeReference;
use App\Models\EmployeeRefQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class EmployeeRefController extends Controller
{

    public function create($id, $user_id){
      return view('users.employee-ref.create-reference')
      ->with('id', $id)
      ->with('user_id', $user_id);
    }


    public function store(Request $request, $id, $user_id){

        $valid = Validator::make($request->all(), [
          'company_name' => 'required', 
          'company_email' => 'required', 
          'company_contact' => 'required',  
          'start_year' => 'required',
          'end_year' => 'required', 
          'position' => 'required'
        ]);

        if ($valid->fails()) {
          Session::flash('alert', 'error');
          Session::flash('message', 'Failed!'.$valid->errors()->first());
          return redirect()->back()->withInput($request->all())->withErrors($valid);
      }

      try {
        DB::beginTransaction();
      $data = [
        'user_id' => decrypt($user_id), 
        'candidate_verification_id' => decrypt($id),
        'company_name' => $request->company_name, 
        'company_address' => $request->company_email, 
        'company_contact' => $request->company_contact, 
        'is_read' => 0, 
        'start_year' => $request->start_year,
        'end_year' => $request->end_year, 
        'position' => $request->position
      ];


      $name = User::whereId(decrypt($user_id))->first();
      $res = EmployeeReference::create($data);
      if($res){
      $data = [
        'candidate_name' => $name->firstname.' '.$name->lastname,
        'company_contact' => $request->company_contact, 
        'position' => $request->position,
        'candidate_verification_id' => decrypt($id),
        'user_id' => decrypt($user_id), 
      ];

     Mail::to($request->company_email)->send(new EmployeeReferenceMail($data));
   
      }
        Session::flash('alert', 'success');
        Session::flash('message','Email successfully sent to employer to provide candidate reference');
          return redirect()->back();
      DB::commit();
    }catch(\Exception $e){
      DB::rollback();
      Session::flash('alert', 'error');
      Session::flash('message','Request Faile'.$e->getMessage());
      return redirect()->back()->withInput($request->all());
      }
    }

      public function RedirectToQuestions($user_id, $candidate_verification_id){

        $questions = EmployeeRefQuestion::get();
        foreach($questions as $qq){
          $qq->name = str_replace(['/', ' ', '+', '\'', '?', '-', ',', ':'], '', $qq->question);
        }
        return view('users.employee-ref.reference-questions')
        ->with('user_id', $user_id)
        ->with('candidate_verification_id', $candidate_verification_id)
        ->with('questions', $questions);
      }

      public function StoreAnswers(Request $request, $user_id, $candidate_verification_id){
        $questions = EmployeeRefQuestion::get();
        foreach($questions as $qq){
          $qq->name = str_replace(['/', ' ', '+', '\'', '?', '-', ',', ':'], '', $qq->question);
        }
        

          $data = [


          ];

      }
}
