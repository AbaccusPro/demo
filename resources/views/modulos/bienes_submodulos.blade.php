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

                                <div class="col-md-3 " >
                                  <div class="sub-menu-heading bold">Gestión de Bienes</div>
                                  <ul class="sub-menu">
                                    <li ><a href="#">1/ Programa anual de adquisiciones</a></li>
                                    <li ><a href="#">4/ Servicios generales</a></li>
                                    <li ><a href="#">5/ Almacén</a></li>
                                    <li ><a href="#">6/ Adquisiciones</a></li>                                   
                                  </ul>
                                </div>

                                <div class="col-md-3 ">
                                <div class="sub-menu-heading bold">Patrimonio</div>
                                  <ul class="sub-menu">
                                    <li ><a href="#">1/ Registro y control</a></li>
                                    <li ><a href="#">2/ Inventarios / bienes muebles e inmuebles </a></li>
                                    <li ><a href="#">3/ Administración de almacenes e inventarios</a></li>
                                    <li ><a href="#">4/ Control Vehicular</a></li>
                                    <li ><a href="#">5/ Resguardos</a></li>
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

<!-- CHANGE 'content' HERE-->
             
<!-- START JUMBOTRON -->
          <div class="jumbotron" data-pages="parallax">
            <div class="container-fluid container-fixed-lg">
              <div class="inner">
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                  <li><a href="{{ url('/home') }}">Inicio</a></li>
                  <li><a href="{{ url('/bienes') }}">Bienes y Patrimonio</a>
                  <li><a href="#" class="active">Submodulos</a>

                  </li>
                </ul>
                <!-- END BREADCRUMB -->
                <div class="container-md-height m-b-20">
                  <div class="row row-md-height">
                    <div class="col-lg-5 col-md-height col-md-6 col-top">
                      <!-- START PANEL -->
                      <div class="panel panel-transparent">
                        <div class="panel-heading">
                          <div class="panel-title">Sub-Módulos
                          </div>
                        </div>
                        <div class="panel-body">
                          <h3>Sub-Módulos de Bienes y Patrimonio</h3>
                          <p>En esta sección podrá encontrar los sub-módulos que le permitirán realizar las actividades relacionadas con su área.</p>
                          <br>

                        </div>
                      </div>
                      <!-- END PANEL -->
                    </div>
                    <div class="col-lg-7 col-md-6 col-md-height col-middle">
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
                        </div><span class="label label-info" ><li class="fa fa-cube"></li> Submódulo / Bienes </span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">1/ </span>Programa anual de adquisiciones</h2>
                        <p>Formular los requerimientos de bienes y servicios a contratar y las adecuaciones a los programas anuales definidos .<a a href="#"><br>Ir al sub-módulo >></a></p>
                      </div>
                    </div>                    
                  </div>

                  <div class="col-md-4">
                    <div class="panel panel-default bg-success-lighter">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-success" ><li class="fa fa-cube"></li> Submódulo / Bienes </span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">2/ </span>Adquisiciones</h2>
                        <p>Atención a las áreas que de acuerdo a sus necesidades solicitan la adquisición, contratación de bienes, arrendamientos.<a a href="{{ url('bienes/submodulo/adquisiciones')  }}"><br>Ir al sub-módulo >></a></p>
                      </div>
                    </div>                    
                  </div>

                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-info" ><li class="fa fa-cube"></li> Submódulo / Bienes </span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">3/ </span>Servicios generales</h2>
                        <p>Atención a las áreas que requieren prestación de servicios.<a a href="#"><br>Ir al sub-módulo >></a></p>
                      </div>
                    </div>                    
                  </div>
                </div> <!-- END ROW -->

                <div class="row">    
                  <div class="col-md-4">
                    <div class="panel panel-default bg-success-lighter">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-success" ><li class="fa fa-cube"></li> Submódulo / Bienes </span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">4/ </span>Almacén</h2>
                        <p>Abastecimiento de bienes y servicios.<a a href="{{ url('bienes/submodulo/almacen') }}"><br>Ir al sub-módulo >></a></p>
                      </div>
                    </div>                    
                  </div>

                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-info" ><li class="fa fa-cube"></li> Submódulo / Patrimonio </span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">5/ </span>Patrimonio</h2>
                        <p>La hacienda pública / patrimonio corresponde a los activos netos que se entienden como la porción residual de los activos del ente público.<a a href="#"><br>Ir al sub-módulo >></a></p>
                      </div>
                    </div>                    
                  </div>


                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-info" ><li class="fa fa-cube"></li> Submódulo / Patrimonio </span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">6/ </span>Registro y control</h2>
                        <p>Según Norma de Reglas Específicas del Registro y Valoración del Patrimonio.<a a href="#"><br>Ir al sub-módulo >></a></p>
                      </div>
                    </div>                    
                  </div>
                </div> <!-- END ROW -->

                <div class="row">
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-info" ><li class="fa fa-cube"></li> Submódulo / Patrimonio </span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">7/ </span>Inventarios / bienes muebles e inmuebles</h2>
                        <p>Registro de las existencias identificándolo por cuenta y subcuenta, cantidad, unidad de medida, costo unitario y monto.<a a href="#"><br>Ir al sub-módulo >></a></p>
                      </div>
                    </div>                    
                  </div>


                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-info" ><li class="fa fa-cube"></li> Submódulo / Patrimonio </span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">8/ </span>Administración de almacenes e inventarios</h2>
                        <p>Gestión de la existencia de materiales y suministros de consumo para el desempeño de las actividades del ente público.<a a href="#"><br>Ir al sub-módulo >></a></p>
                      </div>
                    </div>                    
                  </div>

                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-info" ><li class="fa fa-cube"></li> Submódulo / Patrimonio </span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">9/ </span>Control Vehicular</h2>
                        <p>Regular el uso de los vehículos propiedad del Organismo.<a a href="#"><br>Ir al sub-módulo >></a></p>
                      </div>
                    </div>                    
                  </div>
                </div> <!-- END ROW -->

                <div class="row">
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading separator">                      
                        <div class="panel-title">
                        </div><span class="label label-info" ><li class="fa fa-cube"></li> Submódulo / Patrimonio </span>
                      </div>
                      <div class="panel-body">
                        <h2>
                      <span class="semi-bold">10/ </span>Resguardos</h2>
                        <p>Generación del resguardo con números de inventario, rotularse y administración.<a a href="#"><br>Ir al sub-módulo >></a></p>
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