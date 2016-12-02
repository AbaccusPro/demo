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
          
<!-- START JUMBOTRON -->
          <div class="jumbotron" data-pages="parallax">
            <div class="container-fluid container-fixed-lg">
              <div class="inner">
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                  <li><a href="{{ url('/home') }}">Inicio</a></li>
                  <li><a href="{{ url('/contabilidad') }}">Contabilidad</a>
                  <li><a href="{{ url('/contabilidad/consultas') }}" class="active">Consultas y Reportes</a>
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
                            <td class="v-align-middle semi-bold"><a href="{{ url('contabilidad/consultas/libro_diario') }}">Libro Diario</a></td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">20 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold"><a href="{{ url('contabilidad/consultas/libro_mayor') }}">Libro Mayor</a></td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">10 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Catálogo de Rubros</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Catálogo de géneros</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Catálogo de clases</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Catálogo de géneros</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Catálogo de Cuentas</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Catálogo de Bancos</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Catálogo de Proveedores</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Catálogo de índices de inflación</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Catálogo de Pólizas</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Configuración de cuentas</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Cuentas no automáticas</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Cierre mensual</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Estados financieros</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Consulta de pólizas</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Consulta de saldos</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                          </tr>
                          <tr>

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
                            <td class="v-align-middle semi-bold">Estado de Actividades</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Estado de Variación en la Hacienda Pública </td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Estado de Situación Financiera</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Reporte Analítico del Activo</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Estado de Flujos de Efectivo</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">20 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Estado Analítico de la Deuda y Otros Pasivos</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Estado de Cambios en la Situación Financiera</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Reporte balanza de comprobación</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">20 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Informe sobre pasivos contingentes</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Balanza por día</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Estado analítico de la deuda y otros pasivos</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">20 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold"><a href="{{ url('contabilidad/reportes/libro_diario') }}">Libro Diario</a></td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">10 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold"><a href="{{ url('contabilidad/reportes/libro_mayor') }}">Libro Mayor</td></a>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">20 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>

                          <tr>
                            <td class="v-align-middle semi-bold">Estado de situación patrimonial / Balance</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Balance general</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Estado de resultados</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">20 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Auxiliar de cuentas</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Balanza por día</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Avance presupuestal</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">20 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Listado de descuentos de nomina</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Listado de descuentos</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Listado de Pólizas de Ingresos por Recaudado</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">20 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Listado de Saldos por Cuenta Contable</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Listado de Cheques y Contra recibos pagados</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Listado de Contra recibos pendientes en cadenas productivas</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Listado de Contra recibos pagados en cadenas productivas</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Auxiliar de cuentas con Obra Pública</td>
                            <td class="v-align-middle semi-bold">Contabilidad</td>
                            <td class="v-align-middle">20 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Pólizas Cheque - Pólizas Contra recibo</td>
                            <td class="v-align-middle semi-bold">Dirección General</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Reporte de Integración de Saldo del Activo Fijo</td>
                            <td class="v-align-middle semi-bold">Sub-Dirección General</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          <tr>
                            <td class="v-align-middle semi-bold">a. Balanza de comprobación Ley de Ingresos</td>
                            <td class="v-align-middle semi-bold">Especiales</td>
                            <td class="v-align-middle">20 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">b. Mayor Ley de Ingresos</td>
                            <td class="v-align-middle semi-bold">Especiales</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Reporte de Integración de Saldos</td>
                            <td class="v-align-middle semi-bold">Especiales</td>
                            <td class="v-align-middle">1 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          <tr>
                            <td class="v-align-middle semi-bold">Pólizas Correctas e Incorrectas</td>
                            <td class="v-align-middle semi-bold">Especiales</td>
                            <td class="v-align-middle">20 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Retención de Cheques</td>
                            <td class="v-align-middle semi-bold">Especiales</td>
                            <td class="v-align-middle">9 Nov 2016</td>
                            <td class="v-align-middle"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>
                            </button></td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold">Balanza Anual</td>
                            <td class="v-align-middle semi-bold">Especiales</td>
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
