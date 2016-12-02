<?php

namespace App\Http\Controllers\Modulos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TesoreriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modulos.tesoreria');
    }

    /**
     * Muestra los submodulos del modulo.
     *
     * @return \Illuminate\Http\Response
     */
    public function submodulos()
    {
        return view('modulos.tesoreria_submodulos');
    }

    /**
     * Muestra los submodulos del modulo.
     *
    * @return \Illuminate\Http\Response
    */
    public function configuraciones()
    {
        return view('submodulos.tesoreria.configuraciones');
    }


        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function manuales()
    {
        return view('submodulos.tesoreria.manuales');
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
