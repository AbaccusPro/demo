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
use App\Bien_sub2_bienes;
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


    public function create($Id)
    {
        //para asignarle el workout al usuario, se encuentra mediante el id y nos envia al formulario de asignacion
        $id = base64_decode($Id);
        $folio = Bien_sub2::find($id);

        return view('bienes/submodulo/adquisiciones/solicitud_bienes', compact('folio'));
    }

    public function store(Request $request, $id)
    {       
        // aqui se guarda el workout mediante el formulario...
        //primero con request->all() se obtienen todos los campos del formulario
        $data = $request->all();

        //los campos que no son dinamicos se crean de manera normal, con el metodo create
        $orden = Bien_sub2::create([ 

            'clave'    => $data['clave'],
            'fecha'    => $data['fecha'],
            'folio'    => $data['folio'],
            'ur'       => $data['ur'],
            'fun'      => $data['fun'],
            'pp'       => $data['pp'],
            'cog'      => $data['cog'],
            'gasto'    => $data['gasto'],
            'ff'       => $data['ff'],
            'imp_comp' => $data['imp_comp'],
]);

        //los campos que se van creando dinamicamente de acuerdo a la necesidad del usuario deben recorrerse para poder guardarse todos. primero se cuenta el numero de elementos de el primero campo con el metodo count($data['excercise']) y luego en base a ese conteo se recorre el arreglo y se van guardando los campos con la relacion al modelo workout creado en la parte de arriba
       
        for ($i=0; $i < count($data['bien']) ; $i++) { 

            $bien = Bien_sub2_bienes::create([

                'bien'     => $data['bien'][$i],
                'medida'   => $data['medida'][$i],
                'cantidad' => $data['cantidad'][$i],
                'marca'    => $data['marca'][$i],
                'precio'   => $data['precio'][$i],
                'carac'    => $data['carac'][$i],
                'just'     => $data['just'][$i],
                'orden_id' => $orden->id,

                ]);
        }
        
    $request->session()->flash('alerta', 'Su solicitud de bien se ha enviado exitosamente');

    return redirect('bienes/submodulo/adquisiciones/solicitud_bienes');
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
     * Se muestran los datos generales de la solicitud de bienes (primera tabla).
     *
     * @return Response
     */
    public function show()
    {
        $input = DB::table('bien_sub2')->get();
        $bienes = DB::table('bien_sub2_bienes')->get();

        return view('submodulos.bienes.adquisiciones.autorizacion_bienes', ['bien_sub2' => $input, 'bien_sub2_bienes' => $bienes]);
    }




}
