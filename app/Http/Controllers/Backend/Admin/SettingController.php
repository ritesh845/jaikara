<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
   	public function generalSetting(){
   		
   		return view('backend.admin.setting.general');
   	}
}
