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
        //  return $this->user = auth()->user();
    }

    public function RedirectUser()
    {
        if (auth()->user()->user_type == 3)
            return redirect()->route('admin.index');
    }

    public function identityIndex($slug)
    {
        $this->RedirectUser();
        $user = auth()->user();
        // $slug = strtoupper($slug);
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

        }
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
        $this->RedirectUser();
        $slug = Verification::where('slug', $slug)->first();

        if ($slug) {
            if ($slug->slug == 'bvn') {
                return $this->processBvn($request, $slug);
            } elseif ($slug->slug == 'nip') {
                return $this->processNip($request, $slug);
            } elseif ($slug->slug == 'nin') {
                return $this->processNin($request, $slug);
            } elseif ($slug->slug == 'pvc') {
               return $this->processPvc($request, $slug);
            } elseif ($slug->slug == 'ndl') {
                return $this->processNdl($request, $slug);
            } elseif ($slug->slug == 'compare-images') {
                return $this->processImage($request, $slug);
            } elseif ($slug->slug == 'bank-account') {
                return $this->processBankAccount($request, $slug);
            } elseif ($slug->slug == 'phone-number') {
               return $this->processPhoneNumber($request, $slug);
            }
        } else {

        }
        // $ref = $this->GenerateRef();
        // $userWallet = Wallet::where('user_id', auth()->user()->id)->first();

        // $createVerify =  IdentityVerification::create([
        //     'verification_id' => $slug->id,
        //     'ref' => $ref,
        //     'pin' => $request->pin,
        //     'user_id' => auth()->user()->id,
        //     'fee' => $slug->fee,
        //     'discount' => $slug->discount,
        //     'status' => 'pending'
        // ]);

        // if ($createVerify) {
        //     if (isset($slug->discount) && $slug->discount > 0) {
        //         $amount = ($slug->discount * $slug->fee) / 100;
        //     } else {
        //         $amount = $slug->fee;
        //     }

        //     if ($userWallet->avail_balance < $amount) {
        //         Session::flash('alert', 'error');
        //         Session::flash('message', 'Your wallet is too low for this transaction');
        //         return back();
        //     } else {
        //         $this->chargeUser($amount, $ref, $slug->report_type);
        //     }
        // }







        //check if the reference exist on the local data
        // $res = IdentityVerificationDetail::where(['reference' => $request->reference, 'slug' => $slug->slug])->where('expires_at', '>=', now())->latest()->first();
        //  dd($res);
        // sleep(5);
        // if (!$res) {
        //     IdentityVerification::where(['user_id' => auth()->user()->id])->latest()->first()
        //         ->update(['status' => 'successful']);
        //     $data = $this->generateIdentityReport($slug);
        //     Session::flash('alert', 'success');
        //     Session::flash('message', $slug->slug . ' Verification Completed Successfully');
        //     return view('users.individual.identityVerify', $data)->with('verified', $res);
        // } else {
        //     $res =  $this->getIdentityVerify($request, $slug, $request->reference);
        //     //   return $res;
        //     if ($res['message'] == 'Successful') {
        //         IdentityVerification::where(['user_id' => auth()->user()->id])->latest()->first()
        //             ->update(['status' => 'successful']);
        //         $data = $this->generateIdentityReport($slug);
        //         //  $data['res'] = $res;
        //         //  dd($data);
        //         Session::flash('alert', 'success');
        //         Session::flash('message', $slug->slug . ' Verification Completed Successfully');
        //         return view('users.individual.identityVerify', $data);
        //     } else {
        //         $this->RefundUser($amount, $ref, $slug->report_type);
        //         Session::flash('alert', 'error');
        //         Session::flash('message', 'Verification failed, please confirm input');
        //         return redirect()->back();
        //     }
        // }
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

    public function getIdentityVerify($request, $slug, $reference)
    {
        $this->RedirectUser();
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
            CURLOPT_URL => "https://api.youverify.co/v1/identities/candidates/check",
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

        //  return $res;
        if ($res['status_code'] == 200) {
            if (isset($res['data']['response']['gender'])) {
                $gender = $res['data']['response']['gender'];
            } else {
                $gender = null;
            }
            if (isset($res['data']['response']['issued_date'])) {
                $issue_date = $res['data']['response']['issued_date'];
            } else {
                $issue_date = null;
            }
            if (isset($res['data']['response']['expiry_date'])) {
                $expiry_date = $res['data']['response']['expiry_date'];
            } else {
                $expiry_date  = null;
            }
            if (isset($res['data']['response']['educational_level'])) {
                $educational_level = $res['data']['response']['educational_level'];
            } else {
                $educational_level = null;
            }

            if (isset($res['data']['response']['marital_status'])) {
                $marital_status = $res['data']['response']['marital_status'];
            } else {
                $marital_status = null;
            }
            if (isset($res['data']['response']['expiry_date'])) {
                $expiry_date = $res['data']['response']['expiry_date'];
            } else {
                $expiry_date = null;
            }
            if (isset($res['data']['response']['issued_at'])) {
                $place_of_issue = $res['data']['response']['issued_at'];
            } else {
                $place_of_issue = null;
            }
            if (isset($res['data']['response']['birth_country'])) {
                $country = $res['data']['response']['birth_country'];
            } else {
                $country = null;
            }
            if (isset($res['data']['response']['document_number'])) {
                $document_number = $res['data']['response']['document_number'];
            } else {
                $document_number = null;
            }
            if (isset($res['data']['response']['residence_address_line1'])) {
                $address = $res['data']['response']['residence_address_line1'];
            } else {
                $address = null;
            }
            if (isset($res['data']['response']['profession'])) {
                $profession = $res['data']['response']['profession'];
            } else {
                $profession = null;
            }
            if (isset($res['data']['response']['birth_state'])) {
                $birth_state = $res['data']['response']['birth_state'];
            } else {
                $birth_state = null;
            }
            if (isset($res['data']['response']['residence_state'])) {
                $residence_state = $res['data']['response']['residence_state'];
            } else {
                $residence_state = null;
            }
            if (isset($res['data']['response']['first_name'])) {
                $fullname = $res['data']['response']['first_name'];
            } else {
                $fullname = $res['data']['response']['full_name'];
            }
            if (isset($res['data']['response']['middle_name'])) {
                $middle_name = $res['data']['response']['middle_name'];
            } else {
                $middle_name = null;
            }
            if (isset($res['data']['response']['last_name'])) {
                $last_name = $res['data']['response']['last_name'];
            } else {
                $last_name = null;
            }
            if (isset($res['data']['response']['dob'])) {
                $dob = $res['data']['response']['dob'];
            } else {
                $dob = null;
            }
            if (isset($res['data']['response']['mobile'])) {
                $phone = $res['data']['response']['mobile'];
            } else {
                $phone = null;
            }
            if (isset($res['data']['response']['tracking_id'])) {
                $tracking_id = $res['data']['response']['tracking_id'];
            } else {
                $tracking_id = null;
            }
            if (isset($res['data']['response']['tax_identification_number'])) {
                $tax_identification_number = $res['data']['response']['tax_identification_number'];
            } else {
                $tax_identification_number = null;
            }
            if (isset($res['data']['response']['first_state_of_issuance'])) {
                $first_state_of_issuance = $res['data']['response']['first_state_of_issuance'];
            } else {
                $first_state_of_issuance  = null;
            }
            $payload = json_encode($res['data']['response']);
            if (isset($res['data']['response']['photo'])) {
                $image = $res['data']['response']['photo']; // image base64 encoded
                $file = base64_decode($image);
                $safeName = time() . '.' . 'png';
                file_put_contents('assets/profile/' . $safeName, $file);
            } else {
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
                'reference' => $reference,
                'image_path' => $image,
                'slug' => $slug->slug,
                'user_id' => auth()->user()->id,
                'expires_at' => Carbon::now()->addDay(30),
                'payload' => $payload,
                'place_of_issue' => $place_of_issue,
                'issue_date' => $issue_date,
                'expiry_date' => $expiry_date,
                'country' => $country,
                'educational_level' => $educational_level,
                'marital_status' => $marital_status,
                'gender' => $gender,
                'document_number' => $document_number,
                'address' => $address,
                'profession' => $profession,
                'birth_state' => $birth_state,
                'residence_state' => $residence_state,
                'tracking_id' => $tracking_id,
                'tax_identification_number' => $tax_identification_number,
                'first_state_of_issuance' => $first_state_of_issuance
            ]);
            return $res;
        }
        return $res;
    }

    public function test()
    {
        $check = IdentityVerificationDetail::where(['first_name' => 'IBIYEMI'])->latest()->first();
        $file = base64_decode($check->image_path);
        $safeName = time() . '.' . 'jpg';
        $success = file_put_contents('C:\xampp\htdocs\oystercheck\assets/' . $safeName, $file);
        $dd = IdentityVerificationDetail::get();
        foreach ($dd as $mm) {
            IdentityVerificationDetail::where('id', $mm->id)
                ->update(['reference' => '66894827060']);
        }
        print $success;
    }

    public function verifyDetails($id)
    {
        $this->RedirectUser();
        $slug = IdentityVerification::where('id', decrypt($id))->first();
        $user = User::where('id', auth()->user()->id)->first();
        $data['slug'] = IdentityVerification::where('id', decrypt($id))->first();
        $data['success'] = IdentityVerification::where(['status' => 'successful', 'verification_id' => $slug->verification_id, 'user_id' => $user->id])->get();
        $data['failed'] = IdentityVerification::where(['status' => 'failed', 'verification_id' => $slug->verification_id, 'user_id' => $user->id])->get();
        $data['pending'] = IdentityVerification::where(['status' => 'pending', 'verification_id' => $slug->verification_id, 'user_id' => $user->id])->get();
        $data['logs'] = IdentityVerification::where(['user_id' => $user->id, 'verification_id' => $slug->verification_id])->latest()->get();
        $data['verified'] = IdentityVerificationDetail::where(['reference' => $slug->service_reference])->latest()->first();
        return view('users.individual.identitydetails', $data);
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

    protected function processBvn(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), [
            'pin' => 'bail|required|alpha_num|size:11',
            'first_name' => 'bail|nullable|string|alpha',
            'last_name' => 'bail|nullable|string|alpha',
            'validate_data' => 'bail|nullable|required_with:first_name,dob',
            'compare_image' => 'bail|nullable|required_with:image',
            'dob' => 'bail|nullable|date',
            'image' => 'bail|nullable|image|mimes:jpg,jpeg,png',
            'advance_search' => 'bail|nullable',
            'subject_consent' => 'bail|required|accepted'
        ]);

        if ($validator->fails()) {
            Session::flash('alert', 'error');
            Session::flash('msg', 'Failed! There was some errors in your input');
            return redirect()->back();
        }

        $ref = $this->GenerateRef();
        $userWallet = Wallet::where('user_id', auth()->user()->id)->first();
        $requestData = [
            'id' => $request->pin,
            'isSubjectConsent' => $request->subject_consent ? true : false,
        ];

        if ($request->validate_data) {
            $data = [];
            $request->first_name != null ? $data['firstName'] = $request->first_name : null;
            $request->last_name != null ? $data['lastName'] = $request->last_name : null;
            $request->dob != null ? $data['dateOfBirth'] = $request->dob : null;
            $requestData['validations']['data'] = $data;
        }
        if ($request->compare_image) {
            $selfie = [];
            if ($request->file('image')) {
                $image_url = cloudinary()->upload($request->file('image')->getRealPath(), [
                    'folder' => 'oysterchecks/identityVerifications/bvn'
                ])->getSecurePath();
                if ($image_url) {
                    $selfie['image'] = $image_url;
                    $requestData['validations']['selfie'] = $selfie;
                }
            }
        }
        if ($request->advance_search) {
            $should_retrieve_nin = true;
            $requestData['shouldRetrivedNin'] = $should_retrieve_nin;
        }

        DB::beginTransaction();
        try {
            $curl = curl_init();
            $encodedRequestData = json_encode($requestData, true);
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api.sandbox.youverify.co/v2/api/identity/ng/bvn",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 1,
                CURLOPT_TIMEOUT => 2180,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $encodedRequestData,
                CURLOPT_HTTPHEADER => [
                    "Content-Type: application/json",
                    "Token: N0R9AJ4L.PWYaM5cXggThkdCtkVSCsWz4fMsfeMIp6CKL"
                ],
            ]);

            $response = curl_exec($curl);
            if (curl_errno($curl)) {
                dd('error:' . curl_errno($curl));
            } else {
                $decodedResponse = json_decode($response, true);
                // dd($decodedResponse);
                if ($decodedResponse['success'] == true && $decodedResponse['statusCode'] == 200) {
                    if ($decodedResponse['data']['image'] != null) {
                        $response_image = cloudinary()->upload($decodedResponse['data']['image'], [
                            'folder' => 'oysterchecks/identityVerifications/bvn'
                        ])->getSecurePath();
                    }
                    BvnVerification::create([
                        'verification_id' => $slug->id,
                        'user_id' => auth()->user()->id,
                        'ref' => $ref,
                        'service_reference' => $decodedResponse['data']['id'] != null ? $decodedResponse['data']['id'] : null,
                        'validations' => isset($decodedResponse['data']['validations']) ? $decodedResponse['data']['validations'] : null,
                        'status' => $decodedResponse['data']['status'],
                        'reason' => $decodedResponse['data']['reason'] != null ? $decodedResponse['data']['reason'] : null,
                        'data_validation' => $decodedResponse['data']['dataValidation'],
                        'selfie_validation' => $decodedResponse['data']['selfieValidation'],
                        'first_name' => $decodedResponse['data']['firstName'] != null ? $decodedResponse['data']['firstName'] : null,
                        'middle_name' => $decodedResponse['data']['middleName'] != null ? $decodedResponse['data']['middleName'] : null,
                        'last_name' => $decodedResponse['data']['lastName'] != null ? $decodedResponse['data']['lastName'] : null,
                        'image' => $decodedResponse['data']['image'] != null ? $response_image : null,
                        'enrollment_branch' => $decodedResponse['data']['enrollmentBranch'] != null ? $decodedResponse['data']['enrollmentBranch'] : null,
                        'enrollment_institution' => $decodedResponse['data']['enrollmentInstitution'] != null ? $decodedResponse['data']['enrollmentInstitution'] : null,
                        'phone' => $decodedResponse['data']['mobile'] != null ? $decodedResponse['data']['mobile'] : null,
                        'dob' => $decodedResponse['data']['dateOfBirth'] != null ? $decodedResponse['data']['dateOfBirth'] : null,
                        'subject_consent' => true,
                        'pin' => $request->pin,
                        'should_retrieve_nin' => $decodedResponse['data']['shouldRetrivedNin'],
                        'type' => 'bvn',
                        'gender' => $decodedResponse['data']['gender'] != null ? $decodedResponse['data']['gender'] : null,
                        'country' => 'Nigeria',
                        'all_validation_passed' => $decodedResponse['data']['allValidationPassed'],
                        'requested_at' => $decodedResponse['data']['requestedAt'] != null ? $decodedResponse['data']['requestedAt'] : null,
                        'last_modified_at' => $decodedResponse['data']['lastModifiedAt'] != null ? $decodedResponse['data']['lastModifiedAt'] : null,
                    ]);

                    DB::commit();
                    Session::flash('alert', 'success');
                    Session::flash('message', 'Verification Successful');
                    return redirect()->route('identityIndex', $slug->slug);
                }else{

                }
            }
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    protected function processNip(Request $request, $slug)
    {

        $validator = Validator::make($request->all(), [
            'pin' => 'bail|required|alpha_num|size:9',
            'last_name' => 'bail|required|string|alpha',
            'first_name' => 'bail|nullable|string|alpha',
            'validate_data' => 'bail|nullable|required_with:first_name,dob',
            'compare_image' => 'bail|nullable|required_with:image',
            'dob' => 'bail|nullable|date',
            'image' => 'bail|nullable|image|mimes:jpg,jpeg,png',
            'subject_consent' => 'bail|required|accepted'
        ]);

        if ($validator->fails()) {
            // 
            Session::flash('alert', 'error');
            Session::flash('msg', 'Failed! There was some errors in your input');
            return redirect()->back();
        }
      //  dd($validator->errors());
        $ref = $this->GenerateRef();
        $userWallet = Wallet::where('user_id', auth()->user()->id)->first();
        $requestData = [
            'id' => $request->pin,
            'lastName'=>$request->last_name,
            'isSubjectConsent' => $request->subject_consent ? true : false,
        ];

        if ($request->validate_data) {
            $data = [];
            $request->first_name != null ? $data['firstName'] = $request->first_name : null;
            $request->dob != null ? $data['dateOfBirth'] = $request->dob : null;
            $requestData['validations']['data'] = $data;
        }
        if ($request->compare_image) {
            $selfie = [];
            if ($request->file('image')) {
                $image_url = cloudinary()->upload($request->file('image')->getRealPath(), [
                    'folder' => 'oysterchecks/identityVerifications/passport'
                ])->getSecurePath();
                if ($image_url) {
                    $selfie['image'] = $image_url;
                    $requestData['validations']['selfie'] = $selfie;
                }
            }
        }
       
        DB::beginTransaction();
        try {
            $curl = curl_init();
            $encodedRequestData = json_encode($requestData, true);
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api.sandbox.youverify.co/v2/api/identity/ng/passport",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 1,
                CURLOPT_TIMEOUT => 2180,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $encodedRequestData,
                CURLOPT_HTTPHEADER => [
                    "Content-Type: application/json",
                    "Token: N0R9AJ4L.PWYaM5cXggThkdCtkVSCsWz4fMsfeMIp6CKL"
                ],
            ]);

            $response = curl_exec($curl);
            if (curl_errno($curl)) {
                dd('error:' . curl_errno($curl));
            } else {
                $decodedResponse = json_decode($response, true);
                // dd($decodedResponse);
                if ($decodedResponse['success'] == true && $decodedResponse['statusCode'] == 200) {
                    if ($decodedResponse['data']['image'] != null) {
                        $response_image = cloudinary()->upload($decodedResponse['data']['image'], [
                            'folder' => 'oysterchecks/identityVerifications/passport'
                        ])->getSecurePath();
                    }
                    if ($decodedResponse['data']['signature'] != null) {
                        $response_signature = cloudinary()->upload($decodedResponse['data']['signature'], [
                            'folder' => 'oysterchecks/identityVerifications/passport'
                        ])->getSecurePath();
                    }
                    NipVerification::create([
                        'verification_id' => $slug->id,
                        'user_id' => auth()->user()->id,
                        'ref' => $ref,
                        'service_reference' => $decodedResponse['data']['id'],
                        'validations' => isset($decodedResponse['data']['validations']) ? $decodedResponse['data']['validations'] : null,
                        'status' => $decodedResponse['data']['status'],
                        'reason' => $decodedResponse['data']['reason'],
                        'data_validation' => $decodedResponse['data']['dataValidation'],
                        'selfie_validation' => $decodedResponse['data']['selfieValidation'],
                        'first_name' => $decodedResponse['data']['firstName'],
                        'middle_name' => $decodedResponse['data']['middleName'],
                        'last_name' => $decodedResponse['data']['lastName'],
                        'expired_date' => $decodedResponse['data']['expiredDate'],
                        'notify_when_id_expire' => $decodedResponse['data']['notifyWhenIdExpire'],
                        'image' => $decodedResponse['data']['image'] != null ? $response_image : null,
                        'signature' => $decodedResponse['data']['signature'] != null ? $response_signature : null,
                        'issued_at' => $decodedResponse['data']['issuedAt'],
                        'issued_date' => $decodedResponse['data']['issuedDate'],
                        'phone' => $decodedResponse['data']['mobile'],
                        'dob' => $decodedResponse['data']['dateOfBirth'],
                        'subject_consent' => true,
                        'pin' => $request->pin,
                        'type' => 'nip',
                        'gender' => $decodedResponse['data']['gender'] != null ? $decodedResponse['data']['gender'] : null,
                        'country' => 'Nigeria',
                        'all_validation_passed' => $decodedResponse['data']['allValidationPassed'],
                        'requested_at' => $decodedResponse['data']['requestedAt'],
                        'last_modified_at' => $decodedResponse['data']['lastModifiedAt'],
                    ]);
                    DB::commit();
                    Session::flash('alert', 'success');
                    Session::flash('message', 'Verification Successful');
                    return redirect()->route('identityIndex', $slug->slug);
                }else{

                }
            }
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    protected function processPvc(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), [
            'pin' => 'bail|required|alpha_num|size:19',
            'first_name' => 'bail|nullable|string|alpha',
            'last_name' => 'bail|nullable|string|alpha',
            'validate_data' => 'bail|nullable|required_with:first_name,dob',
            'dob' => 'bail|nullable|date',
            'subject_consent' => 'bail|required|accepted'
        ]);

        if ($validator->fails()) {
            Session::flash('alert', 'error');
            Session::flash('msg', 'Failed! There was some errors in your input');
            return redirect()->back();
        }

        $ref = $this->GenerateRef();
        $userWallet = Wallet::where('user_id', auth()->user()->id)->first();
        $requestData = [
            'id' => $request->pin,
            'isSubjectConsent' => $request->subject_consent ? true : false,
        ];

        if ($request->validate_data) {
            $data = [];
            $request->first_name != null ? $data['firstName'] = $request->first_name : null;
            $request->last_name != null ? $data['lastName'] = $request->last_name : null;
            $request->dob != null ? $data['dateOfBirth'] = $request->dob : null;
            $requestData['validations']['data'] = $data;
        }

        DB::beginTransaction();
        try {
            $curl = curl_init();
            $encodedRequestData = json_encode($requestData, true);
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api.sandbox.youverify.co/v2/api/identity/ng/pvc",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 1,
                CURLOPT_TIMEOUT => 2180,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $encodedRequestData,
                CURLOPT_HTTPHEADER => [
                    "Content-Type: application/json",
                    "Token: N0R9AJ4L.PWYaM5cXggThkdCtkVSCsWz4fMsfeMIp6CKL"
                ],
            ]);

            $response = curl_exec($curl);
            if (curl_errno($curl)) {
                dd('error:' . curl_errno($curl));
            } else {
                $decodedResponse = json_decode($response, true);
                // dd($decodedResponse);
                if ($decodedResponse['success'] == true && $decodedResponse['statusCode'] == 200) {
                    PvcVerification::create([
                        'verification_id' => $slug->id,
                        'user_id' => auth()->user()->id,
                        'ref' => $ref,
                        'service_reference' => $decodedResponse['data']['id'],
                        'validations' => isset($decodedResponse['data']['validations']) ? $decodedResponse['data']['validations'] : null,
                        'status' => $decodedResponse['data']['status'],
                        'reason' => $decodedResponse['data']['reason'],
                        'data_validation' => $decodedResponse['data']['dataValidation'],
                        'selfie_validation' => $decodedResponse['data']['selfieValidation'],
                        'first_name' => $decodedResponse['data']['firstName'],
                        'middle_name' => !empty($decodedResponse['data']['middleName']) ? $decodedResponse['data']['middleName'] : null,
                        'last_name' => $decodedResponse['data']['lastName'],
                        'dob' => $decodedResponse['data']['dateOfBirth'],
                        'subject_consent' => true,
                        'pin' => $request->pin,
                        'type' => 'pvc',
                        'country' => 'Nigeria',
                        'all_validation_passed' => $decodedResponse['data']['allValidationPassed'],
                        'requested_at' => $decodedResponse['data']['requestedAt'],
                        'last_modified_at' => $decodedResponse['data']['lastModifiedAt'],
                    ]);

                    DB::commit();
                    Session::flash('alert', 'success');
                    Session::flash('message', 'Verification Successful');
                    return redirect()->route('identityIndex', $slug->slug);
                }else{

                }
            }
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }


    protected function processNin(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), [
            'pin' => 'bail|required|numeric|digits:11',
            'first_name' => 'bail|nullable|string|alpha',
            'last_name' => 'bail|nullable|string|alpha',
            'validate_data' => 'bail|nullable|required_with:first_name,dob',
            'compare_image' => 'bail|nullable|required_with:image',
            'dob' => 'bail|nullable|date',
            'image' => 'bail|nullable|image|mimes:jpg,jpeg,png',
            'subject_consent' => 'bail|required|accepted'
        ]);

        if ($validator->fails()) {
            // dd($validator->errors());
            Session::flash('alert', 'error');
            Session::flash('message', 'Failed! There was some errors in your input');
            return redirect()->back();
        }

        $ref = $this->GenerateRef();
        $userWallet = Wallet::where('user_id', auth()->user()->id)->first();
        $requestData = [
            'id' => $request->pin,
            'isSubjectConsent' => $request->subject_consent ? true : false,
        ];

        if ($request->validate_data) {
            $data = [];
            $request->first_name != null ? $data['firstName'] = $request->first_name : null;
            $request->last_name != null ? $data['lastName'] = $request->last_name : null;
            $request->dob != null ? $data['dateOfBirth'] = $request->dob : null;
            $requestData['validations']['data'] = $data;
        }
        if ($request->compare_image) {
            $selfie = [];
            if ($request->file('image')) {
                $image_url = cloudinary()->upload($request->file('image')->getRealPath(), [
                    'folder' => 'oysterchecks/identityVerifications/nin'
                ])->getSecurePath();
                if ($image_url) {
                    $selfie['image'] = $image_url;
                    $requestData['validations']['selfie'] = $selfie;
                }
            }
        }

        DB::beginTransaction();
        try {
            $curl = curl_init();
            $encodedRequestData = json_encode($requestData, true);
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api.sandbox.youverify.co/v2/api/identity/ng/nin",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 1,
                CURLOPT_TIMEOUT => 2180,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $encodedRequestData,
                CURLOPT_HTTPHEADER => [
                    "Content-Type: application/json",
                    "Token: N0R9AJ4L.PWYaM5cXggThkdCtkVSCsWz4fMsfeMIp6CKL"
                ],
            ]);

            $response = curl_exec($curl);
            if (curl_errno($curl)) {
                dd('error:' . curl_errno($curl));
            } else {
                $decodedResponse = json_decode($response, true);
                // dd($decodedResponse);
                if ($decodedResponse['success'] == true && $decodedResponse['statusCode'] == 200) {
                    if ($decodedResponse['data']['image'] != null) {
                        $response_image = cloudinary()->upload($decodedResponse['data']['image'], [
                            'folder' => 'oysterchecks/identityVerifications/nin'
                        ])->getSecurePath();
                    }
                    if ($decodedResponse['data']['signature'] != null) {
                        $response_signature = cloudinary()->upload($decodedResponse['data']['signature'], [
                            'folder' => 'oysterchecks/identityVerifications/nin'
                        ])->getSecurePath();
                    }
                    NinVerification::create([
                        'verification_id' => $slug->id,
                        'user_id' => auth()->user()->id,
                        'ref' => $ref,
                        'service_reference' => $decodedResponse['data']['id'],
                        'address' => isset($decodedResponse['data']['address']) ? $decodedResponse['data']['address'] : null,
                        'validations' => isset($decodedResponse['data']['validations']) ? $decodedResponse['data']['validations'] : null,
                        'status' => $decodedResponse['data']['status'],
                        'reason' => $decodedResponse['data']['reason'],
                        'data_validation' => $decodedResponse['data']['dataValidation'],
                        'selfie_validation' => $decodedResponse['data']['selfieValidation'],
                        'first_name' => $decodedResponse['data']['firstName'],
                        'middle_name' => !empty($decodedResponse['data']['middleName']) ? $decodedResponse['data']['middleName'] : null,
                        'last_name' => $decodedResponse['data']['lastName'],
                        'image' => $decodedResponse['data']['image'] != null ? $response_image : null,
                        'signature' => $decodedResponse['data']['signature'] != null ? $response_signature : null,
                        'phone' => $decodedResponse['data']['mobile'],
                        'email' => $decodedResponse['data']['email'],
                        'birth_state' => $decodedResponse['data']['birthState'],
                        'nok_state' => $decodedResponse['data']['nokState'],
                        'religion' => $decodedResponse['data']['religion'],
                        'birth_lga' => $decodedResponse['data']['birthLGA'],
                        'birth_country' => $decodedResponse['data']['birthCountry'],
                        'dob' => $decodedResponse['data']['dateOfBirth'],
                        'subject_consent' => true,
                        'pin' => $request->pin,
                        'type' => 'nin',
                        'gender' => isset($decodedResponse['data']['gender']) ? $decodedResponse['data']['gender'] : null,
                        'country' => 'Nigeria',
                        'all_validation_passed' => $decodedResponse['data']['allValidationPassed'],
                        'requested_at' => $decodedResponse['data']['requestedAt'],
                        'last_modified_at' => $decodedResponse['data']['lastModifiedAt'],
                    ]);

                    DB::commit();
                    Session::flash('alert', 'success');
                    Session::flash('message', 'Verification Successful');
                    return redirect()->route('identityIndex', $slug->slug);
                }else{

                }
            }
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    protected function processNdl(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), [
            'pin' => 'bail|required|alpha_num|size:12',
            'first_name' => 'bail|nullable|string|alpha',
            'last_name' => 'bail|nullable|string|alpha',
            'validate_data' => 'bail|nullable|required_with:first_name,dob',
            'compare_image' => 'bail|nullable|required_with:image',
            'dob' => 'bail|nullable|date',
            'image' => 'bail|nullable|image|mimes:jpg,jpeg,png',
            'subject_consent' => 'bail|required|accepted'
        ]);

        if ($validator->fails()) {
            // dd($validator->errors());
            Session::flash('alert', 'error');
            Session::flash('message', 'Failed! There was some errors in your input');
            return redirect()->back();
        }

        $ref = $this->GenerateRef();
        $userWallet = Wallet::where('user_id', auth()->user()->id)->first();
        $requestData = [
            'id' => $request->pin,
            'isSubjectConsent' => $request->subject_consent ? true : false,
        ];

        if ($request->validate_data) {
            $data = [];
            $request->first_name != null ? $data['firstName'] = $request->first_name : null;
            $request->last_name != null ? $data['lastName'] = $request->last_name : null;
            $request->dob != null ? $data['dateOfBirth'] = $request->dob : null;
            $requestData['validations']['data'] = $data;
        }
        if ($request->compare_image) {
            $selfie = [];
            if ($request->file('image')) {
                $image_url = cloudinary()->upload($request->file('image')->getRealPath(), [
                    'folder' => 'oysterchecks/identityVerifications/nin'
                ])->getSecurePath();
                if ($image_url) {
                    $selfie['image'] = $image_url;
                    $requestData['validations']['selfie'] = $selfie;
                }
            }
        }

        DB::beginTransaction();
        try {
            $curl = curl_init();
            $encodedRequestData = json_encode($requestData, true);
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api.sandbox.youverify.co/v2/api/identity/ng/drivers-license",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 1,
                CURLOPT_TIMEOUT => 2180,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $encodedRequestData,
                CURLOPT_HTTPHEADER => [
                    "Content-Type: application/json",
                    "Token: N0R9AJ4L.PWYaM5cXggThkdCtkVSCsWz4fMsfeMIp6CKL"
                ],
            ]);

            $response = curl_exec($curl);
            if (curl_errno($curl)) {
                dd('error:' . curl_errno($curl));
            } else {
                $decodedResponse = json_decode($response, true);
                // dd($decodedResponse);
                if ($decodedResponse['success'] == true && $decodedResponse['statusCode'] == 200) {
                    if ($decodedResponse['data']['image'] != null) {
                        $response_image = cloudinary()->upload($decodedResponse['data']['image'], [
                            'folder' => 'oysterchecks/identityVerifications/nin'
                        ])->getSecurePath();
                    }
                    NdlVerification::create([
                        'verification_id' => $slug->id,
                        'user_id' => auth()->user()->id,
                        'ref' => $ref,
                        'service_reference' => $decodedResponse['data']['id'],
                        'validations' => isset($decodedResponse['data']['validations']) ? $decodedResponse['data']['validations'] : null,
                        'status' => $decodedResponse['data']['status'],
                        'reason' => $decodedResponse['data']['reason'],
                        'data_validation' => $decodedResponse['data']['dataValidation'],
                        'selfie_validation' => $decodedResponse['data']['selfieValidation'],
                        'first_name' => $decodedResponse['data']['firstName'],
                        'middle_name' => !empty($decodedResponse['data']['middleName']) ? $decodedResponse['data']['middleName'] : null,
                        'last_name' => $decodedResponse['data']['lastName'],
                        'expired_date' => $decodedResponse['data']['expiredDate'],
                        'issued_date' => $decodedResponse['data']['issuedDate'],
                        'state_of_issuance' => $decodedResponse['data']['stateOfIssuance'],
                        'notify_when_id_expire' => $decodedResponse['data']['notifyWhenIdExpire'],
                        'image' => $decodedResponse['data']['image'] != null ? $response_image : null,
                        'phone' => $decodedResponse['data']['mobile'],
                        'email' => $decodedResponse['data']['email'],
                        'dob' => $decodedResponse['data']['dateOfBirth'],
                        'subject_consent' => true,
                        'pin' => $request->pin,
                        'type' => 'nin',
                        'gender' => isset($decodedResponse['data']['gender']) ? $decodedResponse['data']['gender'] : null,
                        'country' => 'Nigeria',
                        'all_validation_passed' => $decodedResponse['data']['allValidationPassed'],
                        'requested_at' => $decodedResponse['data']['requestedAt'],
                        'last_modified_at' => $decodedResponse['data']['lastModifiedAt'],
                    ]);

                    DB::commit();
                    Session::flash('alert', 'success');
                    Session::flash('message', 'Verification Successful');
                    return redirect()->route('identityIndex', $slug->slug);
                }else{

                }
            }
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    protected function processPhoneNumber(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), [
            'phone_number' => 'bail|required|numeric|digits:11',
            'advance_search' => 'bail|nullable',
            'subject_consent' => 'bail|required|accepted'
        ]);

        if ($validator->fails()) {
            // dd($validator->errors());
            Session::flash('alert', 'error');
            Session::flash('message', 'Failed! There was some errors in your input');
            return redirect()->back();
        }

        $ref = $this->GenerateRef();
        $userWallet = Wallet::where('user_id', auth()->user()->id)->first();
        $requestData = [
            'mobile' => $request->phone_number,
            'isSubjectConsent' => $request->subject_consent ? true : false,
        ];

        if ($request->advance_search) {
            $advance_search = true;
            $requestData['advanceSearch'] = $advance_search;
        }

        DB::beginTransaction();
        try {
            $curl = curl_init();
            $encodedRequestData = json_encode($requestData, true);
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api.sandbox.youverify.co/v2/api/identity/ng/phone",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 1,
                CURLOPT_TIMEOUT => 2180,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $encodedRequestData,
                CURLOPT_HTTPHEADER => [
                    "Content-Type: application/json",
                    "Token: N0R9AJ4L.PWYaM5cXggThkdCtkVSCsWz4fMsfeMIp6CKL"
                ],
            ]);

            $response = curl_exec($curl);
            if (curl_errno($curl)) {
                dd('error:' . curl_errno($curl));
            } else {
                $decodedResponse = json_decode($response, true);
                // dd($decodedResponse);
                if ($decodedResponse['success'] == true && $decodedResponse['statusCode'] == 200) {
                    if (isset($decodedResponse['data']['image']) && $decodedResponse['data']['image'] != null) {
                        $response_image = cloudinary()->upload($decodedResponse['data']['image'], [
                            'folder' => 'oysterchecks/identityVerifications/phoneNumber'
                        ])->getSecurePath();
                    }
                    PhoneVerification::create([
                        'verification_id' => $slug->id,
                        'user_id' => auth()->user()->id,
                        'ref' => $ref,
                        'service_reference' => $decodedResponse['data']['id'],
                        'address' => isset($decodedResponse['data']['address']) ? $decodedResponse['data']['address'] : null,
                        'validations' => isset($decodedResponse['data']['validations']) ? $decodedResponse['data']['validations'] : null,
                        'status' => $decodedResponse['data']['status'],
                        'reason' => $decodedResponse['data']['reason'],
                        'data_validation' => $decodedResponse['data']['dataValidation'],
                        'selfie_validation' => $decodedResponse['data']['selfieValidation'],
                        'phone_details' => isset($decodedResponse['data']['phoneDetails']) ? $decodedResponse['data']['phoneDetails'] : null,
                        'first_name' => isset($decodedResponse['data']['firstName']) ? $decodedResponse['data']['firstName'] : null,
                        'middle_name' => isset($decodedResponse['data']['middleName']) && !empty($decodedResponse['data']['middleName']) ? $decodedResponse['data']['middleName'] : null,
                        'last_name' => isset($decodedResponse['data']['lastName']) ? $decodedResponse['data']['lastName'] : null,
                        'image' => isset($decodedResponse['data']['image']) && $decodedResponse['data']['image'] != null ? $response_image : null,
                        'email' => isset($decodedResponse['data']['email']) ? $decodedResponse['data']['email'] : null,
                        'nin' => isset($decodedResponse['data']['nin']) ? $decodedResponse['data']['nin'] : null,
                        'birth_state' => isset($decodedResponse['data']['birthState']) ? $decodedResponse['data']['birthState'] : null,
                        'religion' => isset($decodedResponse['data']['religion']) ? $decodedResponse['data']['religion'] : null,
                        'birth_lga' => isset($decodedResponse['data']['birthLGA']) ? $decodedResponse['data']['birthLGA'] : null,
                        'birth_country' => isset($decodedResponse['data']['birthCountry']) ? $decodedResponse['data']['birthCountry'] : null,
                        'dob' => isset($decodedResponse['data']['dateOfBirth']) ? $decodedResponse['data']['dateOfBirth'] : null,
                        'subject_consent' => true,
                        'phone_number' => $request->phone_number,
                        'type' => 'phone-number',
                        'gender' => isset($decodedResponse['data']['gender']) ? $decodedResponse['data']['gender'] : null,
                        'country' => 'Nigeria',
                        'all_validation_passed' => $decodedResponse['data']['allValidationPassed'],
                        'advance_search' => $request->advance_search ? true : false,
                        'requested_at' => $decodedResponse['data']['requestedAt'],
                        'last_modified_at' => $decodedResponse['data']['lastModifiedAt'],
                    ]);

                    DB::commit();
                    Session::flash('alert', 'success');
                    Session::flash('message', 'Verification Successful');
                    return redirect()->route('identityIndex', $slug->slug);
                }else{

                }
            }
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    protected function processBankAccount(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), [
            'account_number' => 'bail|required|numeric|digits:10',
            'bank' => 'bail|required|alpha_num',
            'bank_name'=>'bail|required|string',
            'subject_consent' => 'bail|required|accepted'
        ]);
        // dd($request->all());
        if ($validator->fails()) {
            // dd($validator->errors());
            Session::flash('alert', 'error');
            Session::flash('message', 'Failed! There was some errors in your input');
            return redirect()->back();
        }

        $ref = $this->GenerateRef();
        $userWallet = Wallet::where('user_id', auth()->user()->id)->first();
        $requestData = [
            'accountNumber' => $request->account_number,
            'bankCode'=> $request->bank,
            'isSubjectConsent' => $request->subject_consent ? true : false,
        ];

        DB::beginTransaction();
        try {
            $curl = curl_init();
            $encodedRequestData = json_encode($requestData, true);
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api.sandbox.youverify.co/v2/api/identity/ng/bank-account-number/resolve",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 1,
                CURLOPT_TIMEOUT => 2180,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $encodedRequestData,
                CURLOPT_HTTPHEADER => [
                    "Content-Type: application/json",
                    "Token: N0R9AJ4L.PWYaM5cXggThkdCtkVSCsWz4fMsfeMIp6CKL"
                ],
            ]);

            $response = curl_exec($curl);
            if (curl_errno($curl)) {
                dd('error:' . curl_errno($curl));
            } else {
                $decodedResponse = json_decode($response, true);
                // dd($decodedResponse);
                if ($decodedResponse['success'] == true && $decodedResponse['statusCode'] == 200) {
                    BankVerification::create([
                        'verification_id' => $slug->id,
                        'user_id' => auth()->user()->id,
                        'ref' => $ref,
                        'service_reference' => $decodedResponse['data']['id'],
                        'status' => $decodedResponse['data']['status'],
                        'reason' => $decodedResponse['data']['reason'],
                        'data_validation' => $decodedResponse['data']['dataValidation'],
                        'selfie_validation' => $decodedResponse['data']['selfieValidation'],
                        'subject_consent' => true,
                        'account_number' => $request->account_number,
                        'bank_code' => $request->bank,
                        'bank_name' => $request->bank_name,
                        'bank_details' => isset($decodedResponse['data']['bankDetails']) ? $decodedResponse['data']['bankDetails'] : null,
                        'type' => 'bank-account',
                        'country' => 'Nigeria',
                        'all_validation_passed' => $decodedResponse['data']['allValidationPassed'],
                        'requested_at' => $decodedResponse['data']['requestedAt'],
                        'last_modified_at' => $decodedResponse['data']['lastModifiedAt'],
                    ]);

                    DB::commit();
                    Session::flash('alert', 'success');
                    Session::flash('message', 'Verification Successful');
                    return redirect()->route('identityIndex', $slug->slug);
                }else{

                }
            }
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    protected function processImage(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), [
            'first_image' => 'bail|required|image|mimes:jpg,jpeg,png',
            'second_image' => 'bail|required|image|mimes:jpg,jpeg,png',
            'subject_consent' => 'bail|required|accepted'
        ]);

        if ($validator->fails()) {
            dd($validator->errors());
            Session::flash('alert', 'error');
            Session::flash('message', 'Failed! There was some errors in your input');
            return redirect()->back();
        }

        $ref = $this->GenerateRef();
        $userWallet = Wallet::where('user_id', auth()->user()->id)->first();
        $requestData = [
            'isSubjectConsent' => $request->subject_consent ? true : false,
        ];

        if ($request->file('first_image') && $request->file('second_image')) {
            $first_image_url = cloudinary()->upload($request->file('first_image')->getRealPath(), [
                'folder' => 'oysterchecks/identityVerifications/facialCompare'
            ])->getSecurePath();

            $second_image_url = cloudinary()->upload($request->file('second_image')->getRealPath(), [
                'folder' => 'oysterchecks/identityVerifications/facialCompare'
            ])->getSecurePath();

            if ($first_image_url && $second_image_url) {
                $requestData['image1'] = $first_image_url;
                $requestData['image2'] = $second_image_url;
            }
        }

        DB::beginTransaction();
        try {
            $curl = curl_init();
            $encodedRequestData = json_encode($requestData, true);
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api.sandbox.youverify.co/v2/api/identity/compare-image",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 1,
                CURLOPT_TIMEOUT => 2180,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $encodedRequestData,
                CURLOPT_HTTPHEADER => [
                    "Content-Type: application/json",
                    "Token: N0R9AJ4L.PWYaM5cXggThkdCtkVSCsWz4fMsfeMIp6CKL"
                ],
            ]);

            $response = curl_exec($curl);
            if (curl_errno($curl)) {
                dd('error:' . curl_errno($curl));
            } else {
                $decodedResponse = json_decode($response, true);
                // dd($decodedResponse);
                if ($decodedResponse['success'] == true && $decodedResponse['statusCode'] == 200) {
                    ImageVerification::create([
                        'verification_id' => $slug->id,
                        'user_id' => auth()->user()->id,
                        'ref' => $ref,
                        'service_reference' => $decodedResponse['data']['id'],
                        'status' => $decodedResponse['data']['status'],
                        'reason' => $decodedResponse['data']['reason'],
                        'selfie_validation' => $decodedResponse['data']['selfieValidation'],
                        'image_comparison' => $decodedResponse['data']['imageComparison'],
                        'subject_consent' => true,
                        'all_validation_passed' => $decodedResponse['data']['allValidationPassed'],
                        'type' => 'compare-images',
                        'country' => 'Nigeria',
                        'all_validation_passed' => $decodedResponse['data']['allValidationPassed'],
                        'requested_at' => $decodedResponse['data']['requestedAt'],
                        'last_modified_at' => $decodedResponse['data']['lastModifiedAt'],
                    ]);

                    DB::commit();
                    Session::flash('alert', 'success');
                    Session::flash('message', 'Verification Successful');
                    return redirect()->route('identityIndex', $slug->slug);
                }else{

                }
            }
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    public function verificationReport($slug, $verificationId)
    {
        $this->RedirectUser();
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
}
