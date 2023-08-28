<?php

namespace App\Http\Controllers;

use App\Events\AddressVerificationCreated;
use Illuminate\Http\Request;
use App\Models\AddressVerification;
use App\Models\AddressVerificationDetail;
use App\Models\Verification;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Client;
use App\Traits\generateHeaderReports;
use App\Traits\GenerateRef;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use App\Models\FieldInput;
use App\Models\States;
use App\Traits\sandbox;
use App\Models\Wallet;

class AddressController extends Controller
{
  use GenerateRef;
  use generateHeaderReports;
  use sandbox;

    public function __construct()
    {
      return $this->middleware('clients');
    }
  //

  public function AddressIndex($slug)
  {

    $data = $this->generateAddressReport($slug);
    return view('users.address.index', $data);
  }

  public function showCreateCandidate($slug)
  {
    $data = $this->generateCreateCandidateData($slug);
    return view('users.address.createAddressCandidate', $data);
  }

  public function createCandidate(Request $request, $slug)
  {
    $slug = Verification::where('slug', decrypt($slug))->first();
    $valid = Validator::make($request->all(), [
      'first_name' => 'required|string',
      'middle_name' => 'nullable|string',
      'last_name' => 'required|string',
      'phone' => 'required|numeric',
      'email' => 'nullable|email',
      'dob' => 'nullable|date_format:"Y-m-d"',
      'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
    ]);
    if ($valid->fails()) {
      Session::flash('alert', 'error');
      Session::flash('message', $valid->errors()->first());
      return redirect()->back()->withErrors($valid)->withInput($request->all());
    }
    //  dd($request->all());
    if ($request->file('image')) {

      $candidate_image = cloudinary()->upload($request->file('image')->getRealPath(), [
        'folder' => 'oysterchecks/candidates'
      ])->getSecurePath();
    }

    $ref = $this->GenerateRef();
    DB::beginTransaction();
    try {
      $curl = curl_init();
      $data = [
        "firstName" => $request->first_name,
        "middleName" => $request->middle_name != null ? $request->middle_name : "",
        "lastName" => $request->last_name,
        "mobile" => $request->phone,
        "email" => $request->email != null ? $request->email : "",
        "dateOfBirth" => $request->dob != null ? $request->dob : "",
        "image" => $candidate_image
      ];
      $datas = json_encode($data, true);
      //return $datas;
      curl_setopt_array($curl, [
         CURLOPT_URL => $this->ReqUrl()."addresses/candidates",
       // CURLOPT_URL => "https://api.sandbox.youverify.co/v2/api/addresses/candidates",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 2180,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $datas,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_HTTPHEADER => [
          "Content-Type: application/json",
          "Token: ".$this->ReqToken()
        ],
      ]);
      $response = curl_exec($curl);
      if (curl_errno($curl)) {
        dd('error:' . curl_errno($curl));
      } else {
        $res = json_decode($response, true);
        if ($res['success'] == true && $res['statusCode'] == 201) {
        //  dd($res);
          $service_ref = $res['data']['id'];
          AddressVerification::create([
            'verification_id' => $slug->id,
            'ref' => $ref,
            'user_id' => auth()->user()->id,
            'status' => 'pending',
            'slug' => $slug->slug,
            'service_reference' => $service_ref,
            'first_name' => $request->first_name,
            "middle_name" => $request->middle_name != null ? $request->middle_name : "",
            'last_name' => $request->last_name,
            "phone" => $request->phone,
            "email" => $request->email != null ? $request->email : "",
            "dob" => $request->dob != null ? $request->dob : "",
            "image" => $candidate_image,
            'is_sandbox' => $this->sandbox(),
            'expected_report_date' => Carbon::now()->addDays(4)
          ]);
      
          // $data = $this->generateAddressReportVerify($slug);
          // $data['service_ref'] = $service_ref;
          DB::commit();
          Session::flash('alert', 'success');
          Session::flash('message', 'Candidate Created Successfully');
          // return view('users.address.verifyAddress', $data);

          // dd($service_ref);
          return redirect()->route('showVerificationDetailsForm',
           ['slug' => encrypt($slug->slug), 'service_ref' => $service_ref,
           'states' => States::get()
           ]);
        }
      }
    } catch (\Exception $e) {
      DB::rollBack();
      throw $e;
    }
  }

  public function showVerificationDetailsForm($slug, $service_ref)
  {
    $data = $this->generateAddressReportVerify(decrypt($slug));
    $data['service_ref'] = $service_ref;
    $data['states'] = States::get();
    return view('users.address.verifyAddress', $data);
  }

  public function submitAddressVerify(Request $request, $service_ref)
  {
    if (!isset($service_ref)) {
      Session::flash('alert', 'error');
      Session::flash('message', 'Bad payload, reload page');
      return redirect()->back();
    }


    if ($get_address_verification = AddressVerification::where('service_reference', $service_ref)->first()) {
      $get_address_verification_id = $get_address_verification->id;
    }

    //  $logo_image = base64_encode(asset('/images/logo.png'));
    if ($request->slug == 'individual-address') {
      $valid = Validator::make($request->all(), [
        'flat_number' => 'nullable|string',
        'building_name' => 'nullable|string',
        'building_number' => 'required|string',
        'landmark' => 'required|string',
        'street' => 'required|string',
        'sub_street' => 'nullable|string',
        'state' => 'required|string',
        'city' => 'required|string',
        'lga' => 'nullable|string',
        'subject_consent' => 'required|accepted'
      ]);
      if ($valid->fails()) {
        Session::flash('alert', 'error');
        Session::flash('message', $valid->errors()->first());
        return redirect()->back()->withErrors($valid)->withInput($request->all());
      }

      // dd($service_ref);
     // $host = 'https://api.sandbox.youverify.co/v2/api/addresses/individual/request';
      $host = $this->ReqUrl().'addresses/individual/request';
      $data = [
        "candidateId" => $service_ref,
        "description" => "Verify the candidate",
        "address" => [
          "flatNumber" => $request->flat_number != null ? $request->flat_number : "",
          "buildingName" => $request->building_name != null ? $request->building_name : "",
          "buildingNumber" => $request->building_number,
          "landmark" => $request->landmark,
          "street" => $request->street,
          "subStreet" => $request->sub_street != null ? $request->sub_street : "",
          "state" => $request->state,
          "city" => $request->city,
          "lga" => $request->lga != null ? $request->lga : "",
        ],
        "subjectConsent" => $request->subject_consent ? true : false,

      ];
    } elseif ($request->slug == 'reference-address') {
      $valid = Validator::make($request->all(), [
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'phone' => 'required',
        'email' => 'required|email',
        'image' => 'required',
        'flat_number' => 'nullable|string',
        'building_name' => 'nullable|string',
        'building_number' => 'required|string',
        'landmark' => 'required|string',
        'street' => 'required|string',
        'sub_street' => 'nullable|string',
        'state' => 'required|string',
        'city' => 'required|string',
        'lga' => 'nullable|string',
        'subject_consent' => 'required'
      ]);
      if ($valid->fails()) {
        Session::flash('alert', 'error');
        Session::flash('message', $valid->errors()->first());
        return redirect()->back()->withErrors($valid)->withInput($request->all());
      }
      $image = '';
      if (request()->file('image')) {
        $image = request()->file('image');
        $name =  $image->getClientOriginalName();
        $FileName = \pathinfo($name, PATHINFO_FILENAME);
        $ext =  $image->getClientOriginalExtension();
        $time = time() . $FileName;
        $dd = md5($time);
        $fileName = $dd . '.' . $ext;
        if ($image->move('assets/guarantors', $fileName)) {
          $image = $fileName;
        }
      }

      $host = $this->ReqUrl().'addresses/guarantor/request';
      $data = [
        "candidateId" => $service_ref,
        "description" => "Verify the candidtate guarantor",
        "guarantor" => [
          "firstName" => $request->first_name,
          'lastName' => $request->last_name,
          'mobile' => $request->phone,
          'email' => $request->email,
          'image' =>  'https://oysterchecks.com/assets/images/logo.png',
        ],
        "address" => [
          "flatNumber" => $request->flat_number != null ? $request->flat_number : "",
          "buildingName" => $request->building_name != null ? $request->building_name : "",
          "buildingNumber" => $request->building_number,
          "landmark" => $request->landmark,
          "street" => $request->street,
          "subStreet" => $request->sub_street != null ? $request->sub_street : "",
          "state" => $request->state,
          "city" => $request->city,
          "lga" => $request->lga != null ? $request->lga : "",
        ],
        "subjectConsent" => true,
      ];
    } else {
      $host = $this->ReqUrl().'addresses/business/request';
      $data = [
        "candidateId" => $service_ref,
        "description" => "Verify the candidate and business",
        "business" => [
          "name" => $request->name,
          "email" => $request->email,
          "mobile" => $request->phone,
          "registrationNumber" => $request->registration_number,
        ],
        "address" => [
          "flatNumber" => $request->flat_number != null ? $request->flat_number : "",
          "buildingName" => $request->building_name != null ? $request->building_name : "",
          "buildingNumber" => $request->building_number,
          "landmark" => $request->landmark,
          "street" => $request->street,
          "subStreet" => $request->sub_street != null ? $request->sub_street : "",
          "state" => $request->state,
          "city" => $request->city,
          "lga" => $request->local_govt != null ? $request->local_govt : "",
        ],
        "subjectConsent" => $request->subject_consent,
      ];
    }
    DB::beginTransaction();
    try {
      $datas = json_encode($data, true);

     // dd($datas);
      // dd($datas);
      //  $res = executeCurl($datas,$host,"POST");
     
      $curl = curl_init();
      curl_setopt_array($curl, [
        CURLOPT_URL => $host,
       CURLOPT_RETURNTRANSFER => true,
       CURLOPT_ENCODING => "",
       CURLOPT_MAXREDIRS => 10,
       CURLOPT_TIMEOUT => 2180,
       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
       CURLOPT_CUSTOMREQUEST => "POST",
       CURLOPT_POSTFIELDS => $datas,
       CURLOPT_SSL_VERIFYPEER => false,
       CURLOPT_HTTPHEADER => [
         "Content-Type: application/json",
         "Token: ".$this->ReqToken()
       ],
     ]);

      $response_data = curl_exec($curl);
      if (curl_errno($curl)) {
        Session::flash('alert', 'error');
        Session::flash('message', 'An error occured, please try again later');
        return redirect()->back()->withErrors($valid)->withInput($request->all());
      } else {
        $res = json_decode($response_data, true);
        curl_close($curl);

        if ($res['success'] == true && $res['statusCode'] == 201) {

         event(new AddressVerificationCreated($res, $get_address_verification_id));

          DB::commit();
          Session::flash('alert', 'success');
          Session::flash('message', 'Address submitted for verification');
          return redirect()->route('addressIndex', $request->slug);
        } else {
          // dd($res);
          Session::flash('alert', 'danger');
          Session::flash('message', $res['message']);
          return redirect()->back()->withInput($request->all());
        }
      }
    } catch (\Exception $e) {
      DB::rollBack();
      Session::flash('alert', 'danger');
      Session::flash('message', $e);
      return redirect()->route('addressIndex', $request->slug);
    }
  }

  public function verificationReport($slug, $addressId)
  {
    $slug = Verification::where('slug', decrypt($slug))->first();

    $address_verification = AddressVerification::where(['id' => decrypt($addressId)])->first();

    $address_verification->addressVerificationDetail->candidate = json_decode($address_verification->addressVerificationDetail->candidate);
    if ($address_verification->addressVerificationDetail->business != null) $address_verification->addressVerificationDetail->business = json_decode($address_verification->addressVerificationDetail->business);
    if ($address_verification->addressVerificationDetail->guarantor != null) $address_verification->addressVerificationDetail->guarantor = json_decode($address_verification->addressVerificationDetail->guarantor);

    $address_verification->addressVerificationDetail->agent = json_decode($address_verification->addressVerificationDetail->agent);
    $address_verification->addressVerificationDetail->address = json_decode($address_verification->addressVerificationDetail->address);
    $address_verification->addressVerificationDetail->notes = json_decode($address_verification->addressVerificationDetail->notes);
    $address_verification->addressVerificationDetail->images = json_decode($address_verification->addressVerificationDetail->images);
    $address_verification->addressVerificationDetail->links = json_decode($address_verification->addressVerificationDetail->links);

    $address_verification->addressVerificationDetail->created_at;

    return view('users.address.addressReport', ['slug' => $slug, 'address_verification' => $address_verification]);
  }
}
