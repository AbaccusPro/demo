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
                                    <li ><a href="#">1/ Estado Analítico de Ingresos Presupuestales</a></li>
                                    <li ><a href="#">2/ Recaudación (caja general)</a></li>
                                    <li ><a href="#">3/ Padrón de Contribuyentes</a></li>
                                    <li ><a href="#">4/ Banca electrónica</a></li>
                                    <li ><a href="#">5/ Conciliación bancaria</a></li>
                                    <li ><a href="#">6/ Pre cierre mensual y Cierre del mes</a></li>
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
                  <li><a href="{{ url('/ingresos') }}">Ingresos</a>
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
                          <h3>Sub-Módulos de Ingresos</h3>
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
                      <span class="semi-bold">1/ </span>Estado Analítico de Ingresos Presupuestales</h2>
                        <p>Su finalidad es conocer en forma periódica y confiable el comportamiento de los ingresos públicos.<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">2/ </span>Recaudación (caja general)</h2>
                        <p>Registro de los ingresos diarios por área de captación.<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">3/ </span>Padrón de contribuyentes</h2>
                        <p>Registro de contribuyentes, personas físicas y morales, con obligaciones de pago de productos, aprovechamientos y derechos derivados del uso y aprovechamiento de los bienes gubernamentales.<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">4/ </span>Banca Electrónica</h2>
                        <p>Gestión de aplicaciones electrónicas de banca destinadas a facilitar el trabajo relacionado con la gestión de cobros.<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">5/ </span>Conciliación bancaria</h2>
                        <p>Determinar las diferencias existentes y se consigue el saldo correcto en cuentas de ingresos.<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">6/ </span>Pre-cierre mensual y cierre del mes</h2>
                        <p>Proceso que emite la información totalizada correspondiente al mes por el que se realice el cierre.<a a href="#"><br>Ir al módulo >></a></p>
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