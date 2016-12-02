@extends('layouts.app')

@section('content')

@yield('scripts')


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
                    <h5>Parte 1 - Asignación de clave presupuestal</h5>

                    <form class="" role="form">
                    
                      <div class="row">

                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Unidad Responsable</label>
                            <select class="full-width" data-placeholder="Select Country" data-init-plugin="select2">
                              <optgroup label="Categoría">
                                <option value="AK">1105 Registro Civil</option>
                                <option value="HI">1104 Oficialía de partes</option>
                              </optgroup>
                              <optgroup label="Sub-Categoría">
                                <option value="CA">1105 Registro Civil</option>
                                <option value="NV">1104 Oficialía de partes</option>
                              </optgroup>
                            </select>
                          </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="form-group form-group-default">
                            <label>No. de Solicitud<span class="help">(automático)</span></label>
                            <input type="text" class="form-control" value="ABC-0302326" disabled>
                          </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="form-group form-group-default input-group">
                           <label>Fecha de Solicitud<span class="help">(automático)</span></label>
                            <input type="email" class="form-control" placeholder="11/06/2016" id="datepicker-component2" disabled>
                              <span class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </span>
                          </div>
                        </div>

                      </div> <!-- END ROW -->


                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Función</label>
                            <select class="full-width" data-placeholder="Select Country" data-init-plugin="select2">
                              <optgroup label="Categoría">
                                <option value="AK">1105 </option>
                                <option value="HI">1104 </option>
                              </optgroup>
                              <optgroup label="Sub-Categoría">
                                <option value="CA">1105 </option>
                                <option value="NV">1104 </option>
                              </optgroup>
                            </select>
                          </div>
                        </div> 

                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Programa</label>
                            <select class="full-width" data-placeholder="Select Country" data-init-plugin="select2">
                              <optgroup label="Categoría">
                                <option value="AK">1105 </option>
                                <option value="HI">1104 </option>
                              </optgroup>
                              <optgroup label="Sub-Categoría">
                                <option value="CA">1105 </option>
                                <option value="NV">1104 </option>
                              </optgroup>
                            </select>
                          </div>
                        </div> 
                      </div> <!-- END ROW -->


                     <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">COG Partida</label>
                            <select class="full-width" data-placeholder="Select Country" data-init-plugin="select2">
                              <optgroup label="Categoría">
                                <option value="AK">1105 </option>
                                <option value="HI">1104 </option>
                              </optgroup>
                              <optgroup label="Sub-Categoría">
                                <option value="CA">1105 </option>
                                <option value="NV">1104 </option>
                              </optgroup>
                            </select>
                          </div>
                        </div> 

                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Tipo de Gasto</label>
                            <select class="full-width" data-placeholder="Select Country" data-init-plugin="select2">
                              <optgroup label="Categoría">
                                <option value="AK">1105 </option>
                                <option value="HI">1104 </option>
                              </optgroup>
                              <optgroup label="Sub-Categoría">
                                <option value="CA">1105 </option>
                                <option value="NV">1104 </option>
                              </optgroup>
                            </select>
                          </div>
                        </div> 
                      </div> <!-- END ROW -->

                      <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label class="">Fuente de financiamiento</label>
                            <select class="full-width" data-placeholder="Select Country" data-init-plugin="select2">
                              <optgroup label="Categoría">
                                <option value="AK">1105 </option>
                                <option value="HI">1104 </option>
                              </optgroup>
                              <optgroup label="Sub-Categoría">
                                <option value="CA">1105 </option>
                                <option value="NV">1104 </option>
                              </optgroup>
                            </select>
                          </div>
                        </div>

                        <div class="col-sm-8">                        
                          <div class="form-group form-group-default">
                            <label>Justificación</label>
                             <textarea rows="10" class="form-control" id="name" placeholder="Describa brevemente">                               
                             </textarea>
                          </div>
                        </div>
                      </div>

                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Techo Presupuestal</label>
                              <span class="help">ej. "$1,000,000.00"</span>
                              <input type="text" data-a-sign="$ " class="autonumeric form-control required">
                            </div>
                          </div>
                        </div> <!-- END ROW -->

                      <div class="row">
                        <div class="col-sm-6">
                             <h5>Parte 2 - Asignación de monto presupuestal</h5>
                      </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Enero</label>
                              <span class="help">ej. "$1,000,000.00"</span>
                              <input type="text" data-a-sign="$ " class="autonumeric form-control">
                            </div>
                          </div>

                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Febrero</label>
                              <span class="help">ej. "$1,000,000.00"</span>
                              <input type="text" data-a-sign="$ " class="autonumeric form-control">
                            </div>
                          </div>

                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Marzo</label>
                              <span class="help">ej. "$1,000,000.00"</span>
                              <input type="text" data-a-sign="$ " class="autonumeric form-control">
                            </div>
                          </div>

                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Abril</label>
                              <span class="help">ej. "$1,000,000.00"</span>
                              <input type="text" data-a-sign="$ " class="autonumeric form-control">
                            </div>
                          </div>                        
                        </div> <!-- END ROW -->

                        <div class="row">
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Mayo</label>
                              <span class="help">ej. "$1,000,000.00"</span>
                              <input type="text" data-a-sign="$ " class="autonumeric form-control">
                            </div>
                          </div>

                         <div class="col-sm-3">
                            <div class="form-group">
                              <label>Junio</label>
                              <span class="help">ej. "$1,000,000.00"</span>
                              <input type="text" data-a-sign="$ " class="autonumeric form-control">
                            </div>
                          </div>

                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Julio</label>
                              <span class="help">ej. "$1,000,000.00"</span>
                              <input type="text" data-a-sign="$ " class="autonumeric form-control">
                            </div>
                          </div>

                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Agosto</label>
                              <span class="help">ej. "$1,000,000.00"</span>
                              <input type="text" data-a-sign="$ " class="autonumeric form-control">
                            </div>
                          </div>

                        </div> <!-- END ROW -->

                        <div class="row">
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Septiembre</label>
                              <span class="help">ej. "$1,000,000.00"</span>
                              <input type="text" data-a-sign="$ " class="autonumeric form-control">
                            </div>
                          </div>

                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Octubre</label>
                              <span class="help">ej. "$1,000,000.00"</span>
                              <input type="text" data-a-sign="$ " class="autonumeric form-control">
                            </div>
                          </div>

                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Noviembre</label>
                              <span class="help">ej. "$1,000,000.00"</span>
                              <input type="text" data-a-sign="$ " class="autonumeric form-control">
                            </div>
                          </div>

                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Diciembre</label>
                              <span class="help">ej. "$1,000,000.00"</span>
                              <input type="text" data-a-sign="$ " class="autonumeric form-control">
                            </div>
                          </div>
                        </div> <!-- END ROW -->

                        <br>

                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group form-group-default input-group">
                            <label class="label-lg">Total Anual</label>
                            <input type="text" class="form-control input-lg" placeholder="$">
                            <span class="input-group-addon">MXN</span>
                          </div>
                        </div>
                      </div><!-- END ROW -->

                      <br>

                    <div class="row">
                      <div class="col-sm-3">
                       <div class="form-group">
                        <button class="btn btn-success show-notification" type="submit">Guardar Temporalmente</button>
                       </div>
                      </div>
                    </div>




<div class="col-md-4">
                    <h5>Simple Date
              <span class="semi-bold">Picker</span>
            </h5>
                    <p>Date picker is powered by boostrap date picker, this is customized in way that it suites our theme and design, Have a look!</p>
                    <br>
                    <div id="datepicker-component" class="input-group date col-sm-8">
                      <input type="text" class="form-control"><span class="input-group-addon"><i
                class="fa fa-calendar"></i></span>
                    </div>
                    <br>
                    <div class="form-group form-group-default input-group col-sm-10">
                      <label>Check In</label>
                      <input type="email" class="form-control" placeholder="Pick a date" id="datepicker-component2">
                      <span class="input-group-addon">
                                          <i class="fa fa-calendar"></i>
                                        </span>
                    </div></div>



                    </form> <!-- END FORM --> 
                  </div> <!-- DIV "panel body" - NO BORRAR" -->
                </div> <!-- AQUI TERMINA EL PANEL PRINCIPAL -->


<!-- STOP CHANGING 'content' HERE-->

            </div> <!-- DIV "col-md-12" - NO BORRAR" -->  
          </div> <!-- DIV "row" - NO BORRAR" -->


      </div>
      <!-- TERMINA page container / DIV DE ESPACIO PARA FOOTER -->

<!-- TERMINA CONTENIDO / LA SECCIÓN SE QUEDA ABIERTA PARA CERRAR footer-->


@endsection


