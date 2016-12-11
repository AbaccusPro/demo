<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bien_sub2_bienes extends Model
{
    protected $table = 'bien_sub2_bienes';

    protected $fillable = ['bien','medida','cantidad','marca', 'precio', 'carac', 'just', 'bien_id'];

    public function bienes(){
    return $this->belongsTo('App\Bien_sub2', 'bien_id');
	}
}
