<?php

namespace App\Http\Controllers\Backend\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SellTrade_cat;
use App\Models\SellTrade;
use App\Models\BuyTrade;
use App\Models\CatgMast;
use Auth;

class TradeLeadController extends Controller
{
    
    public function sellTrade(){

        $stl = SellTrade::where('user_id',Auth::user()->id)->get();
    	return view('backend.seller.trade.sell.index',compact('stl'));
    }

    public function sellTradeCreate(){
        $catgs =  CatgMast::where('catg_type','ST')->orderBy('catg_name')->get();
    	return view('backend.seller.trade.sell.create',compact('catgs'));
    }

    public function sellTradeStore(Request $request){
    	$data = $request->validate([   
          'subject'=>'required', 
          'detls'=>'required',      
          'keywords'=>'required',       
          'catg_id'=>'required',      
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
      $catgs =  CatgMast::where('catg_type','ST')->orderBy('catg_name')->get();
      return view('backend.seller.trade.sell.edit',compact('edit','catgs'));
    }


    public function sellTradeUpdate(Request $request,$id){

      $data = $request->validate([   
          'subject'=>'required', 
          'detls'=>'required',      
          'keywords'=>'required',       
          'catg_id'=>'required',      
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
        $btl = BuyTrade::where('user_id',Auth::user()->id)->get();
        return view('backend.seller.trade.buy.index',compact('btl'));
    }

    public function buyTradeCreate(){

      $catgs =  CatgMast::where('catg_type','BT')->orderBy('catg_name')->get();
      return view('backend.seller.trade.buy.create',compact('catgs'));
    }

    public function buyTradeStore(Request $request){
            
      $data = $request->validate([   
          'product'=>'required', 
          'quantity'=>'required',      
          'price_range'=>'required',       
          'detls'=>'required',      
          'keywords'=>'required',      
          'valid_for'=>'required',      
          'catg_id'=>'required',      
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
      $catgs =  CatgMast::where('catg_type','BT')->orderBy('catg_name')->get();
      return view('backend.seller.trade.buy.edit',compact('edit','catgs'));
    }

    public function buyTradeUpdate(Request $request, $id){

        $data = $request->validate([   
          'product'=>'required', 
          'quantity'=>'required',      
          'price_range'=>'required',       
          'detls'=>'required',      
          'keywords'=>'required',      
          'valid_for'=>'required',      
          'catg_id'=>'required',      
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


