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
	
	//admin user manage
	Route::get('/userIndex', [App\Http\Controllers\Backend\UserController::class, 'userIndex'])->name('userIndex');
	Route::get('/userShow/{id}', [App\Http\Controllers\Backend\UserController::class, 'userShow'])->name('userShow');
	Route::get('/userEdit/{id}', [App\Http\Controllers\Backend\UserController::class, 'userEdit'])->name('userEdit');
	Route::patch('/userUpdate/{id}', [App\Http\Controllers\Backend\UserController::class, 'userUpdate'])->name('userUpdate');
	Route::get('/userDelete/{id}', [App\Http\Controllers\Backend\UserController::class, 'userDelete'])->name('userDelete');
	Route::get('/userPerDay', [App\Http\Controllers\Backend\UserController::class, 'userPerDay'])->name('userPerDay');
	Route::get('/userApproval/{id}', [App\Http\Controllers\Backend\UserController::class, 'userApproval'])->name('userApproval');
	
	//Staff create
	
	Route::get('/staff', [App\Http\Controllers\Backend\UserController::class, 'staffIndex'])->name('staff.index');
	Route::get('/staff/create', [App\Http\Controllers\Backend\UserController::class, 'staffCreate'])->name('staff.create');
	Route::post('/staff/store', [App\Http\Controllers\Backend\UserController::class, 'staffStore'])->name('staff.store');
	Route::get('/staff/{id}/edit', [App\Http\Controllers\Backend\UserController::class, 'staffEdit'])->name('staff.edit');
	Route::get('/staff/{id}', [App\Http\Controllers\Backend\UserController::class, 'staffShow'])->name('staff.show');
	Route::patch('/staff/update/{id}', [App\Http\Controllers\Backend\UserController::class, 'staffUpdate'])->name('staff.update');


	



	//seller company profile

	Route::get('/company-profile',[App\Http\Controllers\Backend\Seller\CompanyController::class,'profile'])->name('company_profile');
	Route::get('/company-profile-edit',[App\Http\Controllers\Backend\Seller\CompanyController::class,'companyProfileEdit'])->name('company_profile_edit');
	Route::patch('/company-profile/update/{id}',[App\Http\Controllers\Backend\Seller\CompanyController::class,'companyProfileUpdate'])->name('company_profile_update');

	Route::get('/domain-check/{name}',[App\Http\Controllers\Backend\Seller\CompanyController::class,'domainCheck'])->name('domainCheck');

//Trades and production.............
	Route::get('/trade-production-view',[App\Http\Controllers\Backend\Seller\CompanyController::class,'tradeAndProductionView'])->name('trade_production_view');
	Route::get('/trade-production-edit',[App\Http\Controllers\Backend\Seller\CompanyController::class,'tradeAndProductionEdit'])->name('trade_production_edit');
	Route::post('/trade-production-update',[App\Http\Controllers\Backend\Seller\CompanyController::class,'tradeAndProductionUpdate'])->name('trade_production_update');
//information policies.............
	Route::get('/information-policies',[App\Http\Controllers\Backend\Seller\CompanyController::class,'infoPolicy'])->name('information_policies');
	Route::get('/information-policies/edit',[App\Http\Controllers\Backend\Seller\CompanyController::class,'infoPolicyEdit'])->name('info_policy_edit');
	Route::post('/information-policies/update',[App\Http\Controllers\Backend\Seller\CompanyController::class,'infoPolicyUpdate'])->name('info_policy_update');

	//gallery.............
	Route::get('/image/gallery',[App\Http\Controllers\Backend\Seller\CompanyController::class,'imageGallery'])->name('image_gallery');
	
	//sell trade lead
	Route::get('/sell_trade',[App\Http\Controllers\Backend\Seller\TradeLeadController::class,'sellTrade'])->name('sell_trade');
	Route::get('/sell_trade/create',[App\Http\Controllers\Backend\Seller\TradeLeadController::class,'sellTradeCreate'])->name('sell_trade.create');
	Route::post('/sell_trade',[App\Http\Controllers\Backend\Seller\TradeLeadController::class,'sellTradeStore'])->name('sell_trade.store');
	Route::get('/sell_trade/{id}/edit',[App\Http\Controllers\Backend\Seller\TradeLeadController::class,'sellTradeEdit'])->name('sell_trade.edit');
	Route::patch('/sell_trade/update',[App\Http\Controllers\Backend\Seller\TradeLeadController::class,'sellTradeUpdate'])->name('sell_trade.update');

	Route::get('/sell_trade/delete/{id}',[App\Http\Controllers\Backend\Seller\TradeLeadController::class,'sellTradeDelete'])->name('sell_trade.delete');

});


// Route::get('/{domain}',[App\Http\Controllers\FrontendController::class, 'domain_redirect']);

