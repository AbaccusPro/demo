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
                        <li class="mega">
                          <a href="javascript:;">
                          <span class="sub-menu-heading bold">Acceso Rápido</span><span class="arrow"></span>
                        </a>
                          <ul class="mega">
                            <div class="container">
                              <div class="row">

                                <div class="col-md-3 ">
                                  <ul class="sub-menu">
                                    <li ><a href="#">1/ Formulación del plan anual de proyectos</a></li>
                                    <li ><a href="#">2/ Gestión de la Cartera de Inversión</a></li>
                                    <li ><a href="#">3/ Ejecución plan de proyecto</a></li>
                                    <li ><a href="#">4/ Control y Seguimiento del plan de proyecto</a></li>
                                    <li ><a href="#">5/ Programa anual de adquisiciones</a></li>
                                    <li ><a href="#">6/ Anticipo de Obra</a></li>
                                    <li ><a href="#">7/ Amortización de anticipos</a></li>
                                    <li ><a href="#">8/ Convenios modificatorios</a></li>
                                    <li ><a href="#">9/ Bitácora electrónica BEOP</a></li>
                                  </ul>                                  
                                </div>

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
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                  <li><a href="{{ url('/home') }}">Inicio</a></li>
                  <li><a href="{{ url('/obra_publica') }}">Obra Pública</a>
                  <li><a href="#" class="active">Submodulos</a>

                  </li>
                </ul>
                <!-- END BREADCRUMB -->
                <div class="container-md-height m-b-20">
                  <div class="row row-md-height">
                    <div class="col-lg-5 col-md-height col-md-6 col-top">
                      <!-- START PANEL -->
                      <div class="panel panel-transparent">
                        <div class="panel-heading">
                          <div class="panel-title">Sub-Módulos
                          </div>
                        </div>
                        <div class="panel-body">
                          <h3>Sub-Módulos de Obra Pública</h3>
                          <p>En esta sección podrá encontrar los sub-módulos que le permitirán realizar las actividades relacionadas con su área.</p>
                          <br>

                        </div>
                      </div>
                      <!-- END PANEL -->
                    </div>
                    <div class="col-lg-7 col-md-6 col-md-height col-middle">
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

          <!-- INICIAN PANELES DE sub-modulos -->

              <div class="panel-body">

                <div class="row">
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-info" ><li class="fa fa-cube"></li> Submódulo</span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">1/ </span>Formulación del plan anual de proyectos</h2>
                        <p>Identificar los requerimientos y características de los proyectos de obra pública que se pretenden llevar a cabo, con base en las necesidades y objetivos a cumplir, para conformar un programa de obras públicas.<a a href="#"><br>Ir al módulo >></a></p>
                      </div>
                    </div>                    
                  </div>

                  <div class="col-md-4">
                    <div class="panel panel-default bg-success-lighter">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-info" ><li class="fa fa-cube"></li> Submódulo</span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">2/ </span>Gestión de la Cartera de Inversión</h2>
                        <p>Registro del programa o proyecto de inversión en la Cartera de Programas y Proyectos de Inversión. Contrato autorizado Momento del gasto Comprometido
                        <a a href="{{ url('obra_publica/submodulo/cartera_inversion') }}"><br>Ir al módulo >></a></p>
                      </div>
                    </div>                    
                  </div>

                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-info" ><li class="fa fa-cube"></li> Submódulo</span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">3/ </span>Ejecución plan de proyecto</h2>
                        <p>Garantizar que la ejecución de los trabajos contratados se realice con base a las especificaciones contenidas en el contrato.<a a href="#"><br>Ir al módulo >></a></p>
                      </div>
                    </div>                    
                  </div>
                </div> <!-- END ROW -->

                <div class="row">    
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-info" ><li class="fa fa-cube"></li> Submódulo</span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">4/ </span>Control y Seguimiento del plan de proyecto</h2>
                        <p>Las estimaciones de avance en la fecha de recepción de conformidad de la obra. Momento contable del gasto Devengado.<a a href="#"><br>Ir al módulo >></a></p>
                      </div>
                    </div>                    
                  </div>

                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-info" ><li class="fa fa-cube"></li> Submódulo</span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">5/ </span>Programa anual de adquisiciones</h2>
                        <p>Realización de obras públicas por Administración Directa.<a a href="#"><br>Ir al módulo >></a></p>
                      </div>
                    </div>                    
                  </div>


                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-info" ><li class="fa fa-cube"></li> Submódulo</span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">6/ </span>Anticipo de Obra</h2>
                        <p><a a href="#"><br>Ir al módulo >></a></p>
                      </div>
                    </div>                    
                  </div>
                </div> <!-- END ROW -->

                <div class="row">
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-info" ><li class="fa fa-cube"></li> Submódulo</span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">7/ </span>Amortización de anticipos</h2>
                        <p>Autorización y pago de estimaciones.<a a href="#"><br>Ir al módulo >></a></p>
                      </div>
                    </div>                    
                  </div>


                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-info" ><li class="fa fa-cube"></li> Submódulo</span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">8/ </span>Convenios modificatorios</h2>
                        <p>Modificación del contrato.<a a href="#"><br>Ir al módulo >></a></p>
                      </div>
                    </div>                    
                  </div>

                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-info" ><li class="fa fa-cube"></li> Submódulo</span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">9/ </span>Bitácora electrónica BEOP</h2>
                        <p>Registro en Bitácora.<a a href="#"><br>Ir al módulo >></a></p>
                      </div>
                    </div>                    
                  </div>
                </div> <!-- END ROW -->                

          <!-- TERMINAN PANELES DE sub-modulos -->
                
              </div> <!-- END panel-body -->

<!-- STOP CHANGING 'content' HERE-->

      </div>
      <!-- TERMINA page container -->

<!-- TERMINA CONTENIDO / LA SECCIÓN SE QUEDA ABIERTA PARA CERRAR footer-->
@endsection