<?php

namespace App\Http\Controllers\Submodulos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class AdquisicionesSubmodulosController extends Controller
{

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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function verificacionDocumentos()
    {
        return view('submodulos.bienes.adquisiciones.verificacion_documentos');
    }



}
