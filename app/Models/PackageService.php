<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageService extends Model
{
    use HasFactory;
    protected $table = 'pkg_services';
    protected $primaryKey = null;
    protected $guarded = []; 
    public $timestamps = false;
}
