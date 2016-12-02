<?php

namespace App\Http\Controllers\Submodulos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContabilidadSubmodulosController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contabilidadConsultas()
    {
        return view('submodulos.contabilidad.consultas');
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function consultasLibroDiario()
    {
        return view('submodulos.contabilidad.consultas.libro_diario');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function consultasLibroMayor()
    {
        return view('submodulos.contabilidad.consultas.libro_mayor');
    }

}
