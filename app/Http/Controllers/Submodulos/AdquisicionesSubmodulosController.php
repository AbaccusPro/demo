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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function verificacionDocumentos()
    {
        return view('submodulos.bienes.adquisiciones.verificacion_documentos');
    }



}
