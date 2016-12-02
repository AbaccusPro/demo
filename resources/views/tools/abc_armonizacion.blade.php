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
                          <span class="sub-menu-heading bold">Esquemas</span><span class="arrow"></span>
                        </a>
                          <ul class="mega">
                            <div class="container">
                              <div class="row">
                                <div class="col-md-3 ">
                                  <div class="sub-menu-heading bold">Features UI</div>
                                  <ul class="sub-menu">
                                    <li> <a href="{{ url('/home') }}"> Typography </a> </li>
                                    <li> <a href="#"> Messages & Notifications </a> </li>
                                    <li> <a href="#"> Notifications </a> </li>
                                    <li> <a href="#">Icons</a> </li>
                                    <li> <a href="#">Buttons</a> </li>
                                    <li> <a href="#"> Tabs & Accordions </a> </li>
                                    <li> <a href="#">Sliders</a> </li>
                                    <li class="active"> <a href="#">Group list </a> </li>
                                  </ul>
                                </div>
                                <div class="col-md-3">
                                  <div class="sub-menu-heading bold"> UI Elements</div>
                                  <ul class="sub-menu">
                                    <li> <a href="#"> Typography </a> </li>
                                    <li> <a href="#"> Messages & Notifications </a> </li>
                                    <li> <a href="#"> Notifications </a> </li>
                                    <li> <a href="#">Icons</a> </li>
                                    <li> <a href="#">Buttons</a> </li>
                                    <li> <a href="#"> Tabs & Accordions </a> </li>
                                    <li> <a href="#">Sliders</a> </li>
                                    <li class="active"> <a href="#">Group list </a> </li>
                                  </ul>
                                </div>
                                <div class="col-md-3">
                                  <div class="sub-menu-heading bold">Apps</div>
                                  <ul class="sub-menu">
                                    <li> <a href="#">Social </a> </li>
                                    <li> <a href="#">Email </a> </li>
                                    <li> <a href="#">Calendar </a> </li>
                                  </ul>
                                  <div class="sub-menu-heading bold"> Forms</div>
                                  <ul class="sub-menu">
                                    <li> <a href="#">Form Elements </a> </li>
                                    <li> <a href="#">Form Layouts</a> </li>
                                  </ul>
                                </div>
                                <div class="col-md-3">
                                  <div class="sub-menu-heading bold">Extra</div>
                                  <ul class="sub-menu">
                                    <li> <a href="#"> Invoice </a> </li>
                                    <li> <a href="#">Login </a> </li>
                                    <li> <a href="#">Register </a> </li>
                                    <li> <a href="#">Gallery</a> </li>
                                    <li> <a href="#">Timeline</a> </li>
                                  </ul>
                                </div>
                              </div>
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
                  <li>
                    <a href="{{ url('/home') }}">Inicio</a>
                  </li>
                  <li><a href="#" class="active">El abc de armonización contable</a>
                  </li>
                </ul>
                <!-- END BREADCRUMB -->
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
                          <h3>El abc de armonización contable.</h3>
                          <p>En esta sección podrá descargar y visualizar la integración de módulos del software de armonización contable y cómo se relacionan de manera global, con la finalidad de tener una mejor comprensión de los procesos que involucran la armonización contable en su organización.</p>
                          <br>

                        </div>
                      </div>
                      <!-- END PANEL -->
                    </div>
                    <div class="col-lg-7 col-md-6 col-md-height col-middle">
                      <!-- START PANEL -->

                      <!-- END PANEL -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END JUMBOTRON -->


<!-- STOP CHANGING 'content' HERE-->

      </div>
      <!-- TERMINA page container -->

<!-- TERMINA CONTENIDO / LA SECCIÓN SE QUEDA ABIERTA PARA CERRAR footer-->

@endsection