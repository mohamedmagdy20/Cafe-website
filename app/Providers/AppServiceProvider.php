<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        $setting = Setting::all();
        $about = About::first();
        View::share(['setting'=>$setting,'about'=>$about]);
    }
}
