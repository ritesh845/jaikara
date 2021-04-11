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

class ProductsController extends Controller
{
    
    public function index()
    {
        return view('backend.seller.products.index');
       
    }

    
    public function create()
    {
        $catgMasts = CatgMast::get();
        $currencies = Currency::get();
        $deliveryTerms = DeliveryTerms::get();
        $paymentMethods = PaymentMethod::get();
        $productGroups= ProductGroup::get();

        return view('backend.seller.products.create',compact('catgMasts','currencies','deliveryTerms','paymentMethods','productGroups'));
        
    }

    
    public function store(Request $request)
    {
        dd($request->all());
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
