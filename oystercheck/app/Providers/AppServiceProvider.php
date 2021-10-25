<?php

namespace App\Providers;

use App\Models\Verification;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use App\Models\Notification;
use Illuminate\Support\Composer;
use Illuminate\Support\Facades\Auth;
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
        //
        view()->composer('*', function($view){
            if (Auth::check()) {
                $notification = Notification::where(['user_id' => auth()->user()->id])->latest()->take(4)->get();
                $view->with('notify', $notification);
            }

            });
            $data['sidebar'] = Verification::where('report_type', '!=', 'business')->where('report_type', '!=', 'address')->get();
            $data['business'] = Verification::where('report_type', '=', 'business')->get();
            $data['address'] = Verification::where('report_type', '=', 'address')->get();
            view::share($data);

    }
}
