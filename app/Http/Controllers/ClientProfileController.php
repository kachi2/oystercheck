<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserInfo;
use App\Traits\uploadImage;
use App\Traits\business;
use App\Models\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Traits\storeActivity;
use Illuminate\Support\Facades\Validator;


class ClientProfileController extends Controller
{
    //
use storeActivity;

use uploadImage;
use business;
    public function __construct()
    {
        return $this->middleware('clients');
    }

    public function StorePersonalInfo(Request $req){
        $valid = Validator::make($req->all(),[
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);
        if($valid->fails()){
            return response()->json(['errors' => $valid->errors()->first()]);
        }
        $user = User::where('id', auth()->user()->id)->first();
         $user->update($req->only('firstname', 'lastname', 'phone', 'email'));
        $req['activity'] = "Updated Personal Information";
         $this->StoreActivity($req, $user);
        return response()->json(['message' => 'Details updated successfully', 'alert' => 'success']);
    }

    public function UpdatePassword(Request $request){

        $user = User::where('id', auth()->user()->id)->first();
        $valid = Validator::make($request->all(),
        [
            'newPassword' => 'required',
            'currentPassword' => ['required', function($attribute, $value, $fails){
                if(!Hash::check($value, auth()->user()->password)){
                    $fails('Old Password is not correct');
                }
            }], 
        ]);

        if($valid->fails()){
            return response()->json(['errors' => $valid->errors()->first()]);
        }
       $user->fill(['password' => Hash::make($request->newPassword)])->save();
       return response()->json(['message' => 'Password Updated Successfully']);

    }


    public function UpdateBusinessInfo(Request $request){
            $valid = Validator::make($request->all(), [
                'businessLogo' => 'mimes:png,jpg,jpeg'
            ]);
            if($valid->fails()){
                Session::flash('alert', 'error');
                Session::flash('message', 'Image type not accepted');
                return back();
            }

            try{
        $client = Client::where('user_id', auth()->user()->id)->first();
        if($request->file('businessLogo'))
        { 
        $image = $this->UploadImage($request->file('businessLogo'));
        }else{
            $image = $client->logo;
        }
         $client->fill($this->BasicInfo($request, $image))->save();
        }catch(\Exception $E){
            Session::flash('alert', 'success');
            Session::flash('message', 'Profile Updated Successfully');
            return back();
        }
            Session::flash('alert', 'error');
            Session::flash('message', 'Request failed, try again');
            return back();
        }


    public function UpdateContactInfo(Request $request){
        $client = Client::where('user_id', auth()->user()->id)->first();
        $cc = $client->fill($this->ContactInfo($request))->save();
        if($cc){
            return response()->json(['status' => 'success', 'message' => 'Profile Updated Successfully']);
        }else{
            return response()->json(['status' => 'error', 'message' => 'An error occured, try again']);
        }
    }

    public function UpdateDocumentInfo(Request $request){
        $client = Client::where('user_id', auth()->user()->id)->first();
        $valid = Validator::make($request->all(), [
            'businessRegistrationCert' => 'mimes:png,jpg,jpeg,pdf',
            'supportingDocument' => 'mimes:png,jpg,jpeg,pdf'
        ]);
        if($valid->fails()){
            Session::flash('alert', 'error');
            Session::flash('message', 'Image type not accepted');
            return back();
        }
        if($request->file('businessRegistrationCert')) {
        $Cert = $this->UploadImage($request->file('businessRegistrationCert'));
        }else{
            $Cert = $client->cac;
        }
        if($request->file('supportingDocument')) {
            $Doc = $this->UploadImage($request->file('supportingDocument'));
        }else{
            $Doc = $client->others;
        }

        $files = $client->fill(['cac' => $Cert, 'others' => $Doc])->save();
        if($files){
            Session::flash('alert', 'success');
            Session::flash('message', 'Profile Updated Successfully');
            return back();
        }else{
            Session::flash('alert', 'error');
            Session::flash('message', 'Request failed, try again');
            return back();
        }

    }
}
