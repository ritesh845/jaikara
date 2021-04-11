<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class BuyTrade extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'buy_trade_lead';
    protected $primaryKey = 'buy_trd_id';
    protected $guarded = []; 

     public function getbtracat(){

    	return $this->belongsTo('App\Models\SellTrade_cat','trade_lead_catg');
    }
}
