<?php

namespace App\Http\Controllers\Backend\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SellTrade_cat;
use App\Models\SellTrade;
use App\Models\BuyTrade;
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
    	$data = $request->validate([   
          'subject'=>'required', 
          'detls'=>'required',      
          'keywords'=>'required',       
          'trade_lead_catg'=>'required',      
          'valid_for'=>'required',          
                 
          ]);
    
    	$data['user_id'] = Auth::user()->id;
      if($request->hasFile('picture')){
       	$data['picture'] = file_upload($request->picture,Auth::user()->id.'/image');
      }
        SellTrade::create($data);
        return redirect('sell_trade')->with('message','Sell Trade Lead Was Successfully');
    }

    public function sellTradeEdit($id){
            $edit =  SellTrade::find($id);
          return view('backend.seller.trade.sell.edit',compact('edit'));
    }


    public function sellTradeUpdate(Request $request,$id){

      $data = $request->validate([   
          'subject'=>'required', 
          'detls'=>'required',      
          'keywords'=>'required',       
          'trade_lead_catg'=>'required',      
          'valid_for'=>'required',          
            
          ]);

      if($request->hasFile('picture')){
        $data['picture'] = file_upload($request->picture,Auth::user()->id.'/image');
      }
      SellTrade::where('sell_trd_id',$id)->update($data);
      return redirect('sell_trade')->with('message','Updated Successfully');


    }

    public function sellTradeDelete($id){

      $dservice = SellTrade::where('sell_trd_id', $id)->delete();
        return redirect()->back()->with('message','Sell Trade Lead Successfully Removed');
    }


    public function buyTrade(){
          $btl = BuyTrade::all();
        return view('backend.seller.trade.buy.index',compact('btl'));
    }

    public function buyTradeCreate(){

      // $t_cat =  SellTrade_cat::all();
      return view('backend.seller.trade.buy.create');
    }

    public function buyTradeStore(Request $request){
            
            $data = $request->validate([   
          'product'=>'required', 
          'quantity'=>'required',      
          'price_range'=>'required',       
          'detls'=>'required',      
          'keywords'=>'required',      
          'valid_for'=>'required',      
          'trade_lead_catg'=>'required',      
          'valid_for'=>'required',          
                 
          ]);
    
      $data['user_id'] = Auth::user()->id;
      if($request->hasFile('picture')){
        $data['picture'] = file_upload($request->picture,Auth::user()->id.'/image');
      }

         BuyTrade::create($data);
        return redirect('buy_trade')->with('message','Buy Trade Lead Was Successfully');
    } 

    public function buyTradeEdit($id){

       $edit =  BuyTrade::find($id);
      return view('backend.seller.trade.buy.edit',compact('edit'));
    }

    public function buyTradeUpdate(Request $request, $id){

           $data = $request->validate([   
          'product'=>'required', 
          'quantity'=>'required',      
          'price_range'=>'required',       
          'detls'=>'required',      
          'keywords'=>'required',      
          'valid_for'=>'required',      
          'trade_lead_catg'=>'required',      
          'valid_for'=>'required',          
                 
          ]);

            if($request->hasFile('picture')){
        $data['picture'] = file_upload($request->picture,Auth::user()->id.'/image');
      }
      BuyTrade::where('buy_trd_id',$id)->update($data);
      return redirect('buy_trade')->with('message','Updated Successfully');
    }

    public function buyTradeDelete($id){

        $dservice = BuyTrade::where('buy_trd_id', $id)->delete();
        return redirect()->back()->with('message','Buy Trade Lead Successfully Removed');
    }
}


