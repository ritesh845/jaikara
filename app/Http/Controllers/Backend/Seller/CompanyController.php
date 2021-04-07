<?php

namespace App\Http\Controllers\Backend\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TradeAndProduction;
use Auth;
class CompanyController extends Controller
{
   
    public function profile()
    {
        return view('backend.seller.company.profile');
    } 
    public function companyProfileEdit()
    {
        return view('backend.seller.company.profile-edit');
    }
	public function tradeAndProductionView()
    {
    	$tradeAndProduction = TradeAndProduction::where('user_id',Auth::user()->id)->first();

        return view('backend.seller.company.trade-and-production.trade-production-view',compact('tradeAndProduction'));
    }
	public function tradeAndProductionEdit()
    {
    	$tradeAndProduction = TradeAndProduction::where('user_id',Auth::user()->id)->first();
        return view('backend.seller.company.trade-and-production.trade-production-edit',compact('tradeAndProduction'));
    }
    public function tradeAndProductionUpdate(Request $request)
    {
    	$data = [
    		'prdt_capacity'=>$request->prdt_capacity,
    		'size_sqft'=>$request->size_sqft,
    		'lead_time_days'=>$request->lead_time_days,
    		'maintaining'=>$request->maintaining,
    		'factory_loc'=>$request->factory_loc,
    		'export_per'=>$request->export_per,
    		'sales_volume'=>$request->sales_volume,
    		'packg_dtl'=>$request->packg_dtl,
    		'office_size'=>$request->office_size,
    		'export_market'=>$request->export_market,
    		'five_countries'=>$request->five_countries,
    		'five_countries'=>$request->five_countries,
    		'nearest_port'=>$request->nearest_port,
    		'clients'=>$request->clients,
    		'major_prdt_sell'=>$request->major_prdt_sell,
    		'major_prdt_buy'=>$request->major_prdt_buy,
    		'main_prdt'=>$request->main_prdt,
    		'main_prdt1'=>$request->main_prdt1,
    		'main_prdt2'=>$request->main_prdt2,
    		'main_prdt3'=>$request->main_prdt3,
    		'product_you_sell'=>$request->product_you_sell
    	];
    	$data['user_id'] = Auth::user()->id;
    	if ($request->user_id ==Auth::user()->id) {
    		$tradeAndProduction = TradeAndProduction::where('user_id',$request->user_id)->update($data);
    	}else{
    		$tradeAndProduction = TradeAndProduction::create($data);

    	}
        return redirect()->back()->with('success','Trade & Production updated successfully');

    }

    public function infoPolicy(){

    	$tradeAndProduction = TradeAndProduction::where('user_id',Auth::user()->id)->first();
        return view('backend.seller.company.info-policies.index',compact('tradeAndProduction'));
    }
    public function infoPolicyEdit(){

    	$tradeAndProduction = TradeAndProduction::where('user_id',Auth::user()->id)->first();
        return view('backend.seller.company.info-policies.edit',compact('tradeAndProduction'));
    }

   
}
