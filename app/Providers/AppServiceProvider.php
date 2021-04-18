<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Country;
use Illuminate\Support\Facades\View;
use Auth;
use App\Models\User;
use App\Models\Certification;
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
        View::composer(['auth.register','backend.admin.user.edit','backend.admin.user.staff_create','backend.admin.user.staff_edit','backend.seller.products.create','backend.seller.products.edit'], function ($view) {
            $view->with('countries', Country::orderBy('country_name','asc')->cursor());
        });
        View::composer(['backend.seller.company.profile','backend.seller.company.profile-edit','backend.seller.products.edit','backend.buyer.company.profile','backend.buyer.company.profile-edit'],function($view){
             $view->with('user', User::find(Auth::user()->id));
        });

        View::composer(['backend.seller.company.profile-edit','backend.seller.company.info-policies.index','backend.seller.company.info-policies.edit','backend.buyer.company.profile','backend.buyer.company.profile-edit'],function($view){
             $view->with('certifications', Certification::get());
        });
        // View::composer(['backend.seller.company.profile-edit','backend.seller.company.info-policies.index','backend.seller.company.info-policies.edit'],function($view){
        //      $view->with('catgs', CatgMast::get());
        // });
    }
}
