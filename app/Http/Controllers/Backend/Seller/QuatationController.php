<?php

namespace App\Http\Controllers\Backend\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SellTrade_cat;
use App\Models\QuatationRfq;
use App\Models\User;
use Auth;

class QuatationController extends Controller
{

	public function index(){
     
    $rfq = QuatationRfq::all();
		return view('backend.seller.Quatation.index',compact('rfq'));
	}

	public function create(){
        $t_cat =  SellTrade_cat::all();
        $atz = User::find(Auth::user()->id);
		return view('backend.seller.Quatation.create',compact('t_cat','atz'));
	}

	public function store(Request $request){
        
        $data = $request->validate([   
          'prod_sevice'=>'required', 
          'req_delt'=>'required',      
          'estim_qty'=>'required',       
          'qty_type'=>'required',      
          'expiry_time_in_day'=>'required',          
          'trade_lead_catg'=>'required',          
          'expiry_time_in_day'=>'required',          
                 
          ]);

        $data['user_id'] = Auth::user()->id;
      if($request->hasFile('image')){
       	$data['image'] = file_upload($request->image,Auth::user()->id.'/image');
      }
      if($request->hasFile('docu_upload')){
       	$data['docu_upload'] = file_upload($request->docu_upload,Auth::user()->id.'/image');
      }
		QuatationRfq::create($data);
        return redirect('my_posted_rfq')->with('message','RFQ Is Successfully Added');
	}
	
  public function edit($id){
    $edit = QuatationRfq::find($id);
    $atz = User::find(Auth::user()->id);
    return view('backend.seller.Quatation.edit',compact('edit','atz'));
  }

  public function update(Request $request ,$id){

     $data = $request->validate([   
          'prod_sevice'=>'required', 
          'req_delt'=>'required',      
          'estim_qty'=>'required',       
          'qty_type'=>'required',      
          'expiry_time_in_day'=>'required',          
          'trade_lead_catg'=>'required',          
          'expiry_time_in_day'=>'required',          
                 
          ]);

     if($request->hasFile('image')){
        $data['image'] = file_upload($request->image,Auth::user()->id.'/image');
      }
      if($request->hasFile('docu_upload')){
        $data['docu_upload'] = file_upload($request->docu_upload,Auth::user()->id.'/image');
      }
    QuatationRfq::where('qua_id',$id)->update($data);
        return redirect('my_posted_rfq')->with('message','Updated Successfully');
  }

  public function delete($id){

    $dservice = QuatationRfq::where('qua_id', $id)->delete();
    return redirect()->back()->with('message','RFQ Is Successfully Removed');
  }
   
}
