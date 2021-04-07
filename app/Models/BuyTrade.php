<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyTrade extends Model
{
    use HasFactory;
    protected $table = 'buy_trade_lead';
    protected $primaryKey = 'buy_trd_id';
    protected $guarded = []; 
}
