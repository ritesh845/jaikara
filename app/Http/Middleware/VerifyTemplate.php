<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
use App\Models\Page;
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
        // $this->url = request()->getHttpHost();
        

        // $user = User::select('domain_url','status','template_id','template_name','site_name','site_logo')->firstWhere(['domain_url' => $this->url,'status' => 'A']);
        // if(!empty($user)){
        //     if($this->url === '127.0.0.1:8000'){
        //         $catg_type = '1';
        //     }else{
        //         $catg_type = '2';
        //     }
        //   //  $catgs =  CatgMast::select('catg_id','catg_name','catg_url')->where('catg_type',$catg_type)->orderBy('catg_order','asc')->get();
        //     //Session::put('catgs',$catgs);

        //     $template_name = $user->template_name;
        //     $site_name = $user->site_name;
        //     $site_logo = $user->site_logo;
        //     Session::put('template_name',$template_name);
        //     Session::put('site_name',$site_name);
        //     Session::put('site_logo',$site_logo);
        // }else{
        //     abort(404);
        // }

        $this->url = request()->getHttpHost();
        

        if(count(explode('/', request()->getRequestUri())) > 1){
            $domain_name =  explode('/', request()->getRequestUri())[1];
        }else{
            $domain_name = '';
        }
        if($domain_name == 'login' || $domain_name == 'register'){
            $user = User::firstWhere(['domain_url' => $this->url,'status' => 'A']);
        }else{
          if($domain_name !=null){
              $page = Page::firstWhere('page_name',$domain_name);
              if(empty($page)){
                  $user =  User::firstWhere('domain_url',$domain_name);
              }else{
                  $user = User::firstWhere(['domain_url' => $this->url,'status' => 'A']);
              }
          }else{
            $user = User::firstWhere(['domain_url' => $this->url,'status' => 'A']);
          }
        }
          
        if(!empty($user)){
            // if($this->url === '127.0.0.1:8000'){
            //     $catg_type = '1';
            // }else{
            //     $catg_type = '2';
            // }
          //  $catgs =  CatgMast::select('catg_id','catg_name','catg_url')->where('catg_type',$catg_type)->orderBy('catg_order','asc')->get();
            //Session::put('catgs',$catgs);

            $template_name = $user->template_name;
            $site_name = $user->site_name;
            $site_logo = $user->site_logo;
            Session::put('template_name',$template_name);
            Session::put('site_name',$site_name);
            Session::put('site_logo',$site_logo);
            Session::put('domain_name',$domain_name);
            Session::put('user',$user);

        }else{
            abort(404);
        }
    
      
        return $next($request);
    }
}
