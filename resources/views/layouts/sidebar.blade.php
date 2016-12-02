@section('sidebar')

<!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
      <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
      <div class="sidebar-overlay-slide from-top" id="appMenu">
        <div class="row">
          <div class="col-xs-6 no-padding">
            <a href="#" class="p-l-40"><img src="/assets/img/demo/social_app.svg" alt="socail">
            </a>
          </div>
          <div class="col-xs-6 no-padding">
            <a href="#" class="p-l-10"><img src="/assets/img/demo/email_app.svg" alt="socail">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 m-t-20 no-padding">
            <a href="#" class="p-l-40"><img src="/assets/img/demo/calendar_app.svg" alt="socail">
            </a>
          </div>
          <div class="col-xs-6 m-t-20 no-padding">
            <a href="#" class="p-l-10"><img src="/assets/img/demo/add_more.svg" alt="socail">
            </a>
          </div>
        </div>
      </div>
      <!-- END SIDEBAR MENU TOP TRAY CONTENT-->

      <!-- BEGIN SIDEBAR MENU HEADER-->
      <div class="sidebar-header">
        <img src="{{ URL::asset('/assets/img/abc_home_sidebar.png') }}" alt="logo" class="brand" data-src="{{ URL::asset('/assets/img/abc_home_sidebar.png') }}" data-src-retina="/assets/img/logo_white_2x.png" width="80" height="19">
        <div class="sidebar-header-controls">
          <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
          </button>
          <button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-16"></i>
          </button>
        </div>
      </div>
      <!-- END SIDEBAR MENU HEADER-->


      <!-- START SIDEBAR MENU -->
      <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->

        <ul class="menu-items">
          <li class="m-t-30 ">
            <a href="{{ url('/home') }}" class="detailed">
              <span class="title">Indicadores</span>
              <span class="details">Panel Ejecutivo</span>
            </a>
            <span class="icon-thumbnail"><i class="fa fa-bar-chart"></i></span>
          </li>

          <li>
            <a href="javascript:;"><span class="title">Planeación</span>            
            <span class=" arrow"></span>
            </a>
            <span class="icon-thumbnail"><i class="fa fa-indent"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="{{ url('/planeacion/submodulos') }}">Inicio</a>
                <span class="icon-thumbnail">In</span>
              </li>
              <li class="">
                <a href="{{ url('/planeacion/submodulos') }}">Sub-Módulos</a>
                <span class="icon-thumbnail">Sm</span>
              </li>
              <li class="">
                <a href="{{ url('/planeacion/consultas') }}">Consultas y Reportes</a>
                <span class="icon-thumbnail">Cr</span>
              </li>
              <li class="">
                <a href="{{ url('/planeacion/configuraciones') }}">Configuraciones</a>
                <span class="icon-thumbnail">Cn</span>
              </li>
              <li class="">
                <a href="{{ url('/planeacion/manuales') }}">Manuales y Procesos</a>
                <span class="icon-thumbnail">Mp</span>
              </li>
            </ul>
          </li>

          <li>
            <a href="javascript:;"><span class="title">Presupuesto</span>            
            <span class=" arrow"></span>
            </a>
           <span class="icon-thumbnail"><i class="fa fa-line-chart"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="{{ url('/presupuesto/submodulos') }}">Inicio</a>
                <span class="icon-thumbnail">In</span>
              </li>
              <li class="">
                <a href="{{ url('/presupuesto/submodulos') }}">Sub-Módulos</a>
                <span class="icon-thumbnail">Sm</span>
              </li>
              <li class="">
                <a href="{{ url('/presupuesto/consultas') }}">Consultas y Reportes</a>
                <span class="icon-thumbnail">Cr</span>
              </li>
              <li class="">
                <a href="{{ url('/presupuesto/configuraciones') }}">Configuraciones</a>
                <span class="icon-thumbnail">Cn</span>
              </li>
              <li class="">
                <a href="{{ url('/presupuesto/manuales') }}">Manuales y Procesos</a>
                <span class="icon-thumbnail">Mp</span>
              </li>
            </ul>
          </li>

                    <li>
            <a href="javascript:;"><span class="title">Contabilidad</span>            
            <span class=" arrow"></span>
            </a>
           <span class="icon-thumbnail"><i class="fa fa-calculator"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="{{ url('/contabilidad/submodulos') }}">Inicio</a>
                <span class="icon-thumbnail">In</span>
              </li>
              <li class="">
                <a href="{{ url('/contabilidad/submodulos') }}">Sub-Módulos</a>
                <span class="icon-thumbnail">Sm</span>
              </li>
              <li class="">
                <a href="{{ url('/contabilidad/consultas')}}">Consultas y Reportes</a>
                <span class="icon-thumbnail">Cr</span>
              </li>
              <li class="">
                <a href="{{ url('/contabilidad/configuraciones') }}">Configuraciones</a>
                <span class="icon-thumbnail">Cn</span>
              </li>
              <li class="">
                <a href="{{ url('/contabilidad/manuales') }}">Manuales y Procesos</a>
                <span class="icon-thumbnail">Mp</span>
              </li>
            </ul>
          </li>

          <li>
            <a href="javascript:;"><span class="title">Ingresos</span>            
            <span class=" arrow"></span>
            </a>
           <span class="icon-thumbnail"><i class="fa fa-dollar"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="{{ url('/ingresos/submodulos') }}">Inicio</a>
                <span class="icon-thumbnail">In</span>
              </li>
              <li class="">
                <a href="{{ url('/ingresos/submodulos') }}">Sub-Módulos</a>
                <span class="icon-thumbnail">Sm</span>
              </li>
              <li class="">
                <a href="#">Consultas y Reportes</a>
                <span class="icon-thumbnail">Cr</span>
              </li>
              <li class="">
                <a href="{{ url('/ingresos/configuraciones') }}">Configuraciones</a>
                <span class="icon-thumbnail">Cn</span>
              </li>
              <li class="">
                <a href="{{ url('/ingresos/manuales') }}">Manuales y Procesos</a>
                <span class="icon-thumbnail">Mp</span>
              </li>
            </ul>
          </li>

          <li>
            <a href="javascript:;"><span class="title">Tesorería</span>            
            <span class=" arrow"></span>
            </a>
           <span class="icon-thumbnail"><i class="fa fa-money"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="{{ url('/tesoreria/submodulos') }}">Inicio</a>
                <span class="icon-thumbnail">In</span>
              </li>
              <li class="">
                <a href="{{ url('/tesoreria/submodulos') }}">Sub-Módulos</a>
                <span class="icon-thumbnail">Sm</span>
              </li>
              <li class="">
                <a href="#">Consultas y Reportes</a>
                <span class="icon-thumbnail">Cr</span>
              </li>
              <li class="">
                <a href="{{ url('/tesoreria/configuraciones') }}">Configuraciones</a>
                <span class="icon-thumbnail">Cn</span>
              </li>
              <li class="">
                <a href="{{ url('/tesoreria/manuales') }}">Manuales y Procesos</a>
                <span class="icon-thumbnail">Mp</span>
              </li>
            </ul>
          </li>

          <li>
            <a href="javascript:;"><span class="title">R. Humanos</span>            
            <span class=" arrow"></span>
            </a>
           <span class="icon-thumbnail"><i class="fa fa-male"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="{{ url('/recursos_humanos/submodulos') }}">Inicio</a>
                <span class="icon-thumbnail">In</span>
              </li>
              <li class="">
                <a href="{{ url('/recursos_humanos/submodulos') }}">Sub-Módulos</a>
                <span class="icon-thumbnail">Sm</span>
              </li>
              <li class="">
                <a href="#">Consultas y Reportes</a>
                <span class="icon-thumbnail">Cr</span>
              </li>
              <li class="">
                <a href="{{ url('/recursos_humanos/configuraciones') }}">Configuraciones</a>
                <span class="icon-thumbnail">Cn</span>
              </li>
              <li class="">
                <a href="{{ url('/recursos_humanos/manuales') }}">Manuales y Procesos</a>
                <span class="icon-thumbnail">Mp</span>
              </li>
            </ul>
          </li>

          <li>
            <a href="javascript:;"><span class="title">Deuda Pública</span>            
            <span class=" arrow"></span>
            </a>
           <span class="icon-thumbnail"><i class="fa fa-pie-chart"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="{{ url('/deuda_publica/submodulos') }}">Inicio</a>
                <span class="icon-thumbnail">In</span>
              </li>
              <li class="">
                <a href="{{ url('/deuda_publica/submodulos') }}">Sub-Módulos</a>
                <span class="icon-thumbnail">Sm</span>
              </li>
              <li class="">
                <a href="#">Consultas y Reportes</a>
                <span class="icon-thumbnail">Cr</span>
              </li>
              <li class="">
                <a href="{{ url('/deuda_publica/configuraciones') }}">Configuraciones</a>
                <span class="icon-thumbnail">Cn</span>
              </li>
              <li class="">
                <a href="{{ url('/deuda_publica/manuales') }}">Manuales y Procesos</a>
                <span class="icon-thumbnail">Mp</span>
              </li>
            </ul>
          </li>

          <li>
            <a href="javascript:;"><span class="title">Bienes</span>            
            <span class=" arrow"></span>
            </a>
           <span class="icon-thumbnail"><i class="fa fa-truck"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="{{ url('/bienes/submodulos') }}">Inicio</a>
                <span class="icon-thumbnail">In</span>
              </li>
              <li class="">
                <a href="{{ url('/bienes/submodulos') }}">Sub-Módulos</a>
                <span class="icon-thumbnail">Sm</span>
              </li>
              <li class="">
                <a href="#">Consultas y Reportes</a>
                <span class="icon-thumbnail">Cr</span>
              </li>
              <li class="">
                <a href="{{ url('/bienes/configuraciones') }}">Configuraciones</a>
                <span class="icon-thumbnail">Cn</span>
              </li>
              <li class="">
                <a href="{{ url('/bienes/manuales') }}">Manuales y Procesos</a>
                <span class="icon-thumbnail">Mp</span>
              </li>
            </ul>
          </li>

          <li>
            <a href="javascript:;"><span class="title">Obra Pública</span>            
            <span class=" arrow"></span>
            </a>
           <span class="icon-thumbnail"><i class="fa fa-institution"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="{{ url('/obra_publica/submodulos') }}">Inicio</a>
                <span class="icon-thumbnail">In</span>
              </li>
              <li class="">
                <a href="{{ url('/obra_publica/submodulos') }}">Sub-Módulos</a>
                <span class="icon-thumbnail">Sm</span>
              </li>
              <li class="">
                <a href="#">Consultas y Reportes</a>
                <span class="icon-thumbnail">Cr</span>
              </li>
              <li class="">
                <a href="{{ url('/obra_publica/configuraciones') }}">Configuraciones</a>
                <span class="icon-thumbnail">Cn</span>
              </li>
              <li class="">
                <a href="{{ url('/obra_publica/manuales') }}">Manuales y Procesos</a>
                <span class="icon-thumbnail">Mp</span>
              </li>
            </ul>
          </li>

          <li class="">
            <a href="{{ url('/monitoreo') }}" class="detailed">
              <span class="title">Accesos</span>
              <span class="details">Control de módulos</span>
            </a>
            <span class="icon-thumbnail"><i class="fa fa-eye"></i></span>
          </li>


        </ul>
        <div class="clearfix"></div>
      </div>
      <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->

    
@endofsection