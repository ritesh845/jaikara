<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'prdt_id';
    protected $guarded = [];

    public function p_images(){
    	 return $this->hasMany('App\Models\Documents', 'user_id','prdt_id');
    } 
    public function currency(){
    	return $this->belongsTo('App\Models\Currency','curr_id','curr_id');
    }
    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
}
