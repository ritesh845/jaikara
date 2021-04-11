<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ServiceType;
use Illuminate\Auth\Events\Registered;
use Mail;
use App\Mail\VerifyMail;
use Illuminate\Support\Str;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('VerifyTemplate');

    }

    public function showRegistrationForm()
    {
        $services = ServiceType::orderBy('service_name','asc')->cursor();
        return view('auth.register',compact('services'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'captcha'  => ['required','captcha']

        ],
        [
            'captcha.captcha'=>'Invalid captcha code.'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $role_id = $data['role_id'] == 'buyer' ? '3' : ($data['role_id'] == 'seller' ? '4' : '5');

        $user  =  User::create([
            'name'          => $data['name'],
            'email'         => $data['email'],
            'role_id'       => $role_id,
            'comp_name'     => $data['comp_name'],
            'mobile'        => $data['mobile'],
            'country_code'  => $data['country_code'],
            'state_code'    => $data['state_code'],
            'city_code'     => $data['city_code'],
            'is_terms'      => $data['is_terms'] == 'on' ? '1' : '0',
            'service_id'    => $data['role_id'] == 'service' ? $data['service_type'] : null,
            'password'      => Hash::make($data['password']),
            'joining_date'  => date('Y-m-d'),

            'remember_token'=> Str::random(40),
            'template_id'=> $role_id == '4' ? '1' : null,
            'template_name'=> $role_id == '4' ? 'template' : null,
            'site_name'=> $role_id == '4' ? $data['comp_name'] : null
        ]);
        $meta = $user->name.' -'.$user->city->city_name.'-'.$user->state->state_name;

        $metaData = [
            'meta_title'    => $meta, 
            'meta_desc'     => $meta,
            'meta_keywords' => $meta,
        ];

        $user->update($metaData); 
        $user->attachRole($role_id);

        Mail::to($user->email)->send(new VerifyMail($user));

        return $user;

    }

    public function register(Request $request)
    {
     
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));


        return $this->registered($request, $user)
                        ?: redirect('/login')->with('success','We sent activation link, Check your email and click on the link to verify your email');


        // $this->guard()->login($user);

        // if ($response = $this->registered($request, $user)) {
        //     return $response;
        // }

        // return $request->wantsJson()
        //             ? new JsonResponse([], 201)
        //             : redirect($this->redirectPath());

        // return $this->registered($request, $user)
        //                 ?: redirect('/verify?phone='.$request->mobile)->with('success','We sent activation code, Check your mobile and also check your email and click on the link to verify your email');
    }
}
