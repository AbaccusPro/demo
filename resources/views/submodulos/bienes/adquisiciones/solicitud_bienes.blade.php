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
                              <li><a href="#" class="active">Solicitud de bienes</a>
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
                          <h3>Solicitud de Bienes</h3>
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

                    <h4>Solicitud de Adquisición de Bien o Servicio</h4>
                    <h5>1. Elija la partida presupuestal</h5>
                   
                  {!! Form::open(['url' => 'bienes/submodulo/adquisiciones/solicitud_bienes']) !!}
                    <div class="" role="form">    

                      <div class="row">
                        <div class="col-sm-6"></div>

                        <div class="col-sm-3">
                          <div class="form-group form-group-default required">
                            <label>No. de Solicitud<span class="help"></span></label>
                            {!!Form::text('num_sol', null, ['class' => 'form-control', 'placeholder' => 'COMPSOL-00001']) !!}
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                          <div class="form-group form-group-default input-group required">
                           <label>Fecha de Solicitud<span class="help"></span></label>
                            {!!Form::text('fecha', null, ['class' => 'form-control', 'id' => 'datepicker-component2', 'placeholder' => '11/06/2016']) !!}
                              <span class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </span>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Unidad Responsable</label>
                            {!!Form::select('ur', [
                            '16110' => '16110 Dirección de Administración',
                            '16111' => '16111 Departamento A',
                            '16112' => '16112 Departamento B',
                            '16120' => '16120 Dirección de Operación',
                            '16121' => '16121 Departamento C',
                            '16122' => '16122 Departamento D',
                            ], null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div> 
                      
                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Funcional</label>
                            {!!Form::select('fun', [
                            '200' => '200 DESARROLLO SOCIAL',
                            '210' => '210 PROTECCION AMBIENTAL',
                            '211' => '211 Ordenación de Desechos',
                            '212' => '212 Administración del Agua',
                            '213' => '213 Ordenación de Aguas Residuales, Drenaje y Alcantarillado',
                            '214' => '214 Reducción de la Contaminación',
                            '215' => '215 Protección de la Diversidad Biológica y del Paisaje',
                            '216' => '216 Otros de Protección Ambiental',
                            '220' => '220 VIVIENDA Y SERVICIOS A LA COMUNIDAD',
                            '221' => '221 Urbanización',
                            '222' => '222 Desarrollo Comunitario',
                            '223' => '223 Abastecimiento de Agua',
                            '224' => '224 Alumbrado Público',
                            '225' => '225 Vivienda',
                            '226' => '226 Servicios Comunales',
                            '227' => '227 Desarrollo Regional',
                            ], null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div>
                      </div> <!-- END ROW -->

                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Programa</label>
                            {!!Form::select('pp', [
                            'E009' => 'E009 - Investigación científica y tecnológica',
                            'G001' => 'G001 - Administración Sustentable del Agua',
                            'G023' => 'G023 - Servicios a usuarios y mercado del agua.',
                            'G025' => 'G025 - Recaudación y fiscalización',
                            'K007' => 'K007 - Proyectos de infraestructura económica de agua potable, alcantarillado y saneamiento',
                            'K028' => 'K028 - Estudios de preinversión',
                            'M001' => 'M001 - Actividades de apoyo administrativo',
                            'P006' => 'P006 - Apoyo a las actividades de planeación, elaboración y seguimiento de las políticas y programas de la dependencia',
                            'R005' => 'R005 - Presupuesto Basado en Resultados-Sistema de Evaluación del Desempeño',
                            'R120' => 'R120 - Provisión para la Armonización Contable',
                            'S071' => 'S071 - Programa de Empleo Temporal (PET)',
                            'S074' => 'S074 - Programa de Agua Potable, Alcantarillado y Saneamiento en Zonas Urbanas',
                            'S218' => 'S218 - Programa de Tratamiento de Aguas Residuales',
                            'U008' => 'U008 - Saneamiento de Aguas Residuales',
                            'U010' => 'U010 - Programa de Cultura del Agua',
                            'U012' => 'U012 - Prevención y gestión integral de residuos',
                            'U022' => 'U022 - Programa de Mitigación y Adaptación del Cambio Climáticos',
                            'U032' => 'U032 - Programa de Fortalecimiento Ambiental en las Entidades Federativas',
                            'U037' => 'U037 - Infraestructura Hídrica',
                            ], null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div>                     

                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">COG Partida</label>
                            {!!Form::select('cog', [
                            '113' => '113 Sueldos base al personal permanente',
                            '114' => '114 Remuneraciones por adscripción laboral en el extranjero',
                            '122' => '122 Sueldos base al personal eventual',
                            '123' => '123 Retribuciones por servicios de carácter social',
                            '131' => '131 Primas por años de servicios efectivos prestados',
                            '132' => '132 Primas de vacaciones, dominical y gratificación de fin de año',
                            '133' => '133 Horas extraordinarias',
                            '134' => '134 Compensaciones',
                            '141' => '141 Aportaciones de seguridad social',
                            '142' => '142 Aportaciones a fondos de vivienda',
                            '143' => '143 Aportaciones al sistema para el retiro',
                            '151' => '151 Cuotas para el fondo de ahorro y fondo de trabajo',
                            '152' => '152 Indemnizaciones',
                            '154' => '154 Prestaciones contractuales',
                            '155' => '155 Apoyos a la capacitación de los servidores públicos',
                            '161' => '161 Previsiones de carácter laboral, económica y de seguridad social',
                            '171' => '171 Estímulos',
                            '172' => '172 Recompensas',
                            '211' => '211 Materiales, útiles y equipos menores de oficina',
                            '216' => '216 Material de limpieza',
                            '218' => '218 Materiales para el registro e identificación de bienes y personas',
                            '221' => '221 Productos alimenticios para personas',
                            '223' => '223 Utensilios para el servicio de alimentación',
                            '241' => '241 Productos minerales no metálicos',
                            '242' => '242 Cemento y productos de concreto',
                            '246' => '246 Material eléctrico y electrónico',
                            '247' => '247 Artículos metálicos para la construcción',
                            '248' => '248 Materiales complementarios',
                            '261' => '261 Combustibles, lubricantes y aditivos',
                            '271' => '271 Vestuario y uniformes',
                            '272' => '272 Prendas de seguridad y protección personal',
                            '273' => '273 Artículos deportivos',
                            '291' => '291 Herramientas menores',
                            '296' => '296 Refacciones y accesorios menores de equipo de transporte',            
                            ], null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div> 
                      </div> <!-- END ROW -->

                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Tipo de Gasto</label>
                            {!!Form::select('gasto', [
                            '1' => '1 Gasto Corriente',
                            '2' => '2 Gasto de Capital',
                            '3' => '3 Amortización de la deuda y disminución de pasivos',
                            ], null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div> 
                                            
                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Fuente de financiamiento</label>
                            {!!Form::select('ff', [
                            '1' => '1 Recursos Fiscales',
                            '2' => '2 Financiamientos internos',
                            '3' => '3 Financiamientos externos',
                            '4' => '4 Ingresos propios',
                            '5' => '5 Recursos Federales',
                            '6' => '6 Recursos Estatales',
                            '7' => '7 Otros recursos',
                            ], null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div>
                      </div>
                    </div>    <!-- END ROW -->

                      <div class="row">
                          <div class="col-sm-6">
                            <h5>2. Indique las especificaciones del bien o servicio</h5>
                        </div>
                      </div>
                  
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group form-group-default required">
                            <label>Bien<span class="help"></span></label>
                            {!!Form::text('bien', null, ['class' => 'form-control', 'placeholder' => 'Nombre del bien']) !!}
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
                            <label>Precio Cotizado<span class="help"></span></label>
                            {!!Form::number('precio', null, ['class' => 'form-control', 'step' => 'any']) !!}
                            </div>
                        </div>
                      </div> <!-- END ROW  -->

                      <div class="row">                      
                          <div class="col-sm-6">
                            <div class="form-group form-group-default required">
                              <label>Características<span class="help"></span></label>
                              {!!Form::text('carac', null, ['class' => 'form-control', 'placeholder' => 'Descripción corta']) !!}
                              </div>
                          </div>

                          <div class="col-sm-6">
                            <div class="form-group form-group-default required">
                              <label>Justificación<span class="help"></span></label>
                              {!!Form::text('just', null, ['class' => 'form-control', 'placeholder' => 'Descripción corta']) !!}
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
                          <div class="col-sm-3">
                          <div class="form-group form-group-default required">
                            <label>Importe a comprometer<span class="help"></span></label>
                            {!!Form::number('imp_comp', null, ['class' => 'form-control', 'step' => 'any']) !!}
                            </div>
                          </div>
                        </div>


                    {!!Form::submit('Generar solicitud',['class' => 'btn btn-success show-notification'])!!}
                                            
                    {!! Form::close() !!}                     

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

