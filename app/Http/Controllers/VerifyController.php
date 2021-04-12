<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\State;
use App\Models\City;
class VerifyController extends Controller
{
    
    public function postVerfiy(Request $request){
    	if($user = User::where('otp',$request->code)->first()){
    		$user->mobile_verified_at = date('Y-m-d h:i:s');
    		$user->status = 'A';
    		$user->otp = null;
    		$user->save();
    		return redirect()->route('login')->with('success','Your mobile number is active.'); 
    	}else{
    		return back()->with('warning','Verify code is not correct. Please try again'); 
    	}
    }

    public function verifyUser($token)
    {
      	$user = User::where('remember_token',$token)->first();
      // dd($user );
        if($user->email_verified_at == null){
        	$user->email_verified_at = date('Y-m-d h:i:s');
        	$user->save();
        	return redirect()->route('login')->with('success','Your e-mail is verified. You can now login.'); 
        }else{
        	return redirect()->route('login')->with('success','Your e-mail is already verified. You can now login.'); 
        }

    }
    
    public function resendVerifyCode(){    	
    	if($user = User::where('mobile',request()->get('phone'))->first()){
    		$user->otp = SendCode::sendCode($user->mobile); 
            $user->save();
            return "success";
    	}else{
    		return "warning";
    	}
    }
    public function resendVerifyMail(){     
        if($user = User::where('mobile',request()->get('phone'))->first()){
            $user->otp = SendCode::sendCode($user->mobile); 
            $user->save();
            return "success";
        }else{
            return "warning";
        }
    }


    public function get_states($id){
        return State::where('country_code',$id)->orderBy('state_name')->get();
    }

    public function get_cities($id){
        return City::where('state_code',$id)->orderBy('city_name')->get();
    }
    public function refreshCaptcha() {
      
        return captcha_img('math');
    }
}
