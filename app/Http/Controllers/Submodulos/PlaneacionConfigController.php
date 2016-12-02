<?php

namespace App\Http\Controllers\Submodulos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlaneacionConfigController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function configClasificadoresEgreso()
    {
        return view('submodulos.planeacion.configuraciones.clasificadores_egreso');
    }



}
