<?php

namespace App\Http\Controllers\Submodulos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Plan_sub15;
use DB;

class PlaneacionSubmodulosController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function planeacionsub15()

    {
        return view('submodulos.planeacion.submodulo.carga_presupuesto_aprobado');
    }

    public function store(Request $request)
    {       

        $input = new Plan_sub15;

        $input->num_sol = $request->num_sol;
        $input->fecha = $request->fecha;
        $input->ur = $request->ur;
        $input->fun = $request->fun;
        $input->pp = $request->pp;
        $input->cog = $request->cog;
        $input->gasto = $request->gasto;
        $input->ff = $request->ff;
        $input->just = $request->just;
        $input->techo_presup = $request->techo_presup;
        $input->ene = $request->ene;
        $input->feb = $request->feb;
        $input->mar = $request->mar;
        $input->abr = $request->abr;
        $input->may = $request->may;
        $input->jun = $request->jun;
        $input->jul = $request->jul;
        $input->ago = $request->ago;
        $input->sep = $request->sep;
        $input->oct = $request->oct;
        $input->nov = $request->nov;
        $input->dic = $request->dic;
        $input->total = $request->total;

        $input->save();

    $request->session()->flash('alerta', 'Carga de presupuesto agregada exitosamente');

    return redirect('planeacion/submodulo/carga_presupuesto_aprobado');
}
 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function consultasPresupuestoAprobado()

    {
        return view('submodulos.planeacion.consultas.presupuesto_aprobado');
    }


    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function show()
    {
        $input = DB::table('plan_sub15')->get();

        return view('submodulos.planeacion.consultas.presupuesto_aprobado', ['plan_sub15' => $input]);
    }

}
