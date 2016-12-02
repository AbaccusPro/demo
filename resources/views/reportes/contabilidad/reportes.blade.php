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
                        <li class="mega">
                          <a href="javascript:;">
                          <span class="sub-menu-heading bold">Acceso Rápido</span><span class="arrow"></span>
                        </a>                        
                          <ul class="mega">
                            <div class="container">
                              <div class="row">

                                <div class="col-md-3">
                                  <ul class="sub-menu">
                                    <li ><a href="#">1 / Catálogos</a></li>
                                    <li ><a href="#">2 / Reportes</a></li>
                                    <li ><a href="{{ url('/contabilidad/consultas') }}">3 / Consultas</a></li>
                                    <li ><a href="#">4 / Configuraciones</a></li>
                                    <li ><a href="#">5 / Manuales y Procesos</a></li>
                                  </ul>
                                </div>

                                <div class="col-md-3 ">
                                  <ul class="sub-menu">
                                    <li ><a href="#">1/ Configuración de cuentas</a></li>
                                    <li ><a href="#">2/ Apertura del periodo</a></li>
                                    <li ><a href="#">3/ Actualización de saldos</a></li>
                                    <li ><a href="#">4/ Desactualización de saldos</a></li>
                                    <li ><a href="#">5/ Cuentas no automáticas</a></li>
                                  </ul>                                  
                                </div>

                                <div class="col-md-3">
                                  <ul class="sub-menu">
                                    <li ><a href="#">6/ Cierre mensual</a></li>
                                    <li ><a href="#">7/ Cierre Anual</a></li>
                                    <li ><a href="#">8/ Depuraciones cuentas</a></li>
                                    <li ><a href="#">9/ Estados financieros</a></li>
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
                  <li><a href="{{ url('/contabilidad') }}" class="active">Contabilidad</a>
                  <li><a href="#" class="active">Consultas y Reportes</a>
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
                          <h3>Consultas y Reportes</h3>
                          <p>En esta sección podrá encontrar la lista de consultas diarias de este módulo.</p>
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

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="sub-nav">
                <div class="row">
                  <div class="col-sm-4">
                    <ul class="nav navbar-nav">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text m-r-10"></i> Squarespace <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                          <li class="divider"></li>
                          <li><a href="#">One more separated link</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="col-sm-4">
                    <ul class="nav navbar-nav navbar-center">
                      <li><a href="#">Open</a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Print"><i class="fa fa-print"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Download"><i class="fa fa-download"></i></a></li>
                    </ul>
                  </div>
                  <div class="col-sm-4">
                    <ul class="nav navbar-nav navbar-right">
                      <li>
                        <a href="#" class="p-r-10"><img width="25" height="25" alt="" class="icon-pdf" data-src-retina="assets/img/invoice/pdf2x.png" data-src="assets/img/invoice/pdf.png" src="assets/img/invoice/pdf2x.png"></a>
                      </li>
                      <li>
                        <a href="#" class="p-r-10"><img width="25" height="25" alt="" class="icon-image" data-src-retina="assets/img/invoice/image2x.png" data-src="assets/img/invoice/image.png" src="assets/img/invoice/image2x.png"></a>
                      </li>
                      <li>
                        <a href="#" class="p-r-10"><img width="25" height="25" alt="" class="icon-doc" data-src-retina="assets/img/invoice/doc2x.png" data-src="assets/img/invoice/doc.png" src="assets/img/invoice/doc2x.png"></a>
                      </li>
                      <li><a href="#" class="p-r-10" onclick="$.Pages.setFullScreen(document.querySelector('html'));"><i class="fa fa-expand"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
          </nav>
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg">
            <!-- START PANEL -->
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="invoice padding-50 sm-padding-10">
                  <div>
                    <div class="pull-left">
                      <img width="235" height="47" alt="" class="invoice-logo" data-src-retina="assets/img/invoice/squarespace2x.png" data-src="assets/img/invoice/squarespace.png" src="assets/img/invoice/squarespace2x.png">
                      <address class="m-t-10">
                                      Apple Enterprise Sales
                                      <br>(877) 412-7753.
                                      <br>
                                  </address>
                    </div>
                    <div class="pull-right sm-m-t-20">
                      <h2 class="font-montserrat all-caps hint-text">Invoice</h2>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <br>
                  <br>
                  <div class="container-sm-height">
                    <div class="row-sm-height">
                      <div class="col-md-9 col-sm-height sm-no-padding">
                        <p class="small no-margin">Invoice to</p>
                        <h5 class="semi-bold m-t-0">Darren Forthway</h5>
                        <address>
                                              <strong>Pages Incoperated.</strong>
                                              <br>page.inc
                                              <br>
                                              1600 Amphitheatre Pkwy, Mountain View,<br>
                                              CA 94043, United States
                                          </address>
                      </div>
                      <div class="col-md-3 col-sm-height col-bottom sm-no-padding sm-p-b-20">
                        <br>
                        <div>
                          <div class="pull-left font-montserrat bold all-caps">Invoice No :</div>
                          <div class="pull-right">0047</div>
                          <div class="clearfix"></div>
                        </div>
                        <div>
                          <div class="pull-left font-montserrat bold all-caps">Invoice date :</div>
                          <div class="pull-right">29/09/14</div>
                          <div class="clearfix"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table m-t-50">
                      <thead>
                        <tr>
                          <th class="">Task Description</th>
                          <th class="text-center">Rate</th>
                          <th class="text-center">Hours</th>
                          <th class="text-right">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="">
                            <p class="text-black">Character Illustration</p>
                            <p class="small hint-text">
                              Character Design projects from the latest top online portfolios on Behance.
                            </p>
                          </td>
                          <td class="text-center">$65.00</td>
                          <td class="text-center">84</td>
                          <td class="text-right">$5,376.00</td>
                        </tr>
                        <tr>
                          <td class="">
                            <p class="text-black">Cross Heart Charity Branding</p>
                            <p class="small hint-text">
                              Attempt to attach higher credibility to a new product by associating it with a well established company name
                            </p>
                          </td>
                          <td class="text-center">$89.00</td>
                          <td class="text-center">100</td>
                          <td class="text-right">$8,900.00</td>
                        </tr>
                        <tr>
                          <td class="">
                            <p class="text-black">iOs App</p>
                            <p class="small hint-text">
                              A video game franchise Inspired primarily by a sketch of stylized wingless - Including Branding / Graphics / Motion Picture &amp; Videos
                            </p>
                          </td>
                          <td class="text-center">$100.00</td>
                          <td class="text-center">500</td>
                          <td class="text-right">$50,000.00</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <div>
                    <img width="150" height="58" alt="" class="invoice-signature" data-src-retina="assets/img/invoice/signature2x.png" data-src="assets/img/invoice/signature.png" src="assets/img/invoice/signature2x.png">
                    <p>Designer’s Identity</p>
                  </div>
                  <br>
                  <br>
                  <div class="container-sm-height">
                    <div class="row row-sm-height b-a b-grey">
                      <div class="col-sm-2 col-sm-height col-middle p-l-25 sm-p-t-15 sm-p-l-15 clearfix sm-p-b-15">
                        <h5 class="font-montserrat all-caps small no-margin hint-text bold">Advance</h5>
                        <h3 class="no-margin">$21,000.00</h3>
                      </div>
                      <div class="col-sm-5 col-sm-height col-middle clearfix sm-p-b-15">
                        <h5 class="font-montserrat all-caps small no-margin hint-text bold">Discount (10%)</h5>
                        <h3 class="no-margin">$645.00</h3>
                      </div>
                      <div class="col-sm-5 text-right bg-menu col-sm-height padding-15">
                        <h5 class="font-montserrat all-caps small no-margin hint-text text-white bold">Total</h5>
                        <h1 class="no-margin text-white">$64,276.00</h1>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <p class="small hint-text">Services will be invoiced in accordance with the Service Description. You must pay all undisputed invoices in full within 30 days of the invoice date, unless otherwise specified under the Special Terms and Conditions. All payments must reference the invoice number. Unless otherwise specified, all invoices shall be paid in the currency of the invoice</p>
                  <p class="small hint-text">Insight retains the right to decline to extend credit and to require that the applicable purchase price be paid prior to performance of Services based on changes in insight's credit policies or your financial condition and/or payment record. Insight reserves the right to charge interest of 1.5% per month or the maximum allowable by applicable law, whichever is less, for any undisputed past due invoices. You are responsible for all costs of collection, including reasonable attorneys' fees, for any payment default on undisputed invoices. In addition, Insight may terminate all further work if payment is not received in a timely manner.</p>
                  <br>
                  <hr>
                  <div>
                    <img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
                    <span class="m-l-70 text-black sm-pull-right">+34 346 4546 445</span>
                    <span class="m-l-40 text-black sm-pull-right">support@revox.io</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- END PANEL -->
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->

<!-- STOP CHANGING 'content' HERE-->

            </div> <!-- DIV "col-md-12" - NO BORRAR" -->  
          </div> <!-- DIV "row" - NO BORRAR" -->
        </div> <!-- DIV "container-fluid" - NO BORRAR" -->


      </div>
      <!-- TERMINA page container / DIV DE ESPACIO PARA FOOTER -->

<!-- TERMINA CONTENIDO / LA SECCIÓN SE QUEDA ABIERTA PARA CERRAR footer-->


@endsection
