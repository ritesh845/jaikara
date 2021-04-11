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

    public function get_states($id){
    	return State::where('country_code',$id)->orderBy('state_name')->get();
    }

    public function get_cities($id){
    	return City::where('state_code',$id)->orderBy('city_name')->get();
    }
    public function refreshCaptcha() {
      
        return captcha_img('math');
    }

    public function domain_redirect($domain,$page_name =null) {
       if($page_name == null) {
            $page_name = 'home';
       }    
       return view('frontend.pages.index',compact('page_name'));
        
    }
}
