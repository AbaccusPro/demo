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
                  <li><a href="{{ url('/planeacion') }}">Planeación y Programación</a>
                  <li><a href="{{ url('/planeacion/submodulos') }}">Submodulos</a>
                  <li><a href="#" class="active">Carga del Decreto Presupuesto Aprobado</a>
                  </li>
                </ul>
                <!-- END BREADCRUMB -->
                <div class="container-md-height m-b-20">
                  <div class="row row-md-height">
                    <div class="col-lg-5 col-md-height col-md-6 col-top">
                      <!-- START PANEL -->
                      <div class="panel panel-transparent">
                        <div class="panel-heading">
                          <div class="panel-title">Sub-Módulo
                          </div>
                        </div>
                        <div class="panel-body">
                          <h3>Carga del Decreto Presupuesto Aprobado</h3>
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
                      Llene el formulario como se indica. Los campos con * son obligatorios. 
                    </div>
                  </div>                  
                 
                  <div class="panel-body"> <!-- DIV "panel body" - Insertar Contenidos Aquí" -->

                  @if(Session::has('alerta'))
                        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('alerta') !!}</em></div>
                  @endif
                    <h4><strong>Carga de Presupuesto Aprobado</h4></strong>
                    <h5>/ Parte 1 - Asignación de clave presupuestal</h5>

            {!! Form::open(['url' => 'planeacion/submodulo/carga_presupuesto_aprobado']) !!}

                    <div class="" role="form">                    
                      <div class="row">

                        <div class="col-sm-3">
                          <div class="form-group form-group-default required">
                            <label>No. de Solicitud<span class="help"></span></label>
                            {!!Form::text('num_sol', null, ['class' => 'form-control', 'placeholder' => 'CMAS-00001']) !!}
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

                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Unidad Responsable</label>
                            {!!Form::select('ur', $clave_ur, null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div>
                      </div> <!-- END ROW -->

                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Funcional</label>
                            {!!Form::select('fun', $clave_fun, null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div> 

                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Programa Presupuestal</label>
                            {!!Form::select('pp', $clave_pp, null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div> 
                      </div> <!-- END ROW -->


                     <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">COG Partida</label>
                            {!!Form::select('cog', $clave_cog, null,['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div> 

                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Tipo de Gasto</label>
                            {!!Form::select('gasto', $clave_gas, null, ['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div> 
                      </div> <!-- END ROW -->

                      <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Fuente de financiamiento</label>
                            {!!Form::select('ff', $clave_ff, null, ['class' => 'full-width', 'data-init-plugin' => 'select2'])  !!}
                          </div>
                        </div>

                        <div class="col-sm-8">                        
                          <div class="form-group form-group-default">
                            <label>Justificación</label>
                             {!!Form::text('just', null, ['class' => 'form-control required', 'placeholder' => 'Describa brevemente']) !!}                           
                          </div>
                        </div>
                      </div>

                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Techo Presupuestal</label>                              
                              {!!Form::number('techo_presup', null, ['class' => 'autonumeric form-control', 'step' => 'any', 'data-a-sign' => '$']) !!}
                            </div>
                          </div>
                        </div> <!-- END ROW -->

                      <div class="row">
                        <div class="col-sm-6">
                             <h5>/ Parte 2 - Asignación de monto presupuestal</h5>
                      </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Enero</label>
                              <span class="help">"Escriba la cantidad sin puntos decimales"</span>
                              {!!Form::number('ene', null, ['class' => 'autonumeric form-control price', 'step' => 'any', 'data-a-sign' => '$']) !!}
                            </div>
                          </div>

                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Febrero</label>
                              <span class="help">ej. "Cantidades en pesos"</span>
                              {!!Form::number('feb', null, ['class' => 'autonumeric form-control price', 'step' => 'any', 'data-a-sign' => '$']) !!}
                            </div>
                          </div>

                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Marzo</label>
                              <span class="help">ej. "Cantidades en pesos"</span>
                              {!!Form::number('mar', null, ['class' => 'autonumeric form-control price', 'step' => 'any', 'data-a-sign' => '$']) !!}
                            </div>
                          </div>

                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Abril</label>
                              <span class="help">ej. "Cantidades en pesos"</span>
                              {!!Form::number('abr', null, ['class' => 'autonumeric form-control price', 'step' => 'any', 'data-a-sign' => '$']) !!}
                            </div>
                          </div>                        
                        </div> <!-- END ROW -->

                        <div class="row">
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Mayo</label>
                              <span class="help">ej. "$1,000,000.00"</span>
                              {!!Form::number('may', null, ['class' => 'autonumeric form-control price', 'step' => 'any', 'data-a-sign' => '$']) !!}
                            </div>
                          </div>

                         <div class="col-sm-3">
                            <div class="form-group">
                              <label>Junio</label>
                              <span class="help">ej. "$1,000,000.00"</span>
                              {!!Form::number('jun', null, ['class' => 'autonumeric form-control price', 'step' => 'any', 'data-a-sign' => '$']) !!}
                            </div>
                          </div>

                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Julio</label>
                              <span class="help">ej. "$1,000,000.00"</span>
                              {!!Form::number('jul', null, ['class' => 'autonumeric form-control price', 'step' => 'any', 'data-a-sign' => '$']) !!}
                            </div>
                          </div>

                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Agosto</label>
                              <span class="help">ej. "$1,000,000.00"</span>
                              {!!Form::number('ago', null, ['class' => 'autonumeric form-control price', 'step' => 'any', 'data-a-sign' => '$']) !!}
                            </div>
                          </div>

                        </div> <!-- END ROW -->

                        <div class="row">
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Septiembre</label>
                              <span class="help">ej. "$1,000,000.00"</span>
                              {!!Form::number('sep', null, ['class' => 'autonumeric form-control price', 'step' => 'any', 'data-a-sign' => '$']) !!}
                            </div>
                          </div>

                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Octubre</label>
                              <span class="help">ej. "$1,000,000.00"</span>
                              {!!Form::number('oct', null, ['class' => 'autonumeric form-control price', 'step' => 'any', 'data-a-sign' => '$']) !!}
                            </div>
                          </div>

                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Noviembre</label>
                              <span class="help">ej. "$1,000,000.00"</span>
                              {!!Form::number('nov', null, ['class' => 'autonumeric form-control price', 'step' => 'any', 'data-a-sign' => '$']) !!}
                            </div>
                          </div>

                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Diciembre</label>
                              <span class="help">ej. "$1,000,000.00"</span>
                              {!!Form::number('dic', null, ['class' => 'autonumeric form-control price', 'step' => 'any', 'data-a-sign' => '$']) !!}
                            </div>
                          </div>
                        </div> <!-- END ROW -->

                        <br>

                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group form-group-default input-group disabled">
                            <label class="label-lg">Total Anual</label>
                              {!!Form::number('total', null, ['class' => 'autonumeric form-control', 'step' => 'any', 'data-a-sign' => '$', 'id' => 'totalPrice']) !!}
                            <span class="input-group-addon">MXN</span>
                          </div>
                        </div>
                      </div><!-- END ROW -->

                      <br>

                    {!!Form::submit('Guardar',['class' => 'btn btn-complete'])!!}


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
    <!-- END VENDOR JS -->

    <!-- BEGIN PAGE LEVEL JS -->
    <script src="{{ URL::asset('assets/js/form_elements.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->


<script>
// we used jQuery 'keyup' to trigger the computation as the user type
$('.price').keyup(function () {
 
    // initialize the sum (total price) to zero
    var sum = 0;
     
    // we use jQuery each() to loop through all the textbox with 'price' class
    // and compute the sum for each loop
    $('.price').each(function() {
        sum += Number($(this).val());
    });
     
    // set the computed value to 'totalPrice' textbox
    $('#totalPrice').val(sum.toFixed(2));
     
});
</script>


<script type="text/javascript"> 
      $('#price').live('keyup', function (event) {
        var value=$('#price').val();

      if(event.which >= 37 && event.which <= 40){
          event.preventDefault();
      }
      var newvalue=value.replace(/,/g, '');   
      var valuewithcomma=Number(newvalue).toLocaleString('en');   
      $('#price').val(valuewithcomma); 

      });
</script>
@stop
