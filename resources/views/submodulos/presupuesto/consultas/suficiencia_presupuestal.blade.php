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
                  <li><a href="{{ url('/presupuesto/submodulos') }}">Submodulos</a>
                  <li><a href="#" class="active">Consulta de Suficiencia Presupuestal</a>
                  </li>
                </ul>
                <!-- END BREADCRUMB -->
                <div class="container-md-height m-b-20">
                  <div class="row row-md-height">
                    <div class="col-lg-5 col-md-height col-md-6 col-top">
                      <!-- START PANEL -->
                      <div class="panel panel-transparent">
                        <div class="panel-heading">
                          <div class="panel-title">Consulta
                          </div>
                        </div>
                        <div class="panel-body">
                          <h3>Consulta de Suficiencia Presupuestal</h3>
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
                      Debe elegir todos los combos para obtener una búsqueda exacta. 
                    </div>
                  </div>
                  <div class="panel-body"> <!-- DIV "panel body" - Insertar Contenidos Aquí" -->
                    <h4>Parte 1 - Consulta de presupuesto por Partida específica</h4>


            {!! Form::open(['url' => 'presupuesto/consultas/suficiencia_presupuestal']) !!}

                    <div class="" role="form">                    
                      <div class="row">

                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Unidad Responsable</label>
                            {!!Form::select('ur', [
                            '16110 Dirección de Administración' => '16110 Dirección de Administración',
                            '16111 Departamento A' => '16111 Departamento A',
                            '16111 Departamento B' => '16111 Departamento B',
                            '16120 Dirección de Operación' => '16120 Dirección de Operación',
                            '16111 Departamento C' => '16111 Departamento C',
                            '16111 Departamento D' => '16111 Departamento D',
                            ], null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div>
                                            
                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Funcional</label>
                            {!!Form::select('fun', [
                            '100 GOBIERNO' => '100 GOBIERNO',
                            '110 LEGISLACION' => '110 LEGISLACION',
                            '111 Legislación' => '111 Legislación',
                            '112 Fiscalización' => '112 Fiscalización',
                            '120 JUSTICIA' => '120 JUSTICIA',
                            '121 Impartición de Justicia' => '121 Impartición de Justicia',
                            '123 Reclusión y Readaptación Social' => '123 Reclusión y Readaptación Social',
                            '124 Derechos Humanos' => '124 Derechos Humanos',
                            '130 COORDINACION DE LA POLITICA DE GOBIERNO' => '130 COORDINACION DE LA POLITICA DE GOBIERNO',
                            '131 Presidencia / Gubernatura' => '131 Presidencia / Gubernatura',
                            ], null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div> 
                      </div> <!-- END ROW -->

                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Programa</label>
                            {!!Form::select('pp', [
                            'S - Subsidios: Sector Social y Privado o Entidades Federativas y Municipios / Sujetos a Reglas de Operación' => 'S - Subsidios: Sector Social y Privado o Entidades Federativas y Municipios / Sujetos a Reglas de Operación',
                            'U - Subsidios: Sector Social y Privado o Entidades Federativas y Municipios / Otros Subsidios' => 'U - Subsidios: Sector Social y Privado o Entidades Federativas y Municipios / Otros Subsidios',
                            'E - Desempeño de las Funciones / Prestación de Servicios Públicos' => 'E - Desempeño de las Funciones / Prestación de Servicios Públicos',
                            'B - Desempeño de las Funciones / Provisión de Bienes Públicos' => 'B - Desempeño de las Funciones / Provisión de Bienes Públicos',
                            'P - Desempeño de las Funciones / Planeación, seguimiento y evaluación de políticas públicas' => 'P - Desempeño de las Funciones / Planeación, seguimiento y evaluación de políticas públicas',
                            'F - Desempeño de las Funciones / Promoción y fomento' => 'F - Desempeño de las Funciones / Promoción y fomento',
                            'G - Desempeño de las Funciones / Regulación y supervisión' => 'G - Desempeño de las Funciones / Regulación y supervisión',
                            'A - Desempeño de las Funciones / Funciones de las Fuerzas Armadas (Únicamente Gobierno Federal)' => 'A - Desempeño de las Funciones / Funciones de las Fuerzas Armadas (Únicamente Gobierno Federal)',
                            'R - Desempeño de las Funciones / Específicos' => 'R - Desempeño de las Funciones / Específicos',
                            'K - Desempeño de las Funciones / Proyectos de Inversión' => 'K - Desempeño de las Funciones / Proyectos de Inversión',
                            'M - Administrativos y de Apoyo / Apoyo al proceso presupuestario y para mejorar la eficiencia institucional' => 'M - Administrativos y de Apoyo / Apoyo al proceso presupuestario y para mejorar la eficiencia institucional',
                            'O - Administrativos y de Apoyo / Apoyo a la función pública y al mejoramiento de la gestión' => 'O - Administrativos y de Apoyo / Apoyo a la función pública y al mejoramiento de la gestión',
                            'W - Administrativos y de Apoyo / Operaciones ajenas' => 'W - Administrativos y de Apoyo / Operaciones ajenas',
                            'L - Compromisos / Obligaciones de cumplimiento de resolución jurisdiccional' => 'L - Compromisos / Obligaciones de cumplimiento de resolución jurisdiccional',
                            'N - Compromisos / Desastres Naturales' => 'N - Compromisos / Desastres Naturales',
                            'J - Obligaciones / Pensiones y jubilaciones' => 'J - Obligaciones / Pensiones y jubilaciones',
                            'T - Obligaciones / Aportaciones a la seguridad social' => 'T - Obligaciones / Aportaciones a la seguridad social',
                            'Y - Obligaciones / Aportaciones a fondos de estabilización' => 'Y - Obligaciones / Aportaciones a fondos de estabilización',
                            'Z - Obligaciones / Aportaciones a fondos de inversión y reestructura de pensiones' => 'Z - Obligaciones / Aportaciones a fondos de inversión y reestructura de pensiones',
                            'I - Programas de Gasto Federalizado (Gobierno Federal) / Gasto Federalizado' => 'I - Programas de Gasto Federalizado (Gobierno Federal) / Gasto Federalizado',
                            'C - Participaciones a entidades federativas y municipios / Participaciones a entidades federativas y municipios' => 'C - Participaciones a entidades federativas y municipios / Participaciones a entidades federativas y municipios',
                            'D - Costo financiero, deuda o apoyos a deudores y ahorradores de la banca / Costo financiero, deuda o apoyos a deudores y ahorradores de la banca' => 'D - Costo financiero, deuda o apoyos a deudores y ahorradores de la banca / Costo financiero, deuda o apoyos a deudores y ahorradores de la banca',
                            'H - Adeudos de ejercicios fiscales anteriores / Adeudos de ejercicios fiscales anteriores' => 'H - Adeudos de ejercicios fiscales anteriores / Adeudos de ejercicios fiscales anteriores',

                            ], null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div>     

                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">COG Partida</label>
                            {!!Form::select('cog', [
                            '1000 SERVICIOS PERSONALES' => '1000 SERVICIOS PERSONALES',
                            '1100 REMUNERACIONES AL PERSONAL DE CARACTER PERMANENTE' => '1100 REMUNERACIONES AL PERSONAL DE CARACTER PERMANENTE',
                            '111 Dietas' => '111 Dietas',
                            '112 Haberes' => '112 Haberes',
                            '113 Sueldos base al personal permanente' => '113 Sueldos base al personal permanente',
                            '114 Remuneraciones por adscripción laboral en el extranjero' => '114 Remuneraciones por adscripción laboral en el extranjero',
                            '1200 REMUNERACIONES AL PERSONAL DE CARACTER TRANSITORIO' => '1200 REMUNERACIONES AL PERSONAL DE CARACTER TRANSITORIO',
                            '121 Honorarios asimilables a salarios' => '121 Honorarios asimilables a salarios',
                            '122 Sueldos base al personal eventual' => '122 Sueldos base al personal eventual',
                            '123 Retribuciones por servicios de carácter social' => '123 Retribuciones por servicios de carácter social',
                            '124 Retribución a los representantes de los trabajadores y de los patrones en la Junta de Conciliación y Arbitraje' => '124 Retribución a los representantes de los trabajadores y de los patrones en la Junta de Conciliación y Arbitraje',
                             ], null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div> 
                      </div> <!-- END ROW -->

                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Tipo de Gasto</label>
                            {!!Form::select('gasto', [
                            '1 Gasto Corriente' => '1 Gasto Corriente',
                            '2 Gasto de Capital' => '2 Gasto de Capital',
                            '3 Amortización de la deuda y disminución de pasivos' => '3 Amortización de la deuda y disminución de pasivos',
                            ], null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div> 
                    
                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Fuente de financiamiento</label>
                            {!!Form::select('ff', [
                            '1 Recursos Fiscales' => '1 Recursos Fiscales',
                            '2 Financiamientos internos' => '2 Financiamientos internos',
                            '3 Financiamientos externos' => '3 Financiamientos externos',
                            '4 Ingresos propios' => '4 Ingresos propios',
                            '5 Recursos Federales' => '5 Recursos Federales',
                            '6 Recursos Estatales' => '6 Recursos Estatales',
                            '7 Otros recursos' => '7 Otros recursos',
                            ], null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div>
                      </div> <!-- END ROW -->
                      <br>

                    {!!Form::submit('Buscar',['class' => 'btn btn-complete show-notification'])!!}
                                            
                    {!! Form::close() !!}
<br>
<br>

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
    <script src="{{ URL::asset('assets/js/datatables.js') }}" type="text/javascript"></script>

    <!-- END PAGE LEVEL JS -->

@stop

