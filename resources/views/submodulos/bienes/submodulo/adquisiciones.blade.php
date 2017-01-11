@extends('layouts.app')

@section('content')  <!-- TODOS LOS CONTENIDOS LLEVAN EL MISMO NOMBRE DE SECCION !-->

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
                            <li><a href="{{ url('/bienes') }}">Bienes</a>
                            <li><a class="active">Adquisiciones</a>
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
                          <div class="panel-title">Sub-Módulo
                          </div>
                        </div>
                        <div class="panel-body">
                          <h3>Adquisiciones</h3>
                          <p>En esta sección podrá encontrar la lista de consultas y reportes definidos previamente y que son de uso constante para esta área.</p>
                          <br>
                          <p>Las herramientas de consultas y reportes están disponibles únicamente para áreas gerenciales o jefaturas.</p>
                          <br>
                        </div>
                      </div>
                      <!-- END PANEL -->
                    </div>
                    <div class="col-lg-7 col-md-6 col-md-height col-middle">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- END JUMBOTRON -->

<!-- CHANGE 'content' HERE-->

            <!-- INICIAN PANELES DE sub-modulos -->

              <div class="panel-body">

                <div class="row">
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-default" ><li class="fa fa-file-text-o"></li> Formulario</span>
                      </div>
                      <div class="panel-body">
                        <h4>
                      <span class="semi-bold"><a href="{{ url('bienes/submodulo/adquisiciones/solicitud_bienes') }}">1/ </span>Solicitud de Bienes</a></h4></span>
                      </div>
                    </div>                    
                  </div>

                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-success" ><li class="fa fa-check-circle"></li> Bandeja de entrada</span>
                      </div>
                      <div class="panel-body">
                        <h4>
                      <span class="semi-bold"><a href="{{ url('bienes/submodulo/adquisiciones/autorizacion_bienes') }}">2/ </span> Autorizaciones de Solicitudes de Bienes</a></h4></span>
                      </div>
                    </div>                    
                  </div>

                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-default" ><li class="fa fa-file-text-o"></li> Formulario</span>
                      </div>
                      <div class="panel-body">
                        <h4>
                      <span class="semi-bold"><a href="{{ url('bienes/submodulo/adquisiciones/registro_orden_compra') }}">3/ </span> Registro de Orden de Compra</a></h4></span>
                      </div>
                    </div>                    
                  </div>
                </div> <!-- END ROW -->

                <div class="row">
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-success" ><li class="fa fa-check-circle"></li> Bandeja de entrada</span>
                      </div>
                      <div class="panel-body">
                        <h4>
                      <span class="semi-bold"><a href="{{ url('bienes/submodulo/adquisiciones/autorizacion_orden_compra') }}">3/ </span> Autorizaciones de Órdenes de Compra</a></h4></span>
                      </div>
                    </div>                    
                  </div>


                </div> <!-- END ROW -->

            </div> <!-- DIV "panel body" - NO BORRAR" -->

          <!-- TERMINAN PANELES DE sub-modulos -->

<!-- STOP CHANGING 'content' HERE-->

      </div>
      <!-- TERMINA page container / DIV DE ESPACIO PARA FOOTER -->

<!-- TERMINA CONTENIDO / LA SECCIÓN SE QUEDA ABIERTA PARA CERRAR footer-->


@endsection
