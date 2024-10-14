<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AddressVerification;
use App\Traits\GenerateRef;
use App\Models\ActivityLog;
use App\Models\CandidateVerification;
use App\Models\IdentityVerification;
use App\Models\BusinessVerification;
use App\Models\CacVerification;
use App\Models\TinVerification;
use Illuminate\Support\Facades\Hash;
use App\Models\BusinessVerificationDetail;
use App\Models\AddressVerificationDetail;
use App\Models\IdentityVerificationDetail;
use App\Models\PepSactionVerification;
use App\Models\Transaction;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use App\Models\CandidateService;
use App\Models\FundRequest;
use App\Models\Verification;
use App\Models\NipVerification;
use App\Models\PvcVerification;
use App\Models\BvnVerification;
use App\Models\NinVerification;
use App\Models\NdlVerification;
use App\Models\PhoneVerification;
use App\Models\BankVerification;
use App\Models\ImageVerification;
use App\Models\Role;
use Illuminate\Support\Facades\Mail;
use App\Models\Wallet;
use App\Models\Notification;
use App\Models\Business;
use App\Models\Candidate;
use App\Models\Client;
use App\Models\Profile;
use App\Models\Service;
use App\Models\UserActivity;
use App\Traits\VerifyIndex;
use App\Mail\UserReg;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class AdminController extends Controller
{
    //
    use GenerateRef;
    use VerifyIndex;

    public function __construct()
    {
        $this->middleware('admin');
 
    }


    public function Index(){
        $data = $this->IdentityIndex(); 
        
        return view('admin.verifications.index', $data, );
    }


    public function sendMail($data){
        Mail::to($data['email'])->send(new UserReg($data));
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
            $image_url  = 'default.png';
           }
        Client::create([
            'company_name' => $request->company_name,
            'company_email' => $request->company_email,
            'company_address' => $request->company_address,
            'company_phone' => $request->company_phone,
            'user_id' => $user->id,
            'image'=>$image_url 
        ]); 

        Session::flash('alert', 'success');
        Session::flash('message', 'Client created successfully');
        return back();


    }

    public function administratorIndex(){
        return view('admin.admin.index')->with('admins', Admin::get());
    }

    public function AdministratorCreate(){

        return view('admin.admin.create')->with('roles', Role::get());
    }

    public function AdministratorStore(Request $request){

        $valid = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
            'company_name' => 'required',
            'company_email' =>'required',
        ]);

        if($valid->fails()){
            Session::flash('alert', 'error');
            Session::flash('message', 'Some Fields are missing');
            return redirect()->back()->withInput($request->all())->withErrors($valid);
        }

        $pass = $this->generatePass($request->name);
        $data = [
            'name' => $request->name,
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
        Admin::create([
            'company_name' => $request->company_name,
            'company_email' => $request->company_email,
            'company_address' => $request->company_address,
            'company_phone' => $request->company_phone,
            'role' => $request->role,
            'user_id' => $user->id,
        ]);
        Session::flash('alert', 'success');
        Session::flash('message', 'Administrator created successfully');
        return back();

    }

    public function FileDownload($id){
        $file = CandidateVerification::where('id', decrypt($id))->first();
        $location = public_path()."/assets/candidates/".$file->doc;
        return response()->download($location);
    }

    public function statusUpdate(Request $request, $id){
        $status = CandidateVerification::where('id', decrypt($id))->first();
        if($request->status == 1 ){
            CandidateVerification::where('id', $status->id)
                ->update([
                'status' => 'approved'
                ]);
            Session::flash('alert', 'success');
            Session::flash('message', 'Document Marked as Approved');
            return back();
        }else if($request->status == 2){
            CandidateVerification::where('id', $status->id)
            ->update([
            'status' => 'failed'
            ]);
        Session::flash('alert', 'warning');
        Session::flash('message', 'Document Marked as Rejected');
            return back();
        }else{
            Session::flash('alert', 'info');
            Session::flash('message', 'No changes made, check your request and try again');
            return back();

        }
    }

    public function QAUpdate(Request $request, $id){
        $status = CandidateVerification::where('id', decrypt($id))->first();
        if($request->qa == 1 ){
            CandidateVerification::where('id', $status->id)
                ->update([
                    'QA_approved' => 'approved'
                ]);
            Session::flash('alert', 'success');
            Session::flash('message', 'Document Marked as Approved');
            return back();
        }else if($request->qa == 2){
            CandidateVerification::where('id', $status->id)
            ->update([
                'QA_approved' => 'failed'
            ]);
        Session::flash('alert', 'warning');
        Session::flash('message', 'Document Marked as Rejected');
            return back();
        }else{
            Session::flash('alert', 'info');
            Session::flash('message', 'No changes made, check your request and try again');
            return back();

        }
    }


    public function paymentUpdate(Request $request, $id){
        $status = CandidateVerification::where('id', decrypt($id))->first();
        if($request->payment == 1 ){
            CandidateVerification::where('id', $status->id)
                ->update([
                    'is_paid' => 1
                ]);
            Session::flash('alert', 'success');
            Session::flash('message', 'Document Marked as Paid');
            return back();
        }else if($request->payment == 2){
            CandidateVerification::where('id', $status->id)
            ->update([
                'is_paid' => 2
            ]);
        Session::flash('alert', 'warning');
        Session::flash('message', 'Document Marked as Not Paid');
            return back();
        }else{
            Session::flash('alert', 'info');
            Session::flash('message', 'No changes made, check your request and try again');
            return back();

        }
    }


    public function QAReview(Request $request, $id){
            $status = CandidateVerification::where('id', decrypt($id))->first();
            if(isset($request->reviews) ){
                CandidateVerification::where('id', $status->id)
                    ->update([
                        'QA_review' => $request->reviews
                    ]);
        }
        Session::flash('alert', 'success');
        Session::flash('message', 'Document Review Saved');
        return back();
    }

        public function VerifyCandidate(Request $request, $id){
            $status = CandidateVerification::where(['user_id' => decrypt($id), 'status' => 'pending'])->get();  
            if(!isset($status)){
                Session::flash('alert', 'error');
                Session::flash('message', 'Some documents are still pending, please review');
                return back();
            } 
            if($request->verify == 1 ){
              //  dd(decrypt($id));
                Candidate::where('user_id', decrypt($id))
                    ->update([
                        'status' => 'verified'
                    ]);
                    Session::flash('alert', 'success');
                    Session::flash('message', 'Candidate documents verified successfully');
                    return back();
            }elseif($request->verify == 2){
                Candidate::where('user_id', decrypt($id))
                    ->update([
                        'status' => 'rejected'
                    ]);
                    Session::flash('alert', 'error');
                    Session::flash('message', 'Candidate documents Marked as Rejected');
                    return back();
            }else{
                Session::flash('alert', 'info');
                Session::flash('message', 'No changes made, check input and try again');
                return back();
            }
        }

    public function UserTransactions(){
        $data['balances'] = Wallet::first();
        $data['transactions'] = Transaction::latest()->get(); 
        return view('users.accounts.transactions', $data);
    }

    public function UserReports(){
        $data['labels'] = ['Identity Verification', 'Business Verification', 'Address Verification'];
        // $data['data2023'] = [65, 59, 80, 81, 56];
        // $data['data2024'] = [28, 48, 40, 19, 86];
        // $data['data2025'] = [20, 40, 30, 10, 70];

        $data['transactions'] = Transaction::latest()->get();
        $data['logOfUsers'] = ActivityLog::count();
        $data['activeUsers'] = User::count(); 
        $data['recentlyRegisteredUsers'] = User::where('created_at', '>=', Carbon::now()->subDays(30))->count();
        $data['inactiveUsers'] = User::where('role_id', User::ADMIN_SUSPENDED)->count();


        $data['totalUser'] = User::count();

        $PepSactionVerification = PepSactionVerification::count();
        $candidate = CandidateVerification::count();
        $nip = NipVerification::count();
        $pvc = PvcVerification::count();
        $bvn = BvnVerification::count();
        $nin = NinVerification::count();
        $ndl = NdlVerification::count();
        $phone = PhoneVerification::count();
        $bank = BankVerification::count();
        $compareImage = ImageVerification::count();
        $cac = CacVerification::count();
        $tin = TinVerification::count();
        $addressIndividual = AddressVerification::where('slug','individual-address')->count();
        $addressReference = AddressVerification::where('slug','reference-address')->count();
        $addressBusiness = AddressVerification::where('slug','business-address')->count();

        $identityVerification = $candidate + $nip + $pvc + $bvn + $nin + $ndl + $phone + $bank + $compareImage;
        $businessVerification = $cac + $tin; 
        $addressVerification = $addressIndividual + $addressReference + $addressBusiness; 

        $data['totalReports'] = $identityVerification + $businessVerification + $addressVerification + $PepSactionVerification;

        //Success
        $PepSactionSuccess = PepSactionVerification::where('status', ['cleared'])->count();
        $candidateApproved = CandidateVerification::where('status', ['approved'])->count();
        $candidateSuccess = CandidateVerification::where('status', ['success'])->count();
        $nipSuccess = NipVerification::where('status', 'found')->count();
        $pvcSuccess = PvcVerification::where('status', 'found')->count();
        $bvnSuccess = BvnVerification::whereIn('status', ['found'])->count();
        $ninSuccess = NinVerification::where('status', 'found')->count();
        $ndlSuccess = NdlVerification::where('status', 'found')->count();
        $phoneSuccess = PhoneVerification::where('status', 'found')->count();
        $bankSuccess = BankVerification::where('status', 'found')->count();

        $compareImageSuccess = ImageVerification::where('status', 'found')->count();
        $cacSuccess = CacVerification::where('status', 'found')->count();
        $tinSuccess = TinVerification::where('status', 'found')->count();

        $addressIndividualSucsess = AddressVerification::where(['slug'=>'individual-address', 'status'=>'completed'])->count();
        $addressReferenceSucsess = AddressVerification::where(['slug' => 'reference-address', 'status'=>'completed'])->count();
        $addressBusinessSucsess = AddressVerification::where(['slug' => 'business-address', 'status'=>'completed'])->count();
        //Pending
        $PepSactionPending = PepSactionVerification::where('status', ['not_cleared'])->count();
        $candidatePending = CandidateVerification::where('status', 'pending')->count();
        $nipPending = NipVerification::where('status', 'pending')->count();
        $pvcPending = PvcVerification::where('status', 'pending')->count();
        $bvnPending = BvnVerification::where('status', 'pending')->count();
        $ninPending = NinVerification::where('status', 'pending')->count();
        $ndlPending = NdlVerification::where('status', 'pending')->count();
        $phonePending = PhoneVerification::where('status', 'pending')->count();
        $bankPending = BankVerification::where('status', 'pending')->count();

        $compareImagePending = ImageVerification::where('status', 'pending')->count();
        $cacPending = CacVerification::where('status', 'pending')->count();
        $tinPending = TinVerification::where('status', 'pending')->count();

        $addressIndividualPending = AddressVerification::where(['slug'=>'individual-address', 'status'=>'pending'])->count();
        $addressReferencePending = AddressVerification::where(['slug' => 'reference-address', 'status'=>'pending'])->count();
        $addressBusinessPending = AddressVerification::where(['slug' => 'business-address', 'status'=>'pending'])->count();
       
        //Failed
        $PepSactionFailed = PepSactionVerification::where('status', ['review_required'])->count();
        $candidateFailed = CandidateVerification::where('status', 'not_found')->count();
        $nipFailed = NipVerification::where('status', 'not_found')->count();
        $pvcFailed = PvcVerification::where('status', 'not_found')->count();
        $bvnFailed = BvnVerification::where('status', 'not_found')->count();
        $ninFailed = NinVerification::where('status', 'not_found')->count();
        $ndlFailed = NdlVerification::where('status', 'not_found')->count();
        $phoneFailed = PhoneVerification::where('status', 'not_found')->count();
        $bankFailed = BankVerification::where('status', 'not_found')->count();

        $compareImageFailed = ImageVerification::where('status', 'not_found')->count();
        $cacFailed = CacVerification::where('status', 'not_found')->count();
        $tinFailed = TinVerification::where('status', 'not_found')->count();

        $addressIndividualFailed = AddressVerification::where(['slug'=>'individual-address', 'status'=>'failed'])->count();
        $addressReferenceFailed = AddressVerification::where(['slug' => 'reference-address', 'status'=>'failed'])->count();
        $addressBusinessFailed = AddressVerification::where(['slug' => 'business-address', 'status'=>'failed'])->count();
       

        //TotalSuccess
        $IdentitySuccess = $PepSactionSuccess + $candidateApproved + $candidateSuccess + $nipSuccess + $pvcSuccess + $bvnSuccess + $ninSuccess + $ndlSuccess + $phoneSuccess + $bankSuccess + $compareImageSuccess;
        $businessSuccess = $cacSuccess + $tinSuccess ;
        $addressSuccess = $addressIndividualSucsess + $addressReferenceSucsess + $addressBusinessSucsess;
        //TotalPending
        $identityPending = $PepSactionPending + $candidatePending + $nipPending + $pvcPending + $bvnPending + $ninPending + $ndlPending +$phonePending + $bankPending;
        $businessPending = $compareImagePending + $cacPending + $tinPending;
        $addressPending = $addressIndividualPending + $addressReferencePending + $addressBusinessPending;
     
        //TotalFailed
        $identityFailed = $PepSactionFailed + $candidateFailed + $nipFailed + $pvcFailed + $bvnFailed + $ninFailed + $ndlFailed +$phoneFailed + $bankFailed;
        $businessFailed = $compareImageFailed + $cacFailed + $tinFailed;
        $addressFailed = $addressIndividualFailed + $addressReferenceFailed + $addressBusinessFailed;
     
        $data['totalSuccess'] = $IdentitySuccess +  $businessSuccess + $addressSuccess; 
        $data['totalPending'] =  $identityPending + $businessPending + $addressPending; 
        $data['totalFailed'] =  $identityFailed+ $businessFailed + $addressFailed; 
        
        $data['data2023'] = [$identityVerification, 0, 0, 0, 0]; 
        $data['data2024'] = [0, $businessVerification, 0, 0, 0];
        $data['data2025'] = [0, 0, $addressVerification, 0, 0];

        return view('admin.auditReport.index', $data);
    }

    public function UserActivity(){ 
        $data['logOfUsers'] = ActivityLog::latest()->get();
       return view('admin.activityReport.index', $data);
    }

    public function Profile(){
        $admin = Admin::first(); 
        return view('admin.settings.index')->with('admin', $admin);
    }

    public function StorePersonalInfo(Request $request)
    {
        try{
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $request->user_id,
            'company_phone' => 'required|string|max:15',
        ]);

        // Find the Admin by ID and load its related User
        $admin = Admin::findOrFail($request->id);
        $user = $admin->user;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        $admin->company_phone = $request->company_phone;
        $admin->save();

            return redirect()->back()->with('success', 'Profile updated successfully.');
        }catch(Exception $e){
            return redirect()->back()->with('success', 'Somwrginf went wrong.'.$e->getMessage());

        }
    }
    public function getTransaction(){
        $data['balances'] = Wallet::first();
        $data['transactions'] = Transaction::latest()->get(); 
        return view('admin.transaction.index', $data);
    }

    public function download()
    {
        $transactions = Transaction::latest()->get(); 
        $pdf = Pdf::loadView('admin.transaction.transaction_pdf', compact('transactions'));

        return $pdf->download('transaction_history_' . now()->format('Ymd_His') . '.pdf');
    }
}
