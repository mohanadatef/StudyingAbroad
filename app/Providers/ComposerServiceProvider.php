<?php

namespace App\Providers;

use App\Models\ContactUs;
use App\Models\Country;
use App\Models\Program;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['includes.frontend.*','frontend.*'], function ($view) {
            $contact_us=ContactUs::first();
            $setting=Setting::first();
            $country=Country::orderby('order')->get();
            $program=Program::orderby('order')->get();
            $service=Service::orderby('order')->get();
            $view->with('contact_us',$contact_us);
            $view->with('setting',$setting);
            $view->with('country',$country);
            $view->with('program',$program);
            $view->with('service',$service);
        });
        view()->composer(['auth.login','includes.admin.header'], function ($view) {
            $setting=Setting::first();
            $view->with('setting',$setting);
        });
    }
}
