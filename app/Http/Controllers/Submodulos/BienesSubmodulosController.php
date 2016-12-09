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
     * Primero se muestra y guarda la solicitud de bienes.
     *
     * @return \Illuminate\Http\Response
     */
    public function solicitudBienes()
    {
        return view('submodulos.bienes.adquisiciones.solicitud_bienes');
    }


    public function create()
    {

        $claves_ur = Claves_ur::pluck('nombre', 'id');
        $claves_fun = Claves_fun::pluck('nombre', 'id');
        $claves_pp = Claves_pp::pluck('nombre', 'id');
        $claves_cog = Claves_cog::pluck('nombre', 'id');
        $claves_gas = Claves_gas::pluck('nombre', 'id');
        $claves_ff = Claves_ff::pluck('nombre', 'id');
        
    return view('submodulos.bienes.adquisiciones.solicitud_bienes', compact('claves_ur', 'claves_fun', 'claves_pp', 'claves_cog', 'claves_gas', 'claves_ff'));
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


    /**
     * Primero se muestra y guarda la orden de compra.
     *
     * @return \Illuminate\Http\Response
     */
    public function ordenCompra()
    {
        return view('submodulos.bienes.adquisiciones.registro_orden_compra');
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


    /**
     * Muestra bandeja de autorizacion de bienes.
     *
     * @return \Illuminate\Http\Response
     */
    public function autorizacionBienes()
    {
        return view('submodulos.bienes.adquisiciones.autorizacion_bienes');
    }


        /**
     * Muestro la bandeja de las autorizaciones de compras.
     *
     * @return \Illuminate\Http\Response
     */
    public function autorizacionCompras()
    {
        return view('submodulos.bienes.adquisiciones.autorizacion_orden_compra');
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
