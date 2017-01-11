<?php

namespace App\Http\Controllers\Submodulos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

use App\Claves_ur;
use DB;

class ObraPublicaSubmodulosController extends Controller
{

    /* SUB2 - Muestra la vista de la cartera de inversión */
    public function showCartera()
    {
        return view('submodulos.obra_publica.submodulo.cartera_inversion');
    }

    /* SUB2 - Muestra el registro de programa de inversión */
    public function registroPrograma()
    {
        return view('submodulos.obra_publica.submodulo.registro_programa_inversion');
    }


    /* SUB2 - Envía a la vista los datos de los catálogos de claves */ 
    public function catUR()
    {
        $clave_ur = Claves_ur::pluck('nombre', 'id');        
        return view('submodulos.obra_publica.submodulo.registro_programa_inversion', compact('clave_ur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
