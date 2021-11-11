<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddressVerification;
use App\Models\Verification;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Traits\generateHeaderReports;
use App\Traits\GenerateRef;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\FieldInput;
use App\Models\Wallet;

class AddressController extends Controller
{
    use GenerateRef;
    use generateHeaderReports;
    //

    public function AddressIndex($slug){
        if(auth()->user()->user_type == 3)
        return redirect()->route('admin.index');
        
        $data = $this->generateAddressReport($slug);
        return view('users.address.index', $data);
    }

    public function createCandidate(Request $request, $slug){
            $slug = Verification::where('slug', decrypt($slug))->first();
                $valid = Validator::make($request->all(), [
                'first_name' => 'required',
                'last_name' => 'required',
                'phone' => 'required',
                'country'=>'required' 
                ]);
                if($valid->fails()){
                    Session::flash('alert', 'error');
                    Session::flash('message', 'Some fields are missing');
                    return redirect()->back()->withErrors($valid)->withInput($request->all());
                }
           // dd($request->all());
            $ref = $this->GenerateRef();
            DB::beginTransaction();
            try{
                $curl = curl_init();
                $data = [
                    "first_name" => $request->first_name,
                    'last_name' => $request->last_name,
                    'phone' => $request->phone,
                    'country' => $request->country 
                ];
                $datas = json_encode($data, true);
                //return $datas;
            curl_setopt_array($curl, [
              CURLOPT_URL => "https://api.staging.youverify.co/v1/candidates",
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
            if($res['message'] =='Successful'){
                $service_ref = $res['data']['reference_id'];
                AddressVerification::create([
                'verification_id' => $slug->id,
                'ref' => $ref,
                'user_id' => auth()->user()->id,
                'status' => 'pending',
                'service_reference' => $service_ref
                ]);
              // return $res;
              $data = $this->generateAddressReportVerify($slug);
              $data['service_ref'] = $service_ref;
                DB::commit();
                Session::flash('alert', 'success');
                Session::flash('message', 'Candidate Created Successfully');
                return view('users.address.verifyAddress', $data);
            }
            }catch(\Exception $e){
            DB::rollBack();
            throw $e;
            }
    }

    public function submitAddressVerify(Request $request, $service_ref, $slug){
        if(!isset($service_ref)){
            Session::flash('alert', 'error');
            Session::flash('message', 'Bad payload, reload page');
            return redirect()->back();
        }

        if($slug == 'individual_address'){
            $data = [
                "description" => "Individual Adddress verification",
                "address" => [
                    $host = 'https://api.staging.youverify.co/v1/candidates/'.$service_ref.'/references',
                    "house_number" => $request->house_number,
                    'landmark' => $request->landmark,
                ],
               
            ];
        }

        $curl = curl_init();
        $datas = json_encode($data, true);
        //return $datas;
    curl_setopt_array($curl, [
      CURLOPT_URL => $host,
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
    }
}
