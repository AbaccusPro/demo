<?php

namespace App\Http\Controllers\Reportes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

use App\Bien_sub2;
use App\Bien_sub2_bienes;
use App\Bien_sub3;
use App\Bien_sub3_bienes;
use DB;
use PDF;


class AdquisicionesReportesController extends Controller
{


    public function solicitudPDF($id)    
    {      

        $solicitud = Bien_sub2::find($id);
        $bienes = Bien_sub2_bienes::find($id);

        $pdf = \PDF::loadview('submodulos.bienes.adquisiciones.reportes.solicitud', compact('solicitud', 'bienes'));
        return $pdf->stream('solicitud_bienes.pdf');
    }


    public function ordenPDF($id)    
    {      

        $orden = Bien_sub3::find($id);
        $bienes = Bien_sub3_bienes::find($id);

        $pdf = \PDF::loadview('submodulos.bienes.adquisiciones.reportes.orden_compra', compact('orden', 'bienes'));
        return $pdf->stream('orden_compra.pdf');
    }

}
