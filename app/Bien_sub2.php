<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bien_sub2 extends Model
{
    protected $table = 'bien_sub2';

    protected $fillable = [
    'clave',
    'fecha', 
    'folio', 
    'ur',
    'fun', 
    'pp', 
    'cog', 
    'gasto', 
    'ff', 
    'imp_comp',
    'estatus'
    ];
    
    public function bienes(){

    return $this->hasMany('App\Bien_sub2_bienes', 'orden_id');
	}

}
