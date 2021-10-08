<?php

namespace App\Providers;

use App\Models\Verification;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Composer;
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
            $data['sidebar'] = Verification::where('report_type', '!=', 'business')->where('report_type', '!=', 'address')->get();
            $data['business'] = Verification::where('report_type', '=', 'business')->get();
            $data['address'] = Verification::where('report_type', '=', 'address')->get();
            view::share($data);

    }
}
