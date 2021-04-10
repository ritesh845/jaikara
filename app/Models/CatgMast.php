<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatgMast extends Model
{
    use HasFactory;
    protected $table = 'catg_mast';
    protected $primaryKey = 'catg_id';
    protected $guarded = []; 
    public $timestamps = false;
    public function subcategories(){
    	return $this->hasMany('App\Models\CatgMast','parent_id','catg_id');
    }
    
}
