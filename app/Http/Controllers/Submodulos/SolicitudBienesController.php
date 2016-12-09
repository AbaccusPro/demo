<?php

namespace App\Http\Controllers\Submodulos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Plan_sub15;
use App\cat_Bienes;
use App\Claves_ur;
use App\Claves_fun;
use App\Claves_pp;
use App\Claves_cog;
use App\Claves_gas;
use App\Claves_ff;

use App\Bien_sub2;
use App\Bien_sub3;
use App\Bien_sub4_1;
use DB;

class SolicitudBienesController extends Controller
{


    /**
     * Primero se muestra y guarda la solicitud de bienes.
     *
     * @return \Illuminate\Http\Response
     */
    public function solicitudBienes()
    {
        return view('submodulos.bienes.adquisiciones.solicitud_bienes');
    }


    public function catCreate()
    {        
        $clave = Plan_sub15::pluck('clave', 'id');  
        $bienes = cat_Bienes::pluck('nombre', 'id'); 

        $claves_ur = Claves_ur::pluck('nombre', 'id');
        $claves_fun = Claves_fun::pluck('nombre', 'id');
        $claves_pp = Claves_pp::pluck('nombre', 'id');
        $claves_cog = Claves_cog::pluck('nombre', 'id');
        $claves_gas = Claves_gas::pluck('nombre', 'id');
        $claves_ff = Claves_ff::pluck('nombre', 'id');

    return view('submodulos.bienes.adquisiciones.solicitud_bienes', compact('clave', 'bienes', 'claves_ur', 'claves_fun', 'claves_pp', 'claves_cog', 'claves_gas', 'claves_ff'));
}


    public function storeSolicitudBienes(Request $request)
    {       

        $input = new bien_sub2;

        $input->num_sol = $request->num_sol;
        $input->fecha = $request->fecha;
        $input->ur = $request->ur;
        $input->fun = $request->fun;
        $input->pp = $request->pp;
        $input->cog = $request->cog;
        $input->gasto = $request->gasto;
        $input->ff = $request->ff;

        $input->bien = $request->bien;
        $input->medida = $request->medida;
        $input->cantidad = $request->cantidad;
        $input->marca = $request->marca;
        $input->precio = $request->precio;
        $input->carac = $request->carac;
        $input->just = $request->just;
        $input->imp_comp = $request->imp_comp;

        $input->save();

    $request->session()->flash('alerta', 'Su solicitud de bien se ha enviado exitosamente');

    return redirect('bienes/submodulo/adquisiciones/solicitud_bienes');
}

     /**
     * Al final muestro los datos de las solicitudes de bienes.
     *
     * @return Response
     */
    public function showSolicitudBienes()
    {
        $input = DB::table('bien_sub2')->get();

        return view('submodulos.bienes.adquisiciones.autorizacion_bienes', ['bien_sub2' => $input]);
    }




}
