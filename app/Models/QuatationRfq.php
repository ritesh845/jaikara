<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuatationRfq extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'quatation_rfq';
    protected $primaryKey = 'qua_id';
    protected $guarded = []; 

     public function getQtracat(){

    	return $this->belongsTo('App\Models\SellTrade_cat','trade_lead_catg');
    }
}
