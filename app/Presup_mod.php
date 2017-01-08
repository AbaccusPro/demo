<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presup_mod extends Model
{
    protected $table = 'presup_mod';


    public function setClaveAttribute($value)
    {
        $this->attributes['clave'] = $this->ur . '-' . $this->fun . '-' . $this->pp . '-' . $this->cog . '-' . $this->gasto . '-' . $this->ff;
    }

    public function compra(){
    	return $this->hasMany('App\Bien_sub3', 'presup_id');
    }

}
