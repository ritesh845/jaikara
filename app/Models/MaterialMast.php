<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialMast extends Model
{
    use HasFactory;
    protected $table = 'material_mast';
    protected $primaryKey = 'material_id';
    protected $guarded = [];
}
