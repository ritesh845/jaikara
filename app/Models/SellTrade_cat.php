<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellTrade_cat extends Model
{
    use HasFactory;
    protected $table = 'trade_catg';
    protected $primaryKey = 'trd_catg_id';
    protected $guarded = []; 
}
