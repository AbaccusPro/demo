@extends('layouts.app')

@section('content')

<!-- TODOS LOS CONTENIDOS LLEVAN EL MISMO NOMBRE DE SECCION !-->

<!-- NO MOVEER NINGÚN DIV !-->
<div class="fixed-header horizontal-menu">  

  <div class="page-content-wrapper">
    <div class="content sm-gutter">            
     <div class="container-fluid">
     
             <div class="bar">
                    <div class="pull-right">
                      <a href="#" class="text-black padding-10 visible-xs-inline visible-sm-inline pull-right m-t-10 m-b-10 m-r-10 on" data-pages="horizontal-menu-toggle">
                        <i class=" pg-close_line"></i>
                      </a>
                    </div>
<!-- NO MOVEER NINGÚN DIV !-->

                     <div class="bar-inner">
                      <ul>

                          <!-- START BREADCRUMB -->
                          <ul class="breadcrumb">
                            <li><a href="{{ url('/home') }}">Inicio</a></li>
                            <li><a href="{{ url('/tutoriales') }}">Tutoriales</a></li>
                            <li><a class="active">Planeación</a>
                            </li>
                          </ul>
                          <!-- END BREADCRUMB -->
                          <ul class="mega">
                          
                            <div class="container">
                              <div class="row">

                              </div> <!-- END DIV ROW -->
                            </div>
                          </ul>
                        </li>
                      </ul>
               
                </div> <!-- DIVS SUB-MENU -->
              </div> <!-- DIVS SUB-MENU -->

      <div class="page-content-wrapper ">

<!-- CHANGE 'content' HERE-->
             
<!-- START JUMBOTRON -->
          <div class="jumbotron" data-pages="parallax">
            <div class="container-fluid container-fixed-lg">
              <div class="inner">

                <div class="container-md-height m-b-20">
                  <div class="row row-md-height">
                    <div class="col-lg-5 col-md-height col-md-6 col-top">
                      <!-- START PANEL -->
                      <div class="panel panel-transparent">
                        <div class="panel-heading">
                          <div class="panel-title">Herramientas
                          </div>
                        </div>
                        <div class="panel-body">
                          <h3>Video-tutoriales del Módulo de Planeación</h3>
                          <p>Sección de videos relacionados al módulo y sub-módulos de Planeación</p>                          
                        </div>
                      </div>
                      <!-- END PANEL -->
                    </div>
                    <div class="col-lg-7 col-md-6 col-md-height col-middle ">
                      <!-- START PANEL -->
                      <div class="full-height">
                        <div class="panel-body text-center">
                        </div>
                      </div>
                      <!-- END PANEL -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- END JUMBOTRON -->

<!-- START JUMBOTRON -->
          <div class="jumbotron">
            <div class="container-fluid container-fixed-lg bg-white">
              <div class="inner">

                <div class="container-md-height m-b-20 ">
                  <div class="row row-md-height">
                    <div class="col-lg-5 col-md-height col-md-6 col-top">
                      <!-- START PANEL -->
                      <div class="panel panel-transparent">
                        <div class="panel-heading">
                          <div class="panel-title">Módulo / Planeación
                          </div>
                        </div>
                        <div class="panel-body">
                          <h3>Matriz de Indicadores de Resultados MIR</h3>
                          <p>En este video se muestra cómo realizar la carga de presupuesto en el Módulo de Planeación y Programación.</p>
                          <br>
                          <br>
                        </div>
                      </div>
                      <!-- END PANEL -->
                    </div>
                    <div class="col-lg-7 col-md-6 col-md-height col-middle ">
                      <!-- START PANEL -->
                      <div class="full-height">
                        <div class="panel-body text-center">
                          <video width="650" height="250" controls preload="auto">
                            <source src="/videos/tut.mp4" type="video/mp4">
                          Su navegador no soporta video en HTML5. Porfavor cambie a Google Chrome o Mozilla Firefox.
                          </video>
                        </div>
                      </div>
                      <!-- END PANEL -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- END JUMBOTRON -->

<!-- START JUMBOTRON -->
          <div class="jumbotron">
            <div class="container-fluid container-fixed-lg bg-white">
              <div class="inner">

                <div class="container-md-height m-b-20">
                  <div class="row row-md-height">
                    <div class="col-lg-5 col-md-height col-md-6 col-top">
                      <!-- START PANEL -->
                      <div class="panel panel-transparent">
                        <div class="panel-heading">
                          <div class="panel-title">Módulo / Planeación
                          </div>
                        </div>
                        <div class="panel-body">
                          <h3>Carga de Presupuesto</h3>
                          <p>En este video se muestra cómo realizar la carga de presupuesto en el Módulo de Planeación y Programación.</p>
                        <br>
                        <br>
                        </div>
                      </div>
                      <!-- END PANEL -->                      
                    </div>

                    <div class="col-lg-7 col-md-6 col-md-height col-middle">
                      <!-- START PANEL -->
                      <div class="full-height">
                        <div class="panel-body text-center">
                          <video width="650" height="250" controls>
                            <source src="/videos/tut.mp4" type="video/mp4">
                          Su navegador no soporta video en HTML5. Porfavor cambie a Google Chrome o Mozilla Firefox.
                          </video>
                        </div>
                      </div>
                      <!-- END PANEL -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- END JUMBOTRON -->


<!-- STOP CHANGING 'content' HERE-->

      </div>
      <!-- TERMINA page container -->

<!-- TERMINA CONTENIDO / LA SECCIÓN SE QUEDA ABIERTA PARA CERRAR footer-->
@endsection