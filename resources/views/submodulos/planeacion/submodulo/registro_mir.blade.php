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
                            <li><a href="{{ url('/planeacion/submodulos') }}">Planeación</a>
                              <li><a href="#" class="active">Matriz de Indicadores de Resultados MIR</a>
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
                          <h3>Matriz de Indicadores de Resultados MIR</h3>
                          <p>La Matriz de Indicadores para Resultados (MIR) es una herramienta que permite vincular
                          los distintos instrumentos para el diseño, organización, ejecución, seguimiento, evaluación
                          y mejora de los programas, resultado de un proceso de planeación realizado con base en
                          la Metodología de Marco Lógico.
                          Esta herramienta organiza los objetivos, indicadores y metas en la estructura
                          programática, vinculados al Programa presupuestario (Pp).
                          Con base en ello, sólo deberá existir una MIR por Pp.</p>
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

                    <h4><strong>Registro de Matriz de Indicadores de Resultados MIR</h4></strong>
                    <hr>
                    <div class="alert alert-info" role="alert">
                        <p class="pull-left"><strong>Parte 1:</strong> Datos de identificación del programa</p>
                      <div class="clearfix"></div>
                    </div>
                   
                 {!! Form::open(['url' => ['planeacion/submodulo/captura_mir', 'id'], 'method' => 'POST', 'id' => 'myForm']) !!}

                    <div class="" role="form">   

                      <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group form-group-default">
                              <label>Entidad Pública</label>
                              <input type="text" class="form-control" value="Comisión Municipal de Agua y Saneamiento de Xalapa" disabled>
                            </div>
                          </div>
                     
                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2">
                          <label>Unidad Responsable<span class="help"></span></label>
                          {!!Form::select('clave', $clave_ur, null, ['class' => 'full-width', 'data-init-plugin' => 'select2']) !!}
                          </div>
                        </div>
                      </div> <!-- END row -->

                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2">
                            <label>Clave y modalidad del Pp<span class="help"></span></label>
                            {!!Form::select('clave', $clave_pp, null, ['class' => 'full-width', 'data-init-plugin' => 'select2']) !!}
                            </div>
                        </div>

                        <div class="col-sm-6">
                          <div class="form-group form-group-default">
                            <label>Denominación del Pp</label>
                            {!!Form::text('nombre_pp', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
                            </div>
                        </div>
                      </div> <!-- END row -->
                        
                      <div class="row">

                        <div class="alert alert-info" role="alert">
                          <p class="pull-left"><strong>Parte 2:</strong> Alineación a Programas Nacional, Estatal y Municipal de Desarrollo</p>
                          <div class="clearfix"></div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group form-group-default form-group-default-select2">
                            <label>Finalidad<span class="help"></span></label>
                            {!!Form::select('clave', [
                            'Gobierno' => 'Gobierno',
                            'Desarrollo Social' => 'Desarrollo Social',
                            'Desarrollo Económico' => 'Desarrollo Económico',
                             ], null, ['class' => 'full-width', 'data-init-plugin' => 'select2']) !!}
                            </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group form-group-default form-group-default-select2">
                            <label>Función<span class="help"></span></label>
                            {!!Form::select('clave', $clave_fun, null, ['class' => 'full-width', 'data-init-plugin' => 'select2']) !!}
                            </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group form-group-default form-group-default-select2">
                            <label>Sub-Función<span class="help"></span></label>
                            {!!Form::select('clave', $clave_pp, null, ['class' => 'full-width', 'data-init-plugin' => 'select2']) !!}
                            </div>
                        </div>

                      </div> <!-- END row -->

                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group form-group-default">
                            <label>Denominación de la Matriz</label>
                            {!!Form::text('nombre_matriz', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
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

