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
                                    <li ><a href="#">1/ Configuraciones Clasificadores</a></li>
                                    <li ><a href="#">2/ Devoluciones Ppto Gasto</a></li>
                                    <li ><a href="#">3/ Adecuaciones</a></li>
                                    <li ><a href="#">4/ Cierre Presupuestal del Ejercicio</a></li>
                                    <li ><a href="#">5/ Estado Analítico del Ejercicio del Presupuesto</a></li>
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
                  <li><a href="{{ url('/presupuesto') }}">Presupuesto</a>
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
                          <h3>Sub-Módulos de Presupuesto</h3>
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
                    <div class="panel panel-default bg-success-lighter">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-success" ><li class="fa fa-cube"></li> Submódulo</span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">1/ </span>Consultas de suficiencia presupuestal</h2>
                        <p>Saldo en una clave presupuestal, con el cual es factible de ejercer el gasto y está sujeta a tiempos del calendario del presupuesto de egresos.<a a href="{{ url('/presupuesto/consultas/suficiencia_presupuestal')}}"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">2/ </span>Devoluciones Ppto Gasto</h2>
                        <p>Adecuaciones presupuestarias al cierre de cada mes para reintegro de recursos a partidas por concepto de fondos fijos, viáticos, pasajes, reembolsos de gastos extraordinarios y comprobaciones de gastos y otros conceptos de naturaleza similar.<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">3/ </span>Adecuaciones</h2>
                        <p>Modificaciones a las estructuras funcional-programática, administrativa y económica, y a los calendarios de presupuesto, así como las ampliaciones y reducciones al presupuesto aprobado<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">4/ </span>Cierre Presupuestal del Ejercicio</h2>
                        <p>Al cierre del ejercicio, el presupuesto deberá estar correctamente devengado, ejercido, comprobado, registrado y contabilizado.<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">5/ </span>Estado Analítico del Ejercicio del Presupuesto</h2>
                        <p>Su finalidad es realizar periódicamente el seguimiento del ejercicio de los egresos presupuestarios.<a a href="#"><br>Ir al módulo >></a></p>
                      </div>
                    </div>                    
                  </div>

                  <div class="col-md-4">
                    <div class="panel panel-default bg-success-lighter">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-success" ><li class="fa fa-cube"></li> Submódulo</span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">6/ </span>Autorización de requisiciones</h2>
                        <p>Este sub-módulo permite visualizar las requisiciones de presupuesto y posteriormente autorizarlas.<a a href="{{ url('/presupuesto/submodulo/autorizaciones') }}"><br>Ir al módulo >></a></p>
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