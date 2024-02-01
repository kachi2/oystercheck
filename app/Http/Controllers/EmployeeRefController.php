<?php

namespace App\Http\Controllers;

use App\Models\EmployeeReference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
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
        'company_email' => $request->company_email, 
        'company_contact' => $request->company_contact, 
        'is_read' => 0, 
        'start_year' => $request->start_year,
        'end_year' => $request->end_year, 
        'position' => $request->position
      ];

      $res = EmployeeReference::create($data);
      if($res){


      }

      DB::commit();
    }catch(\Exception $e){
      DB::rollback();

      }

    }
    
}
