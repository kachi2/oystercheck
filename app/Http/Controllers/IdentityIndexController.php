<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\{BvnVerification, NinVerification, Verification, NipVerification, Wallet, PvcVerification, NdlVerification, ImageVerification, BankVerification, PhoneVerification};

class IdentityIndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $slug)
    {
        $user = auth()->user();
        $slug = Verification::where('slug', $slug)->first();
        if ($slug) {
            $data['slug'] = $slug;
            if ($slug->slug == 'bvn') {
                $data['success'] = BvnVerification::where(['status' => 'found', 'verification_id' => $slug->id, 'user_id' => $user->id])->count();
                $data['failed'] = BvnVerification::where(['status' => 'not_found', 'verification_id' => $slug->id, 'user_id' => $user->id])->count();
                $data['pending'] = BvnVerification::where(['status' => 'pending', 'verification_id' => $slug->id, 'user_id' => $user->id])->count();
                $data['wallet'] = Wallet::where('user_id', $user->id)->first();           
                $data['logs'] = BvnVerification::where(['user_id' => $user->id, 'verification_id' => $slug->id])->latest()->get();
                return view('users.individual.identity_indexes.bvn_index', $data);
            } elseif ($slug->slug == 'nip') {
                $data['success'] = NipVerification::where(['status' => 'found', 'verification_id' => $slug->id, 'user_id' => $user->id])->count();
                $data['failed'] =  NipVerification::where(['status' => 'not_found', 'verification_id' => $slug->id, 'user_id' => $user->id])->count();
                $data['pending'] = NipVerification::where(['status' => 'pending', 'verification_id' => $slug->id, 'user_id' => $user->id])->count();
                $data['wallet'] = Wallet::where('user_id', $user->id)->first();           
                $data['logs'] = NipVerification::where(['user_id' => $user->id, 'verification_id' => $slug->id])->latest()->get();
                return view('users.individual.identity_indexes.nip_index', $data);
            } elseif ($slug->slug == 'nin') {
                $data['success'] = NinVerification::where(['status' => 'found', 'verification_id' => $slug->id, 'user_id' => $user->id])->count();
                $data['failed'] =  NinVerification::where(['status' => 'not_found', 'verification_id' => $slug->id, 'user_id' => $user->id])->count();
                $data['pending'] = NinVerification::where(['status' => 'pending', 'verification_id' => $slug->id, 'user_id' => $user->id])->count();
                $data['wallet'] = Wallet::where('user_id', $user->id)->first();           
                $data['logs'] = NinVerification::where(['user_id' => $user->id, 'verification_id' => $slug->id])->latest()->get();
                return view('users.individual.identity_indexes.nin_index', $data);
            } elseif ($slug->slug == 'pvc') {
                $data['success'] = PvcVerification::where(['status' => 'found', 'verification_id' => $slug->id, 'user_id' => $user->id])->count();
                $data['failed'] =  PvcVerification::where(['status' => 'not_found', 'verification_id' => $slug->id, 'user_id' => $user->id])->count();
                $data['pending'] = PvcVerification::where(['status' => 'pending', 'verification_id' => $slug->id, 'user_id' => $user->id])->count();
                $data['wallet'] = Wallet::where('user_id', $user->id)->first();           
                $data['logs'] = PvcVerification::where(['user_id' => $user->id, 'verification_id' => $slug->id])->latest()->get();
                return view('users.individual.identity_indexes.pvc_index', $data);
            } elseif ($slug->slug == 'ndl') {
                $data['success'] = NdlVerification::where(['status' => 'found', 'verification_id' => $slug->id, 'user_id' => $user->id])->count();
                $data['failed'] =  NdlVerification::where(['status' => 'not_found', 'verification_id' => $slug->id, 'user_id' => $user->id])->count();
                $data['pending'] = NdlVerification::where(['status' => 'pending', 'verification_id' => $slug->id, 'user_id' => $user->id])->count();
                $data['wallet'] = Wallet::where('user_id', $user->id)->first();
                $data['logs'] = NdlVerification::where(['user_id' => $user->id, 'verification_id' => $slug->id])->latest()->get();
                return view('users.individual.identity_indexes.pvc_index', $data);
            } elseif ($slug->slug == 'compare-images') {
                $data['success'] = ImageVerification::where(['status' => 'found', 'verification_id' => $slug->id, 'user_id' => $user->id])->count();
                $data['failed'] =  ImageVerification::where(['status' => 'not_found', 'verification_id' => $slug->id, 'user_id' => $user->id])->count();
                $data['pending'] = ImageVerification::where(['status' => 'pending', 'verification_id' => $slug->id, 'user_id' => $user->id])->count();
                $data['wallet'] = Wallet::where('user_id', $user->id)->first();
                $data['logs'] = ImageVerification::where(['user_id' => $user->id, 'verification_id' => $slug->id])->latest()->get();
                return view('users.individual.identity_indexes.image_index', $data);
            } elseif ($slug->slug == 'bank-account') {
                $data['success'] = BankVerification::where(['status' => 'found', 'verification_id' => $slug->id, 'user_id' => $user->id])->count();
                $data['failed'] =  BankVerification::where(['status' => 'not_found', 'verification_id' => $slug->id, 'user_id' => $user->id])->count();
                $data['pending'] = BankVerification::where(['status' => 'pending', 'verification_id' => $slug->id, 'user_id' => $user->id])->count();
                $data['wallet'] = Wallet::where('user_id', $user->id)->first();
                $data['logs'] = BankVerification::where(['user_id' => $user->id, 'verification_id' => $slug->id])->latest()->get();
                return view('users.individual.identity_indexes.bank_index', $data);
            } elseif ($slug->slug == 'phone-number') {
                $data['success'] = PhoneVerification::where(['status' => 'found', 'verification_id' => $slug->id, 'user_id' => $user->id])->count();
                $data['failed'] =  PhoneVerification::where(['status' => 'not_found', 'verification_id' => $slug->id, 'user_id' => $user->id])->count();
                $data['pending'] = PhoneVerification::where(['status' => 'pending', 'verification_id' => $slug->id, 'user_id' => $user->id])->count();
                $data['wallet'] = Wallet::where('user_id', $user->id)->first();
                $data['logs'] = PhoneVerification::where(['user_id' => $user->id, 'verification_id' => $slug->id])->latest()->get();
                return view('users.individual.identity_indexes.pvc_index', $data);
            }
        } else {
            return back();
        }

    }
}
