<?php

namespace App\Http\Controllers\Modulos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HerramientasController extends Controller
{
    
    /* Muestra la vista de ABC */
    public function abc_armonizacion()
    {
        return view('herramientas.abc_armonizacion');
    }


    /* Muestra la vista de Glosario */
    public function glosario()
    {
        return view('herramientas.glosario');
    }


    /* Muestra la vista tutoriales */
    public function tutoriales()
    {
        return view('herramientas.tutoriales');
    }


    /* Muestra el formulario de soporte */
    public function soporte()
    {
        return view('herramientas.soporte');
    }


}
