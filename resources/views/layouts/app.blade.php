<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title',config('app.name'))</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/glyphicons.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="shortcut icon" href="{{asset('img/unnamed.png')}}">

  </head>
  <body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="{{ route('index') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><img class="img-responsive" src="{{ asset('img/logo.png') }}" alt="Logo" style="height:30px;margin:10px 0 0 10px"></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">
            <b style="font-size: 18px">
              <img src="{{ asset('img/logo.png') }}" alt="logo" height="25px">&nbsp;{{ config('app.name') }}
            </b>
          </span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <p>
                      <small>{{ Auth::user()->email }}</small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="submit" name="logout" class="btn btn-default" value="Logout">
                      </form>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENU</li>

            <li>
              <a href="{{ url('/') }}">
                <i class="fa fa-home"></i> <span>Home</span>
              </a>
            </li> 
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-clipboard"></i>
                <span>Insurances</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('index') }}"><i class="fa fa-circle-o"></i> Show All</a></li>
                <li><a href="{{ url('/car') }}"><i class="fa fa-circle-o"></i> Car</a></li>
                <li><a href="{{ url('/van') }}"><i class="fa fa-circle-o"></i> Van</a></li>
                <li><a href="{{ url('/home') }}"><i class="fa fa-circle-o"></i> Home</a></li>
                <li><a href="{{ route('accident_views') }}"><i class="fa fa-circle-o"></i> Accidents</a></li>
                <li><a href="{{ url('/business') }}"><i class="fa fa-circle-o"></i> Business</a></li>
              </ul>
            </li>
            
             <li>
              <a href="#">
                <i class="fa fa-file-pdf-o"></i> <span>Reports</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li> 
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>


       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        @yield('content')
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <strong>Copyright &copy; 2016-2017 <a href="http://www.project4design.com.ve">Project 4 Design C.A</a>.</strong> All rights reserved.
      </footer>
    </div>

      
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>
    
  </body>
</html>
