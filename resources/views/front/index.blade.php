@extends('layouts.front')

@section('title',config('app.name'))

@section('content')
  <div class="intro-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="intro-message">
            <h1>
              Diligent <br>Personal <br>Shopper
            </h1>
            <!--
            <a href="#services" class="btn btn-float services link-scroll">Services</a>
            -->
          </div>
        </div>
      </div>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.intro-header -->

  <!-- Page Content -->
  <div id="services" class="content-section-insurance">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <hr class="section-heading-spacer">
          <div class="clearfix"></div>
          <h2 class="section-heading" style="color:#fff">Insurance Products</h2>

          <div class="col-md-12">
            <div class="col-xs-6 col-md-2 col-md-offset-1">
              <div class="menu-item item-index">
                <a href="{{ url('/accident-quote') }}">
                  <div class="container-img">
                    <img src="img/car-collision.png" alt="Accidents">
                  </div>
                  <h4>Accidents Claim</h4>
                </a>
              </div>
            </div>
            <div class="col-xs-6 col-md-2">
              <div class="menu-item item-index">
                <a href="{{ url('/car') }}">
                  <div class="container-img">
                    <img src="img/car.png" alt="Car">
                  </div>
                  <h4>Car Insurance</h4>
                </a>
              </div>
            </div>
            <div class="col-xs-6 col-md-2">
              <div class="menu-item item-index">
                <a href="{{ url('/van') }}">
                  <div class="container-img">
                    <img src="img/van.png" alt="Van">
                  </div>
                  <h4>Van Insurance</h4>
                </a>
              </div>
            </div>
            <div class="col-xs-6 col-md-2">
              <div class="menu-item item-index">
                <a href="{{ url('/home') }}">
                  <div class="container-img">
                    <img src="img/home-insurance.png" alt="House">
                  </div>
                  <h4>Home Insurance</h4>
                </a>
              </div>
            </div>
            <div class="col-xs-6 col-md-2">
              <div class="menu-item item-index">
                <a href="{{ url('/business') }}">
                  <div class="container-img">
                    <img src="img/business.png" alt="Business">
                  </div>
                  <h4>Business Insurance</h4>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.Services -->

  <div id="about" class="content-section-a">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-sm-6">
          <hr class="section-heading-spacer">
          <div class="clearfix"></div>
          <h2 class="section-heading">About Us</h2>
          <p class="lead text-justify">
            We are a service based company working on your behalf to provide tailored quote services 
            (Please refer to terms and conditions for more clarification). Based on the details given,
            we can provide you with free no obligation Tailored Quotes from various companies at affordable prices.
            As long as you authorize us and provide us with accurate information.
          </p>
        </div>

        <div class="col-lg-5 col-lg-offset-2 col-sm-6">
          <img class="img-responsive" src="img/aboutus.jpg" alt="">
        </div>
      </div>
    </div>
    <!-- /.container -->
  </div>
  <!-- /About us -->

  <div class="content-section-records">
    <div class="container">
      <div class="record row">
        <div class="col-xs-6 col-md-2 col-md-offset-2">
          <div class="records">
            <p class="record-badge">230</p>
            <img src="img/diploma.png" alt="">
            <p>Contrats signed</p>
          </div>
        </div>
        <div class="col-xs-6 col-md-2">
          <div class="records">
            <p class="record-badge">230</p>
            <img src="img/car-insurance.png" alt="">
            <p>Protected vehicles</p>
          </div>
        </div>
        <div class="col-xs-6 col-md-2">
          <div class="records">
            <p class="record-badge">56</p>
            <img src="img/house.png" alt="">
            <p>Protected houses</p>
          </div>
        </div>
        <div class="col-xs-6 col-md-2">
          <div class="records">
            <p class="record-badge">56</p>
            <img src="img/businessman.png" alt="">
            <p>Protected business</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="contact" class="banner">

    <div class="container">

      <div class="row">
        <div class="col-lg-4">
          <h2 class="text-center">Get in touch</h2><br><br>
          <div class="col-md-8 col-md-offset-2">
            <img class="img-responsive" src="img/arroba.svg" alt="">
          </div>
        </div>
        <div class="col-lg-8">
          <div class="col-md-12">
            <div style="margin-top:90px;">
              <div class="col-md-4" style="margin-top:10px">
                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
              </div>
              <div class="col-md-4" style="margin-top:10px">
                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
              </div>
              <div class="col-md-4" style="margin-top:10px">
                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-instagram fa-fw"></i> <span class="network-name">Instagam</span></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-md-offset-3" style="margin-top:50px">
            <ul class="contact-info">
              <li><i class="fa fa-envelope fa-fw"></i>&nbsp;mail@example.com<br></li>
              <li><i class="fa fa-phone fa-fw"></i>&nbsp;123 456 7890<br></li>
              <li>
                <i class="fa fa-map-marker fa-fw"></i>
                  103 Reddish Lane<br>
                  Manchester<br>
                  Denton – M34 2NF
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>
    <!-- /.container -->

  </div>
  <!-- /.Contact -->

  <!--Scroll top link-->
  <span class="scrolltop"><a class="link-scroll" href="#main-body"><i class="fa fa-chevron-up"></i></a></span>

@section('scripts')
  <script type="text/javascript">
    //Scroll top button
    $(window).ready(function(){

      var $root = $('body'),  
          $sS   = $('#services').offset().top+250,
          $sR   = $('.content-section-records').offset().top+250;

      $(window).scroll(function(){
        var wH = $root.height(),
            wS = $(this).scrollTop();

        (wS > $('a.services'))?$('a.services').fadeOut(300):$('a.services').fadeIn(300);

        if(wS > ($sS-wH)){
          $('.menu-item').show().addClass('animated fadeInLeft'); $('.scrolltop a').fadeIn(300);
        }else{
          $('.scrolltop a').fadeOut(300);
        }

        if(wS > ($sR-wH)){ $('.records').show().addClass('animated fadeInLeft'); }
      });

      $('.link-scroll').click(function() {
        console.log(this.href);
          $root.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
          }, 500);
        return false;
      });
    })
  </script>
@endsection