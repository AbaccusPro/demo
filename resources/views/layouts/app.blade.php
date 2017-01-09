<!DOCTYPE html>
<html>
  <head>  
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Abaccus Pro - El abc de armonización contable @yield('title')</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="/pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />


    <link href="{{ URL::asset('assets/plugins/pace/pace-theme-flash.css')  }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/boostrapv3/css/bootstrap.min.css')  }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/font-awesome/css/font-awesome.css')  }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.css')  }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ URL::asset('assets/plugins/bootstrap-select2/select2.css')  }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ URL::asset('assets/plugins/switchery/css/switchery.min.css')  }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ URL::asset('assets/plugins/nvd3/nv.d3.min.css')  }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ URL::asset('assets/plugins/mapplic/css/mapplic.css')  }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/rickshaw/rickshaw.min.css')  }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/bootstrap-datepicker/css/datepicker3.css')  }}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ URL::asset('assets/plugins/jquery-metrojs/MetroJs.css')  }}" rel="stylesheet" type="text/css" media="screen" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css">
  
    <link href="{{ URL::asset('assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/datatables-responsive/css/datatables.responsive.css')}}" rel="stylesheet" type="text/css" media="screen" />

    <link href="{{ URL::asset('pages/css/pages-icons.css')  }}" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="{{ URL::asset('pages/css/pages.css')  }}" rel="stylesheet" type="text/css" />
    
    <!-- FORMS link rel-->
    <link href="{{ URL::asset('assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/bootstrap-tag/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/dropzone/css/dropzone.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/bootstrap-datepicker/css/datepicker3.css')  }}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ URL::asset('assets/plugins/summernote/css/summernote.css')  }}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ URL::asset('assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')  }}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ URL::asset('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css')  }}" rel="stylesheet" type="text/css" media="screen">

    <!-- TREE link rel-->
    <link href="{{ URL::asset('assets/plugins/jquery-dynatree/skin/ui.dynatree.css') }}" rel="stylesheet" type="text/css" media="screen" />

    <!--[if lte IE 9]>
  <link href="assets/plugins/codrops-dialogFx/dialog.ie.css" rel="stylesheet" type="text/css" media="screen" />
  <![endif]-->

  </head>

  <body class="fixed-header dashboard">

@include('layouts.sidebar')

    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">

      <!-- AQUI SE CORTARIA EL 'top_header'-->
      <!-- START HEADER -->
      <div class="header ">
        <!-- START MOBILE CONTROLS -->
        <div class="container-fluid relative">
          <!-- LEFT SIDE -->
          <div class="pull-left full-height visible-sm visible-xs">
            <!-- START ACTION BAR -->
            <div class="header-inner">
              <a href="#" class="btn-link toggle-sidebar visible-sm-inline-block visible-xs-inline-block padding-5" data-toggle="sidebar">
                <span class="icon-set menu-hambuger"></span>
              </a>
            </div>
            <!-- END ACTION BAR -->
          </div>
          <div class="pull-center hidden-md hidden-lg">
            <div class="header-inner">
              <div class="brand inline">
                <img src="/assets/img/logo.png" alt="logo" data-src="/assets/img/logo.png" data-src-retina="/assets/img/logo_2x.png" width="78" height="22">
              </div>
            </div>
          </div>
          <!-- RIGHT SIDE -->
          <div class="pull-right full-height visible-sm visible-xs">
            <!-- START ACTION BAR -->
            <div class="header-inner">
              <a href="#" class="btn-link visible-sm-inline-block visible-xs-inline-block" data-toggle="quickview" data-toggle-element="#quickview">
                <span class="icon-set menu-hambuger-plus"></span>
              </a>
            </div>
            <!-- END ACTION BAR -->
          </div>
        </div>
        <!-- END MOBILE CONTROLS -->
        <div class=" pull-left sm-table hidden-xs hidden-sm">
          <div class="header-inner">
            <div class="brand inline">
              <a href="{{ url('/home') }}"><img src="{{ URL::asset('/assets/img/abc_home_header.png') }}" alt="home" data-src="{{ URL::asset('/assets/img/abc_home_header.png') }}" data-src-retina="/assets/img/logo_2x.png" width="245" height="25"></a>
            </div>
            <!-- START NOTIFICATION LIST -->
            <ul class="notification-list no-margin hidden-sm hidden-xs b-grey b-l b-r no-style p-l-30 p-r-20">

               <li class="fs-16 m-r-10 inline" title="" data-toggle="tooltip" class="btn btn-default tip m-b-5 m-r-5" data-placement="bottom" 
              title="" data-toggle="tooltip" class="btn btn-default tip m-b-5 m-r-5" type="button" data-original-title="El abc de armonización">
                <a href="{{ url('/abc_armonizacion') }}" class="fa fa-th"></a>
              </li>
              <li class="fs-16 m-r-10 inline" title="" data-toggle="tooltip" class="btn btn-default tip m-b-5 m-r-5" data-placement="bottom" 
              title="" data-toggle="tooltip" class="btn btn-default tip m-b-5 m-r-5" type="button" data-original-title="Alertas" >
                <a href="#" class="fa fa-warning"></a>
              </li>
              <li class="fs-16 m-r-10 inline" title="" data-toggle="tooltip" class="btn btn-default tip m-b-5 m-r-5" data-placement="bottom" 
              title="" data-toggle="tooltip" class="btn btn-default tip m-b-5 m-r-5" type="button" data-original-title="Tutoriales">
                <a href="{{ url('/tutoriales') }}" class="fa fa-book"></a>
              </li>
              <li class="fs-16 m-r-10 inline">
                <a href="{{ url('glosario') }}" class="fa fa-question-circle" title="" data-toggle="tooltip" class="btn btn-default tip m-b-5 m-r-5" data-placement="bottom" 
              title="" data-toggle="tooltip" class="btn btn-default tip m-b-5 m-r-5" type="button" data-original-title="Glosario"></a>
              </li>
              <li class="fs-16 m-r-10 inline" title="" data-toggle="tooltip" class="btn btn-default tip m-b-5 m-r-5" data-placement="bottom" 
              title="" data-toggle="tooltip" class="btn btn-default tip m-b-5 m-r-5" type="button" data-original-title="Soporte">
                <a href="{{ url('/soporte') }}" class="fa fa-ticket"></a>
              </li>
              <li class="fs-16 m-r-10 inline" title="" data-toggle="tooltip" class="btn btn-default tip m-b-5 m-r-5" data-placement="bottom" 
              title="" data-toggle="tooltip" class="btn btn-default tip m-b-5 m-r-5" type="button" data-original-title="Navegación">
                <a href="#" class="fa fa-map"></a>                
              </li>

            </ul>
            <!-- END NOTIFICATIONS LIST -->
            <a href="#" class="search-link" data-toggle="search"><i class="pg-search"></i><span class="bold">Buscar</span></a> </div>
        </div>
        <div class=" pull-right">
          <div class="header-inner">
            <a href="#" class="btn-link icon-set menu-hambuger-plus m-l-20 sm-no-margin hidden-sm hidden-xs" data-toggle="quickview" data-toggle-element="#quickview"></a>
          </div>
        </div>
        
        <div class=" pull-right">


          <!-- START User Info-->
          <div class="visible-lg visible-md m-t-10">
            <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
              <span class="semi-bold">{{\Auth::user()->name}}</span>
            </div>
            <div class="dropdown pull-right">
              <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="thumbnail-wrapper d32 circular inline m-t-5">
                <img src="{{ URL::asset('assets/img/profiles/8x.jpg') }}" alt="" data-src="{{ URL::asset('assets/img/profiles/8x.jpg') }}" data-src-retina="/assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
            </span>
              </button>
              <ul class="dropdown-menu profile-dropdown" role="menu">
                <li><a href="#"><i class="fa fa-user"></i> Mi Cuenta</a>
                </li>
                <li><a href="#"><i class="fa fa-sliders"></i> Preferencias</a>
                </li>

                <li class="bg-master-lighter">
                  <a href="{{ url('/logout') }}" class="clearfix" 
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                    <span class="pull-left">Salir</span>
                    <span class="pull-right"><i class="pg-power"></i></span>
                  </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    </form>
                </li>
              </ul>
            </div>
            <!-- AQUI SE CORTARIA EL 'top_header'-->

           </div>
         <!-- END User Info -->

        </div>
      </div>
    <!-- END HEADER / NO MOVER ESTOS 2 DIVS PORQUE SON LOS QUE ENCAJONAN EL 'header'-->


      <!-- START PAGE CONTENT WRAPPER -->
      

        <!-- START PAGE CONTENT -->
             
@yield('content')

        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        <div class="container-fluid container-fixed-lg footer">

@include('layouts.footer')

        </div>
        <!-- END COPYRIGHT -->

      </div>
      <!-- END PAGE CONTENT WRAPPER -->

    </div>
    <!-- END PAGE CONTAINER / NO MOVER ESTOS 3 DIVS PORQUE SON LOS QUE ENCAJONAN EL 'footer'-->


    <!--START QUICKVIEW -->
    <div id="quickview" class="quickview-wrapper" data-pages="quickview">


    </div>
    <!-- END QUICKVIEW-->
    <!-- START OVERLAY NO MOVER ESTOS 3 DIVS PORQUE SON LOS QUE ENCAJONAN 'alertas' -->

    <div class="overlay hide" data-pages="search">

@include('layouts.search')

      </div>
      <!-- END Overlay Content / NO MOVER ESTOS 3 DIVS PORQUE SON LOS QUE ENCAJONAN 'search'-->

    </div>
    <!-- END OVERLAY -->

    <!-- BEGIN VENDOR JS -->
    <script src="{{ URL::asset('assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/jquery/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/modernizr.custom.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/boostrapv3/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/jquery/jquery-easy.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-unveil/jquery.unveil.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-bez/jquery.bez.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-ios-list/jquery.ioslist.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-actual/jquery.actual.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/bootstrap-select2/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/classie/classie.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/switchery/js/switchery.min.js') }}" type="text/javascript"></script>
    <!-- END VENDOR JS -->

    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="{{ URL::asset('pages/js/pages.min.js') }}"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->

@yield('script_page')

    <script src="{{ URL::asset('assets/js/scripts.js') }}" type="text/javascript"></script>

    <!-- END PAGE LEVEL JS -->


  </body>

</html>