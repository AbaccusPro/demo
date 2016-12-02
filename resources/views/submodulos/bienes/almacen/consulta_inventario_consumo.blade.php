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
                      <div class="container">

                        <div class="row">
                          <div class="col-md-8 ">
                            <ul class="breadcrumb">
                              <li><a href="{{ url('/home') }}">Inicio</a></li>
                              <li><a href="{{ url('/bienes') }}">Bienes</a>
                              <li><a href="{{ url('/bienes/submodulo/adquisiciones') }}">Almacén</a>
                              <li><a href="#" class="active">Consulta de Inventario</a>
                              </li>
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

                <div class="container-md-height m-b-20">
                  <div class="row row-md-height">
                    <div class="col-lg-5 col-md-height col-md-6 col-top">
                      <!-- START PANEL -->
                      <div class="panel panel-transparent">
                        <div class="panel-heading">
                          <div class="panel-title">Bandeja de entrada
                          </div>
                        </div>
                        <div class="panel-body">
                          <h3>Consulta de Inventario</h3>
                          <p>En esta sección podrá consultar las autorizaciones pendientes provenientes de otras áreas.</p>
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
                <div class="panel-title">Ingresar el número de folio para buscar el artículo</div>
                </div>
                                    
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-sm-5">
                      <form>
                        <h5>a/ Buscar por clave de artículo</h5>
                          <div class="form-group form-group-default ">
                            <label>Folio:</label>                            
                            <input type="text" class="form-control" placeholder="123-5653">
                          </div>
                          <button class="btn btn-sm  btn-rounded btn-complete">Buscar <i class="pg-search"></i></button>
                          <br>                
                        </form>
                      </div>

                         <div class="col-sm-4">
                          <h5>b/ Buscar por folio de entrada</h5>
                            <form class="m-t-10" role="form">
                              <div class="form-group form-group-default form-group-default-select2">
                                <label class="">Productos</label>
                                <select class="full-width" data-placeholder="Select Country" data-init-plugin="select2">
                                  <optgroup label="Cómputo">
                                    <option value="AK">Impresoras</option>
                                    <option value="HI">Monitores</option>
                                  </optgroup>
                                  <optgroup label="Otros">
                                    <option value="CA">Papelería</option>
                                    <option value="NV">Limpieza</option>
                                  </optgroup>
                                </select>
                              </div>
                            <button class="btn btn-sm  btn-rounded btn-complete">Buscar <i class="pg-search"></i></button>                    
                        </form>
                     </div>

                      <div class="col-sm-2">
                        <h5>c/ Emitir no existencia</h5>
                        <form class="m-t-10" role="form">
                        <button class="btn btn-sm  btn-rounded btn-danger" type="button"><i class="pg-form"></i> Solicitar</button>
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
                <div class="panel-title">Bandeja de Entradas a Inventario
                </div>
                <div class="pull-right">
                  <div class="col-xs-12">
                    <input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-body">
                <table class="table table-hover demo-table-search" id="tableWithSearch">
                  <thead>
                    <tr>
                      <th>Clave del Artículo</th>
                      <th>Fecha de Entrada</th>
                      <th>Folio Orden de Compra</th>
                      <th>Fecha de factura</th>
                      <th>Folio de factura</th>
                      <th>Proveedor</th>
                      <th>Cantidad</th>
                      <th>Importe</th>
                      <th>Características</th>
                    </tr>
                  </thead>
                    <tbody>                        
                    @foreach ($bien_sub4_1 as $bien_sub4_1)
                      <tr class="even gradeC">
                        <td>{{$bien_sub4_1->articulo}}</td>
                        <td>{{$bien_sub4_1->fecha_ent}}</td>
                        <td>{{$bien_sub4_1->folio_compra}}</td>
                        <td>{{$bien_sub4_1->fecha_fact}}</td>
                        <td>{{$bien_sub4_1->folio_fact}}</td>
                        <td>{{$bien_sub4_1->proveedor}}</td>
                        <td>{{$bien_sub4_1->cantidad}}</td>
                        <td>${{$bien_sub4_1->importe}}</td>
                        <td>{{$bien_sub4_1->carac}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
              </div>
            </div>

          </div> <!-- END PANEL -->


          </div> <!-- DIV "panel body" - NO BORRAR" -->
                

<!-- STOP CHANGING 'content' HERE-->

            </div> <!-- DIV "col-md-12" - NO BORRAR" -->  
          </div> <!-- DIV "row" - NO BORRAR" -->

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
