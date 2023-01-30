<?php

namespace App\Providers;

use App\Http\View\Composers\MyCustomComposer;
use App\Http\View\Creators\MyCustomCreator;
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
        //these are specific view files not view names
        View::composer(['welcome','pages.view-using-facade-four'], function($view){
            $motto = "Our super duper motto";
            $view->with('data', $motto);
        });

        //registering custom service provider
        View::composer(['pages.view-using-facade-five'], MyCustomComposer::class);

        //registering custom View::creator
        View::creator(['pages.view-using-facade-six'], MyCustomCreator::class);
    }
}
