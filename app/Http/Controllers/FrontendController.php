<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\City;
use App\Models\User;
use App\Models\Page;
use Session;

class FrontendController extends Controller
{
	public function __construct()
    {
        $this->middleware('VerifyTemplate');
    }

    public function index()
    {
        
        return view('frontend.home');
    }

    public function domain_redirect($domain,$page_name =null) {
       if($page_name == null) {
            $page_name = 'home';
       }    
       return view('frontend.pages.index',compact('page_name'));
        
    }
   
     
}
