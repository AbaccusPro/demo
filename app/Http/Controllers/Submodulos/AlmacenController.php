<?php

namespace App\Http\Controllers\Submodulos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

use App\Claves_ur;
use App\Claves_fun;
use App\Claves_pp;
use App\Claves_cog;
use App\Claves_gas;
use App\Claves_ff;

use App\Proveedor;
use App\Plan_sub15;
use App\cat_Proveedores;

use App\Bien_sub2;
use App\Bien_sub3;
use App\Bien_sub4_1;
use DB;

class AlmacenController extends Controller
{


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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function consultaExistencias()

    {
        return view('submodulos.bienes.almacen.consulta_existencias');
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

    public function catCreate()
    {
        $clave = Plan_sub15::pluck('clave', 'clave');  
        $proveedor = cat_Proveedores::pluck('nombre', 'nombre');     

    return view('submodulos.bienes.almacen.entrada_inventario', compact('clave', 'proveedor'));
}


    public function storeInventario(Request $request)
    {       

        $input = new bien_sub4_1;

        $input->fecha_ent = $request->fecha_ent;
        $input->folio_compra = $request->folio_compra;
        $input->fecha_fact = $request->fecha_fact;
        $input->folio_fact = $request->folio_fact;
        $input->cve_presup = $request->cve_presup;
        $input->proveedor = $request->proveedor;
        $input->bien = $request->bien;
        $input->cve_bien = $request->cve_bien;
        $input->marca = $request->marca;
        $input->modelo = $request->modelo;
        $input->cantidad = $request->cantidad;
        $input->carac = $request->carac;
        $input->costo_unit = $request->costo_unit;
        $input->total = $request->total;
        

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
     * Se busca el id de la entrada y se inyectan los datos para mostrar cada entrada.
     *
     * @return \Illuminate\Http\Response
     */
    public function showEntrada($id)
    {
        $entrada = Bien_sub4_1::find($id);
        return view('submodulos.bienes.almacen.entrada', compact('entrada'));
    }


}
