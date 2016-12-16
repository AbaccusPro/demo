<?php

namespace App\Http\Controllers\Submodulos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Plan_sub15;
use App\cat_Proveedores;
use App\cat_Bienes;

use App\Bien_sub2;
use App\Bien_sub3;
use App\Bien_sub3_bienes;
use App\Bien_sub4_1;
use DB;

class OrdenCompraController extends Controller
{

    /**
     * Primero se muestra y guarda la orden de compra.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('submodulos.bienes.adquisiciones.registro_orden_compra');
    }


    public function catCreate()
    {
        $clave = Plan_sub15::pluck('clave', 'id');  
        $proveedor = cat_Proveedores::pluck('nombre', 'id');     
        $bienes = cat_Bienes::pluck('nombre');    

    return view('submodulos.bienes.adquisiciones.registro_orden_compra', compact('clave', 'proveedor', 'bienes'));
}


    public function create($Id)
    {
        //para asignarle el workout al usuario, se encuentra mediante el id y nos envia al formulario de asignacion
        $id = base64_decode($Id);
        $folio = Bien_sub3::find($id);

        return view('bienes/submodulo/adquisiciones/registro_orden_compra', compact('folio'));
    }

    public function store(Request $request, $id)
    {       

        $data = $request->all();

        $orden = Bien_sub3::create([ 

            'fecha'           => $data['fecha'],
            'folio_aprobado'  => $data['folio_aprobado'],
            'folio_compra'    => $data['folio_compra'],
            'clave'           => $data['clave'],
            'tipo_adqui'      => $data['tipo_adqui'],
            'proveedor'       => $data['proveedor'],

            'subtotal'        => $data['subtotal'],
            'iva'             => $data['iva'],
            'total'           => $data['total'],
            'ent_dias'        => $data['ent_dias'],
            'ent_lugar'       => $data['ent_lugar'],

]);
     
        for ($i=0; $i < count($data['producto']) ; $i++) { 

            $producto = Bien_sub3_bienes::create([

                'producto'  => $data['producto'][$i],
                'marca'     => $data['marca'][$i],
                'medida'    => $data['medida'][$i],
                'precio'    => $data['precio'][$i],
                'cantidad'  => $data['cantidad'][$i],
                'carac'     => $data['carac'][$i],
                'orden_id'  => $orden->id,
  
                ]);
        }       

    $request->session()->flash('alerta', 'Su Orden de Compra se ha enviado exitosamente');

    return redirect('bienes/submodulo/adquisiciones/registro_orden_compra');
}


     /**
     * Se obtienen los datos de cada tabla y se envían a la vista (tabla), por separado.
     *
     * @return Response
     */
    public function show()
    {
        $input = DB::table('bien_sub3')->get();
        $bienes = DB::table('bien_sub3_bienes')->get();

        return view('submodulos.bienes.adquisiciones.autorizacion_orden_compra', ['bien_sub3' => $input, 'bien_sub3_bienes' => $bienes] );
    }
    

    /**
     * Se busca el id y se inyectan los datos para visualizar cada orden de compra.
     *
     * @return \Illuminate\Http\Response
     */
    public function showOrden($id)
    {

        $orden = Bien_sub3::find($id);
        $bienes = Bien_sub3_bienes::find($id);

        return view('submodulos.bienes.adquisiciones.orden_compra', compact('orden', 'bienes'));
    }



}
