<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeAndProduction extends Model
{
    use HasFactory;
    protected $table = 'trade_production';
    protected $primaryKey = 'trade_pro_id';
    protected $guarded = []; 
}
