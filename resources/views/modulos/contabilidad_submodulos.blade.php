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
                                    <li ><a href="#">1/ Configuración de cuentas</a></li>
                                    <li ><a href="#">2/ Apertura del periodo</a></li>
                                    <li ><a href="#">3/ Actualización de saldos</a></li>
                                    <li ><a href="#">4/ Desactualización de saldos</a></li>
                                    <li ><a href="#">5/ Cuentas no automáticas</a></li>
                                  </ul>                                  
                                </div>

                                <div class="col-md-3">
                                  <ul class="sub-menu">
                                    <li ><a href="#">6/ Cierre mensual</a></li>
                                    <li ><a href="#">7/ Cierre Anual</a></li>
                                    <li ><a href="#">8/ Depuraciones cuentas</a></li>
                                    <li ><a href="#">9/ Estados financieros</a></li>
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
                  <li><a href="{{ url('/contabilidad') }}">Contabilidad</a>
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
                          <h3>Sub-Módulos de Contabilidad</h3>
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
                      <span class="semi-bold">1/ </span>Apertura del periodo</h2>
                        <p>Abre el año contable y comienza a realizar transacciones económicas que se registran en libros contables, tanto en los obligatorios como en los auxiliares.<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">2/ </span>Actualización de saldos</h2>
                        <p>Actualización de la diferencia que existe en el haber o los ingresos y el debe o los egresos.<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">3/ </span>Desactualización de saldos</h2>
                        <p>Actualizar manualmente los saldos, actualizar o reconstruir los saldos de libro mayor que ha configurado.<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">4/ </span>Cuentas no automáticas</h2>
                        <p>No son originadas del ejercicio del presupuesto.<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">5/ </span>Cierre mensual</h2>
                        <p>Cerrar las cuentas de resultado para determinar el resultado económico del ejercicio o del periodo que bien puede ser una pérdida o una utilidad.<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">6/ </span>Cierre anual</h2>
                        <p>Proceso consistente en cerrar o cancelar las cuentas de resultados y llevar su resultado a las cuentas de balance respectivas.<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">7/ </span>Depuración de cuentas</h2>
                        <p>Al cierre de cada mes del ejercicio elaborar las depuraciones contables de estas cuentas colectivas o de control.<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">8/ </span>Estados Financieros</h2>
                        <p>Informes para dar a conocer la situación económica y financiera y los cambios que experimenta la misma a una fecha o periodo determinado.<a a href="#"><br>Ir al módulo >></a></p>
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