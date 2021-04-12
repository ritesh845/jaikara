<?php

namespace App\Http\Controllers\Backend\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CatgMast;
use App\Models\User;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use Auth;

class MyClassifiedController extends Controller
{
    
    public function index(){

    	return view('backend.seller.myclassified.index');
    }

    public function  create(){
        
        $catg =  CatgMast::where('catg_type' ,'cc')->where('parent_id', null)->orderby('catg_name')->get();
        $atz = User::find(Auth::user()->id);
        $cnty = Country::all();
    	return view('backend.seller.myclassified.create',compact('catg','atz','cnty'));
    }

    public function getsubcatg(Request $request){
         
        return $catg =  CatgMast::where('catg_type' ,'cc')->where('parent_id', $request->id)->orderby('catg_name')->get();
    }
}
