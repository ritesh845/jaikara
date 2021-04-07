<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellTrade extends Model
{
    use HasFactory;
    protected $table = 'sell_trade_lead';
    protected $primaryKey = 'sell_trd_id';
    protected $guarded = []; 
}
