<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class SellTrade extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'sell_trade_lead';
    protected $primaryKey = 'sell_trd_id';
    protected $guarded = []; 
}
