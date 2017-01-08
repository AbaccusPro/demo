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
                            <li><a class="active">Tutoriales</a>
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


<!-- CHANGE 'content' HERE-->
             
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
                          <h3>Tutoriales</h3>
                          <p>En esta sección podrá ver los videos relacionados al funcionamiento de la plataforma, categorizados por módulo y sub-módulo.</p>
                          <br>Podrá revisar cómo realizar algunas de las solitudes más complejas del proceso de armonización contable.
                          <br>

                        </div>
                      </div>
                      <!-- END PANEL -->
                    </div>
                    <div class="col-lg-7 col-md-6 col-md-height col-middle ">
                      <!-- START PANEL -->
                      <div class="full-height">
                        <div class="panel-body text-center">
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

          <!-- INICIAN PANELES DE sub-modulos -->

              <div class="panel-body">

                <div class="row">
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-important" ><li class="fa fa-play-circle"></li> Video</span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">a/ </span>ABC de Armonización Contable</h2>
                        <p>Videos relacionados a conceptos básicos de armonización contable.<a a href="#"><br>Ver videos >></a></p>
                      </div>
                    </div>                    
                  </div>

                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-important" ><li class="fa fa-play-circle"></li> Video</span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">b/ </span>Procesos</h2>
                        <p>Videos relacionados a los procesos básicos de la plataforma y cómo se realiza la integración de módulos.<a a href="#"><br>Ver videos >></a></p>
                      </div>
                    </div>                    
                  </div>

                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-important" ><li class="fa fa-play-circle"></li> Video</span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">c/ </span>Plataforma</h2>
                        <p>Videos relacionados al funcionamiento básico de la plataforma y la navegación en la misma.<a a href="#"><br>Ver videos >></a></p>
                      </div>
                    </div>                    
                  </div>
                </div> <!-- END ROW -->

                <hr><br>
        
                <div class="row">    
                  <div class="col-md-4">
                    <div class="panel panel-default bg-success-lighter">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-important" ><li class="fa fa-play-circle"></li> Video</span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">1/ </span>Planeación</h2>
                        <p>Videos del módulo de Planeación y sus respectivos sub-módulos.<a a href="tutoriales/videos/planeacion"><br>Ver videos >></a></p>
                      </div>
                    </div>                    
                  </div>

                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-important" ><li class="fa fa-play-circle"></li> Video</span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">2/ </span>Presupuesto</h2>
                        <p>Videos del módulo de Presupuesto y sus respectivos sub-módulos.<a a href="#"><br>Ver videos >></a></p>
                      </div>
                    </div>                    
                  </div>

                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-important" ><li class="fa fa-play-circle"></li> Video</span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">3/ </span>Contabilidad</h2>
                        <p>Videos del módulo de Contabilidad y sus respectivos sub-módulos.<a a href="#"><br>Ver videos >></a></p>
                      </div>
                    </div>                    
                  </div>
                </div> <!-- END ROW -->

                <div class="row">    
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-important" ><li class="fa fa-play-circle"></li> Video</span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">4/ </span>Ingresos</h2>
                        <p>Videos del módulo de Ingresos y sus respectivos sub-módulos.<a a href="tutoriales/videos/planeacion"><br>Ver videos >></a></p>
                      </div>
                    </div>                    
                  </div>

                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-important" ><li class="fa fa-play-circle"></li> Video</span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">5/ </span>Tesorería</h2>
                        <p>Videos del módulo de Tesorería y sus respectivos sub-módulos.<a a href="#"><br>Ver videos >></a></p>
                      </div>
                    </div>                    
                  </div>

                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-important" ><li class="fa fa-play-circle"></li> Video</span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">6/ </span>Recursos Humanos</h2>
                        <p>Videos del módulo de Recursos Humanos y sus respectivos sub-módulos.<a a href="#"><br>Ver videos >></a></p>
                      </div>
                    </div>                    
                  </div>
                </div> <!-- END ROW -->


                <div class="row">    
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-important" ><li class="fa fa-play-circle"></li> Video</span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">7/ </span>Deuda Pública</h2>
                        <p>Videos del módulo de Deuda Pública y sus respectivos sub-módulos.<a a href="tutoriales/videos/planeacion"><br>Ver videos >></a></p>
                      </div>
                    </div>                    
                  </div>

                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-important" ><li class="fa fa-play-circle"></li> Video</span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">8/ </span>Bienes</h2>
                        <p>Videos del módulo de Bienes y sus respectivos sub-módulos.<a a href="#"><br>Ver videos >></a></p>
                      </div>
                    </div>                    
                  </div>

                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-important" ><li class="fa fa-play-circle"></li> Video</span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">9/ </span>Obra Pública</h2>
                        <p>Videos del módulo de Obra Pública y sus respectivos sub-módulos.<a a href="#"><br>Ver videos >></a></p>
                      </div>
                    </div>                    
                  </div>
                </div> <!-- END ROW -->


          <!-- TERMINAN PANELES DE sub-modulos -->
                
              </div> <!-- END panel-body -->

<!-- STOP CHANGING 'content' HERE-->

      </div>
      <!-- TERMINA page container -->

<!-- TERMINA CONTENIDO / LA SECCIÓN SE QUEDA ABIERTA PARA CERRAR footer-->
@endsection