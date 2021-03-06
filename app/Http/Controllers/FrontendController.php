<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\City;
use App\Models\User;
use App\Models\Page;
use Session;
use App\Models\Products;
class FrontendController extends Controller
{
	public function __construct()
    {
        $this->middleware('VerifyTemplate');
    }

    public function index()
    {

       $page_name = 'home';
        return view('frontend.pages.index',compact('page_name'));
    }

    public function domain_redirect($domain,$page_name =null) {
        
       if($domain !=null && $page_name ==null ){
          $user =  User::firstWhere('domain_url',$domain);
          if(!empty($user)){
            $page_name = 'home';
          }else{
            $page_name = $domain;

          }
       }
           
      return view('frontend.pages.index',compact('page_name'));
        
    }

    public function product_category($domain = null,$url =null){

      $page_name = 'product_category';
      if($url == null){
        $url = $domain;
      }

      $product = Products::firstWhere(['user_id'=>session('user.id'),'sefriendly' => $url]);

  
       return view('frontend.pages.index',compact('page_name','product'));
    }
   

}
