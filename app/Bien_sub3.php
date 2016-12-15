<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bien_sub3 extends Model
{
    protected $table = 'bien_sub3';

    protected $fillable = [
    'fecha',
    'folio_aprobado',
    'folio_compra',
    'clave',
    'tipo_adqui',
    'proveedor',
    'subtotal',
    'iva',
    'total',
    'ent_dias',
    'ent_lugar'];

    public function bienes(){

    return $this->hasMany('App\Bien_sub3_bienes', 'orden_id');
	}

}
