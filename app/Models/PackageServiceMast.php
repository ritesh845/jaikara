<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageServiceMast extends Model
{
    use HasFactory;
    protected $table = 'pkg_services_mast';
    protected $primaryKey = 'pkg_service_id';
    protected $guarded = []; 
    public $timestamps = false;

    public function packages(){
    	return $this->hasMany('App\Models\PackageService','pkg_service_id','pkg_service_id');
    }

}
