<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Country;
use Illuminate\Support\Facades\View;
use Auth;
use App\Models\User;
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
        View::composer(['auth.register'], function ($view) {
            $view->with('countries', Country::orderBy('country_name','asc')->cursor());
        });
        View::composer(['backend.seller.company.profile'],function($view){
             $view->with('user', User::find(Auth::user()->id));
        });
    }
}
