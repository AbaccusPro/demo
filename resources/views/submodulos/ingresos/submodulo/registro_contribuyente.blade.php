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
                            <li><a href="{{ url('/ingresos/submodulos') }}">Ingresos</a>
                              <li><a href="#" class="active">Registro de Contribuyente</a>
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
                          <div class="panel-title">Registro
                          </div>
                        </div>
                        <div class="panel-body">
                          <h3>Registro de Contribuyente</h3>
                          <p>Se crea un nuevo registro en el padrón de contribuyentes.</p>
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
                      Los campos con * son requeridos. 
                    </div>
                  </div>
                  <div class="panel-body"> <!-- DIV "panel body" - Insertar Contenidos Aquí" -->
                    
                  @if(Session::has('alerta'))
                        <div class="alert alert-info"><span class="glyphicon glyphicon-ok"></span><em> {!! session('alerta') !!}</em></div>
                  @endif

                    <h4><strong>Registro de nuevo Contribuyente</h4></strong>
                    <hr>
                    <div class="row">                                       
                      <div class="alert alert-info" role="alert">
                          <p class="pull-left"><strong>Parte 1:</strong> Datos básicos</p>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                   
                 {!! Form::open(['url' => ['planeacion/submodulo/captura_mir', 'id'], 'method' => 'POST', 'id' => 'myForm']) !!}

                    <div class="" role="form">   

                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group form-group-default input-group required">
                           <label>Fecha de registro<span class="help"></span></label>
                            {!!Form::text('fecha', null, ['class' => 'form-control', 'id' => 'datepicker-component2', 'placeholder' => '11/06/2016']) !!}
                              <span class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </span>
                          </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group form-group-default required">
                              <label>Apellido Paterno</label>
                            {!!Form::text('apellido_pat', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                     
                        <div class="col-sm-3">
                            <div class="form-group form-group-default required">
                              <label>Apellido Materno</label>
                            {!!Form::text('apellido_mat', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="form-group form-group-default required">
                            <label>Nombre(s)<span class="help"></span></label>
                            {!!Form::text('nombre', null, ['class' => 'form-control']) !!}
                          </div>
                        </div>

                      </div> <!-- END row -->

                      <div class="row">
                        <div class="alert alert-info" role="alert">
                          <p class="pull-left"><strong>Parte 2:</strong> Datos Fiscales</p>
                          <div class="clearfix"></div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group form-group-default required">
                              <label>RFC</label>
                            {!!Form::text('rfc', null, ['class' => 'form-control']) !!}
                            </div>
                          </div>
                     
                        <div class="col-sm-3">
                            <div class="form-group form-group-default ">
                              <label>CURP</label>
                            {!!Form::text('curp', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label>Régimen Fiscal<span class="help"></span></label>
                            {!!Form::select('regimen', [
                            'General' => 'General',
                            'Simple' => 'Simple',
                             ], null, ['class' => 'full-width', 'data-init-plugin' => 'select2']) !!}
                            </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="form-group form-group-default form-group-default-select2">
                            <label>Oficina<span class="help"></span></label>
                            {!!Form::select('sucursal', [
                            'Sucursal 1' => 'Sucursal 1',
                            'Sucursal 2' => 'Sucursal 2',
                            'Sucursal 3' => 'Sucursal 3',
                             ], null, ['class' => 'full-width', 'data-init-plugin' => 'select2']) !!}
                            </div>
                        </div>
                      </div> <!-- END row -->
                        
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label>Entidad<span class="help"></span></label>
                            {!!Form::select('estado', [
                            'Veracruz' => 'Veracruz',
                             ], null, ['class' => 'full-width', 'data-init-plugin' => 'select2']) !!}
                            </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label>Municipio<span class="help"></span></label>
                            {!!Form::select('municipio', [
                            'Gobierno' => 'Gobierno',
                            'Desarrollo Social' => 'Desarrollo Social',
                            'Desarrollo Económico' => 'Desarrollo Económico',
                             ], null, ['class' => 'full-width', 'data-init-plugin' => 'select2']) !!}
                            </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label>Localidad<span class="help"></span></label>
                            {!!Form::select('localidad', [
                            'Gobierno' => 'Gobierno',
                            'Desarrollo Social' => 'Desarrollo Social',
                            'Desarrollo Económico' => 'Desarrollo Económico',
                             ], null, ['class' => 'full-width', 'data-init-plugin' => 'select2']) !!}
                            </div>
                        </div>
                      </div> <!-- END row -->

                      <div class="row">                      
                        <div class="col-sm-5">
                          <div class="form-group form-group-default required">
                            <label>Domicilio Fiscal</label>
                            {!!Form::text('domicilio', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-sm-1">
                          <div class="form-group form-group-default required">
                            <label>Número</label>
                            {!!Form::text('numero', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group form-group-default required">
                            <label>Colonia</label>
                            {!!Form::text('colonia', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-sm-2">
                          <div class="form-group form-group-default required">
                            <label>CP</label>
                            {!!Form::text('cp', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                      </div> <!-- END row -->    

                      <div class="row">                      
                        <div class="col-sm-3">
                          <div class="form-group form-group-default">
                            <label>Teléfono</label>
                            {!!Form::text('telefono', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="form-group form-group-default">
                            <label>Celular</label>
                            {!!Form::text('celular', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="form-group form-group-default">
                            <label>Correo electrónico</label>
                            {!!Form::text('email', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label>Persona Jurídica<span class="help"></span></label>
                            {!!Form::select('pjuridica', [
                            'Moral' => 'Moral',
                            'Física' => 'Física',
                             ], null, ['class' => 'full-width', 'data-init-plugin' => 'select2']) !!}
                            </div>
                        </div>
                      </div> <!-- END row --> 


                    {!!Form::submit('Registrar',['class' => 'btn btn-complete show-notification'])!!}
                                            
                    {!! Form::close() !!}                     

                    </div>
                  </div> <!-- END FORM -->
                </div> <!-- DIV "panel body" - NO BORRAR" -->
              </div> <!-- AQUI TERMINA EL PANEL PRINCIPAL -->
            </div>


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

