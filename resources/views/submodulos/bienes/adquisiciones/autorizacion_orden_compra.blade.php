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

                          <!-- START BREADCRUMB -->
                          <ul class="breadcrumb">
                            <li><a href="{{ url('/home') }}">Inicio</a></li>
                            <li><a href="{{ url('/bienes') }}">Bienes</a>
                              <li><a href="{{ url('/bienes/submodulo/adquisiciones') }}">Adquisiciones</a>
                              <li><a href="#" class="active">Autorizaciones de órdenes de compra</a>
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
                          <h3>Autorizaciones de Órdenes de compra</h3>
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
                <div class="panel-title">Ingresar el número de folio para buscar la solicitud</div>
                </div>
                                    
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-sm-5">
                      <form>
                        <h5>a/ Folio de Órden de Compra</h5>
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
                <div class="panel-title">Bandeja de Autorizaciones de Órdenes de Compra
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
                      <th>Estatus</th>
                      <th>Ver Documentación</th>
                      <th>Fecha</th>
                      <th>Folio de Solicitud de Bien</th>
                      <th>Folio de Solicitud de Compra</th>
                      <th>Producto</th>
                      <th>Cantidad</th>
                      <th>Importe</th>
                      <th>Entrega</th>
                      <th>Lugar</th>

                    </tr>
                  </thead>
                    <tbody>                        
                    @foreach ($bien_sub3 as $bien_sub3)
                      <tr class="even gradeC">
                        <td> <div class="btn-group dropdown-default dropup"> <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Pendiente <span class="caret"></span> </a>
                          <ul class="dropdown-menu">
                            <li><a><i class="fa fa-check"></i> Autorizar</a>
                            </li>
                            <li><a><i class="fa fa-times"></i> Rechazar</a>
                            </li>
                          </ul>
                        </div></td>
                            <td class="v-align-middle"><button type="button" class="btn btn-complete"><i class="fa fa-file-o"></i>
                            </button></td>
                        <td>{{$bien_sub3->fecha}}</td>
                        <td>{{$bien_sub3->num_sol_apro}}</td>
                        <td>{{$bien_sub3->num_sol_compra}}</td>
                        <td>{{$bien_sub3->producto}}</td>
                        <td>{{$bien_sub3->cantidad}}</td>
                        <td>${{$bien_sub3->total}}</td>
                        <td>{{$bien_sub3->dias_ent}}</td>
                        <td>{{$bien_sub3->lugar_ent}}</td>
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
