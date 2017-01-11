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
                      <div class="container">

                        <div class="row">
                          <div class="col-md-8 ">
                            <ul class="breadcrumb">
                              <li><a href="{{ url('/home') }}">Inicio</a></li>
                              <li><a href="{{ url('/bienes') }}">Bienes</a>
                              <li><a href="{{ url('/bienes/submodulo/almacen') }}">Almacen</a>
                              <li><a href="#" class="active">Suministro de Bienes</a>
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
                          <div class="panel-title">Solicitud
                          </div>
                        </div>
                        <div class="panel-body">
                          <h3>Suministro de Bienes</h3>
                          <p>Esta sección esencial para la carga del presupuesto y permite la integración y flujo de datos adecuado para el resto de los módulos. Por favor llene con precaución.</p>
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
          
            <div class="row">
              <div class="col-md-12">

                <!-- INICIA PANEL BLANCO -->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="panel-title">
                      Llene los campos como se indican. Los campos con * son requeridos. 
                    </div>
                  </div>
                  <div class="panel-body"> <!-- DIV "panel body" - Insertar Contenidos Aquí" -->
                    
                  @if(Session::has('alerta'))
                        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('alerta') !!}</em></div>
                  @endif

                    <h4><strong>Registro de salida de inventario</strong></h4>
                    <hr>
                      <div class="row">
                        <div class="alert alert-info" role="alert">
                          <p class="pull-left"><strong>Parte 1:</strong> Datos Generales del Bien</p>
                          <div class="clearfix"></div>
                        </div>
                      </div>
                    
                    <div class="" role="form">    

                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group form-group-default input-group required">
                           <label>Fecha de Entrada<span class="help"></span></label>
                              <input type="text" class="form-control" value="{{ $bien['fecha_ent'] }}" disabled>
                              <span class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </span>
                          </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="form-group form-group-default required">
                            <label>Folio Orden de Compra<span class="help"></span></label>
                            <input type="text" class="form-control" value="{{ $bien['folio_compra'] }}" disabled>
                            </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="form-group form-group-default input-group required">
                           <label>Fecha de Factura<span class="help"></span></label>
                              <input type="text" class="form-control" value="{{ $bien['fecha_fact'] }}" disabled>
                              <span class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </span>
                          </div>
                        </div>
                        
                        <div class="col-sm-3">
                          <div class="form-group form-group-default required">
                            <label>Folio de Factura<span class="help"></span></label>
                            <input type="text" class="form-control" value="{{ $bien['folio_fact'] }}" disabled>
                            </div>
                        </div>
                      </div> <!-- END ROW  -->

                      <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group form-group-default">
                              <label>Clave Presupuestal</label>
                              <input type="text" class="form-control" value="{{ $bien['cve_presup'] }}" disabled>
                            </div>
                          </div>

                          <div class="col-sm-6">
                            <div class="form-group form-group-default">
                              <label>Proveedor</label>
                              <input type="text" class="form-control" value="{{ $bien['proveedor'] }}" disabled>
                            </div>
                          </div>
                      </div> <!-- END ROW  -->

                  
                      <div class="row">
                        <div class="alert alert-info" role="alert">
                          <p class="pull-left"><strong>Parte 2:</strong> Especificaciones del Bien</p>
                          <div class="clearfix"></div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group form-group-default">
                            <label>Nombre del Bien<span class="help"></span></label>
                            <input type="text" class="form-control" value="{{ $bien['bien'] }}" disabled>
                            </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="form-group form-group-default">
                            <label>Clave del Bien<span class="help"></span></label>
                            <input type="text" class="form-control" value="{{ $bien['cve_bien'] }}" disabled>
                            </div>
                        </div>

                        <div class="col-sm-2">
                          <div class="form-group form-group-default">
                            <label>Marca<span class="help"></span></label>
                            <input type="text" class="form-control" value="{{ $bien['marca'] }}" disabled>
                            </div>
                        </div>

                        <div class="col-sm-2">
                          <div class="form-group form-group-default">
                            <label>Modelo<span class="help"></span></label>
                            <input type="text" class="form-control" value="{{ $bien['modelo'] }}" disabled>
                            </div>
                          </div>

                          <div class="col-sm-2">
                            <div class="form-group form-group-default">
                              <label>Cantidad<span class="help"></span></label>
                              <input type="text" class="form-control" value="{{ $bien['cantidad'] }}" disabled="">
                              </div>
                            </div>
                          </div>

                        <div class="row">
                          <div class="col-sm-8">
                            <div class="form-group form-group-default">
                              <label>Características<span class="help"></span></label>
                              <input type="text" class="form-control" value="{{ $bien['carac'] }}" disabled>
                              </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-group form-group-default">
                              <label>Costo Unitario<span class="help"></span></label>
                              <input type="text" class="form-control" value="{{ $bien['costo_unit'] }}" disabled>
                              </div>
                          </div>

                          <div class="col-sm-2">
                            <div class="form-group form-group-default">
                              <label>Importe Total<span class="help"></span></label>
                              <input type="text" class="form-control" value="{{ $bien['total'] }}" disabled>
                              </div>
                          </div>
                         </div>

                      <div class="row">                                        
                          <div class="alert alert-success" role="alert">
                            <p class="pull-left"><strong>Parte 3:</strong> Indicar datos de Salida del Bien</p>
                            <div class="clearfix"></div>
                          </div>
                      </div>

                    {!! Form::open(['url' => 'bienes/submodulo/almacen/editar_bien']) !!}

                      <div class="row">                        
                        <div class="col-sm-3">
                          <div class="form-group form-group-default required">
                            <label>Folio de Salida<span class="help"></span></label>
                            {!!Form::text('folio_salida', null, ['class' => 'form-control', 'placeholder' => 'COMP-00001']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group form-group-default input-group required">
                           <label>Fecha de Salida<span class="help"></span></label>
                            {!!Form::text('fecha_salida', null, ['class' => 'form-control', 'id' => 'datepicker-component2', 'placeholder' => '11/06/2016']) !!}
                              <span class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </span>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Unidad Responsable Asignada</label>
                            {!!Form::select('ur_asignada', $clave, null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group form-group-default">
                              <label>Cantidad<span class="help"></span></label>
                              {!!Form::number('salida_cantidad', null, ['class' => 'form-control']) !!}
                              </div>
                          </div>

                        <div class="col-sm-9">
                          <div class="form-group form-group-default">
                            <label>Notas<span class="help"></span></label>
                            {!!Form::text('salida_notas', null, ['class' => 'form-control', 'placeholder' => 'Descripción corta']) !!}
                            </div>
                        </div>
                      </div>


                    {!!Form::submit('Generar salida',['class' => 'btn btn-success show-notification'])!!}
                                            
                    {!! Form::close() !!} 
                    

                  </div> <!-- END FORM -->
                </div> <!-- DIV "panel body" - NO BORRAR" -->
              </div> <!-- AQUI TERMINA EL PANEL PRINCIPAL -->


<!-- STOP CHANGING 'content' HERE-->

            </div> <!-- DIV "col-md-12" - NO BORRAR" -->  
          </div> <!-- DIV "row" - NO BORRAR" -->


      </div>
      <!-- TERMINA page container / DIV DE ESPACIO PARA FOOTER -->

<!-- TERMINA CONTENIDO / LA SECCIÓN SE QUEDA ABIERTA PARA CERRAR footer-->


@endsection

@section('script_page')

    <!-- BEGIN VENDOR JS -->

    <script src="{{ URL::asset('assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/jquery-autonumeric/autoNumeric.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/dropzone/dropzone.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/jquery-inputmask/jquery.inputmask.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/boostrap-form-wizard/js/jquery.bootstrap.wizard.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/summernote/js/summernote.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>


    <script src="{{ URL::asset('assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-responsive/js/datatables.responsive.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-responsive/js/lodash.min.js') }}"></script>
    <!-- END VENDOR JS -->

    <!-- BEGIN PAGE LEVEL JS -->
    <script src="{{ URL::asset('assets/js/form_elements.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/js/notifications.js') }}" type="text/javascript"></script>

    <!-- END PAGE LEVEL JS -->

@stop

