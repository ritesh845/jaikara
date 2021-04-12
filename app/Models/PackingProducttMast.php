<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackingProducttMast extends Model
{
    use HasFactory;
    protected $table = 'packing_prdt_mast';
    protected $primaryKey = 'packing_id';
    protected $guarded = [];
}
