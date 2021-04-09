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
        View::composer(['auth.register','backend.admin.user.edit','backend.admin.user.staff_create','backend.admin.user.staff_edit'], function ($view) {
            $view->with('countries', Country::orderBy('country_name','asc')->cursor());
        });
        View::composer(['backend.seller.company.profile','backend.seller.company.profile-edit'],function($view){
             $view->with('user', User::find(Auth::user()->id));
        });
    }
}
