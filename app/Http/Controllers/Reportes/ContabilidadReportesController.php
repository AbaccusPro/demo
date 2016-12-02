<?php

namespace App\Http\Controllers\Reportes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContabilidadReportesController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function reporte1()
    {
        return view('submodulos.contabilidad.reportes.libro_diario');
    }

        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function reporte2()
    {
        return view('submodulos.contabilidad.reportes.libro_mayor');
    }

}
