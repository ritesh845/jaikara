<?php

namespace App\Http\Controllers\Backend\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SellTrade_cat;
use App\Models\SellTrade;
use Illuminate\Support\Facades\Storage;
use Auth;

class TradeLeadController extends Controller
{
    
    public function sellTrade(){

        $stl = SellTrade::all();
    	return view('backend.seller.trade.sell.index',compact('stl'));
    }

    public function sellTradeCreate(){
        $t_cat =  SellTrade_cat::all();
    	return view('backend.seller.trade.sell.create',compact('t_cat'));
    }

    public function sellTradeStore(Request $request){

    	// return file_upload($request->file,Auth::user()->id.'/image',$data = [],$fieldName=null);
    	 //$note = SellTrade_cat::create($request->all());
       // dd($request->all());
    	$data = $request->validate([   
          'subject'=>'required', 
          'detls'=>'required',      
          'keywords'=>'required',       
          'trade_lead_catg'=>'required',      
          'valid_for'=>'required',          
          //'picture'=>'nullable',          
          ]);
    	$data['picture'] = $request->picture;
    	$data['user_id'] = Auth::user()->id;
    	file_upload($request->picture,Auth::user()->id.'/image');
        SellTrade::create($data);
        return redirect('sell_trade')->with('message','Sell Trade Lead Was Successfully');
    }
}


