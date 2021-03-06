<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable
{
    use LaratrustUserTrait,SoftDeletes;
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsTo('App\Models\Role','role_id');
    }
    public function country(){
        return $this->belongsTo('App\Models\Country','country_code');
    }
    public function state(){
        return $this->belongsTo('App\Models\State','state_code');
    }
    public function city(){
        return $this->belongsTo('App\Models\City','city_code');
    }
    public function categories(){
        return $this->belongsToMany('App\Models\CatgMast','user_catg','user_id','catg_id');
    } 
    public function certifications(){
        return $this->belongsToMany('App\Models\Certification','user_certfications','user_id','cert_id');
    }
    public function tradeProduction(){
        return $this->belongsTo('App\Models\TradeAndProduction','id','user_id');
    }
    public function inforPolicies(){
        return $this->belongsTo('App\Models\InforPolicy','id','user_id');
    }
    public function imageGalleries(){
        return $this->hasMany('App\Models\Documents','user_id')->where('doc_type','image_gallery');
    }
}

