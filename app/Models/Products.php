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
    	 return $this->hasMany('App\Models\Documents', 'user_id','prdt_id')->where('doc_type','product');
    } 
    public function currency(){
    	return $this->belongsTo('App\Models\Currency','curr_id','curr_id');
    }
    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function categories(){
        return $this->belongsToMany(CatgMast::class,'product_catg','prdt_id','catg_id');
    }
}
