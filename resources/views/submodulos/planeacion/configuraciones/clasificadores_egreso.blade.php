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
                                    <li> <a href="{{ url('/planeacion/submodulos/carga_presupuesto_aprobado') }}">15 / Carga del Decreto de Presupuesto aprobado</a></li>
                                </div>

                              </div> <!-- END DIV ROW -->
                            </div>
                          </ul>
                        </li>
                      </ul>
               
                </div> <!-- DIVS SUB-MENU -->
              </div> <!-- DIVS SUB-MENU -->

      <div class="page-content-wrapper ">

<!-- CHANGE 'content' HERE-->
             
<!-- START JUMBOTRON -->
          <div class="jumbotron" data-pages="parallax">
            <div class="container-fluid container-fixed-lg">
              <div class="inner">
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                  <li><a href="{{ url('/home') }}">Inicio</a></li>
                  <li><a href="{{ url('/planeacion') }}">Planeación y Programación</a>
                  <li><a href="#" class="active">Configuraciones</a>

                  </li>
                </ul>
                <!-- END BREADCRUMB -->
                <div class="container-md-height m-b-20">
                  <div class="row row-md-height">
                    <div class="col-lg-5 col-md-height col-md-6 col-top">
                      <!-- START PANEL -->
                      <div class="panel panel-transparent">
                        <div class="panel-heading">
                          <div class="panel-title">Configurador
                          </div>
                        </div>
                        <div class="panel-body">
                          <h3>Configurador de Clasificadores de Egreso</h3>
                          <p>El acceso a este módulo es restringido y únicamente deberá ingresar personal capacitado ya que las configuraciones de catálogos debe realizarse de manera cautelosa.</p>
                          <br>

                        </div>
                      </div>
                      <!-- END PANEL -->
                    </div>
                    <div class="col-lg-7 col-md-6 col-md-height col-middle bg-white">
                      <!-- START PANEL -->
                      <div class="full-height">
                        <div class="panel-body text-center">
                          <img class="image-responsive-height demo-mw-50" src="{{ URL::asset('assets/img/demo/progress.svg') }}" alt="Progress">
                        </div>
                      </div>
                      <!-- END PANEL -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- END JUMBOTRON -->

          <!-- INICIAN PANELES DE configurador -->


                   <!-- START CONTAINER FLUID -->
                  <div class="container-fluid container-fixed-lg">
                   
                    <!-- START PANEL -->
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <div class="panel-title">Configurador de clasificadores
                        </div>
                      </div>        

                      <div class="panel-body">                      
                        <div class="row">
                       
                          <div class="col-sm-12">
                            <h5>Elija las pestañas para cambiar de clasificador.Al finalizar, presione "Guardar" para guardar cada clasificador.</h5>
                            <br>
                            <br>
                            <div class="panel panel-transparent ">
                              <!-- Nav tabs -->
                              <ul class="nav nav-tabs nav-tabs-fillup" data-init-reponsive-tabs="dropdownfx">
                                <li class="active"><a data-toggle="tab" href="#slide1"><span>Administrativa</span></a>                                </li>
                                <li><a data-toggle="tab" href="#slide2"><span>Unidad Resp.</span></a></li>
                                <li><a data-toggle="tab" href="#slide3"><span>Funcional</span></a></li>
                                <li><a data-toggle="tab" href="#slide4"><span>Programa Presup.</span></a></li>
                                <li><a data-toggle="tab" href="#slide5"><span>Objeto del Gasto</span></a></li>
                                <li><a data-toggle="tab" href="#slide6"><span>Fuente de Financ.</span></a></li>
                                <li><a data-toggle="tab" href="#slide7"><span>Tipo de Gasto</span></a></li>
                              </ul>
                              <!-- Tab panes -->
                              <div class="tab-content">
                                <div class="tab-pane slide-left active" id="slide1">
                                  <div class="row column-seperation">
                                    <div class="col-md-6">
                                      <h3>
                                       <span class="semi-bold">1/ Administrativa</span>
                                      </h3>
                                        <div class="col-sm-8">
                                          <p>Su actual configuración es:</p>
                                          <div class="form-group form-group-default">
                                            <label>Clave Actual<span class="help"></span></label>
                                            <input type="text" class="form-control" value="31120 Entidades Paraestatales y Fideicomisos No Empresariales y No Financieros" disabled>
                                        </div>
                                        <br>
                                       </div>
                                    </div>
                                      <div class="col-sm-6">
                                       <form class="m-t-10" role="form">
                                       <h5>/ Edición de Claves</h5>
                                        <div class="form-group form-group-default form-group-default-select2">                                          
                                          <label class="">Claves disponibles:</label>
                                          <select class="full-width" data-placeholder="Select Country" data-init-plugin="select2">
                                            <optgroup label="31110 Gobierno Municipal">
                                              <option value="AK">31111 Órgano Ejecutivo Municipal (Ayuntamiento)</option>
                                              <option value="HI">31120 Entidades Paraestatales y Fideicomisos No Empresariales y No Financieros</option>
                                            </optgroup>
                                            <optgroup label="31200 Entidades Paramunicipales Empresariales No Financieras con Participacion Estatal Mayoritaria">
                                              <option value="CA">31210 Entidades Paramunicipales Empresariales No Financieras con Participación Estatal Mayoritaria</option>
                                              <option value="CA">31220 Fideicomisos Paramunicipales Empresariales No Financieros con Participación Estatal Mayoritaria</option>
                                            <optgroup label="32000 Entidades Paramunicipales Empresariales Financieras Monetarias con Participación Estatal Mayoritaria">
                                              <option value="CA">32210 Bancos de Inversión y Desarrollo</option>
                                              <option value="CA">32220 Bancos Comerciales</option>
                                              <option value="CA">32230 Otros Bancos</option>
                                              <option value="CA">32240 Fondos del Mercado de Dinero</option>
                                            </optgroup>
                                          </select>
                                        </div>
                                        <br><button class="btn btn-success show-notification" type="submit">Cambiar</button>
                                      </form>
                                      </div>

                                  </div>
                                </div>

                                <div class="tab-pane slide-left" id="slide2">
                                  <div class="row column-seperation">
                                    <div class="col-md-6">
                                      <h3>
                                       <span class="semi-bold">2/ Unidad Responsable</span>
                                      </h3>
                                        <div class="col-sm-8">
                                          <p>Su actual configuración es:</p>
                                          <div class="form-group form-group-default">
                                            <label>Clave Actual<span class="help"></span></label>
                                            <input type="text" class="form-control" value="161 CMAS" disabled>
                                        </div>
                                        <br>
                                       </div>
                                    </div>
                                      <div class="col-sm-6">
                                        <form>                     
                                        <h4>/ Edición de Claves </h4>     
                                        <p>Agregar o editar claves:</p>
                                        <div class="form-group form-group-default form-group-default-select2 required">
                                          <label class="">Unidad Responsable</label>
                                          <select class="full-width" data-placeholder="Select Country" data-init-plugin="select2">
                                            <optgroup label="16100 CMAS">
                                              <option value="AK">16110 Dirección de Administración</option>
                                              <option value="HI">16111 Departamento A</option>
                                              <option value="HI">16111 Departamento B</option>
                                            </optgroup>
                                            <optgroup label="Sub-categoría">
                                              <option value="CA">16120 Dirección de Operación</option>
                                              <option value="NV">16121 Departamento C</option>
                                              <option value="NV">16121 Departamento D</option>
                                              <option value="NV">16121 Departamento E</option>
                                            </optgroup>
                                          </select>
                                        </div>
                                          <br>
                                          <br>
                                           <div class="form-group">
                                            <button class="btn btn-success show-notification" type="submit">Cambiar</button>
                                           </div>
                                        </form>
                                      </div>
                                  </div>
                                </div>

                                <div class="tab-pane slide-left" id="slide3">
                                  <div class="row column-seperation">
                                    <div class="col-md-6">
                                      <h3>
                                       <span class="semi-bold">3/ Funcional</span>
                                      </h3>
                                        <div class="col-sm-8">
                                          <p>Su actual configuración es:</p>
                                          <div class="form-group form-group-default">
                                            <label>Clave Actual<span class="help"></span></label>
                                            <input type="text" class="form-control" value="31120 Entidades Paraestatales y Fideicomisos No Empresariales y No Financieros" disabled>
                                        </div>
                                        <br>
                                       </div>
                                    </div>
                                      <div class="col-sm-4">
                                        <form>             
                                        <h4>/ Editar de claves </h4>             
                                        <p>Cambiar la clave a:</p>
                                          <select class="cs-select cs-skin-slide" data-init-plugin="cs-select">
                                            <option value="sightseeing">30000 SECTOR PUBLICO MUNICIPAL</option>
                                            <option value="business">31000 SECTOR PUBLICO NO FINANCIERO</option>
                                            <option value="honeymoon">31100 GOBIERNO GENERAL MUNICIPAL</option>
                                            <option value="honeymoon">31110 GOBIERNO  MUNICIPAL</option>
                                          </select>
                                          <br>
                                          <br>
                                           <div class="form-group">
                                            <button class="btn btn-success show-notification" type="submit">Guardar</button>
                                           </div>
                                        </form>
                                      </div>
                                  </div>
                                </div>

                                <div class="tab-pane slide-left" id="slide4">
                                  <div class="row column-seperation">
                                    <div class="col-md-6">
                                      <h3>
                                       <span class="semi-bold">4/ Programa Presupuestario</span>
                                      </h3>
                                        <div class="col-sm-8">
                                          <p>Su actual configuración es:</p>
                                          <div class="form-group form-group-default">
                                            <label>Clave Actual<span class="help"></span></label>
                                            <input type="text" class="form-control" value="31120 Entidades Paraestatales y Fideicomisos No Empresariales y No Financieros" disabled>
                                        </div>
                                        <br>
                                       </div>
                                    </div>
                                      <div class="col-sm-4">
                                        <form>                          
                                        <p>Cambiar la clave a:</p>
                                          <select class="cs-select cs-skin-slide" data-init-plugin="cs-select">
                                            <option value="sightseeing">30000 SECTOR PUBLICO MUNICIPAL</option>
                                            <option value="business">31000 SECTOR PUBLICO NO FINANCIERO</option>
                                            <option value="honeymoon">31100 GOBIERNO GENERAL MUNICIPAL</option>
                                            <option value="honeymoon">31110 GOBIERNO  MUNICIPAL</option>
                                          </select>
                                          <br>
                                          <br>
                                           <div class="form-group">
                                            <button class="btn btn-success show-notification" type="submit">Guardar</button>
                                           </div>
                                        </form>
                                      </div>
                                  </div>
                                </div>

                                <div class="tab-pane slide-left" id="slide5">
                                  <div class="row column-seperation">
                                    <div class="col-md-6">
                                      <h3>
                                       <span class="semi-bold">5/ Objeto del Gasto</span>
                                      </h3>
                                        <div class="col-sm-8">
                                          <p>Su actual configuración es:</p>
                                          <div class="form-group form-group-default">
                                            <label>Clave Actual<span class="help"></span></label>
                                            <input type="text" class="form-control" value="31120 Entidades Paraestatales y Fideicomisos No Empresariales y No Financieros" disabled>
                                        </div>
                                        <br>
                                       </div>
                                    </div>
                                      <div class="col-sm-4">
                                        <form>                          
                                        <p>Cambiar la clave a:</p>
                                          <select class="cs-select cs-skin-slide" data-init-plugin="cs-select">
                                            <option value="sightseeing">30000 SECTOR PUBLICO MUNICIPAL</option>
                                            <option value="business">31000 SECTOR PUBLICO NO FINANCIERO</option>
                                            <option value="honeymoon">31100 GOBIERNO GENERAL MUNICIPAL</option>
                                            <option value="honeymoon">31110 GOBIERNO  MUNICIPAL</option>
                                          </select>
                                          <br>
                                          <br>
                                           <div class="form-group">
                                            <button class="btn btn-success show-notification" type="submit">Guardar</button>
                                           </div>
                                        </form>
                                      </div>
                                  </div>
                                </div>

                                <div class="tab-pane slide-left" id="slide6">
                                  <div class="row column-seperation">
                                    <div class="col-md-6">
                                      <h3>
                                       <span class="semi-bold">6/ Fuente de Financiamiento</span>
                                      </h3>
                                        <div class="col-sm-8">
                                          <p>Su actual configuración es:</p>
                                          <div class="form-group form-group-default">
                                            <label>Clave Actual<span class="help"></span></label>
                                            <input type="text" class="form-control" value="6 Recursos Estatales" disabled>
                                        </div>
                                        <br>
                                       </div>
                                    </div>
                                      <div class="col-sm-4">
                                        <form>                     
                                        <h4>/ Edición de Claves </h4>     
                                        <p>Agregar o editar claves:</p>
                                          <select class="cs-select cs-skin-slide" data-init-plugin="cs-select">
                                            <option value="sightseeing">1 Recursos Fiscales</option>
                                            <option value="business">2 Financiamientos internos</option>
                                            <option value="honeymoon">3 Financiamientos externos</option>
                                            <option value="honeymoon">4 Ingresos propios</option>
                                            <option value="business">5 Recursos Federales</option>
                                            <option value="honeymoon">6 Recursos Estatales</option>
                                            <option value="honeymoon">7 Otros recursos</option>
                                          </select>
                                          <br>
                                          <br>
                                           <div class="form-group">
                                            <button class="btn btn-success show-notification" type="submit">Agregar</button>
                                           </div>
                                        </form>
                                      </div>
                                  </div>
                                </div>

                                <div class="tab-pane slide-left" id="slide7">
                                  <div class="row column-seperation">
                                    <div class="col-md-6">
                                      <h3>
                                       <span class="semi-bold">7/ Tipo de Gasto</span>
                                      </h3>
                                        <div class="col-sm-8">
                                          <p>Su actual configuración es:</p>
                                          <div class="form-group form-group-default">
                                            <label>Clave Actual<span class="help"></span></label>
                                            <input type="text" class="form-control" value="1 Gasto Corriente" disabled>
                                        </div>
                                        <br>
                                       </div>
                                    </div>
                                      <div class="col-sm-6">
                                        <form>                     
                                        <h4>/ Edición de Claves </h4>     
                                        <p>Agregar o editar claves:</p>
                                          <select class="cs-select cs-skin-slide" data-init-plugin="cs-select">
                                            <option value="sightseeing">1 Gasto Corriente</option>
                                            <option value="business">2 Gasto de Capital</option>
                                            <option value="honeymoon">3 Amortización de la deuda y disminución de pasivos</option>
                                          </select>
                                          <br>
                                          <br>
                                           <div class="form-group">
                                            <button class="btn btn-success show-notification" type="submit">Cambiar</button>
                                           </div>
                                        </form>
                                      </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div> <!-- END CONFIGURADOR -->

                        </div> <!-- END ROW -->
                      </div>
                    </div>
                    <!-- END PANEL -->
                  </div>
                  <!-- END CONTAINER FLUID -->


                                     <!-- START CONTAINER FLUID -->
                  <div class="container-fluid container-fixed-lg">
                   



                    <!-- START PANEL -->
                    <div class="panel panel-default">
                      <div class="panel-heading">
                       <div class="panel-title">Clasificación Funciona Fun
                        </div>

                        
                       




                      </div>                      
                      <div class="panel-body">                      
                        <div class="row">

                          <div class="col-sm-4">
                              <p>Su actual configuración es:</p>
                              <div class="form-group form-group-default">
                              <label>Clave Actual<span class="help"></span></label>
                              <input type="text" class="form-control" value="30000 SECTOR PUBLICO MUNICIPAL" disabled>
                            </div>
                            <br>
                          </div>
                        
                        <div class="col-sm-4">
                        <form>                          
                          <p>Cambiar la clave a:</p>
                            <select class="cs-select cs-skin-slide" data-init-plugin="cs-select">
                              <option value="sightseeing">30000 SECTOR PUBLICO MUNICIPAL</option>
                              <option value="business">31000 SECTOR PUBLICO NO FINANCIERO</option>
                              <option value="honeymoon">31100 GOBIERNO GENERAL MUNICIPAL</option>
                              <option value="honeymoon">31110 GOBIERNO  MUNICIPAL</option>
                            </select>
                            <br>
                            <br>
                            <div class="col-sm-3">
                             <div class="form-group">
                              <button class="btn btn-success show-notification" type="submit">Guardar</button>
                             </div>
                            </div>
                        </form>
                        </div>


                          <div class="col-sm-4">
                            <h5>
                      Simple dropdowns
                    </h5>
                            <p>These are highly customizable dropdowns that come with search option for use to search</p>
                            <form role="form">
                              <div class="form-group ">
                                <select class="full-width" data-init-plugin="select2">
                                  <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                  </optgroup>
                                  <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                  </optgroup>
                                  <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                  </optgroup>
                                  <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                  </optgroup>
                                  <optgroup label="Eastern Time Zone">
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">West Virginia</option>
                                  </optgroup>
                                </select>
                              </div>
                            </form>

                          </div>

                          <div class="col-sm-4">
                            <h5>
                      Multi select
                    </h5>
                            <p>Fancy multiselect option box. Customized for the anypreference</p>
                            <br>
                            <select id="multi" class="full-width" multiple>
                              <option value="Jim">Jim</option>
                              <option value="John">John</option>
                              <option value="Lucy">Lucy</option>
                            </select>
                            <form class="m-t-10" role="form">
                              <div class="form-group form-group-default form-group-default-select2">
                                <label>Project</label>
                                <select class=" full-width" data-init-plugin="select2" multiple>
                                  <option value="Jim">Jim</option>
                                  <option value="John">John</option>
                                  <option value="Lucy">Lucy</option>
                                </select>
                              </div>
                            </form>
                          </div>
                        </div>

                      </div>
                    </div>
                    <!-- END PANEL -->
                  </div>
                  <!-- END CONTAINER FLUID -->

          <!-- TERMINAN PANELES DE configurador -->
                
<!-- STOP CHANGING 'content' HERE-->

      </div>
      <!-- TERMINA page container -->

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

@stop