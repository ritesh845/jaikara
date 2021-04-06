<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function userShow(){
    	$users = User::select('id','role_id','name','email','mobile','created_at','status')->whereNotNull('email_verified_at')->whereIn('role_id',['3','4','5'])->orderBy('created_at','desc')->cursor();
    	return view('backend.pages.user.show',compact('users'));
    }
}
