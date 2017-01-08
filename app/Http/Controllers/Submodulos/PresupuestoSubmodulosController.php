<?php

namespace App\Http\Controllers\Submodulos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

use App\Plan_sub15;
use App\Presup_mod;
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
        $input = DB::table('presup_mod')->get();

        return view('submodulos.presupuesto.consultas.suficiencia_presupuestal', ['presup_mod' => $input]);
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
     * Se obtienen los datos de cada tabla y se envían a la vista (tabla), por separado.
     *
     * @return Response
     */
    public function showAutoriza()
    {
        $input = Plan_sub15::all();
        return view('submodulos.presupuesto.submodulo.autorizaciones', compact('input'));
    }


    public function estatus(Request $request)
    {
        $input = $request->all();
        $row = Plan_sub15::find($input['id']);
        $row->estatus = $input['value'];
        $row->save();
        
        return $input['value'];
    }


}
