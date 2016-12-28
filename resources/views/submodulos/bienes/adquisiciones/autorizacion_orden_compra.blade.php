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
                              <li><a href="{{ url('/bienes/submodulo/adquisiciones') }}">Adquisiciones</a>
                              <li><a href="#" class="active">Autorizaciones de órdenes de compra</a>
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
                          <div class="panel-title">Bandeja de entrada
                          </div>
                        </div>
                        <div class="panel-body">
                          <h3>Bandeja de Órdenes de compra</h3>
                          <p>En esta sección podrá consultar las autorizaciones pendientes provenientes de otras áreas.</p>
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

      <!-- START PANEL -->
      <div class="panel panel-default">
          <div class="panel-heading">
            <div class="panel-title">Bandeja de estatus de órdenes de compra</div>
            <div class="clearfix"></div>
          </div>

          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg">
           <div class"row">

              <div class="panel-body">
                <table class="table table-hover demo-table-dynamic" id="basicDataTable">
                <p><h2>Órdenes de Compra</h2></p>
                  <thead>
                    <tr>
                      <th>Clave</th>
                      <th>Fecha</th>
                      <th>Folio de Solicitud Aprobada</th>
                      <th>Folio de Orden de Compra</th>
                      <th>Proveedor</th>
                      <th>Tipo de Adquisición</th>
                      <th>Total</th>
                      <th>Documentos</th>
                      <th>Estatus</th>
                    </tr>
                  </thead>

                    <tbody>
                      @for ($i = 0; $i < count($input); $i++)
                         <tr class="odd gradeX">
                          <td><a href="{{ url('bienes/submodulo/adquisiciones/orden_compra', $input[$i]->id) }}">{{ $input[$i]->clave }}</a></td>
                          <td>{{ $input[$i]->fecha }}</td>
                          <td>{{ $input[$i]->folio_aprobado }}</td>
                          <td>{{ $input[$i]->folio_compra }}</td>
                          <td>{{ $input[$i]->proveedor }}</td>
                          <td>{{ $input[$i]->tipo_adqui }}</td>
                          <td>${{ number_format($input[$i]->total,2) }}</td>
                          <td class="v-align-middle"><button type="button" class="btn btn-complete"><i class="fa fa-file-o"></i></button></td>

                          @if ($input[$i]->estatus == 'Procesando')
                          <td class="v-align-middle estatus" id="{{ $input[$i]->id }}">
                          <label class="label label-warning">{{ $input[$i]->estatus }}</label></td>

                          @elseif($input[$i]->estatus == 'Pagada')
                          <td class="v-align-middle estatus" id="{{$input[$i]->id}}">
                          <label class="label label-success">{{ $input[$i]->estatus }}</label></td> 

                          @elseif($input[$i]->estatus == 'Cancelada')
                          <td class="v-align-middle estatus" id="{{$input[$i]->id}}">
                          <label class="label label-danger">{{ $input[$i]->estatus }}</label></td>
                          
                          @else
                          <td class="v-align-middle estatus" id="{{ $input[$i]->id }}">{{ $input[$i]->estatus }}
                          <label class="label label-default">Comprometida</label></td>
                          @endif                     

                         </tr>
                      @endfor
                    </tbody>

                </table>
              </div>
            </div>

          </div> <!-- END PANEL -->


          </div> <!-- DIV "panel body" - NO BORRAR" -->
                

<!-- STOP CHANGING 'content' HERE-->

            </div> <!-- DIV "col-md-12" - NO BORRAR" -->  
          </div> <!-- DIV "row" - NO BORRAR" -->

      <br>

      </div>
      <!-- TERMINA page container / DIV DE ESPACIO PARA FOOTER -->

<!-- TERMINA CONTENIDO / LA SECCIÓN SE QUEDA ABIERTA PARA CERRAR footer-->


@endsection

@section('script_page')

    <!-- BEGIN VENDOR JS -->

    <script src="{{ URL::asset('assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-responsive/js/datatables.responsive.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-responsive/js/lodash.min.js') }}"></script>
    <!-- END VENDOR JS -->

    <!-- BEGIN PAGE LEVEL JS -->
    <script src="{{ URL::asset('assets/js/datatables.js') }}" type="text/javascript"></script>

    <script type="text/javascript" src="{{ URL::asset('https://cdn.jsdelivr.net/jquery.jeditable/1.7.3/jquery.jeditable.js') }}"></script>

    <!-- END PAGE LEVEL JS -->

<script>
  
$(document).ready(function() {
    $("#basicDataTable").DataTable({
        "order": [],
    });

    dest = "{{ url('estatusOrden') }}";
    $("#basicDataTable").on("click", "td", function(){
      $('.estatus').editable(dest , {
      data   : "{'Procesando':'Procesando','Pagada':'Pagada','Cancelada':'Cancelada'}",
      type   : 'select',
      submit : 'Guardar',
      callback: function(){
         window.setTimeout('location.reload()', 1000); //Reloads after three seconds
       }
      /*onerror : function(settings,original,xhr){
          original.reset();
          alertify.error("Existe un error en el campo OCR");
        },
        onblur: 'cancel', 
      // ,*/
      });
  });

});
</script>


@endsection

