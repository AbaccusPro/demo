<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bien_sub3_bienes extends Model
{
	protected $table = 'bien_sub3_bienes';

    protected $fillable = ['producto', 'medida', 'cantidad', 'marca', 'precio', 'carac'];

    public function compra(){
    return $this->belongsTo('App\Bien_sub3', 'bien_id');
	}

}
