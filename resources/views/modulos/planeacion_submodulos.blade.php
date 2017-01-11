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
                          <li><a href="{{ url('/planeacion') }}">Planeación y Programación</a>
                          <li><a href="#" class="active">Sub-módulos</a>
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
                          <h3>Sub-Módulos de Planeación y Programación</h3>
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
                      <span class="semi-bold">1/ </span>Plan Municipal de Desarrollo</h2>
                        <p>Estructurado en los principios de la Metodología del Marco Lógico (MML) para incrustarlo dentro de un Presupuesto Basado en Resultados (PbR)<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">2/ </span>Ficha Técnica generada con la MML</h2>
                        <p>La ficha técnica es un instrumento de transparencia para hacer pública la forma en que se calculan los valores <a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">3/ </span>Matriz de Indicadores de Resultados MIR</h2>
                        <p>Registro de la Matriz de Indicadores para Resultados (MIR)<a href="{{ url('planeacion/submodulo/registro_mir') }}"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">4/ </span>Generación de clave presupuestal</h2>
                        <p>Estructurar a los elementos de identificación respecto de la procedencia de los recursos que conforman el gasto público<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">5/ </span>Padrón de Pp</h2>
                        <p>Las solicitudes de altas y modificaciones a los programas presupuestarios se realizan a través de la Cartera de programas presupuestarios<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">6/ </span>Apertura Programática</h2>
                        <p>Estructura programática, Conjunto armónico de programas a corto, mediano y largo Plazo, estructurado en forma coherente y jerarquizada.<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">7/ </span>Presupuesto de Egresos</h2>
                        <p>Difusión de la Metodología que establece previamente lo que se va a hacer, como se va a hacer y con qué recursos.<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">8/ </span>Proyecto de Presupuesto de Egresos</h2>
                        <p>Estimación del gasto para el siguiente ejercicio, anteproyecto de presupuesto anual de la dependencia, para su Aprobación.<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">9/ </span>Asignación de Gastos por Programa Presupuestario</h2>
                        <p>Asignación económica a los planes, proyectos y programas, calendarizado.<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">10/ </span> Asignación de techos financieros</h2>
                        <p>Definición de techos presupuestales a nivel partida para balancear los recursos limitados<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">11/ </span>Proyecto de la Ley de Ingresos</h2>
                        <p>Estimación de los recursos económicos que se recibirán por conceptos de ingresos durante el siguiente ejercicio, para su Aprobación.<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">12/ </span>Carga de Ley de Ingresos Aprobado</h2>
                        <p>Documento presupuestario ofrece información valiosa para atender las prioridades y su ejercicio, es herramienta de transparencia.<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">13/ </span>Informes Ley de Ingresos</h2>
                        <p>Reportes y consultas de validación, clasificados por rubros.<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">14/ </span>Cancelación Ley de Ingresos</h2>
                        <p>Registro por la autoridad en sus controles internos, atendiendo a que el cobro del crédito no pudo realizarse.<a a href="#"><br>Ir al módulo >></a></p>
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
                      <span class="semi-bold">15/ </span>Carga del Decreto Presupuesto Aprobado</h2>
                        <p>Cargar las asignaciones aprobadas para el control presupuestario directo .<a a href="{{ url('/planeacion/submodulo/carga_presupuesto_aprobado') }}"><br>Ir al módulo >></a></p>
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