<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
class ApprovalController extends Controller
{
    public function productIndex(){
    	$products = Products::where('is_approve','0')->cursor();
    	return view('backend.admin.approval.product-index',compact('products'));
    }

    public function productApproval($id){
    	 Products::find($id)->update(['is_approve' => '1']);
    	 return redirect()->back()->with('success',"Product Approved successfully");
    }
    public function productDetails($id){
    	$product = Products::find($id);
    	return view('backend.admin.approval.product-show',compact('product'));
    }
}
