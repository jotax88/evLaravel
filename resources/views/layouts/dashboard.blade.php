<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>EV Panel</title>
    <link rel="apple-touch-icon" sizes="60x60" href="../../app-assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../app-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../app-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../app-assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../app-assets/images/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="../../app-assets/images/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN CSS-->

    <link rel="stylesheet" href="{{asset('css/libs.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/fonts/icomoon.css">
    <!-- END CSS-->
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

    <!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
            <li class="nav-item"><a href="index.html" class="navbar-brand nav-link"><img alt="branding logo" src="../public/images/logo/ev-sticker.png" data-expand="../../app-assets/images/logo/robust-logo-light.png" data-collapse="../../app-assets/images/logo/robust-logo-small.png" class="brand-logo"></a></li>
            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content container-fluid">
          <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
            <ul class="nav navbar-nav">
            
              <li class="nav-item hidden-xs-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="fas fa-align-justify"></i></a></li>
             
              <li class="nav-item hidden-xs-down"><a href="#" class="nav-link nav-link-expand"><i class="fas fa-expand"></i></a></li>
         
              @can('mantenedor.index')
              <li class="nav-item hidden-xs-down"><a href="{{ route('mantenedor.index') }}"  class="btn btn-success upgrade-to-pro">Mantenedores</a></li>
              @endcan
              @can('compra.index')
              <li class="nav-item hidden-xs-down"><a href="https://pixinvent.com/bootstrap-admin-template/robust/"  class="btn btn-success upgrade-to-pro">Compra</a></li>
              @endcan
              @can('bodega.index')
              <li class="nav-item hidden-xs-down"><a href="https://pixinvent.com/bootstrap-admin-template/robust/"  class="btn btn-success upgrade-to-pro">Bodega</a></li>
              @endcan
              @can('web.index')
              <li class="nav-item hidden-xs-down"><a href="{{ route('cliente.index') }}"  class="btn btn-success upgrade-to-pro">Web</a></li>
              @endcan
              @can('gestion.index')
              <li class="nav-item hidden-xs-down"><a href="https://pixinvent.com/bootstrap-admin-template/robust/"  class="btn btn-success upgrade-to-pro">gestiones</a></li>
              @endcan
              @can('reporte.index')
              <li class="nav-item hidden-xs-down"><a href="https://pixinvent.com/bootstrap-admin-template/robust/"  class="btn btn-success upgrade-to-pro">reportes</a></li>
              @endcan
              @can('mercado.index')
              <li class="nav-item hidden-xs-down"><a href="https://pixinvent.com/bootstrap-admin-template/robust/"  class="btn btn-success upgrade-to-pro">Mercado Libre</a></li>
              @endcan
              @can('desarrollo.index')
              <li class="nav-item hidden-xs-down"><a href="https://pixinvent.com/bootstrap-admin-template/robust/"  class="btn btn-success upgrade-to-pro">Desarrollo</a></li>
              @endcan
            </ul>
            <ul class="nav navbar-nav float-xs-right">           
              <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span><span class="user-name">{{ auth()->user()->name }}</span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="dropdown-divider"></div><a href="{{ route('logout') }}" class="dropdown-item"><i class="icon-power3"></i> Cerrar sesión </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- main menu-->
    <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
      <!-- main menu header-->
      <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round"/>
      </div>
      <!-- / main menu header-->
      <!-- main menu content-->
      <div class="main-menu-content">
    
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          
          <!-- main menu de cada modulo-->          
          @yield('menu')
           <!-- / main menu de cada modulo-->
          
        </ul>
      </div>
      <!-- /main menu content-->
      <!-- main menu footer-->
      <!-- include includes/menu-footer-->
      <!-- main menu footer-->
    </div>
    <!-- / main menu-->

    <div class="app-content content container-fluid">

      <div class="content-wrapper">
        @yield('content')
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border">
      <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2018 <a href="https://www.electroventas.cl/" target="_blank" class="text-bold-800 grey darken-2">Electroventas</a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Admin by
      <i class="fas fa-users-cog"></i></span></p>
    </footer>

    <!-- BEGIN JS-->
    <script src="{{asset('js/libs.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <!-- END JS-->
  </body>
</html>
