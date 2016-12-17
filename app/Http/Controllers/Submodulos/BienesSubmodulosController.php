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
