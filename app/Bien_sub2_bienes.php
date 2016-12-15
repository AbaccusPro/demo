<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bien_sub2_bienes extends Model
{
    protected $table = 'bien_sub2_bienes';

    protected $fillable = [
    'bien',
    'medida',
    'cantidad',
    'marca', 
    'precio', 
    'carac', 
    'just', 
    'orden_id'];

    public function orden(){

    return $this->belongsTo('App\Bien_sub2', 'orden_id');
	}
}
