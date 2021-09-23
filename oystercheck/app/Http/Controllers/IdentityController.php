<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\FAcades\Session;
use Illuminate\support\Facades\Validator;
use App\Traits\GenerateRef;
use App\Models\Transaction;
use App\Models\FieldInput;
use \Illuminate\Support\Arr;
use App\Models\ApiResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\IdentityVerification;
use App\Models\Verification;
use App\Models\IdentityVerificationDetail;
use App\Models\Wallet;
use App\Models\User;
use Carbon\Carbon;

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
            return back();
        }else{
           $this->chargeUser($amount, $ref, $slug->report_type);
        }
        }
            //check if the reference exist on the local data
            $res = IdentityVerificationDetail::where(['reference'=>$request->reference, 'slug' => $slug->slug])->where('expires_at', '>=', now())->latest()->first();          
            if($res){
                IdentityVerification::where(['user_id'=> auth()->user()->id])->latest()->first()
                ->update(['status' => 'successful']);
                $user = auth()->user();;
                $data['slug'] = Verification::where('slug', $slug->slug)->first();
                $data['success'] = IdentityVerification::where(['status'=>'successful', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
                $data['failed'] = IdentityVerification::where(['status'=>'failed', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
                $data['pending'] = IdentityVerification::where(['status'=>'pending', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
                $data['fields'] = FieldInput::where(['slug'=>$slug->slug])->get();
                $data['wallet']= Wallet::where('user_id', $user->id)->first();
                $data['verified'] = IdentityVerificationDetail::where(['user_id'=>auth()->user()->id])->latest()->first();           
                $data['logs'] = IdentityVerification::where(['user_id' => $user->id, 'verification_id'=>$slug->id])->latest()->get();
                $data['res'] = $res;
                Session::flash('alert', 'success');
                Session::flash('message', 'Verification completed successfully');
                return view('users.individual.identityVerify', $data); 
            }else{
              $res =  $this->getIdentityVerify($request, $slug, $request->reference);
             return $res;
              if($res['message'] == 'Successful'){
                IdentityVerification::where(['user_id'=> auth()->user()->id])->latest()->first()
                         ->update(['status' => 'successful']);
                         $user = auth()->user();;
                         $data['slug'] = Verification::where('slug', $slug->slug)->first();
                         $data['success'] = IdentityVerification::where(['status'=>'successful', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
                         $data['failed'] = IdentityVerification::where(['status'=>'failed', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
                         $data['pending'] = IdentityVerification::where(['status'=>'pending', 'verification_id'=>$slug->id, 'user_id'=> $user->id])->get();
                         $data['fields'] = FieldInput::where(['slug'=>$slug->slug])->get();
                         $data['wallet']= Wallet::where('user_id', $user->id)->first();
                         $data['verified'] = IdentityVerificationDetail::where(['user_id'=>auth()->user()->id])->latest()->first();           
                         $data['logs'] = IdentityVerification::where(['user_id' => $user->id, 'verification_id'=>$slug->id])->latest()->get(); 
                         $data['res'] = $res;
                        Session::flash('alert', 'success');
                        Session::flash('message', 'Verification completed successfully');
                return view('users.individual.identityVerify', $data);
              }else{
                  //dd('hkjkjk');
                  Session::flash('alert', 'danger');
                  Session::flash('message', 'Verification failed, please confirm input');
                return redirect()->back();
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
   }

    public function getIdentityVerify($request, $slug, $reference){
        $identity = IdentityVerification::where('user_id', auth()->user()->id)->latest()->first();
        $curl = curl_init();
            $data = [
                "report_type" => "identity", 
                "type" => $slug->report_type, 
                "reference" => $request['reference'],
                "last_name" => $request['last_name'], 
                "first_name" => $request['first_name'],
                "dob" => null, 
                "subject_consent" => true,  
            ];
            $datas = json_encode($data, true);

            //return $datas;
        curl_setopt_array($curl, [
          CURLOPT_URL => "https://api.staging.youverify.co/v1/identities/candidates/check",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 2180,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => $datas,
          CURLOPT_HTTPHEADER => [
            "Content-Type: application/json",
            "Token: a00ab3e6537fdf1e4e4c39fa355de3ec"
          ],
        ]);
        $response = curl_exec($curl);
        $res = json_decode($response, true);

      //  return $res;
        if($res['status_code'] == 200){
            if(isset($res['data']['response']['gender'])){
                $gender = $res['data']['response']['gender'];
            }else{
                $gender = null;
            }
            if(isset($res['data']['response']['issued_date'])){
                $issue_date = $res['data']['response']['issued_date'];
            }else{
                $issue_date = null;
            }
            if(isset($res['data']['response']['expiry_date'])){
                $expiry_date = $res['data']['response']['expiry_date'];
            }else{
                $expiry_date  = null;
            }
            if(isset($res['data']['response']['educational_level'])){
                $educational_level = $res['data']['response']['educational_level'];
            }else{
                $educational_level = null;
            }
            
            if(isset($res['data']['response']['marital_status'])){
                $marital_status = $res['data']['response']['marital_status'];
            }else{
                $marital_status = null;
            }
            if(isset($res['data']['response']['expiry_date'])){
                $expiry_date = $res['data']['response']['expiry_date'];
            }else{
                $expiry_date = null;
            }
            if(isset($res['data']['response']['issued_at'])){
                $place_of_issue = $res['data']['response']['issued_at'];
            }else{
                $place_of_issue = null;
            }
            if(isset($res['data']['response']['birth_country'])){
                $country = $res['data']['response']['birth_country'];
            }else{
                $country = null;
            }
            if(isset($res['data']['response']['document_number'])){
                $document_number = $res['data']['response']['document_number'];
            }else{
                $document_number = null;
            }
            if(isset($res['data']['response']['residence_adress_line1'])){
                $address = $res['data']['response']['residence_adress_line1'];
            }else{
                $address = null;
            }
            if(isset($res['data']['response']['profession'])){
                $profession = $res['data']['response']['profession'];
            }else{
                $profession = null;
            }
            if(isset($res['data']['response']['birth_state'])){
                $birth_state = $res['data']['response']['birth_state'];
            }else{
                $birth_state = null;
            }
            if(isset($res['data']['response']['residence_state'])){
                $residence_state = $res['data']['response']['residence_state'];
            }else{
                $residence_state = null;
            }
            if(isset($res['data']['response']['first_name'])){
                $fullname = $res['data']['response']['first_name'];
            }else{
                $fullname = $res['data']['response']['full_name'];
            }
            if(isset($res['data']['response']['middle_name'])){
                $middle_name = $res['data']['response']['middle_name'];
            }else{
                $middle_name = null;
            }
            if(isset($res['data']['response']['last_name'])){
                $last_name = $res['data']['response']['last_name'];
            }else{
                $last_name = null;
            }
            if(isset($res['data']['response']['dob'])){
                $dob = $res['data']['response']['dob'];
            }else{
                $dob = null;
            }
            if(isset($res['data']['response']['mobile'])){
                $phone = $res['data']['response']['mobile'];
            }else{
                $phone = null;
            }
            if(isset($res['data']['response']['tracking_id'])){
                $tracking_id = $res['data']['response']['tracking_id'];
            }else{
                $tracking_id = null;
            }
            if(isset($res['data']['response']['tax_identification_number'])){
                $tax_identification_number = $res['data']['response']['tax_identification_number'];
            }else{
                $tax_identification_number = null;
            }
            $payload = json_encode($res['data']['response']);
            if(isset($res['data']['response']['photo'])){
             $image = $res['data']['response']['photo']; // image base64 encoded
             $file = base64_decode($image); 
             $safeName = time().'.'.'png'; 
             file_put_contents('C:\xampp\htdocs\oystercheck\assets/profile/'.$safeName,$file);
            }else{
                $safeName = 'image.png'; 
            }

            IdentityVerificationDetail::create([
                'identity_verification_id' => $identity->id,
                'external_ref' => $res['data']['reference_id'], 
                'first_name' => $fullname, 
                'middle_name' => $middle_name,
                'last_name' => $last_name, 
                'dob' => $dob, 
                'phone' => $phone,
                'reference'=>$reference,
                'image_path'=> $safeName ,
                'slug' => $slug->report_type,
                'user_id' => auth()->user()->id,
                'expires_at' => Carbon::now()->addDay(30),
                'payload' => $payload,
                'place_of_issue' => $place_of_issue,
                'issue_date' => $issue_date,
                'expiry_date'=> $expiry_date, 
                'country'=> $country,
                'educational_level'=> $educational_level,
                'marital_status' => $marital_status,
                'gender' => $gender,
                'document_number' => $document_number,
                'address' => $address,
                'profession' => $profession,
                'birth_state'=> $birth_state,
                'residence_state'=> $residence_state, 
                'tracking_id' => $tracking_id,
                'tax_identification_number' => $tax_identification_number
            ]);     
            return $res;
        }
        return $res;
    }

    public function test(){
        $check = IdentityVerificationDetail::where(['first_name'=>'IBIYEMI'])->latest()->first();           
        $file = base64_decode($check->image_path);
        $safeName = time().'.'.'jpg';
        $success = file_put_contents('C:\xampp\htdocs\oystercheck\assets/'.$safeName,$file);
        $dd = IdentityVerificationDetail::get();
        foreach($dd as $mm){
            IdentityVerificationDetail::where('id', $mm->id)
            ->update(['reference' => '66894827060']);
        }
        print $success;
    }

    public function verifyDetails($id){
        $slug = IdentityVerification::where('id', decrypt($id))->first();
        $user = User::where('id', auth()->user()->id)->first();
        $data['slug'] = IdentityVerification::where('id', decrypt($id))->first();
        $data['success'] = IdentityVerification::where(['status'=>'successful', 'verification_id'=>$slug->verification_id, 'user_id'=> $user->id])->get();
        $data['failed'] = IdentityVerification::where(['status'=>'failed', 'verification_id'=>$slug->verification_id, 'user_id'=> $user->id])->get();
        $data['pending'] = IdentityVerification::where(['status'=>'pending', 'verification_id'=>$slug->verification_id, 'user_id'=> $user->id])->get();
        $data['logs'] = IdentityVerification::where(['user_id' => $user->id, 'verification_id'=>$slug->verification_id])->latest()->get();
        $data['verified'] = IdentityVerificationDetail::where(['reference' => $slug->service_reference])->latest()->first();
       return view('users.individual.identitydetails', $data);
    }
}
