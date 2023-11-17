<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\ActivityLog;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\Wallet;

class AdminClientController extends Controller
{
    //
    public function UserClients(){
        $clients = Client::get();
        return view('admin.clients.index', ['clients'=> $clients]);
    }
    
    public function createClient(){
        return view('admin.clients.create');
      }

    
        
    public function ClientStore(Request $request){
        
        $valid = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'company_name' => 'required',
            'company_phone' => 'required',
            'company_address'=> 'required',
            'company_email' => 'required',
        ]);

        if($valid->fails()){
            Session::flash('alert', 'error');
            Session::flash('message', 'Some Fields are missing');
            return redirect()->back();
        }

        //create a client account 
        $pass = $this->generatePass($request->name);
        $name = explode(' ', $request->name);
        $data = [
            'firstname' => $name[0],
            'lastname' => $name[1],
            'email' => $request->email,
            'password' => Hash::make($pass),
            'user_type' => 2
        ];
        $create = User::create($data);
        if($create){
            $data['password'] = $pass;
            $this->sendMail($data);
        }
        sleep(2);
       $user = User::latest()->first();
        Wallet::create([
            'user_id' => $user->id,
            'book_balance' => 0,
            'avail_balance' => 0,
            'total_balance' => 0,
        ]);
           if(request()->file('image')){
            $image_url = cloudinary()->upload($request->file('image')->getRealPath(), [
                'folder' => 'oysterchecks/clientProfile'
            ])->getSecurePath();

           }else{
            $image = 'default.png';
           }
        Client::create([
            'company_name' => $request->company_name,
            'company_email' => $request->company_email,
            'company_address' => $request->company_address,
            'company_phone' => $request->company_phone,
            'user_id' => $user->id,
            'image'=>$image
        ]);

        Session::flash('alert', 'success');
        Session::flash('message', 'Client created successfully');
        return back();


    }

    public function ClientProfile($client_id){
        $client = Client::where('id', decrypt($client_id))->first();
        $user = User::where('id',  $client->user_id)->first();
        $clients = $this->GetClientProfile($client);
        return view('admin.clients.accounts.profile_settings', $clients, [
            'user' =>  $user,
            'activities' => ActivityLog::where('user_id',  $user->id)->latest()->get(),
            'client' => $client,
           
        ]);
    }

    public function GetClientProfile($client){
        if($client->user->firstname != null && $client->user->email != null && $client->user->phone != null){
            $clients['profileInfo'] = 1;
        }else{
            $clients['profileInfo'] = null;
        }

        if($client->email != null && $client->logo != null && $client->company_name != null  && $client->description != null  && $client->reg_number != null && $client->tax_number != null) {
            $clients['basicInfo'] = 1;
        }else{
            $clients['basicInfo'] = null;
        }
        if( $client->company_address != null && $client->company_phone != null && $client->facebook != null && $client->linkedin != null && $client->instagram != null) {
            $clients['busContact'] = 1;
        }else{
            $clients['busContact'] = null;
        }

        if( $client->cac != null && $client->others != null) {
            $clients['Vdocs'] = 1;
        }else{
            $clients['Vdocs'] = null;
        }
        return $clients;
    }

    public function ActivateClientAccount($client_id){
        client::where('id', decrypt($client_id))->update(['is_admin_verified' => 1]);
        Session::flash('alert', 'info');
        Session::flash('message', 'Account Activated Successfully');
        return back();
    }

    public function SuspendClientAccount($client_id){
        client::where('id', decrypt($client_id))->update(['is_admin_verified' => -1]);
        Session::flash('alert', 'danger');
        Session::flash('message', 'Account Suspend Successfully');
        return back();
    }


  
}
