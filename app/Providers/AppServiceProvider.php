<?php

namespace App\Providers;

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
        //will get the site title form all view files
        View::share('siteTitle','My Super Title');

        //will get the data form mentioned files only
        View::composer(['welcome','view-using-facade-four'], function($data){
            $motto = "Our super duper motto";
            $data->with('data', $motto);
        });
    }
}
