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
}
