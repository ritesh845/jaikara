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

//Main Site Pages


//Frontend


//For data show and store data we use verifycontroller beacuse frontendcontroller brack the url beacuse of middelware
Route::get('/get_states/{id}', [App\Http\Controllers\VerifyController::class, 'get_states']);
Route::get('/get_cities/{id}', [App\Http\Controllers\VerifyController::class, 'get_cities']);

Route::get('/refresh_captcha', [App\Http\Controllers\VerifyController::class, 'refreshCaptcha']);
Route::post('/contact/store', [App\Http\Controllers\VerifyController::class, 'contactStore'])->name('contactStore');


Route::get('/verify/{token}','App\Http\Controllers\VerifyController@verifyUser');




//Backend User
Route::group(['middleware' => 'auth'],function(){
		
	//Member Package Controller

	Route::resource('package',App\Http\Controllers\Backend\PackageController::class);
	Route::get('service_approve/{id}',[App\Http\Controllers\Backend\PackageController::class,'service_approve']);
	Route::get('service_package/{id}/edit',[App\Http\Controllers\Backend\PackageController::class,'service_edit'])->name('service_edit');
	Route::patch('service_package/update/{id}',[App\Http\Controllers\Backend\PackageController::class,'service_update'])->name('service_update');
	Route::get('service_package/{id}',[App\Http\Controllers\Backend\PackageController::class,'service_delete'])->name('service_delete');

	//admin user manage
	Route::get('/userIndex', [App\Http\Controllers\Backend\UserController::class, 'userIndex'])->name('userIndex');
	Route::get('/userShow/{id}', [App\Http\Controllers\Backend\UserController::class, 'userShow'])->name('userShow');
	Route::get('/userEdit/{id}', [App\Http\Controllers\Backend\UserController::class, 'userEdit'])->name('userEdit');
	Route::patch('/userUpdate/{id}', [App\Http\Controllers\Backend\UserController::class, 'userUpdate'])->name('userUpdate');
	Route::get('/userDelete/{id}', [App\Http\Controllers\Backend\UserController::class, 'userDelete'])->name('userDelete');
	Route::get('/userPerDay', [App\Http\Controllers\Backend\UserController::class, 'userPerDay'])->name('userPerDay');
	Route::get('/userApproval/{id}', [App\Http\Controllers\Backend\UserController::class, 'userApproval'])->name('userApproval');


	// Approval Controller

	Route::group(['prefix' => 'approval/'],function(){
		Route::get('product',[App\Http\Controllers\Backend\ApprovalController::class,'productIndex'])->name('approval.product');
		Route::get('product-approval/{id}',[App\Http\Controllers\Backend\ApprovalController::class,'productApproval'])->name('product-approval');
		Route::get('product-details/{id}',[App\Http\Controllers\Backend\ApprovalController::class,'productDetails'])->name('product-details');


	});
	
	//Staff create
	
	Route::get('/staff', [App\Http\Controllers\Backend\UserController::class, 'staffIndex'])->name('staff.index');
	Route::get('/staff/create', [App\Http\Controllers\Backend\UserController::class, 'staffCreate'])->name('staff.create');
	Route::post('/staff/store', [App\Http\Controllers\Backend\UserController::class, 'staffStore'])->name('staff.store');
	Route::get('/staff/{id}/edit', [App\Http\Controllers\Backend\UserController::class, 'staffEdit'])->name('staff.edit');
	Route::get('/staff/{id}', [App\Http\Controllers\Backend\UserController::class, 'staffShow'])->name('staff.show');
	Route::patch('/staff/update/{id}', [App\Http\Controllers\Backend\UserController::class, 'staffUpdate'])->name('staff.update');


	Route::resource('supplier_product',App\Http\Controllers\Backend\Category\SupplierProductController::class);
	Route::get('supplier_product/delete/{id}',[App\Http\Controllers\Backend\Category\SupplierProductController::class,'delete'])->name('supplier_product.delete');
	Route::get('catgApproval/{id}',[App\Http\Controllers\Backend\Category\SupplierProductController::class,'approval']);



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
	Route::post('/image/gallery/add',[App\Http\Controllers\Backend\Seller\CompanyController::class,'imageGalleryAdd'])->name('image_gallery_add');
	Route::get('/image/gallery/delete/{id}',[App\Http\Controllers\Backend\Seller\CompanyController::class,'imageGalleryDelete'])->name('image_gallery_delt');

//certification achived.............
	Route::get('/certification',[App\Http\Controllers\Backend\Seller\CompanyController::class,'certification'])->name('certification');
	Route::post('/certification/add',[App\Http\Controllers\Backend\Seller\CompanyController::class,'certificationAdd'])->name('certification_add');
	Route::get('/certification/delete/{id}',[App\Http\Controllers\Backend\Seller\CompanyController::class,'certificationDelete'])->name('certification_delt');


	
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
      // my posted RFQ
	Route::get('/my_posted_rfq',[App\Http\Controllers\Backend\Seller\QuatationController::class,'index'])->name('my_posted_rfq');
	Route::get('/my_posted_rfq/create',[App\Http\Controllers\Backend\Seller\QuatationController::class,'create'])->name('my_posted_rfq.create');
	Route::post('/my_posted_rfq',[App\Http\Controllers\Backend\Seller\QuatationController::class,'store'])->name('my_posted_rfq.store');
	Route::get('/my_posted_rfq/edit/{id}',[App\Http\Controllers\Backend\Seller\QuatationController::class,'edit'])->name('my_posted_rfq.edit');
	Route::patch('/my_posted_rfq/update/{id}',[App\Http\Controllers\Backend\Seller\QuatationController::class,'update'])->name('my_posted_rfq.update');

	Route::get('/my_posted_rfq/delete/{id}',[App\Http\Controllers\Backend\Seller\QuatationController::class,'delete'])->name('my_posted_rfq.delete');
     // my Classified
	Route::get('/my_classified',[App\Http\Controllers\Backend\Seller\MyClassifiedController::class,'index'])->name('my_classified');
	Route::get('/my_classified/create',[App\Http\Controllers\Backend\Seller\MyClassifiedController::class,'create'])->name('my_classified.create');
	Route::post('/my_classified',[App\Http\Controllers\Backend\Seller\MyClassifiedController::class,'store'])->name('my_classified.store');
	Route::get('/my_classified/edit/{id}',[App\Http\Controllers\Backend\Seller\MyClassifiedController::class,'edit'])->name('my_classified.edit');
	Route::patch('/my_classified/update/{id}',[App\Http\Controllers\Backend\Seller\MyClassifiedController::class,'update'])->name('my_classified.update');

	Route::get('/my_classified/delete/{id}',[App\Http\Controllers\Backend\Seller\MyClassifiedController::class,'delete'])->name('my_classified.delete');
	Route::get('/my_classified/getsubcatg',[App\Http\Controllers\Backend\Seller\MyClassifiedController::class,'getsubcatg'])->name('my_classified.getsubcatg');
	

	//Route for product.....................
	Route::resource('/products',App\Http\Controllers\Backend\Seller\ProductsController::class);
	//Route for product group.....................
	Route::resource('/product-group',App\Http\Controllers\Backend\Seller\ProductGroupController::class);
	Route::get('/get_grp_prim/{id}',[App\Http\Controllers\Backend\Seller\ProductsController::class,'getGrpPrim']);

	//buyer company profile
	Route::get('/company/profile',[App\Http\Controllers\Backend\Seller\CompanyController::class,'BuyerCompanyProfile'])->name('buyer_company_profile');
	Route::patch('/company/profile/update/{id}',[App\Http\Controllers\Backend\Seller\CompanyController::class,'buyerCompanyProUpdate'])->name('buyer_cmp_pro_update');


});

Route::get('product-category/{url}',[App\Http\Controllers\FrontendController::class, 'product_category']);

Route::get('/{domain}/product-category/{url?}',[App\Http\Controllers\FrontendController::class, 'product_category']);

Route::get('/{domain}/{page?}',[App\Http\Controllers\FrontendController::class, 'domain_redirect']);




// Route::get('/{domain}/{page}',[App\Http\Controllers\FrontendController::class, 'page_redirect']);

