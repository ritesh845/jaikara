<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
class HomeController extends Controller
{
	public function __construct()
    {
        $this->middleware('VerifyTemplate1');
    }
    public function product_category($name,$id){
    	$page_name = 'product_category';
    	$product = Products::firstWhere('prdt_id',$id);
	
      	return view('frontend.pages.index',compact('page_name','product'));
    }
   
}
