<?php

namespace App\Http\Controllers\Modulos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlaneacionController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modulos.planeacion');
    }

    /**
     * Muestra los submodulos del modulo.
     *
     * @return \Illuminate\Http\Response
     */
    public function submodulos()
    {
        return view('modulos.planeacion_submodulos');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function configuraciones()
    {
        return view('submodulos.planeacion.configuraciones');
    }   


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function consultas()
    {
        return view('submodulos.planeacion.consultas');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function manuales()
    {
        return view('submodulos.planeacion.manuales');
    } 

}
