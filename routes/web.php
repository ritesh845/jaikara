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



	//seller company profile

	Route::get('/company-profile',[App\Http\Controllers\Backend\Seller\CompanyController::class,'profile'])->name('company_profile');
	Route::get('/company-profile-edit',[App\Http\Controllers\Backend\Seller\CompanyController::class,'companyProfileEdit'])->name('company_profile_edit');

//Trades and production.............
	Route::get('/trade-production-view',[App\Http\Controllers\Backend\Seller\CompanyController::class,'tradeAndProductionView'])->name('trade_production_view');
	Route::get('/trade-production-edit',[App\Http\Controllers\Backend\Seller\CompanyController::class,'tradeAndProductionEdit'])->name('trade_production_edit');
	Route::post('/trade-production-update',[App\Http\Controllers\Backend\Seller\CompanyController::class,'tradeAndProductionUpdate'])->name('trade_production_update');
//information policies.............
	Route::get('/information-policies',[App\Http\Controllers\Backend\Seller\CompanyController::class,'infoPolicy'])->name('information_policies');
	Route::get('/information-policies/edit',[App\Http\Controllers\Backend\Seller\CompanyController::class,'infoPolicyEdit'])->name('info_policy_edit');
	Route::post('/information-policies/update',[App\Http\Controllers\Backend\Seller\CompanyController::class,'infoPolicyUpdate'])->name('info_policy_update');

	//sell trade lead
	Route::get('/sell_trade',[App\Http\Controllers\Backend\Seller\TradeLeadController::class,'sellTrade'])->name('sell_trade');
	Route::get('/sell_trade/create',[App\Http\Controllers\Backend\Seller\TradeLeadController::class,'sellTradeCreate'])->name('sell_trade.create');
	Route::post('/sell_trade',[App\Http\Controllers\Backend\Seller\TradeLeadController::class,'sellTradeStore'])->name('sell_trade.store');
	Route::get('/sell_trade/edit/{id}',[App\Http\Controllers\Backend\Seller\TradeLeadController::class,'sellTradeEdit'])->name('sell_trade.edit');
	Route::patch('/sell_trade/update/{id}',[App\Http\Controllers\Backend\Seller\TradeLeadController::class,'sellTradeUpdate'])->name('sell_trade.update');

	Route::get('/sell_trade/delete/{id}',[App\Http\Controllers\Backend\Seller\TradeLeadController::class,'sellTradeDelete'])->name('sell_trade.delete');
	//buy trade Lead
	Route::get('/buy_trade',[App\Http\Controllers\Backend\Seller\TradeLeadController::class,'buyTrade'])->name('buy_trade');
	Route::get('/buy_trade/create',[App\Http\Controllers\Backend\Seller\TradeLeadController::class,'buyTradeCreate'])->name('buy_trade.create');
	Route::post('/buy_trade',[App\Http\Controllers\Backend\Seller\TradeLeadController::class,'buyTradeStore'])->name('buy_trade.store');
	Route::get('/buy_trade/edit/{id}',[App\Http\Controllers\Backend\Seller\TradeLeadController::class,'buyTradeEdit'])->name('buy_trade.edit');
	Route::patch('/buy_trade/update/{id}',[App\Http\Controllers\Backend\Seller\TradeLeadController::class,'buyTradeUpdate'])->name('buy_trade.update');

	Route::get('/buy_trade/delete/{id}',[App\Http\Controllers\Backend\Seller\TradeLeadController::class,'buyTradeDelete'])->name('buy_trade.delete');

});


// Route::get('/{domain}',[App\Http\Controllers\FrontendController::class, 'domain_redirect']);

