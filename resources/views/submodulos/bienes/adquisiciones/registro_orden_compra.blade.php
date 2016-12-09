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
                            <li><a href="{{ url('/bienes') }}">Bienes</a>
                              <li><a href="{{ url('/bienes/submodulo/adquisiciones') }}">Adquisiciones</a>
                              <li><a href="#" class="active">Registro de orden de compra</a>
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
                          <div class="panel-title">Solicitud
                          </div>
                        </div>
                        <div class="panel-body">
                          <h3>Registro de Orden de Compra</h3>
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

                    <h4>Registro de Orden de Compra</h4>
                    <h5>1. Datos Generales</h5>                   

                  {!! Form::open(['url' => 'bienes/submodulo/adquisiciones/registro_orden_compra']) !!}

                    <div class="" role="form">    

                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group form-group-default input-group required">
                           <label>Fecha de Solicitud<span class="help"></span></label>
                            {!!Form::text('fecha', null, ['class' => 'form-control', 'id' => 'datepicker-component2', 'placeholder' => '11/06/2016']) !!}
                              <span class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </span>
                          </div>
                        </div>

                        <div class="col-sm-3"></div>

                        <div class="col-sm-3">
                          <div class="form-group form-group-default required">
                            <label>Folio de solicitud aprobada<span class="help"></span></label>
                            {!!Form::text('num_sol_apro', null, ['class' => 'form-control', 'placeholder' => 'COMPSOL-00001']) !!}
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                          <div class="form-group form-group-default required">
                            <label>Folio de orden de Compra<span class="help"></span></label>
                            {!!Form::text('num_sol_compra', null, ['class' => 'form-control', 'placeholder' => 'COMP-00001']) !!}
                            </div>
                        </div>
                      </div> <!-- END ROW  -->


                      <div class="row">
                        <div class="col-sm-8">
                          <div class="form-group form-group-default form-group-default-select2 required">
                           <label>Clave Presupuestal<span class="help"></span></label>
                            {!!Form::select('clave', $clave, null, ['class' => 'full-width', 'data-init-plugin' => 'select2']) !!}
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Tipo de Adquisicion</label>
                            {!!Form::select('tipo_adqui', [
                            'Directa' => 'Directa',
                            'Invitación cuando menos a tres' => 'Invitación cuando menos a tres',
                            'Licitación ' => 'Licitación',
                            ], null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div>
                      </div> <!-- END ROW  -->

                      <div class="row">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Proovedor</label>
                            {!!Form::select('proveedor', $proveedor, null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                      </div> <!-- END ROW  -->

                      <div class="row">
                          <div class="col-sm-6">
                            <h5>2. Indique las especificaciones del bien o servicio</h5>
                        </div>
                      </div>
                  
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group form-group-default">
                            <label>Producto<span class="help"></span></label>
                            {!!Form::text('producto', null, ['class' => 'form-control', 'placeholder' => 'Nombre del bien']) !!}
                            </div>
                        </div>

                        <div class="col-sm-2">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Unidad de medida</label>
                            {!!Form::select('medida', [
                            'Pieza' => 'Pieza',
                            'KG' => 'KG',
                            'LT' => 'LT',
                            'M' => 'M',
                            ], null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div>

                        <div class="col-sm-2">
                          <div class="form-group form-group-default required">
                            <label>Cantidad<span class="help"></span></label>
                            {!!Form::number('cantidad', null, ['class' => 'form-control', 'placeholder' => 'Número']) !!}
                            </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="form-group form-group-default required">
                            <label>Marca<span class="help"></span></label>
                            {!!Form::text('marca', null, ['class' => 'form-control', 'placeholder' => 'Descripción corta']) !!}
                            </div>
                        </div>

                        <div class="col-sm-2">
                          <div class="form-group form-group-default required">
                            <label>Precio<span class="help"></span></label>
                            {!!Form::number('precio', null, ['class' => 'form-control', 'step' => 'any']) !!}
                            </div>
                        </div>
                      </div> <!-- END ROW  -->

                      <div class="row">                      
                          <div class="col-sm-5">
                            <div class="form-group form-group-default required">
                              <label>Características<span class="help"></span></label>
                              {!!Form::text('carac', null, ['class' => 'form-control', 'placeholder' => 'Descripción corta']) !!}
                              </div>
                          </div>

                        </div> <!-- END ROW -->

                        <div class="row">
                            <div class="col-sm-3">
                          <a><button type="button" class="btn btn-complete btn-cons btn-animated from-left fa fa-hand-o-down">
                            <span>Agregar bien o servicio</span>
                          </button></a>
                            </div>
                        </div> <!-- END ROW -->

                        <br>
                        <br>
                        
                        <div class="row">

                        <div class="col-sm-5"></div>

                          <div class="col-sm-2">
                           <div class="form-group form-group-default required">
                              <label>Subtotal<span class="help"></span></label>
                              {!!Form::number('subtotal', null, ['class' => 'form-control', 'step' => 'any']) !!}
                              </div>
                          </div>

                          <div class="col-sm-2">
                           <div class="form-group form-group-default required">
                              <label>IVA<span class="help"></span></label>
                              {!!Form::number('iva', null, ['class' => 'form-control', 'step' => 'any']) !!}
                              </div>
                          </div>

                        <div class="col-sm-3">
                          <div class="form-group form-group-default input-group">
                            <label class="label-lg">Total</label>
                              {!!Form::number('total', null, ['class' => 'autonumeric form-control required', 'step' => 'any']) !!}
                            <span class="input-group-addon">MXN</span>
                          </div>
                        </div>
                        </div> <!-- END ROW -->                       

                        <div class="row">
                        <div class="col-sm-5"></div>

                          <div class="col-sm-3">
                            <div class="form-group form-group-default required">
                            <label>Tiempo de entrega<span class="help"></span></label>
                            {!!Form::text('dias_ent', null, ['class' => 'form-control', 'placeholder' => 'Ej. 2 semanas']) !!}
                            </div>
                         </div>

                          <div class="col-sm-4">
                            <div class="form-group form-group-default required">
                            <label>Lugar de entrega<span class="help"></span></label>
                            {!!Form::text('lugar_ent', null, ['class' => 'form-control']) !!}
                            </div>
                         </div>
                        </div> <!-- END ROW -->


                    {!!Form::submit('Generar solicitud',['class' => 'btn btn-success show-notification'])!!}
                                            
                    {!! Form::close() !!}          

                      </div>            

                    </div>
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

