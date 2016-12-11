<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bien_sub2 extends Model
{
    protected $table = 'bien_sub2';

    protected $fillable = ['clave','fecha','ur','fun', 'pp', 'cog', 'gasto', 'ff', 'imp_comp', 'solicitud_id'];
    
    public function bienes(){
    return $this->hasMany('App\Bien_sub2_bienes', 'bien_id');
	}

}
