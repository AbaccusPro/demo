<?php

namespace App\Http\Controllers\Reportes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

use App\Bien_sub4_1;
use DB;
use PDF;


class AlmacenReportesController extends Controller
{


    public function entradaPDF($id)    
    {      

        $entrada = Bien_sub4_1::find($id);

        $pdf = \PDF::loadview('submodulos.bienes.almacen.reportes.entrada', compact('entrada'));
        return $pdf->stream('entrada_inventario.pdf');
    }



}
