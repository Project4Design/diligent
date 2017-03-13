<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title',config('app.name'))</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/landing-page.css') }}">
    <!-- Custom Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animated.css') }}">
    <!--Datepicker-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-datepicker3.min.css') }}">
    <!--Timepicker-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-timepicker.min.css') }}">
    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset('js/bootstrap-timepicker.min.js') }}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="main-body">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
      <div class="container topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand topnav" href="{{route('front')}}">
            <span class="pull-left"><img src="img/logo.png" alt="logo" height="35" width="35"></span>
            <span class="pull-left">&nbsp;&nbsp;{{ config('app.name')}}</span>
          </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('front') }}">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Motor <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ url('/car') }}">Car Insurance</a></li>
                <li><a href="{{ url('/van') }}">Van Insurance</a></li>
                <li><a href="#">Commercial Vehicle Insurance</a></li>
                <li><a href="#">Traders Insurance</a></li>
                <li><a href="{{ url('/taxi') }}">Taxi Insurance</a></li>
                <li><a href="{{ url('/fleet') }}">Fleet Insurance</a></li>
              </ul>
            </li>
            <li><a href="{{url('/home') }}">Home &amp; Landlord</a></li>
            <li><a class="link-scroll" href="{{ url('/business') }}">Business</a></li>
            <li><a class="link-scroll" href="{{ url('/') }}#about">About us</a></li>
            <li><a class="link-scroll" href="{{ url('/') }}#contact">Contact us</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 ">
            <h4>Inurance Quotes</h4>
            <ul class="list-unstyled footer-quote-list">
              <li><a href="{{ url('/accident-quote') }}">Accident Quotoe</a></li>
              <li><a href="{{ url('/car-quote') }}">Car Quotoe</a></li>
              <li><a href="{{ url('/van-quote') }}">Van Quotoe</a></li>
              <li><a href="{{ url('/taxi-quote') }}">Taxi Quotoe</a></li>
              <li><a href="{{ url('/home-quote') }}">Home Quotoe</a></li>
              <li><a href="{{ url('/business-quote') }}">Business Quotoe</a></li>
              <li><a href="{{ url('/fleet-quote') }}">Fleet Quotoe</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-md-2 pull-right">
            <div class="redes">
              <h4>Follow us</h4>
              <a href="#"><i class="fa fa-twitter fa-fw"></i></a>
              <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
              <a href="#"><i class="fa fa-instagram fa-fw"></i></a>
            </div>
           </div>
           <div class="col-xs-12 col-md-2 pull-right">
              <h4>Address</h4>
              <p>Liverpool, UK</p>
           </div>
           <div class="col-xs-12 text-center">
              <p class="copyright small">Copyright &copy; <b>Diligent Services</b> 2017. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </footer>

    @yield('scripts')

  </body>
</html>
