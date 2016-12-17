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
                            <li><a href="{{ url('/bienes') }}">Bienes</a>
                            <li><a class="active">Almacén</a>
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
                          <div class="panel-title">Sub-Módulo
                          </div>
                        </div>
                        <div class="panel-body">
                          <h3>Almacén</h3>
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
          <div class="container-fluid container-fixed-lg">
            <div class="row">
              <div class="col-md-12">


                <!-- INICIA PANEL BLANCO -->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="panel-title">
                      Escribir una descripción aquí. 
                    </div>
                  </div>
                  <div class="panel-body"> <!-- DIV "panel body" - Insertar Contenidos Aquí" -->
                    <h3>1/ Actividades</h3>

                  <!-- INICIA TABLA DE CONSULTAS -->
                    <div class="table-responsive">
                      <table class="table table-hover table-condensed" id="condensedTable">
                        <thead>
                          <tr>
                            <th style="width:25%">Consulta</th>
                            <th style="width:25%">Tipo</th>
                            <th style="width:25%">Área</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="v-align-middle semi-bold"><a href="{{ url('bienes/submodulo/almacen/consulta_inventario_consumo') }}">1. Consulta de existencias</a></td>
                            <td class="v-align-middle">Básica</td>
                            <td class="v-align-middle semi-bold">Almacén</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold"><a href="{{ url('bienes/submodulo/almacen/entrada_inventario') }}">2. Recepción e inventario</a></td>
                            <td class="v-align-middle">Básica</td>
                            <td class="v-align-middle semi-bold">Almacén</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold"><a href="{{ url('bienes/submodulo/almacen/suministro_bienes') }}">3. Suministro de bienes</a></td>
                            <td class="v-align-middle">Básica</td>
                            <td class="v-align-middle semi-bold">Almacén</td>
                          </tr>
                          <tr>
                            <td class="v-align-middle semi-bold"><a href="{{ url('bienes/submodulo/almacen/consulta_inventario_consumo') }}">4. Consulta de Inventario</a></td>
                            <td class="v-align-middle">Básica</td>
                            <td class="v-align-middle semi-bold">Almacén</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  <!-- TERMINA TABLA DE CONSULTAS -->

                  </div> <!-- DIV "panel body" - NO BORRAR" -->
                </div> <!-- AQUI TERMINA EL PANEL PRINCIPAL -->



<!-- STOP CHANGING 'content' HERE-->

            </div> <!-- DIV "col-md-12" - NO BORRAR" -->  
          </div> <!-- DIV "row" - NO BORRAR" -->
        </div> <!-- DIV "container-fluid" - NO BORRAR" -->


      </div>
      <!-- TERMINA page container / DIV DE ESPACIO PARA FOOTER -->

<!-- TERMINA CONTENIDO / LA SECCIÓN SE QUEDA ABIERTA PARA CERRAR footer-->


@endsection
