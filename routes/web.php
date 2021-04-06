<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();



//Frontend

Route::get('/get_states/{id}', [App\Http\Controllers\FrontendController::class, 'get_states']);
Route::get('/get_cities/{id}', [App\Http\Controllers\FrontendController::class, 'get_cities']);

Route::get('/refresh_captcha', [App\Http\Controllers\FrontendController::class, 'refreshCaptcha']);


Route::get('/verify/{token}','App\Http\Controllers\VerifyController@verifyUser');




//Backend User
Route::group(['middleware' => 'auth'],function(){
	Route::get('/userShow', [App\Http\Controllers\Backend\UserController::class, 'userShow'])->name('userShow');

	//seller company profile
	// Route::resource('company_profile', App\Http\Controllers\Backend\CompanyController::class);
	Route::get('/company-profile',[App\Http\Controllers\Backend\Seller\CompanyController::class,'profile'])->name('company_profile');
	Route::get('/company-profile-edit',[App\Http\Controllers\Backend\Seller\CompanyController::class,'companyProfileEdit'])->name('company_profile_edit');





});
