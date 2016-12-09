<?php

namespace App\Http\Controllers\Reportes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use PDF;


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



    public function reportePDF1()    
    {        
        $pdf = \PDF::loadview('submodulos.contabilidad.reportes.pdf.libro_diario');
        return $pdf->stream('libro_diario.pdf');
    }

}
