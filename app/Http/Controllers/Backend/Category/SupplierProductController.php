<?php

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CatgMast;
class SupplierProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if(request('catg_id') !=null){
            $categories = CatgMast::where('parent_id',request('catg_id'))->get();
        }else{
            $categories = CatgMast::where(['catg_type' => 'SP', 'parent_id' => null])->get();
        }
        // return $categories;
        return view('backend.admin.category.supplier_product.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = CatgMast::select('catg_id','catg_name')->where(['catg_type' => 'SP', 'parent_id' => null])->get();
        return view('backend.admin.category.supplier_product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validation($request);
        
        // return $data;

        if($request->hasFile('catg_img')){
           $data['catg_img']  = file_upload($request->catg_img,'/categories');
        }
        CatgMast::create($data);
        return redirect()->back()->with('success','Category Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = CatgMast::select('catg_id','catg_name')->where(['catg_type' => 'SP', 'parent_id' => null])->get();
        $catg = CatgMast::find($id);
        // return $catg;
        return view('backend.admin.category.supplier_product.edit',compact('categories','catg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->validation($request);
        $category = CatgMast::find($id);
        if($request->hasFile('catg_img')){
           $data['catg_img']  = file_upload($request->catg_img,'/categories',$category,'catg_img');
        }

        $category->update($data);
        return redirect()->back()->with('success','Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        // $CatgMast::find($id);
        // return $category;
    }
    public function validation(Request $request){
        $data = $request->validate([
            'catg_name'     => 'required|min:3|max:255',
            'meta_title'    => 'required|min:3|max:255',
            'meta_desc'     => 'required|min:3|max:255',
            'meta_keywords' => 'required|min:3|max:255',
            'parent_id'     => 'nullable',          

        ]);
        if($request->parent_id !=''){
            $catg =  CatgMast::find($request->parent_id);
            $data['level'] = $catg->level + 1;

        }else{
            $data['level'] = '1';
        }
        return $data;        
    }

    public function approval($id){
        $category = CatgMast::find($id);
        if($category->status == 'P'){
            $status = 'A';
            $message = 'Category Approved Successfully';
        }else{
            $status = 'P';
            $message = 'Category UnApproved Successfully';
        }
        $category->update(['status' => $status]);
        return [
            'status' => 'success',
            'message' => $message
        ];

    }
}
