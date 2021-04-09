<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCertification extends Model
{
    use HasFactory;
    protected $table = 'user_certfications';
    protected $primaryKey = null;
    protected $guarded = []; 
    public $timestamps = false;
}
