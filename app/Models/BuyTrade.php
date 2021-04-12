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

    public function category(){

    	return $this->belongsTo('App\Models\CatgMast','catg_id');
    }
}
