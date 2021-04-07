<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function userShow(){
    	$users = User::select('id','role_id','name','email','mobile','created_at','status','email_verified_at')->whereIn('role_id',['3','4','5'])->orderBy('created_at','desc')->cursor();
    	return view('backend.admin.user.show',compact('users'));
    }
    public function userApproval($id){
    	$user = User::find($id);
    	if($user->status == 'P'){
    		$status = 'A';
    		$message = 'User Approved Successfully';
    	}else{
    		$status = 'P';
    		$message = 'User UnApproved Successfully';
    	}
    	$user->update(['status' => $status]);
    	return [
    		'status' => 'success',
    		'message' => $message
    	];

    }
    public function userEdit($id){
    	$user = User::find($id);
    	return view('backend.admin.user.edit',compact('user'));
    }
}
