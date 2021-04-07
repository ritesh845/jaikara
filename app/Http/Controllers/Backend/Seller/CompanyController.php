<?php

namespace App\Http\Controllers\Backend\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class CompanyController extends Controller
{
   
    public function profile()
    {
        return view('backend.seller.company.profile');
    } 
    public function companyProfileEdit()
    {
        return view('backend.seller.company.profile-edit');
    }

   
}
