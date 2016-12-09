<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan_sub15 extends Model
{
    protected $table = 'plan_sub15';
    //

    public function setClaveAttribute($value)
    {
        $this->attributes['clave'] = $this->ur . '-' . $this->fun . '-' . $this->pp . '-' . $this->cog . '-' . $this->gasto . '-' . $this->ff;
    }

}
