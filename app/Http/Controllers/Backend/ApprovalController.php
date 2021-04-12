<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    public function productIndex(){
    	return view('backend.admin.approval.product-index');
    }
}
