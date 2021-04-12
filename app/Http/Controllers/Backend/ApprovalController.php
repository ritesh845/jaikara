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
}
