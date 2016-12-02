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
                  <li><a href="{{ url('/bienes') }}">Bienes</a>
                  <li><a href="{{ url('/bienes/submodulo/adquisiciones') }}">Adquisiciones</a>
                  <li><a href="#" class="active">Verificación de Documentos y Aceptación</a>
                  </li>
                </ul>
                <!-- END BREADCRUMB -->
                <div class="container-md-height m-b-20">
                  <div class="row row-md-height">
                    <div class="col-lg-5 col-md-height col-md-6 col-top">
                      <!-- START PANEL -->
                      <div class="panel panel-transparent">
                        <div class="panel-heading">
                          <div class="panel-title">Consultas
                          </div>
                        </div>
                        <div class="panel-body">
                          <h3>Verificación de Documentos y Aceptación</h3>
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
 
          <!-- START CONTAINER FLUID -->
        <div class="container-fluid container-fixed-lg ">
          <div class"row">


            <!-- START PANEL -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-title">En caso de adquisición de materiales, consultar existencias en Almacén</div>
                </div>
                                    
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-sm-5">
                      <form>
                        <h5>a/ Folio de Solicitud</h5>
                          <div class="form-group form-group-default ">
                            <label>Folio:</label>                            
                            <input type="text" class="form-control" placeholder="123-5653">
                          </div>
                          <button class="btn btn-sm  btn-rounded btn-complete">Buscar <i class="pg-search"></i></button>
                          <br>                
                        </form>
                      </div>

                </div>
              </div>
            </div>
          </div>
        </div>

          <!-- START CONTAINER FLUID -->
        <div class="container-fluid container-fixed-lg">
          <div class"row">

            <!-- START PANEL -->
            <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="panel-title">Bandeja de Existencias por almacén</div>
                  <h5>Sus resultados de búsqueda se mostrarán en el siguiente espacio:</h5>
                </div>                                    
                  <div class="panel-body">
                    <div class="row">                                    
                      <div class="export-options-container pull-right"></div>
                      <div class="clearfix"></div>
                          <table class="table table-hover" id="tableWithExportOptions">
                            <thead>
                              <tr>
                                <th>No. de Referencia Art.</th>
                                <th>Categoría</th>
                                <th>Artículo</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Cantidad</th>
                                <th>Fechad Ingreso</th>
                                <th>Existencias Almacén</th>
                                <th>Estado</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="odd gradeX">
                                <td>20-11-2016</td>
                                <td>$400,000</td>
                                <td>$100,000</td>
                                <td>$10,000</td>
                                <td>DIG-025-K</td>
                                <td>6</td>
                                <td>11-05-2016</td>
                                <td>3</td>
                                <td>Disponible</td>

                              </tr>
                              <tr class="even gradeC">
                                <td>20-11-2016</td>
                                <td>$400,000</td>
                                <td>$100,000</td>
                                <td>$10,000</td>
                                <td>DIG-025-K</td>
                                <td>5</td>
                                <td>11-05-2016</td>
                                <td>2</td>
                                <td>Reservado</td>

                              </tr>
                              <tr class="odd gradeX">
                                <td>20-11-2016</td>
                                <td>$400,000</td>
                                <td>$100,000</td>
                                <td>$10,000</td>
                                <td>DIG-025-K</td>
                                <td>7</td>
                                <td>11-05-2016</td>
                                <td>1</td>
                                <td>Por recibir</td>
                              </tr>
                            </tbody>
                          </table>
                </div>
              </div>
            </div> <!-- TERMINA TABLA DE CONSULTAS -->


            </div> <!-- AQUI TERMINA EL PANEL PRINCIPAL -->

<!-- STOP CHANGING 'content' HERE-->

            </div> <!-- DIV "col-md-12" - NO BORRAR" -->  
          </div> <!-- DIV "row" - NO BORRAR" -->
        </div> <!-- DIV "container-fluid" - NO BORRAR" -->

      <br>

      </div>
      <!-- TERMINA page container / DIV DE ESPACIO PARA FOOTER -->

<!-- TERMINA CONTENIDO / LA SECCIÓN SE QUEDA ABIERTA PARA CERRAR footer-->


@endsection

@section('script_page')

    <!-- BEGIN VENDOR JS -->

    <script src="{{ URL::asset('assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-responsive/js/datatables.responsive.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-responsive/js/lodash.min.js') }}"></script>
    <!-- END VENDOR JS -->

    <!-- BEGIN PAGE LEVEL JS -->
    <script src="{{ URL::asset('assets/js/datatables.js') }}" type="text/javascript"></script>

    <!-- END PAGE LEVEL JS -->


@endsection
