<?php

namespace App\Http\Controllers\Backend\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CatgMast;
use App\Models\User;
use App\Models\Country;
use App\Models\State;
use App\Models\City;

use App\Models\Documents;
use App\Models\MyClassifieds;
use Auth;

class MyClassifiedController extends Controller
{
    
    public function index(){
        $mycat = MyClassifieds::all();
    	return view('backend.seller.myclassified.index',compact('mycat'));
    }

    public function  create(){
        
        $catg =  CatgMast::where('catg_type' ,'cc')->where('parent_id', null)->orderby('catg_name')->get();
        $atz = User::find(Auth::user()->id);
        $cnty = Country::all();
    	return view('backend.seller.myclassified.create',compact('catg','atz','cnty'));
    }

    public function store(Request $request){
       	$data = $request->validate([   
          'title'=>'required', 
          'price'=>'required',      
          'condition_'=>'required',       
          'catg_id'=>'required',      
          'sub_catg_id'=>'required',          
          'type'=>'nullable',          
          'description'=>'required',          
          'address'=>'required',          
          'country_code'=>'required',          
          'state_code'=>'required',          
          'city_code'=>'required',          
                 
      ]);

       	//return $data;
        $data['user_id'] = Auth::user()->id;
        $classified_id = MyClassifieds::create($data);
       // $data['doc_type'] = $request->doc_type; 
        foreach($request->images as $key=> $image){
        	if($request->hasFile('images.'.$key)){
    			$test = document_upload($request->images[$key],Auth::user()->id.'/classified');
    			$test['user_id'] = $classified_id->mycl_id;
   				Documents::create($test);
	    	}

        }
      

     //  if($request->hasFile('picture')){
     //   	$data['picture'] = file_upload($request->picture,Auth::user()->id.'/image');
     //  }
        return redirect('my_classified')->with('message','My Classified Was Successfully');

    }

    public function edit($id){

         $edit = MyClassifieds::find($id);
         $images = Documents::where('user_id',$id)->get();
         $atz = User::find(Auth::user()->id);
         return view('backend.seller.myclassified.edit',compact('edit','images','atz'));
    }

    public function update(Request $request ,$id){
            
          $data = $request->validate([   
          'title'=>'required', 
          'price'=>'required',      
          'condition_'=>'required',       
          'catg_id'=>'required',      
          'sub_catg_id'=>'required',          
          'type'=>'nullable',          
          'description'=>'required',          
          'address'=>'required',          
          'country_code'=>'required',          
          'state_code'=>'required',          
          'city_code'=>'required',          
                 
      ]);
         

				
         foreach(range(1,6) as $key=>$image){
         	$img_field  = 'image_'.$image;

			if($request->hasFile('image_'.$image)){
    			if($request->doc_id[$key] !=''){
    				$doc  =  Documents::find($request->doc_id[$key]);
					$test = document_upload($request->$img_field,Auth::user()->id.'/classified',$doc,'doc_path');
					$doc->update($test);

    			}else{
    			
					$test = document_upload($request->$img_field,Auth::user()->id.'/classified');
					$test['user_id'] = $id;
    				Documents::create($test);
    			}
   				
			}

          }

          MyClassifieds::where('mycl_id',$id)->update($data);
          return redirect('my_classified')->with('message','My Classified Was Updated Successfully');


    }

     public function delete($id){

        $dservice = MyClassifieds::where('mycl_id', $id)->delete();
        $dservice = Documents::where('user_id', $id)->delete();
        return redirect()->back()->with('message','My Classified Successfully Removed');
    }

    public function getsubcatg(Request $request){
         
        return $catg =  CatgMast::where('catg_type' ,'cc')->where('parent_id', $request->id)->orderby('catg_name')->get();
    }


}
