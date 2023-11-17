<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Session, Validator, DB};
use App\Traits\GenerateRef;
use App\Models\Transaction;
use App\Models\FieldInput;
use \Illuminate\Support\Arr;
use App\Models\ApiResponse;
use App\Models\{BankVerification, BvnVerification,NipVerification, PvcVerification, NinVerification, NdlVerification, PhoneVerification, ImageVerification};
use Illuminate\Support\Facades\Storage;
use App\Traits\generateHeaderReports;
use App\Models\IdentityVerification;
use App\Models\Verification;
use App\Models\IdentityVerificationDetail;
use App\Models\Wallet;
use App\Models\User;
use Carbon\Carbon;

class IdentityController extends Controller
{
    use GenerateRef;
    use GenerateHeaderReports;
    
//Constructor
    public function __construct()
    {
         return $this->middleware('clients');
    }

    public function identityIndex($slug)
    {
        $this->RedirectUser();
     
    }

    public function showIdentityVerificationForm($slug)
    {
        $this->RedirectUser();
        $user = auth()->user();

        $slug = Verification::where('slug', $slug)->first();
        $data['slug'] = $slug;
        // $data['success'] = IdentityVerification::where(['status' => 'successful', 'verification_id' => $slug->id, 'user_id' => $user->id])->get();
        // $data['failed'] = IdentityVerification::where(['status' => 'failed', 'verification_id' => $slug->id, 'user_id' => $user->id])->get();
        // $data['pending'] = IdentityVerification::where(['status' => 'pending', 'verification_id' => $slug->id, 'user_id' => $user->id])->get();
        $data['fields'] = FieldInput::where(['slug' => $slug->slug])->get();
        // $data['wallet'] = Wallet::where('user_id', $user->id)->first();

        return view('users.individual.identityVerify', $data);
    }

    public function StoreVerify(Request $request, $slug)
    {
        $slug = Verification::where('slug', $slug)->first();

        if ($slug) {
            if ($slug->slug == 'bvn') {
                return app('App\Http\Controllers\IdentityBvnController')->processBvn($request, $slug);
            } elseif ($slug->slug == 'nip') {
                return app('App\Http\Controllers\IdentityNipController')->processNip($request, $slug);
            } elseif ($slug->slug == 'nin') {
                return app('App\Http\Controllers\IdentityNinController')->processNin($request, $slug);
            } elseif ($slug->slug == 'pvc') {
               return app('App\Http\Controllers\IdentityPvcController')->processPvc($request, $slug);
            } elseif ($slug->slug == 'ndl') {
                return app('App\Http\Controllers\IdentityNdlController')->processNdl($request, $slug);
            } elseif ($slug->slug == 'compare-images') {
                return app('App\Http\Controllers\IdentityImageController')->processImage($request, $slug);
            } elseif ($slug->slug == 'bank-account') {
                return app('App\Http\Controllers\IdentityBankController')->processBankAccount($request, $slug);
            } elseif ($slug->slug == 'phone-number') {
               return app('App\Http\Controllers\IdentityPhoneNumberController')->processPhoneNumber($request, $slug);
            }
        } else {
            return back();
        }
    }

    public function chargeUser($amount, $ref, $type)
    {
        $user = User::where('id', auth()->user()->id)->first();
        $wallet = Wallet::where('user_id', $user->id)->first();
        $newWallet = $user->wallet->avail_balance - $amount;
        Wallet::where('user_id', $user->id)
            ->update([
                'prev_balance' => $wallet->avail_balance,
                'avail_balance' => $newWallet,
                'avail_balance' => $newWallet,
            ]);
        $refs = $this->GenerateRef();
        Transaction::create([
            'ref' => $refs,
            'user_id' => $user->id,
            'external_ref' => $ref,
            'purpose' => 'Payment for ' . $type,
            'service_type' => $type,
            'type'  => 'Credit',
            'amount' => $amount,
            'prev_balance' => $wallet->avail_balance,
            'avail_balance' => $newWallet
        ]);
    }

    public function RefundUser($amount, $ext_ref, $type)
    {
        $user = User::where('id', auth()->user()->id)->first();
        $wallet = Wallet::where('user_id', $user->id)->first();
        $newWallet = $user->wallet->avail_balance + $amount;
        Wallet::where('user_id', $user->id)
            ->update([
                'prev_balance' => $wallet->avail_balance,
                'avail_balance' => $newWallet,
            ]);
        $refs = $this->GenerateRef();
        Transaction::create([
            'ref' => $refs,
            'user_id' => $user->id,
            'external_ref' => $ext_ref,
            'purpose' => 'Payment for ' . $type,
            'service_type' => $type,
            'type'  => 'CREDIT',
            'amount' => $amount,
            'prev_balance' => $wallet->avail_balance,
            'avail_balance' => $newWallet
        ]);
    }

    public function IdentitySort(Request $request, $slug)
    {
        $user = User::where('id', auth()->user()->id)->first();
        $slug = Verification::where('slug', $slug)->first();
        if ($request->sort == 'success') {
            $data['slug'] = Verification::where('slug', $slug->slug)->first();
            $data['success'] = IdentityVerification::where(['status' => 'successful', 'verification_id' => $slug->id, 'user_id' => $user->id])->get();
            $data['failed'] = IdentityVerification::where(['status' => 'failed', 'verification_id' => $slug->id, 'user_id' => $user->id])->get();
            $data['pending'] = IdentityVerification::where(['status' => 'pending', 'verification_id' => $slug->id, 'user_id' => $user->id])->get();
            $data['fields'] = FieldInput::where(['slug' => $slug->slug])->get();
            $data['wallet'] = Wallet::where('user_id', $user->id)->first();
            $data['logs'] = IdentityVerification::where(['user_id' => auth()->user()->id, 'status' => 'successful'])->get();
        }
        if ($request->sort == 'failed') {
            $data['slug'] = Verification::where('slug', $slug->slug)->first();
            $data['success'] = IdentityVerification::where(['status' => 'successful', 'verification_id' => $slug->id, 'user_id' => $user->id])->get();
            $data['failed'] = IdentityVerification::where(['status' => 'failed', 'verification_id' => $slug->id, 'user_id' => $user->id])->get();
            $data['pending'] = IdentityVerification::where(['status' => 'pending', 'verification_id' => $slug->id, 'user_id' => $user->id])->get();
            $data['fields'] = FieldInput::where(['slug' => $slug->slug])->get();
            $data['wallet'] = Wallet::where('user_id', $user->id)->first();
            $data['logs'] = IdentityVerification::where(['user_id' => auth()->user()->id, 'status' => 'failed'])->get();
        }
        if ($request->sort == 'pending') {
            $data['slug'] = Verification::where('slug', $slug->slug)->first();
            $data['success'] = IdentityVerification::where(['status' => 'successful', 'verification_id' => $slug->id, 'user_id' => $user->id])->get();
            $data['failed'] = IdentityVerification::where(['status' => 'failed', 'verification_id' => $slug->id, 'user_id' => $user->id])->get();
            $data['pending'] = IdentityVerification::where(['status' => 'pending', 'verification_id' => $slug->id, 'user_id' => $user->id])->get();
            $data['fields'] = FieldInput::where(['slug' => $slug->slug])->get();
            $data['wallet'] = Wallet::where('user_id', $user->id)->first();
            $data['logs'] = IdentityVerification::where(['user_id' => auth()->user()->id, 'status' => 'pending'])->get();
        }
        return view('users.individual.identityVerify', $data);
    }


    public function verificationReport($slug, $verificationId)
    {
        $user = auth()->user();
        $slug = Verification::where('slug', $slug)->first();
        $data['slug'] = $slug;
        if ($slug) {
            if ($slug->slug == 'bvn') {
                $bvn_verification = BvnVerification::where(['id'=>$verificationId, 'user_id'=>$user->id])->first();
                if($bvn_verification){
                    return view('users.individual.identity_reports.bvn_report', ['bvn_verification'=>$bvn_verification]);
                }
            } elseif ($slug->slug == 'nip') {
                $nip_verification = NipVerification::where(['id'=>$verificationId, 'user_id'=>$user->id])->first();
                if($nip_verification){
                    return view('users.individual.identity_reports.nip_report', ['nip_verification'=>$nip_verification]);
                }
            } elseif ($slug->slug == 'nin') {
                $nin_verification = NinVerification::where(['id'=>$verificationId, 'user_id'=>$user->id])->first();

                if($nin_verification){
                    return view('users.individual.identity_reports.nin_report', ['nin_verification'=>$nin_verification]);
                }
            } elseif ($slug->slug == 'pvc') {
                $pvc_verification = PvcVerification::where(['id'=>$verificationId, 'user_id'=>$user->id])->first();

                if($pvc_verification){
                    return view('users.individual.identity_reports.pvc_report', ['pvc_verification'=>$pvc_verification]);
                }
            } elseif ($slug->slug == 'ndl') {
                $ndl_verification = NdlVerification::where(['id'=>$verificationId, 'user_id'=>$user->id])->first();

                if($ndl_verification){
                    return view('users.individual.identity_reports.ndl_report', ['ndl_verification'=>$ndl_verification]);
                }
            } elseif ($slug->slug == 'compare-images') {
                $image_verification = ImageVerification::where(['id'=>$verificationId, 'user_id'=>$user->id])->first();

                if($image_verification){
                    return view('users.individual.identity_reports.image_report', ['image_verification'=>$image_verification]);
                }
            } elseif ($slug->slug == 'bank-account') {
                $bank_verification = BankVerification::where(['id'=>$verificationId, 'user_id'=>$user->id])->first();

                if($bank_verification){
                    return view('users.individual.identity_reports.bank_report', ['bank_verification'=>$bank_verification]);
                }
            } elseif ($slug->slug == 'phone-number') {
                $phone_verification = PhoneVerification::where(['id'=>$verificationId, 'user_id'=>$user->id])->first();
                if($phone_verification){
                    return view('users.individual.identity_reports.phone_report', ['phone_verification'=>$phone_verification]);
                }
            }
        } else {

        }
    }


    public function getBanks(){
        try {
            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api.sandbox.youverify.co/v2/api/identity/ng/bank-account-number/bank-list",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 1,
                CURLOPT_TIMEOUT => 2180,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "Content-Type: application/json",
                    "Token: N0R9AJ4L.PWYaM5cXggThkdCtkVSCsWz4fMsfeMIp6CKL"
                ],
            ]);

            $response = curl_exec($curl);
            if (curl_errno($curl)) {
                dd('error:' . curl_errno($curl));
            } else {
                return response()->json(['data' => $response], 200);
            }
        } catch (\Exception $e) {

            throw $e;
        }
    }

    public function RedirectUser()
    {
        if (auth()->user()->user_type == 3)
            return redirect()->route('admin.index');
    }
  
}
