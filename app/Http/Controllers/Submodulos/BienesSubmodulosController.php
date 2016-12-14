<?php

namespace App\Http\Controllers\Submodulos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Claves_ur;
use App\Claves_fun;
use App\Claves_pp;
use App\Claves_cog;
use App\Claves_gas;
use App\Claves_ff;

use App\Proveedor;
use App\Plan_sub15;

use App\Bien_sub2;
use App\Bien_sub3;
use App\Bien_sub4_1;
use DB;

class BienesSubmodulosController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function consultaExistencias()

    {
        return view('submodulos.bienes.almacen.consulta_existencias');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function adquisiciones()
    {
        return view('submodulos.bienes.submodulo.adquisiciones');
    }






 


    /**
     * Muestra la vista principal de almacén.
     *
     * @return \Illuminate\Http\Response
     */
    public function almacen()
    {
        return view('submodulos.bienes.submodulo.almacen');
    }


    /**
     * Muestra el registro y guarda las entradas de inventario.
     *
     * @return \Illuminate\Http\Response
     */
    public function entradaInventario()

    {
        return view('submodulos.bienes.almacen.entrada_inventario');    
    }


    public function storeEntradaInventario(Request $request)
    {       

        $input = new bien_sub4_1;

        $input->fecha_ent = $request->fecha_ent;
        $input->folio_compra = $request->folio_compra;
        $input->fecha_fact = $request->fecha_fact;
        $input->folio_fact = $request->folio_fact;
        $input->proveedor = $request->proveedor;
        $input->articulo = $request->articulo;
        $input->cantidad = $request->cantidad;
        $input->importe = $request->importe;
        $input->carac = $request->carac;

        $input->save();

    $request->session()->flash('alerta', 'El artículo se guardó correctamente en el inventario');

    return redirect('bienes/submodulo/almacen/entrada_inventario');
}


     /**
     * Consulta de inventario.
     *
     * @return \Illuminate\Http\Response
     */
    public function consultaInventario()
    {
        return view('submodulos.bienes.almacen.consulta_inventario_consumo');
    }


     /**
     * Muestra los datos de las entradas del inventario.
     *
     * @return Response
     */
    public function showConsultaInventario()
    {
        $input = DB::table('bien_sub4_1')->get();

        return view('submodulos.bienes.almacen.consulta_inventario_consumo', ['bien_sub4_1' => $input]);
    }





    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function verificacionDocumentos()
    {
        return view('submodulos.bienes.adquisiciones.verificacion_documentos');
    }



}
