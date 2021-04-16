<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MyClassifieds extends Model
{
    use HasFactory,SoftDeletes;

     protected $table = 'classifieds';
    protected $primaryKey = 'mycl_id';
    protected $guarded = []; 

    public function category(){
    	return $this->belongsTo('App\Models\CatgMast','catg_id','catg_id');
    }
}
