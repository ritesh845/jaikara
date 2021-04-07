<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
class VerifyTemplate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $this->url = request()->getHttpHost();
       
        $user = User::select('domain_url','status','template_id','template_name','site_name','site_logo')->firstWhere(['domain_url' => $this->url,'status' => 'A']);
        if(!empty($user)){
            if($this->url === '127.0.0.1:8000'){
                $catg_type = '1';
            }else{
                $catg_type = '2';
            }
          //  $catgs =  CatgMast::select('catg_id','catg_name','catg_url')->where('catg_type',$catg_type)->orderBy('catg_order','asc')->get();
            //Session::put('catgs',$catgs);

            $template_name = $user->template_name;
            $site_name = $user->site_name;
            $site_logo = $user->site_logo;
            Session::put('template_name',$template_name);
            Session::put('site_name',$site_name);
            Session::put('site_logo',$site_logo);
        }else{
            abort(404);
        }
        return $next($request);
    }
}
