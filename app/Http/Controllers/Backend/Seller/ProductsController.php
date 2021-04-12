<?php

namespace App\Http\Controllers\Backend\Seller;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CatgMast;
use App\Models\Currency;
use App\Models\DeliveryTerms;
use App\Models\PaymentMethod;
use App\Models\Country;
use App\Models\ProductGroup;
use App\Models\Products;
use App\Models\MaterialMast;
use App\Models\PackingProducttMast;
use App\Models\Documents;

use Auth;
class ProductsController extends Controller
{
    
    public function index()
    {
        $products = Products::get();
        return view('backend.seller.products.index',compact('products'));
       
    }

    
    public function create()
    {
        $catgMasts = CatgMast::get();
        $currencies = Currency::get();
        $deliveryTerms = DeliveryTerms::get();
        $paymentMethods = PaymentMethod::get();
        $productGroups= ProductGroup::get();
        $materialMasts= MaterialMast::get();
        $packingProducttMasts= PackingProducttMast::get();
        return view('backend.seller.products.create',compact('catgMasts','currencies','deliveryTerms','paymentMethods','productGroups','materialMasts','packingProducttMasts'));
        
    }

    
    public function store(Request $request)
    {

        $data =([
            'name'         =>$request->name,
            'brand'         =>$request->brand,
            'catg_id'       =>$request->catg_id,
            'desc'          =>$request->desc,
            'curr_id'       =>$request->curr_id,
            'price'         =>$request->price,
            'is_terms'      =>$request->is_terms,
            'sku_no'        =>$request->sku_no,
            'pay_method'    =>$request->pay_method,
            'pay_terms'    =>$request->pay_terms,
            'country_code'  =>$request->country_code,
            'state_code'    =>$request->state_code,
            'city_code'     =>$request->city_code,
            'model_no'      =>$request->model_no,
            'ean_code'      =>$request->ean_code,
            'size'          =>$request->size,
            'weight'        =>$request->weight,
            'shape'         =>$request->shape,
            'color'         =>$request->color,
            'material'      =>$request->material,
            'thickness'     =>$request->thickness,
            'size_range'    =>$request->size_range,
            'packing_type'  =>$request->packing_type,
            'no_per_inner'  =>$request->no_per_inner,
            'size_inner'    =>$request->size_inner,
            'inner_packing' =>$request->inner_packing,
            'no_per_outer'  =>$request->no_per_outer,
            'size_outer'    =>$request->size_outer,
            'no_per_pallet' =>$request->no_per_pallet,
            'pallet_type'   =>$request->pallet_type,
            'certificates'  =>$request->certificates,
            'order_qunt'    =>$request->order_qunt,
            'grp_prim_id'   =>$request->grp_prim_id,
            'grp_sec_id'    =>$request->grp_sec_id,
            'youtube_link'  =>$request->youtube_link,
            'youtube_link1'  =>$request->youtube_link1,
            'keywords'      =>$request->keywords
        ]);
        $data['user_id'] = Auth::user()->id;
        $productsId = Products::create($data)->prdt_id;
         foreach ($request->image as $key => $image) {
           
            if($request->hasFile('image.'.$key)){
                $docs =  document_upload($request->image[$key],Auth::user()->id.'/Product_images');
            }
            $docs['user_id'] = $productsId; 
            $docs['doc_type'] = 'product'; 
                Documents::create($docs);
        }

        return redirect()->back()->with('success','Product added successfully');
 
    }

   
    public function show($id)
    {
       
        
    }

    
    public function edit($id)
    {
        $product = Products::with('p_images')->where('prdt_id',$id)->first();
        // dd($product);
        $catgMasts = CatgMast::get();
        $currencies = Currency::get();
        $deliveryTerms = DeliveryTerms::get();
        $paymentMethods = PaymentMethod::get();
        $productGroups= ProductGroup::get();
        $materialMasts= MaterialMast::get();
        $packingProducttMasts= PackingProducttMast::get();
        return view('backend.seller.products.edit',compact('catgMasts','currencies','deliveryTerms','paymentMethods','productGroups','materialMasts','packingProducttMasts','product'));
    }

    
    public function update(Request $request, $id)
    {
        $data =([
            'name'         =>$request->name,
            'brand'         =>$request->brand,
            'catg_id'       =>$request->catg_id,
            'desc'          =>$request->desc,
            'curr_id'       =>$request->curr_id,
            'price'         =>$request->price,
            'is_terms'      =>$request->is_terms,
            'sku_no'        =>$request->sku_no,
            'pay_method'    =>$request->pay_method,
            'pay_terms'    =>$request->pay_terms,
            'country_code'  =>$request->country_code,
            'state_code'    =>$request->state_code,
            'city_code'     =>$request->city_code,
            'model_no'      =>$request->model_no,
            'ean_code'      =>$request->ean_code,
            'size'          =>$request->size,
            'weight'        =>$request->weight,
            'shape'         =>$request->shape,
            'color'         =>$request->color,
            'material'      =>$request->material,
            'thickness'     =>$request->thickness,
            'size_range'    =>$request->size_range,
            'packing_type'  =>$request->packing_type,
            'no_per_inner'  =>$request->no_per_inner,
            'size_inner'    =>$request->size_inner,
            'inner_packing' =>$request->inner_packing,
            'no_per_outer'  =>$request->no_per_outer,
            'size_outer'    =>$request->size_outer,
            'no_per_pallet' =>$request->no_per_pallet,
            'pallet_type'   =>$request->pallet_type,
            'certificates'  =>$request->certificates,
            'order_qunt'    =>$request->order_qunt,
            'grp_prim_id'   =>$request->grp_prim_id,
            'grp_sec_id'    =>$request->grp_sec_id,
            'youtube_link'  =>$request->youtube_link,
            'youtube_link1'  =>$request->youtube_link1,
            'keywords'      =>$request->keywords
        ]);
        $data['user_id'] = Auth::user()->id;
        $productsId = Products::where('prdt_id',$id)->update($data);
        if(!empty($request->image)){
         foreach ($request->image as $key => $image) {
           // dd($request->image[$key]);
            if($request->image[$key] !=null){
                $documents = Documents::find($id);
            }else{
                $documents = [];
            }

            if($request->hasFile('image.'.$key)){
                // dd( $request->image);
                $docs =  document_upload($request->image[$key],Auth::user()->id.'/Product_images');
            }
            
            if(!empty($documents)){
                $documents->update($docs);
            }else{
                $docs['user_id'] = $productsId; 
                $docs['doc_type'] = 'product'; 
                Documents::create($docs);
            }
        }
    }

        return redirect()->back()->with('success','Product updated successfully');
    }

   
    public function destroy($id)
    {
        //
    }
}
