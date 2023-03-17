<?php

namespace App\Providers;

use App\Models\Verification;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use App\Models\Notification;
use App\Models\Client;
use App\Models\Wallet;
use Illuminate\Support\Composer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        if ($this->app->environment('production')){
            URL::forceScheme('https');
        }
        //
        view()->composer('*', function($view){
            if (Auth::check()) {
                $data['notify'] = Notification::where(['user_id' => auth()->user()->id])->latest()->take(4)->get();
                $user = User::where('id', auth()->user()->id)->first();
                if($user->user_type == 1){
                    $data['profile_image'] = 'default.png';
                    $data['client_balance'] = Wallet::where('user_id', $user->id)->first();
                }elseif($user->user_type == 2){
                    $img = Client::where('user_id', $user->id)->first();
                    $data['profile_image'] = $img->image;
                    $data['client_balance'] = Wallet::where('user_id', $user->id)->first();
                }else{
                    $data['profile_image'] ='default.png';
                    $data['client_balance'] = Wallet::where('user_id', $user->id)->first();
                }
                $view->with($data);
            }

            });
            $data['sidebar'] = Verification::where('report_type', '!=', 'business')->where('report_type', '!=', 'address')->get();
            $data['sidebars'] = Verification::get();
            $data['business'] = Verification::where('report_type', '=', 'business')->get();
            $data['address'] = Verification::where('report_type', '=', 'address')->get();
            view::share($data);


    }
}
