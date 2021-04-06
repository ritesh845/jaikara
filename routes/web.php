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
	Route::get('/userShow', [App\Http\Controllers\Backend\HomeController::class, 'userShow'])->name('userShow');
});
