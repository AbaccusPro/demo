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
                          <li><a href="{{ url('/ingresos') }}">Ingresos</a>
                          <li><a href="{{ url('/ingresos/submodulos') }}">Submódulos</a>
                          <li><a href="#" class="active">Padrón de Contribuyentes</a>
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
                          <div class="panel-title">Sub-Módulos
                          </div>
                        </div>
                        <div class="panel-body">
                          <h3>Padrón de Contribuyentes</h3>
                          <p>Contiene información relacionada con el número de contribuyentes, clasificados en diversas modalidades como puede ser: por su situación 
                          ante el RFC, por entidad federativa, por régimen, por sector de actividad económica o por tipo de contribuyente; asimismo, contiene 
                          listados de contribuyentes con actividades específicas: agentes aduanales, contadores públicos registrados, donatarias autorizadas y 
                          operadores económicos autorizados.</p>
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
                        </div><span class="label label-default" ><li class="fa fa-file-text-o"></li> Formulario</span>
                      </div>
                      <div class="panel-body">
                        <h4>
                      <span class="semi-bold"><a href="{{ url('ingresos/submodulo/padron_contribuyentes/registro') }}">1/ </span>Registro de Contribuyente</a></h4>
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
                      <span class="semi-bold"><a href="#">2/ </span> Consulta de Padrón de Contribuyentes</a></h4>
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