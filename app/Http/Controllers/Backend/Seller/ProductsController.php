<?php

namespace App\Http\Controllers\Backend\Seller;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    public function index()
    {
        return view('backend.seller.products.index');
       
    }

    
    public function create()
    {
        return view('backend.seller.products.create');
        
    }

    
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
