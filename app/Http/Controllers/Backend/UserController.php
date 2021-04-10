<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function userIndex(){
    	$users = User::select('id','role_id','name','email','mobile','created_at','status','email_verified_at')->whereIn('role_id',['3','4','5']);
        if(request('joining_date') !=''){
            $joining_date = request('joining_date');
            $users = $users->where('joining_date',$joining_date);
        }
        $users = $users->orderBy('created_at','desc')->cursor();
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
            'mobile'        => 'required|unique:users,mobile,'.$request->id,
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
        return redirect()->back()->with('success',"User Deleted Successfully.");
    }

    public function userPerDay(){
        $users = User::selectRaw('count(users.id) as user_count , joining_date')->whereIn('role_id',['3','4','5'])->groupBy('joining_date')->orderBy('joining_date','desc')->get();
        return view('backend.admin.user.per_day',compact('users'));
    }

    public function staffIndex(){
        $users = User::select('id','role_id','name','email','mobile','created_at','status','email_verified_at')->where('role_id','6')->get();
        return view('backend.admin.user.staff_index',compact('users')); 
    }
    public function staffCreate(){
        
        return view('backend.admin.user.staff_create'); 
    }
    public function staffStore(Request $request){
        $data =  $this->staffValidation($request);
        $user = User::create($data);
        $user->attachRole(6);
        return redirect()->back()->with('success','Staff member created successfully');  
    }
    public function staffEdit($id){
        $user = User::find($id);
        return view('backend.admin.user.staff_edit',compact('user')); 

    }public function staffShow($id){
        $user = User::find($id);
        return view('backend.admin.user.staff_show',compact('user'));

    }
      
    public function staffUpdate(Request $request,$id){
        // return $request->all();
        $user = User::find($id);
        $data =  $this->staffValidation($request,$id);
        $data['password'] = $user->password;
        $user->update($data);
        return redirect()->back()->with('success','Staff member updated successfully');  
    }
   
    public function staffValidation($request, $id=null){
        $data = $request->validate([
            'email'         => 'required|unique:users,email,'.$id,
            'name'          => 'required|min:3|max:120',
            'password'      => 'nullable|min:5|string',
            'mobile'        => 'required|unique:users,mobile,'.$id,
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
        if($request->password !=null){
            $data['password'] = Hash::make($request->password);
        }
        $data['joining_date'] = date('Y-m-d');
        $data['email_verified_at'] = date('Y-m-d H:i:s');
        $data['status'] = 'A';
        $data['role_id'] = '6';
        $data['is_terms'] = '1';
        return $data;
    }
}
