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
use App\Models\Wallet;
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
        $userWallet = Wallet::where('user_id', auth()->user()->id)->first();

            if($validate->fails()){
                Session::flash('alert', 'error');
                Session::flash('msg', 'Please provide the data to verify');
                return redirect()->back();
            }

      $createVerify =  IdentityVerification::create([
                    'verification_id' => $slug->id,
                    'ref' => $ref,
                    'service_reference' => $request->reference,
                    'user_id' => auth()->user()->id,
                    'fee' => $slug->fee,
                    'discount'=>$slug->discount,
                    'status' => 'pending'
        ]);
        
        if($createVerify){
        if(isset($slug->discount) && $slug->discount > 0){
            $amount = ($slug->discount * $slug->fee)/100;
        }else{
            $amount = $slug->fee;
        }
        if($userWallet->total_balance < $amount){
            Session::flash('alert', 'error');
            Session::flash('msg', 'Your walllet is too low for this transaction');
        }else{
            $chargeUser = $this->chargeUser($amount, $ref, $slug->report_type);
        }
        }
        if($chargeUser){
            //check if the reference exist on the local data
            $check = IdentityVerification::where('service_reference', $slug->service_refernce)->first();
            if($check){
               $referece = IdentityVerification::where('service_reference', $slug->service_refernce)->get();
            }else{
                //call the API from 3rd party to validate the reference sent
              //  dd('calling the api endpoint');
              $cc =  $this->getIdentityVerify($request, $slug->report_type);

              return $cc;
            }
        }
    }

    public function chargeUser($amount, $ext_ref, $type){
        $user = User::where('id', auth()->user()->id)->first();
        $wallet = Wallet::where('user_id', $user->id)->first();
        $newWallet = $user->wallet->total_balance - $amount;
       $update = Wallet::where('user_id', $user->id)
        ->update([
                'prev_balance' => $wallet->total_balance,
                'avail_balance' => $newWallet,
                'total_balance' => $newWallet,
        ]);
        $refs = $this->GenerateRef();
        Transaction::create([
                 'ref' => $refs,
                  'user_id' => $user->id,
                  'external_ref' => $ext_ref,
                  'purpose' => 'Payment for '.$type,
                   'service_type' => $type,
                  'type'  => 'DEBIT', 
                  'amount' => $amount, 
                 'prev_balance' => $wallet->total_balance, 
                 'avail_balance' => $newWallet
        ]);

      return $update;
   }

    public function getIdentityVerify($request, $type){
        $curl = curl_init();

        return $type;
            $data = [
                "report_type" => "identity", 
                "type" => $type, 
                "reference" => $request['reference'],
                "last_name" => $request['last_name'], 
                "first_name" => $request['first_name'],
                "dob" => null, 
                "subject_consent" => true,  
            ];

            $datas = json_encode($data, true);

           // return $datas;
        curl_setopt_array($curl, [
          CURLOPT_URL => "https://api.staging.youverify.co/v1/identities/candidates/check",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => $datas,
          CURLOPT_HTTPHEADER => [
            "Content-Type: application/json",
            "Token: a00ab3e6537fdf1e4e4c39fa355de3ec"
          ],
        ]);
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        return $response;

    }

}
