<?php

namespace App\Http\Controllers\Backend\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductGroup;
use Auth;
class ProductGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productGroups= ProductGroup::where('user_id',Auth::user()->id)->get();
        return view('backend.seller.product-group.index',compact('productGroups'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productGroups= ProductGroup::where('user_id',Auth::user()->id)->get();
        return view('backend.seller.product-group.create',compact('productGroups'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'grp_name'=>'required'
        ]);
        $data['user_id'] = Auth::user()->id;
        $data['parent_id'] = $request->parent_id;
        ProductGroup::create($data);
        return redirect()->back()->with('success','Product Group added Successfully');

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
        $productGroups  = ProductGroup::where('prdt_grp_id',$id)->first();
        $productGroups1 = ProductGroup::where('parent_id',NULL)->get();
        $data = ProductGroup::where(['prdt_grp_id'=>$productGroups->parent_id])->first();
        // dd($productGroups);
        return view('backend.seller.product-group.edit',compact('productGroups','productGroups1','data'));
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
        $data = $request->validate([
            'grp_name'=>'required'
        ]);
        if ($request->parent_id) {
            $data['parent_id'] = $request->parent_id;
        }
        ProductGroup::where('prdt_grp_id',$id)->update($data);
        return redirect()->back()->with('success','Product Group update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request ,$id)
    {
        if ($request->parent_id) {
            ProductGroup::where(['prdt_grp_id'=>$id])->delete();
        }else{

            ProductGroup::where('prdt_grp_id',$id)->where('parent_id',$request->parent_id)->delete();
        }
            return redirect()->back()->with('success','Product Group deleted Successfully');
    }

    // public function getGrpPrim($id){
    //     return ProductGroup::where('parent_id',$id)->orderBy('grp_name')->get();
    // }
}
