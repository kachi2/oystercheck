<?php

namespace App\Http\Controllers;

use App\Models\FieldInput;
use App\Models\PepSactionVerification;
use Illuminate\Http\Request;
use App\Models\Verification;
use App\Models\Wallet;
use App\Models\User;

class SanctionPepController extends Controller
{

    public function SanctionPepIndex($slug){
        $slug = Verification::where('slug', $slug)->first();
        $user = User::where('id', auth()->user()->id)->first();
        $data['slug'] = Verification::where('slug', $slug->slug)->first();
        $data['success'] = PepSactionVerification::where(['status' => 'successful', 'verification_id' => $slug->id, 'user_id' => $user->id])->get();
        $data['failed'] = PepSactionVerification::where(['status' => 'failed', 'verification_id' => $slug->id, 'user_id' => $user->id])->get();
        $data['pending'] = PepSactionVerification::where(['status' => 'pending', 'verification_id' => $slug->id, 'user_id' => $user->id])->get();
        $data['wallet'] = Wallet::where('user_id', $user->id)->first();
        $data['logs'] = PepSactionVerification::where(['user_id' => auth()->user()->id, 'status' => 'successful'])->get();
        return view('users.aml.media.index', $data);
    }


    public function SanctionPepCheck($slug){
        $slug = Verification::where('slug', $slug)->first();
        $data['slug'] = Verification::where('slug', $slug->slug)->first();
        $data['fields'] = FieldInput::where(['slug' => $slug->slug])->get();
        return view('users.aml.media.check', $data);
    }
}
