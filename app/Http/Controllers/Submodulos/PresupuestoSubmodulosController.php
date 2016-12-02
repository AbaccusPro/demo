<?php

namespace App\Http\Controllers\Submodulos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Plan_sub15;
use DB;


class PresupuestoSubmodulosController extends Controller
{   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function suficienciaPresupuestal()
    {
        return view('submodulos.presupuesto.consultas.suficiencia_presupuestal');
    }


    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function show()
    {
        $input = DB::table('plan_sub15')->get();

        return view('submodulos.presupuesto.consultas.suficiencia_presupuestal', ['plan_sub15' => $input]);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function autoriza()
    {
        return view('submodulos.presupuesto.submodulo.autorizaciones');
    }


    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function showAutoriza()
    {
        $input = DB::table('plan_sub15')->get();

        return view('submodulos.presupuesto.submodulo.autorizaciones', ['plan_sub15' => $input]);
    }

}
