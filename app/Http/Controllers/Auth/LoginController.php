<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use App\Models\ActivityLog;
use Symfony\Component\HttpFoundation\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    protected function authenticated(Request $request, $user)
    {
        ActivityLog::create([
            'user_id' => $user->id,
            'activity' => 'New Login Request',
            'ip_address' => $request->Ip(),
            'user_agent' => $request->userAgent(),
        ]);

        $get_user_db = User::find($user->id);
        if($get_user_db->email_verified == null || $get_user_db->email_verified == false){
            $get_user_db->update([
                'email_verified_at' => now('Africa/Lagos'),
                'email_verified' => true,
            ]);
            $get_user_db->save();
            return redirect()->route('instructions');
        }

        return redirect()->intended($this->redirectTo);
        
    }
}
