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
                            <li><a class="active">Soporte Técnico</a>
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
                          <div class="panel-title">Herramientas
                          </div>
                        </div>
                        <div class="panel-body">
                          <h3>Soporte Técnico</h3>
                          <p>En esta sección podrá encontrar la lista de consultas y reportes definidos previamente y que son de uso constante para esta área.</p>
                          <br>
                          <p>Las herramientas de consultas y reportes están disponibles únicamente para áreas gerenciales o jefaturas.</p>
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
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg">
            <!-- START PANEL -->
            <div class="panel panel-transparent">
              <div class="panel-heading">
                <div class="panel-title">Los campos con * son requeridos
                </div>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-sm-10">
                    <h4>El Área de Soporte Técnico responderá su solicitud en un periodo de 2 hrs.</h4>
                    <p>Puede utilizar la siguiente forma para enviar una solicitud normal y el chat para resolver problemas urgentes.
                    </p>
                    <br>                    
                    <form id="form-work" class="form-horizontal" role="form" autocomplete="off">
                      <div class="form-group">
                        <label for="fname" class="col-sm-3 control-label">Nombre</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="fname" placeholder="Nombre completo" name="name" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Urgencia</label>
                        <div class="col-sm-9">
                          <div class="radio radio-success">
                            <input type="radio" value="male" name="optionyes" id="male">
                            <label for="male">Urgente</label>
                            <input type="radio" checked="checked" value="female" name="optionyes" id="female">
                            <label for="female">Normal</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Área o Departamento</label>
                        <div class="col-sm-9">
                          <p>Indique el área y sub-área a la que pertenece</p>
                          <p class="hint-text small">Para resolver el problema rápidamente, es necesario que indique el sub-área específica </p>
                          <div class="row">
                            <div class="col-sm-5">
                              <input type="text" placeholder="Área" class="form-control" required>
                            </div>
                            <div class="col-sm-5 sm-m-t-10">
                              <input type="text" placeholder="Sub-área" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="position" class="col-sm-3 control-label">Asunto</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="position" placeholder="Tipo de problema" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Descripción del Problema</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" id="name" placeholder="Descripción Breve"></textarea>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-sm-3">
                          <p>Su solicitud se enviará al Depto. de Soporte Técnico.</p>
                        </div>
                        <div class="col-sm-9">
                          <button class="btn btn-success" type="submit">Enviar</button>
                          <button class="btn btn-default"><i class="pg-close"></i> Limpiar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

                  <!-- TERMINA TABLA DE CONSULTAS -->


                </div> <!-- AQUI TERMINA EL PANEL PRINCIPAL -->

<!-- STOP CHANGING 'content' HERE-->

          </div> <!-- DIV "row" - NO BORRAR" -->
        </div> <!-- DIV "container-fluid" - NO BORRAR" -->


      </div>
      <!-- TERMINA page container / DIV DE ESPACIO PARA FOOTER -->

<!-- TERMINA CONTENIDO / LA SECCIÓN SE QUEDA ABIERTA PARA CERRAR footer-->


@endsection
