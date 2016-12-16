

<!-- NO MOVEER NINGÚN DIV !-->
<div class="fixed-header horizontal-menu">  

  <div class="page-content-wrapper">
    <div class="content sm-gutter">            
     <div class="container-fluid">
     
      <div class="page-content-wrapper ">


<!-- CHANGE 'content' HERE-->

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="sub-nav">
                <div class="row">

                  <div class="col-sm-4">
                    <ul class="nav navbar-nav navbar-center">
                      <li><a href="javascript:window.print();" data-toggle="tooltip" data-placement="bottom" title="Imprimir"><i class="fa fa-print"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Descargar"><i class="fa fa-download"></i></a></li>
                      <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Enviar"><i class="fa fa-send"></i></a></li>
                    </ul>
                  </div>
                  <div class="col-sm-8">
                    <ul class="nav navbar-nav navbar-right">
                      <li>
                        <a href="{{ url('bienes/submodulo/adquisiciones/reportes/orden', $orden->id) }}" class="p-r-10"><img width="25" height="25" alt="" class="icon-pdf" data-src-retina="assets/img/invoice/pdf2x.png" data-src="{{ URL::asset('assets/img/invoice/pdf.png') }}" src="assets/img/invoice/pdf2x.png"></a>
                      </li>
                      <li>
                        <a href="#" class="p-r-10"><img width="25" height="25" alt="" class="icon-doc" data-src-retina="assets/img/invoice/doc2x.png" data-src="{{ URL::asset('assets/img/invoice/doc.png') }}" src="assets/img/invoice/doc2x.png"></a>
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
                      <img width="235" height="47" alt="" class="invoice-logo" data-src-retina="{{ URL::asset('assets/img/abc_logo_login.png') }}" data-src="{{ URL::asset('assets/img/abc_logo_login.png') }}" src="assets/img/invoice/squarespace2x.png">
                      <address class="m-t-10">
                                      Abaccus Pro - El abc de armonización contable
                                      <br>T. (55) 6072 5082
                                      <br>
                                  </address>
                    </div>
                    <div class="pull-right sm-m-t-20">
                      <h2 class="font-montserrat all-caps hint-text">Orden de Compra</h2>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <br>
                  <br>
                  <div class="container-sm-height">
                    <div class="row-sm-height">
                      <div class="col-md-9 col-sm-height sm-no-padding">
                        <p class="small no-margin">A quien corresponda</p>
                        <h5 class="semi-bold m-t-0">Lic. Juan López Pérez</h5>
                        <address>
                                              <strong>Dirección General de Contabilidad.</strong>
                                              <br>Gobierno de la Ciudad de México
                                              <br>
                                              Av. Reforma 1234. Edif. C. Of. 2<br>
                                              Ciudad de México, México.
                                          </address>
                      </div>
                      <div class="col-md-6 col-sm-height col-bottom sm-no-padding sm-p-b-20">
                        <br>
                        <div>
                          <div class="pull-left font-montserrat bold all-caps">Clave:</div>
                          <div class="pull-right"><strong>{{ $orden->clave }}</strong></div>
                          <div class="clearfix"></div>
                        </div>
                        <div>
                          <div class="pull-left font-montserrat bold all-caps">Folio de Solicitud aprobada:</div>
                          <div class="pull-right"><strong>{{ $orden->folio_aprobado }}</strong></div>
                          <div class="clearfix"></div>
                        </div>
                        <div>
                          <div class="pull-left font-montserrat bold all-caps">Folio de Orden de Compra:</div>
                          <div class="pull-right"><strong>{{ $orden->folio_compra }}</strong></div>
                          <div class="clearfix"></div>
                        </div>
                        <div>
                          <div class="pull-left font-montserrat bold all-caps">Fecha:</div>
                          <div class="pull-right"><strong>{{ $orden->fecha }}</strong></div>
                          <div class="clearfix"></div>
                        </div> 
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">

              <div class="col-sm-12">
                <!-- START PANEL -->
                <div class="panel panel-transparent">
                  <div class="panel-body">
                    <form id="form-project" role="form" autocomplete="off">
                      <h5>Datos Generales</h5>

                      <div class="form-group-attached">

                        <div class="row clearfix">
                          <div class="col-sm-6">
                            <div class="form-group form-group-default">
                              <label>Proveedor</label>
                              <input type="text" class="form-control" value="{{ $orden->proveedor }}" disabled>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group form-group-default">
                              <label>Tipo de adquisición</label>
                              <input type="text" class="form-control" value="{{ $orden->tipo_adqui }}" disabled>
                            </div>
                          </div>
                        </div>

                        <div class="row clearfix">
                          <div class="col-sm-6">
                            <div class="form-group form-group-default">
                              <label>Tiempo de entrega</label>
                              <input type="text" class="form-control" value="{{ $orden->ent_dias }}"  disabled>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group form-group-default">
                              <label>Lugar de entrega</label>
                              <input type="text" class="form-control" value="{{ $orden->ent_lugar }}"  disabled>
                            </div>
                          </div>
                        </div>

                      </div>

                      <p class="m-t-10"><h5>Productos o Servicios</h5></p>

                          <table class="table table-hover demo-table-search" id="tableWithSearch">
                            <thead>
                              <tr>
                                <th>Producto/Servicio</th>                    
                                <th>Marca</th>
                                <th>Medida</th>                      
                                <th>Cantidad</th>
                                <th>Características</th>
                                <th>Precio</th>
                              </tr>
                            </thead>
                              <tbody>                        
                              @foreach ($orden->bienes as $bienes)
                                <tr class="even gradeC">
                                  <td>{{ $bienes->producto }}</a></td>
                                  <td>{{ $bienes->marca }}</td>
                                  <td>{{ $bienes->medida }}</td>
                                  <td>{{ $bienes->cantidad }}</td>
                                  <td>{{ $bienes->carac }}</td>
                                  <td>${{ $bienes->precio }}</td>
                                </tr>
                              @endforeach
                              </tbody>
                          </table>

                        </div>

                        <div class="row clearfix"> 
                          <div class="col-sm-2">
                            <div class="form-group form-group-default input-group">
                              <label>Subtotal</label>
                              <input type="text" class="form-control" value="${{ number_format($orden->subtotal,2) }}" disabled>
                            </div>
                          </div>

                          <div class="col-sm-2">
                            <div class="form-group form-group-default input-group">
                              <label>IVA</label>
                              <input type="text" class="form-control" value="${{ number_format($orden->iva,2) }}" disabled>
                            </div>
                          </div>

                          <div class="col-sm-3">
                            <div class="form-group form-group-default input-group">
                              <label>Total</label>
                              <input type="text" class="form-control" value="${{ number_format($orden->total,2) }}" disabled>
                              <span class="input-group-addon">MXN</span>
                            </div>
                          </div>

                      <br>
                      <br>
                      <div class="row">
                        <div class="col-sm-9">
                          <button class="btn btn-complete" type="submit"><i class="fa fa-check"></i> Agregar Documentos</button>
                          <button class="btn btn-danger"><i class="fa fa-times"></i> Cancelar Orden</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- END PANEL -->

              </div>
            </div>

            <br>
                  <hr>
                  <p class="small hint-text">"La información contenida en este mensaje no se considera compromiso o acuerdo oficial hasta que se confirme por escrito con la firma autógrafa del servidor público facultado, por lo que las opiniones personales expresadas en el mismo no son una posición oficial de la Dependencia o Entidad Emisora. Este mensaje es confidencial, dirigido para uso exclusivo del destinatario, quedando prohibida su distribución y/o difusión en cualquier modalidad sin la previa autorización del servidor público que lo emite. Si usted no es el destinatario de este mensaje, deberá borrarlo inmediatamente".</p>
                  <p class="small hint-text">Con fundamento en el artículo 13 fracción III de los Lineamientos para el uso del Correo Electrónico Institucional de la Administración Pública del Estado de Veracruz de Ignacio de la Llave. </p>
                  <br>
                  <hr>
                  <div>
                    <img src="assets/img/logo.png" alt="logo" data-src="{{ URL::asset('assets/img/abc_simbolo-login.png') }}" data-src-retina="assets/img/logo_2x.png" width="50" height="49">
                    <span class="m-l-70 text-black sm-pull-right">+52 (55) 6702 5082</span>
                    <span class="m-l-40 text-black sm-pull-right">asesoria@abaccuspro.com</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- END PANEL -->
          </div>
          <!-- END CONTAINER FLUID -->

<!-- STOP CHANGING 'content' HERE-->


        </div> <!-- DIV "container-fluid" - NO BORRAR" -->

      </div>
      <!-- TERMINA page container / DIV DE ESPACIO PARA FOOTER -->

<!-- TERMINA CONTENIDO / LA SECCIÓN SE QUEDA ABIERTA PARA CERRAR footer-->


