<?php

namespace App\Http\Controllers\Backend\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TradeAndProduction;
use App\Models\Currency;
use App\Models\DeliveryTerms;
use App\Models\Languages;
use App\Models\PaymentMethod;

use App\Models\InforPolicy;
use App\Models\Documents;
use App\Models\CatgMast;
use App\Models\UserCatg;
use App\Models\UserCertification;
use Auth;
class CompanyController extends Controller
{
   
    public function profile()
    {
      
        return view('backend.seller.company.profile');
    } 
    public function companyProfileEdit()
    {   
        
        $catgs =CatgMast::where(['catg_type' => 'SP','level' => '3'])->orderBy('catg_name')->cursor();
        return view('backend.seller.company.profile-edit',compact('catgs'));
    }
    public function companyProfileUpdate(Request $request,$id)
    {
        $user = User::find($id);

        $request->validate([
            'comp_sub_domain' => 'nullable|unique:users,comp_sub_domain,'.$request->id,          
        ]);
        $data = [
            'comp_sub_domain' => $request->comp_sub_domain,
            'domain_url'      => $request->comp_sub_domain,
            'domain_url1'     => $request->comp_top_level_domain,
            'website_url'     => $request->website_url,
            'description'     => $request->description,
            'address'         => $request->address,
            'meta_title'      => $request->meta_title,
            'meta_desc'       => $request->meta_desc,
            'meta_keywords'   => $request->meta_keywords,
            'reg_year'        => $request->reg_year,
            'personnel'       => $request->personnel,
            'own_type'        => $request->own_type
        ];

        if($request->hasFile('file')){
           $data['site_logo']  = file_upload($request->file,$id.'/images',$user,'site_logo');
        }


        if($request->cert_id !=null){
            $user->certifications()->sync($request->cert_id);
        }else{
            $user->certifications()->sync(array());
        }
        if($request->catg_id !=null){
            $user->categories()->sync($request->catg_id);
        }else{
            $user->categories()->sync(array());
        }
       
        $user->update($data);
        return redirect()->back()->with('success','Profile Updated Successfully');



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
//For information pplicy...................................
    public function infoPolicy(){
        
        $currencies = Currency::get();
        $deliveryTerms = DeliveryTerms::get();
        $languages = Languages::get();
        $paymentMethods = PaymentMethod::get();
        // dd($paymentMethods);
    	$inforPolicies = InforPolicy::where('user_id',Auth::user()->id)->first();

        return view('backend.seller.company.info-policies.index',compact('inforPolicies','currencies','deliveryTerms','languages','paymentMethods'));
    }
    public function infoPolicyEdit(){

    	$currencies = Currency::get();
        $deliveryTerms = DeliveryTerms::get();
        $languages = Languages::get();
        $paymentMethods = PaymentMethod::get();
        $inforPolicies = InforPolicy::where('user_id',Auth::user()->id)->first();
        
        // dd($inforPolicies);
        return view('backend.seller.company.info-policies.edit',compact('inforPolicies','currencies','deliveryTerms','languages','paymentMethods'));
    } 
    public function infoPolicyUpdate(Request $request){

        $data = [
                'escrow_service' =>$request->escrow_service,
                'company_policy' =>$request->company_policy,
                'pay_terms_method' =>$request->pay_terms_method,
                'terms_condition' =>$request->terms_condition,
                'payment_curre' =>json_encode($request->payment_curre),
                'delivery_terms' =>json_encode($request->delivery_terms),
                'payment_method' =>json_encode($request->payment_method),
                'spoken_lang' =>json_encode($request->spoken_lang),
                'certification' =>json_encode($request->certification),
        ];              
        $data['user_id'] = Auth::user()->id;
        
        if ($request->user_id ==Auth::user()->id) {
            $tradeAndProduction = InforPolicy::where('user_id',$request->user_id)->update($data);
        }else{
            $tradeAndProduction = InforPolicy::create($data);

        }
        return redirect()->back()->with('success','Information and Policy updated successfully');

    }

    public function imageGallery(){
       $documents = Documents::where(['user_id'=>Auth::user()->id,'doc_type'=>'image_gallery'])->get();
        return view('backend.seller.company.gallery.index',compact('documents'));

    }
    public function imageGalleryAdd(Request $request){
        $request->validate([
            'image' => 'required'
        ]);
        $data = document_upload($request->image,Auth::user()->id.'/images');
        $data['doc_type'] = $request->doc_type; 
        $data['user_id'] = Auth::user()->id; 
        Documents::create($data);
        return redirect()->back()->with('success','Image gallery added successfully');
       
    }
    public function imageGalleryDelete($id){
       
        $image = Documents::where(['user_id'=>Auth::user()->id,'doc_type'=>'image_gallery'])->first();
        $file= $image->doc_path;
        $filename = public_path().'/storage/'.$file;
        \File::delete($filename);
        Documents::where(['user_id'=>Auth::user()->id,'doc_type'=>'image_gallery'])->delete();
        return redirect()->back()->with('success','Image gallery deleted successfully');

    } 
    public function certification(){
       $documents = Documents::where(['user_id'=>Auth::user()->id,'doc_type'=>'certification'])->get();
        return view('backend.seller.company.certi-achieved.index',compact('documents'));

    }
    public function certificationAdd(Request $request){
       $request->validate([
            'image' => 'required'
        ]);
        $data = document_upload($request->image,Auth::user()->id.'/images');
        $data['doc_type'] = $request->doc_type; 
        $data['user_id'] = Auth::user()->id; 
        Documents::create($data);
        return redirect()->back()->with('success','certification added successfully');
       
    }
    public function certificationDelete($id){
        
        $image = Documents::where(['user_id'=>Auth::user()->id,'doc_type'=>'certification'])->first();
        $file= $image->doc_path;
        $filename = public_path().'/storage/'.$file;
        \File::delete($filename);
        Documents::where(['user_id'=>Auth::user()->id,'doc_type'=>'certification'])->delete();
        return redirect()->back()->with('success','certification deleted successfully');

    }

    public function domainCheck($name){
        $user = User::where('comp_sub_domain',$name)->where('id','!=',Auth::user()->id)->first();
        if(!empty($user)){
            return 'false';
        }else{
            return 'true';
        }
    }
//buyer company profile..........................
    public function BuyerCompanyProfile()
    {   
        $catgs =CatgMast::orderBy('catg_name')->cursor();
        // dd($catgs);
        return view('backend.buyer.company.profile',compact('catgs'));
    }
    public function buyerCompanyProUpdate(Request $request,$id)
    {
        $user = User::find($id);

        // $request->validate([
        //     'comp_sub_domain' => 'nullable|unique:users,comp_sub_domain,'.$request->id,          
        // ]);
        $data = [
            // 'comp_sub_domain' => $request->comp_sub_domain,
            // 'domain_url'      => $request->comp_sub_domain,
            'website_url'     => $request->website_url,
            'description'     => $request->description,
            'address'         => $request->address,
            'meta_title'      => $request->meta_title,
            'meta_desc'       => $request->meta_desc,
            'meta_keywords'   => $request->meta_keywords,
            'reg_year'        => $request->reg_year,
            'personnel'       => $request->personnel,
            'own_type'        => $request->own_type
        ];

        if($request->hasFile('file')){
           $data['site_logo']  = file_upload($request->file,$id.'/images',$user,'site_logo');
        }


        if($request->cert_id !=null){
            $user->certifications()->sync($request->cert_id);
        }else{
            $user->certifications()->sync(array());
        }
        if($request->catg_id !=null){
            $user->categories()->sync($request->catg_id);
        }else{
            $user->categories()->sync(array());
        }
       
        $user->update($data);
        return redirect()->back()->with('success','Profile Updated Successfully');



    }
    //test
   
}
