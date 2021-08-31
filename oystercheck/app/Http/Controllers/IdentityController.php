<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\FAcades\Session;
use Illuminate\support\Facades\Validator;
use App\Traits\GenerateRef;
use App\Models\Transaction;
use App\Models\ApiResponse;
use App\Models\IdentityVerification;
use App\Models\Verification;
use App\Models\User;

class IdentityController extends Controller
{
    use GenerateRef;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
       // return $this->user = auth()->user();
     }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function StoreVerify(Request $request, $slug){

        $validate = Validator::make($request->all(),[
            'reference' => 'required'
        ]);
        $ref = $this->GenerateRef();
        $slug = Verification::where('slug', $slug)->first();

            if($validate->fails()){
                Session::flash('alert', 'error');
                Session::flash('msg', 'Please provide the data to verify');
                return redirect()->back();
            }

      $createVerify =  IdentityVerification::create([
                    'verification_id' => $slug->id,
                    'ref' => $ref,
                    'service_reference' => $request->reference,
                    'initiate_by' => 1,
                    'fee' => $slug->fee,
                    'discount'=>$slug->discount,
                    'status' => 'pending'
        ]);
        
        if($createVerify){
        
            return "this is the user".auth()->user();
        }
    }


    public function chargeUser($amount){
        $user = User::where('id', auth()->user()->id)->first();
        if($user->wallet)
    }
}
