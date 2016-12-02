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
                        <li class="mega">
                          <a href="javascript:;">
                          <span class="sub-menu-heading bold">Acceso Rápido</span><span class="arrow"></span>
                        </a>
                          <ul class="mega">
                            <div class="container">
                              <div class="row">

                                <div class="col-md-3 ">
                                  <ul class="sub-menu">
                                    <li ><a href="#">1 / Plan Municipal de Desarrollo PMD</a></li>
                                    <li ><a href="#">2 / Ficha técnica generada con la MML</a></li>
                                    <li ><a href="#">3 / Matriz de Indicadores de Resultados MIR</a></li>
                                    <li ><a href="#">4 / Generación de clave presupuestal</a></li>
                                    <li ><a href="#">5 / Padrón de Pp</a></li>
                                  </ul>
                                </div>

                                <div class="col-md-3 ">
                                  <ul class="sub-menu">
                                    <li ><a href="#">6 / Apertura programática</a></li>
                                    <li ><a href="#">7 / Presupuesto de Egresos</a></li>
                                    <li ><a href="#">8 / Proyecto de Presupuesto de Egresos</a></li>
                                    <li ><a href="#">9 / Asignación de Gastos por Programa Presupuestario</a></li>
                                    <li ><a href="#">10 / Asignación de techos financieros</a></li>
                                </div>

                                <div class="col-md-3 ">
                                  <ul class="sub-menu">
                                    <li> <a href="#">11 / Proyecto de la Ley de Ingresos</a></li>                                    
                                    <li> <a href="#">12 / Carga de Ley de Ingresos Aprobado</a></li>
                                    <li> <a href="#">13 / Informes Ley de Ingresos</a></li>
                                    <li> <a href="#">14 / Cancelación Ley Ingresos</a></li>
                                    <li> <a href="#">15 / Carga del Decreto de Presupuesto aprobado</a></li>
                                </div>

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
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                  <li><a href="{{ url('/home') }}">Inicio</a></li>
                  <li><a href="{{ url('/planeacion') }}">Planeacion y Programación</a>
                  <li><a href="#" class="active">Consultas y Reportes</a>
                  </li>
                </ul>
                <!-- END BREADCRUMB -->
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
                          <h3>Consultas y Reportes</h3>
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

          <!-- AQUÍ INICIA EL PANEL PRINCIPAL -->


          <div class="container-fluid container-fixed-lg">
            <div class="row">
              <div class="col-md-12">


                <!-- INICIA PANEL BLANCO -->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="panel-title">
                      Las consultas se actualizan de acuerdo al avance de cada área. 
                    </div>
                  </div>
                  <div class="panel-body"> <!-- DIV "panel body" - Insertar Contenidos Aquí" -->
                    <h3>1/ Consultas</h3>

                  <!-- INICIA TABLA DE CONSULTAS -->
                    <div class="table-responsive">
                      <table class="table table-hover table-condensed" id="condensedTable">
                        <thead>
                          <tr>
                            <th style="width:25%">Consulta</th>
                            <th style="width:25%">Área</th>
                            <th style="width:25%">Última actualización</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="v-align-middle semi-bold">Catálogos y clasificadores</a></td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">20 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Plan Municipal de Desarrollo P.M.D.</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">10 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Ficha técnica generada con la MML</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Matriz de Indicadores de Resultados MIR</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Padrón de Programas presupuestarios</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Apertura programática</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                          <tr>
                            <td class="v-align-middle semi-bold">Consulta de Padrón de claves presupuestales</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">10 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Asignación de techos financieros</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Asignación de Gastos por Programa Presupuestario</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Proyecto de Presupuesto de Egresos</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold"><a href="{{ url('/planeacion/consultas/presupuesto_aprobado') }}">Presupuesto de Egreso Aprobado</a></td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Informes Ley de Ingresos</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">10 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Proyecto de la Ley de Ingresos</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Consulta Ley de Ingresos</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  <!-- TERMINA TABLA DE CONSULTAS -->


                  </div> <!-- DIV "panel body" - NO BORRAR" -->
                </div> <!-- AQUI TERMINA EL PANEL PRINCIPAL -->


                <!-- INICIA PANEL BLANCO -->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="panel-title">
                      Los reportes se actualizan de acuerdo al avance de cada área. 
                    </div>
                  </div>
                  <div class="panel-body"> <!-- DIV "panel body" - Insertar Contenidos Aquí" -->
                    <h3>2/ Reportes predefinidos</h3>

                  <!-- INICIA TABLA DE REPORTES -->
                    <div class="table-responsive">
                      <table class="table table-hover table-condensed" id="condensedTable">
                        <thead>
                          <tr>
                            <th style="width:25%">Reporte</th>
                            <th style="width:25%">Área</th>
                            <th style="width:25%">Última actualización</th>
                            <th style="width:25%">Exportar a PDF</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="v-align-middle semi-bold">M.I.R. con Indicadores</td>
                            <td class="v-align-middle semi-bold">Planeación y Programación</td>
                            <td class="v-align-middle">20 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Reporte / consulta de MIR</a></td>
                            <td class="v-align-middle semi-bold">Planeación y Programación</td>
                            <td class="v-align-middle">10 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Estado Analítico Ley de Ingresos</td>
                            <td class="v-align-middle semi-bold">Presupuesto de Ingresos</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Clasificación Económica de los Ingresos</td>
                            <td class="v-align-middle semi-bold">Presupuesto de Ingresos</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Clasificador por Rubro de Ingresos</td>
                            <td class="v-align-middle semi-bold">Presupuesto de Ingresos</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                             <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Unidad Responsable</td>
                            <td class="v-align-middle semi-bold">Presupuesto de Egresos</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Centro de Costo</td>
                            <td class="v-align-middle semi-bold">Presupuesto de Egresos</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Partida</td>
                            <td class="v-align-middle semi-bold">Presupuesto de Egresos</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Capítulo</td>
                            <td class="v-align-middle semi-bold">Presupuesto de Egresos</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Clave presupuestal</td>
                            <td class="v-align-middle semi-bold">Presupuesto de Egresos</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Porcentaje de avance al período respecto al presupuesto anual</td>
                            <td class="v-align-middle semi-bold">Información Programática</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Porcentaje de avance al período respecto al monto calendarizado del período</td>
                            <td class="v-align-middle semi-bold">Información Programática</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  <!-- TERMINA TABLA DE CONSULTAS -->


                  </div> <!-- DIV "panel body" - NO BORRAR" -->
                </div> <!-- AQUI TERMINA EL PANEL PRINCIPAL -->

<!-- STOP CHANGING 'content' HERE-->

            </div> <!-- DIV "col-md-12" - NO BORRAR" -->  
          </div> <!-- DIV "row" - NO BORRAR" -->
        </div> <!-- DIV "container-fluid" - NO BORRAR" -->


      </div>
      <!-- TERMINA page container / DIV DE ESPACIO PARA FOOTER -->

<!-- TERMINA CONTENIDO / LA SECCIÓN SE QUEDA ABIERTA PARA CERRAR footer-->


@endsection
