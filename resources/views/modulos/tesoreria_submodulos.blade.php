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
                  <li><a href="{{ url('/home') }}">Inicio</a></li>
                  <li><a href="{{ url('/tesoreria') }}">Tesorería</a>
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
                          <h3>Sub-Módulos de Tesorería</h3>
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
                        <div class="panel-title">Sub-Módulo
                        </div>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">1/ </span>Banca electrónica</h2>
                        <p>Uso de aplicaciones electrónicas de banca, electrónica para mejorar la gestión de cobros, nóminas, o gestión de excedentes de tesorería.<a a href="#"><br>Ir al módulo >></a></p>
                      </div>
                    </div>                    
                  </div>

                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">Sub-Módulo
                        </div>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">2/ </span>Conciliación bancaria</h2>
                        <p>Determinar las diferencias existentes y se consigue el saldo correcto en bancos.<a a href="#"><br>Ir al módulo >></a></p>
                      </div>
                    </div>                    
                  </div>

                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">Sub-Módulo
                        </div>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">3/ </span>Pre-cierre mensual y cierre del mes</h2>
                        <p>Obtener la información relevante que durante ese mes se registró.<a a href="#"><br>Ir al módulo >></a></p>
                      </div>
                    </div>                    
                  </div>
                </div> <!-- END ROW -->

                <div class="row">    
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">Sub-Módulo
                        </div>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">4/ </span>Estado Analítico de Ingresos Presupuestales</h2>
                        <p>Informe del Estado Analítico de ingresos presupuestales<a a href="#"><br>Ir al módulo >></a></p>
                      </div>
                    </div>                    
                  </div>

                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">Sub-Módulo
                        </div>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">5/ </span>Cuentas por pagar</h2>
                        <p>Relación de documentos pendientes de pago de acuerdo a fecha de Recepción.<a a href="#"><br>Ir al módulo >></a></p>
                      </div>
                    </div>                    
                  </div>


                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">Sub-Módulo
                        </div>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">6/ </span>Emisión de pagos</h2>
                        <p>Procesar pago de acuerdo al método de pago que define cómo se realiza el mismo.<a a href="#"><br>Ir al módulo >></a></p>
                      </div>
                    </div>                    
                  </div>
                </div> <!-- END ROW -->

                <div class="row">
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">Sub-Módulo
                        </div>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">7/ </span>Programación de pagos</h2>
                        <p>Programar pagos mediante la concentración de información obtenida de documentos por pagar, observando las condiciones de pago pactadas.<a a href="#"><br>Ir al módulo >></a></p>
                      </div>
                    </div>                    
                  </div>


                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">Sub-Módulo
                        </div>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">8/ </span>Fondo revolvente</h2>
                        <p>Trámite y gestión del fondo revolvente.<a a href="#"><br>Ir al módulo >></a></p>
                      </div>
                    </div>                    
                  </div>

                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">Sub-Módulo
                        </div>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">9/ </span>Viáticos</h2>
                        <p>Trámite y gestión de viáticos.<a a href="#"><br>Ir al módulo >></a></p>
                      </div>
                    </div>                    
                  </div>
                </div> <!-- END ROW -->

                <div class="row">
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">Sub-Módulo
                        </div>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">10/ </span>Gestión de Cadenas productivas</h2>
                        <p>Gestionar el Programa de Cadenas Productivas.<a a href="#"><br>Ir al módulo >></a></p>
                      </div>
                    </div>                    
                  </div>

                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">Sub-Módulo
                        </div>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">11/ </span>Registro del Control Presupuestal</h2>
                        <p>Proporcionar información general acerca de las operaciones en los presupuestos.<a a href="#"><br>Ir al módulo >></a></p>
                      </div>
                    </div>                    
                  </div>


                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">Sub-Módulo
                        </div>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">12/ </span>Pronóstico de flujos de efectivo</h2>
                        <p>Informe con la finalidad de orientar sobre la circulación del efectivo en un periodo.<a a href="#"><br>Ir al módulo >></a></p>
                      </div>
                    </div>                    
                  </div>
                </div> <!-- END ROW -->

                <div class="row">
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">Sub-Módulo
                        </div>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">13/ </span>Cierre de anual</h2>
                        <p>Al finalizar el año, ya realizados los ajustes pertinentes, se procede a cancelar cada una de las cunetas de ingresos, gastos y costos para determinar el resultado del ejercicio.<a a href="#"><br>Ir al módulo >></a></p>
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