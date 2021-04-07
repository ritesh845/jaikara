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
        return view('backend.seller.company.trade-and-production.trade-production-view');
    }
	public function tradeAndProductionEdit()
    {
    	$tradeAndProduction = TradeAndProduction::where('user_id',Auth::user()->id)->first();
        return view('backend.seller.company.trade-and-production.trade-production-edit',compact('tradeAndProduction'));
    }

   
}
