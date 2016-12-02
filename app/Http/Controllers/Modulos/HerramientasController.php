<?php

namespace App\Http\Controllers\Modulos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HerramientasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tutoriales()
    {
        return view('herramientas.tutoriales');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function soporte()
    {
        return view('herramientas.soporte');
    }


}
