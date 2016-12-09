<?php

namespace App\Http\Controllers\Submodulos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Plan_sub15;
use App\cat_Proveedores;

use App\Bien_sub2;
use App\Bien_sub3;
use App\Bien_sub4_1;
use DB;

class OrdenCompraController extends Controller
{

    /**
     * Primero se muestra y guarda la orden de compra.
     *
     * @return \Illuminate\Http\Response
     */
    public function ordenCompra()
    {
        return view('submodulos.bienes.adquisiciones.registro_orden_compra');
    }


    public function catCreate()
    {
        $clave = Plan_sub15::pluck('clave', 'id');  
        $proveedor = cat_Proveedores::pluck('nombre', 'id');        

    return view('submodulos.bienes.adquisiciones.registro_orden_compra', compact('clave', 'proveedor'));
}


    public function storeOrdenCompra(Request $request)
    {       

        $input = new bien_sub3;

        $input->fecha = $request->fecha;
        $input->num_sol_apro = $request->num_sol_apro;
        $input->num_sol_compra = $request->num_sol_compra;
        $input->clave = $request->clave;
        $input->tipo_adqui = $request->tipo_adqui;
        $input->proveedor = $request->proveedor;

        $input->producto = $request->producto;
        $input->medida = $request->medida;
        $input->cantidad = $request->cantidad;
        $input->marca = $request->marca;
        $input->precio = $request->precio;
        $input->carac = $request->carac;

        $input->subtotal = $request->subtotal;
        $input->iva = $request->iva;
        $input->total = $request->total;
        $input->dias_ent = $request->dias_ent;
        $input->lugar_ent = $request->lugar_ent;

        $input->save();

    $request->session()->flash('alerta', 'Su Orden de Compra se ha enviado exitosamente');

    return redirect('bienes/submodulo/adquisiciones/registro_orden_compra');
}


     /**
     * Muestra los datos de las órdenes de compra.
     *
     * @return Response
     */
    public function showOrdenCompra()
    {
        $input = DB::table('bien_sub3')->get();

        return view('submodulos.bienes.adquisiciones.autorizacion_orden_compra', ['bien_sub3' => $input]);
    }




}
