<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function userIndex(){
    	$users = User::select('id','role_id','name','email','mobile','created_at','status','email_verified_at')->whereIn('role_id',['3','4','5'])->orderBy('created_at','desc')->cursor();
    	return view('backend.admin.user.index',compact('users'));
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
    public function userUpdate(Request $request){
        $data = $request->validate([
            'email'         => 'required|unique:users,email,'.$request->id,
            'name'          => 'required|min:3|max:120',
            'mobile'        => 'required|unique:users,email,'.$request->id,
            'country_code'  => 'required|not_in:0',
            'state_code'    => 'required|not_in:0',
            'city_code'     => 'required|not_in:0',
            'address'         => 'required|min:5|max:200'
        ],
        [
            'address.required' => 'Address field is required.',
            'country_code.*' => 'Country field is required.',
            'state_code.*' => 'State field is required.',
            'city_code.*' => 'City field is required.',
        ]);

        User::find($request->id)->update($data);
        return redirect()->route('userIndex')->with('success',"User Updated Successfully.");
    }
    public function userShow($id){
       $user = User::find($id);
       return view('backend.admin.user.show',compact('user'));
    }
    public function userDelete($id){
       $user = User::find($id);
       $user->delete();
        return redirect()->route('userIndex')->with('success',"User Deleted Successfully.");
    }

    public function userPerDay(){
        $users = User::selectRaw('count(users.id) as user_count , joining_date')->whereIn('role_id',['3','4','5'])->groupBy('joining_date')->orderBy('joining_date','desc')->get();
        return view('backend.admin.user.per_day',compact('users'));
    }
}
