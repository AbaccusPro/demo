<?php

namespace App\Http\Controllers\Modulos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TutorialesController extends Controller
{
    /*   Muestra la vista videos planeacion   */

    public function videosPlaneacion()
    {
        return view('tutoriales.videos-planeacion');
    }



}
