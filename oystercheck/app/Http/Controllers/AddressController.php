<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddressVerification;
use App\Models\Verification;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Client;
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
        if(auth()->user()->user_type == 6)
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
              CURLOPT_URL => "https://api.youverify.co/v1/candidates",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 2180,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "POST",
              CURLOPT_POSTFIELDS => $datas,
              CURLOPT_HTTPHEADER => [
                "Content-Type: application/json",
                "Token: 49c11a7ef799f5695c943ba4d3d1ddcc"
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
                'service_reference' => $service_ref,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'last_name' => $request->phone,
                'country' => $request->country
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

    public function submitAddressVerify(Request $request, $service_ref){
      //  dd($service_ref);
        if(!isset($service_ref)){
            Session::flash('alert', 'error');
            Session::flash('message', 'Bad payload, reload page');
            return redirect()->back();
        }

       //$logo =  Client::first();
       $logo_image = base64_encode(asset('/images/logo.png'));
       if($request->slug == 'individual_address'){
            $host = 'https://api.youverify.co/v1/candidates/'.$service_ref.'/references';
            $data = [
                "description" => "Individual Adddress verification",
                "address" => [
                    "house_number" => $request->house_number,
                    'landmark' => $request->landmark,
                    'street' => $request->street,
                    'city' => $request->city,
                    'country'=>'Nigeria',
                    'images' =>  $logo_image,
                ],
               
            ];
       }elseif($request->slug == 'reference_address'){
        $host = 'https://api.youverify.co/v1/candidates/'.$service_ref.'/references';
        $data = [
            "notes" => "Reference Adddress verification",
            "reference" => [
              "first_name" => $request->first_name,
              'last_name' => $request->last_name,
              'mobile' => $request->phone,
              'email' => $request->email,
              'country'=>'Nigeria',
              'images' =>  $logo_image,
          ], 
            "address" => [
                "house_number" => $request->house_number,
                'landmark' => $request->landmark,
                'street' => $request->street,
                'city' => $request->city,
                'country'=>'Nigeria',
                'images' =>  $logo_image,
            ], 
        ];
       }else{
        $host = 'https://api.youverify.co/v1/candidates/'.$service_ref.'/references';
        $data = [
            "merchant" => [
              "name" => $request->name,
              'registration_number' => $request->registration_number,
              'mobile' => $request->phone,
              'email' => $request->email,
            ], 
            "address" => [
                "house_number" => $request->house_number,
                'landmark' => $request->landmark,
                'street' => $request->street,
                'city' => $request->city,
                'country'=>'Nigeria',
                'images' =>  $logo_image,
          ],
          ];
       }
        $curl = curl_init();
        $datas = json_encode($data);
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
        "Token: 49c11a7ef799f5695c943ba4d3d1ddcc"
      ],
    ]);
    $response = curl_exec($curl);
    $res = json_decode($response, true);
    return back();
    }
}
