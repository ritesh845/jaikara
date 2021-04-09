<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InforPolicy extends Model
{
    use HasFactory;
    protected $table = 'infor_policies';
    protected $primaryKey = 'infr_id';
    protected $guarded = []; 
    public $timestamps = false; 

    protected $cast = [
    	'payment_curre' 	=> 'array',
    	'delivery_terms' 	=> 'array',
    	'payment_method' 	=> 'array',
    	'spoken_lang' 		=> 'array',
    	'certification' 	=> 'array',
    ];
}
