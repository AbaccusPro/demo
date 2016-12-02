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
                                    <li ><a href="#">1/ Banca electrónica</a></li>
                                    <li ><a href="#">2/ Conciliación bancaria</a></li>
                                    <li ><a href="#">3/ Pre cierre mensual y Cierre del mes</a></li>
                                    <li ><a href="#">4/ Estado Analítico de Ingresos Presupuestales</a></li>
                                    <li ><a href="#">5/ Cuentas por Pagar</a></li>
                                    <li ><a href="#">6/ Emisión de Pagos</a></li>
                                  </ul>                                  
                                </div>

                                <div class="col-md-3 ">
                                  <ul class="sub-menu">                                    
                                    <li ><a href="#">7/ Programación de Pagos</a></li>
                                    <li ><a href="#">8/ Fondo Revolvente</a></li>
                                    <li ><a href="#">9/ Viáticos</a></li>
                                    <li ><a href="#">10/ Gestión de Cadenas Productivas</a></li>
                                    <li ><a href="#">11/ Registro del control presupuestal</a></li>
                                    <li ><a href="#">12/ Pronóstico de flujos de efectivo</a></li>
                                    <li ><a href="#">13/ Cierre de anual</a></li>
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
                  <li>
                    <a href="{{ url('/home') }}">Inicio</a>
                  </li>
                  <li><a href="#" class="active">Tesoreria</a>
                  </li>
                </ul>
                <!-- END BREADCRUMB -->
                <div class="container-md-height m-b-20">
                  <div class="row row-md-height">
                    <div class="col-lg-5 col-md-height col-md-6 col-top">
                      <!-- START PANEL -->
                      <div class="panel panel-transparent">
                        <div class="panel-heading">
                          <div class="panel-title">Módulo
                          </div>
                        </div>
                        <div class="panel-body">
                          <h3>Tesoreria</h3>
                          <p>El objetivo de este módulo es concretar la visión de desarrollo social, económico y político nacional a través de estrategias e instrumentos factibles y adecuados.</p>
                          <br>

                        </div>
                      </div>
                      <!-- END PANEL -->
                    </div>
                    <div class="col-lg-7 col-md-6 col-md-height col-middle bg-white">
                      <!-- START PANEL -->
                      <div class="full-height">
                        <div class="panel-body text-center">
                          <img class="image-responsive-height demo-mw-50" src="assets/img/demo/progress.svg" alt="Progress">
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