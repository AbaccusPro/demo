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
          
<!-- START JUMBOTRON -->
          <div class="jumbotron" data-pages="parallax">
            <div class="container-fluid container-fixed-lg">
              <div class="inner">
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                  <li><a href="{{ url('/home') }}">Inicio</a></li>
                  <li><a href="{{ url('/presupuesto') }}">Presupuesto</a>
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
                            <td class="v-align-middle semi-bold">Administrativo</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">20 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Funcional</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">21 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Económico</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">22 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Por Rubro de Ingresos</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">22 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Por objeto del gasto</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">20 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Programático</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">20 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Suficiencia Presupuestal</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">24 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Fuente de Financiamiento</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">23 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Geográfico</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">20 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Programas Presupuestarios</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">22 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Tipo de gasto</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">25 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Ampliaciones</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">20 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Reducciones</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">22 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Transferencias</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">20 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold"><a href="{{ url('/presupuesto/consultas/suficiencia_presupuestal') }}">Suficiencia Presupuestal</a></td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">22 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Cierre Presupuestal del Ejercicio</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">21 Nov 2016</td>
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
                            <td class="v-align-middle semi-bold"><a href="#">Presupuesto Aprobado de Egresos</a></td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">20 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Estado Analítico del Ejercicio del Presupuesto de Egresos</a></td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">10 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Centro de Costo</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Unidad Responsable</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Partida</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                             <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Capítulo</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Clave presupuestal</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">20 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Avance Presupuestal</a></td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">10 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Ampliaciones y Reducciones</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Transferencias presupuestales</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Analítico por clave presupuestal</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                             <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Distribución por Centro de Costo</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Avance presupuestal completo</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">20 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Estado Analítico del Ejercicio del Presupuesto de Egresos</a></td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">10 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Distribución por Centro de Costo</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Avance presupuestal completo</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Avance presupuestal por tipo de gasto</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                             <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Presupuesto Autorizado</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Saldos presupuestales por Dependencia</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Saldos presupuestales por Dependencia - Centro de Costo</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Saldos presupuestales por tipo de gasto</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                             <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Claves presupuestales canceladas</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
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
