<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryTerms extends Model
{
    use HasFactory;
    protected $table = 'delivery_terms';
    protected $primaryKey = 'dlvry_trms_id';
    protected $guarded = []; 
}
