<?php

namespace App\Http\Controllers\Backend\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyClassifiedController extends Controller
{
    
    public function index(){

    	return view('backend.seller.myclassified.index');
    }

    public function  create(){

    	return view('backend.seller.myclassified.create');
    }
}
