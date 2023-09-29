<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
  <title>
    @yield('title','Tempatnya Kuli Jawa')
  </title>
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Icons -->
  <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link rel="stylesheet" href="{{asset('assets/css/nucleo-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/nucleo-svg.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('assets/css/font-awesome.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/nucleo-svg.css')}}">
  <!-- CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/css/argon-design-system.css?v=1.2.2')}}">
</head>

<body class="index-page">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg bg-default position-sticky top-0">
    <div class="container">
      <a class="navbar-brand mr-lg-5" href="/userhome">
        <img src="{{asset('assets/img/brand/tkjlogo4.png')}} ">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="{{asset('assets/img/brand/tkjlogo4.png')}}">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item">
                <a class="nav-link nav-link-icon" href="https://www.facebook.com/CreativeTim/" target="_blank" data-toggle="tooltip" title="Like us on Facebook">
                  <i class="fa fa-facebook-square"></i>
                  <span class="nav-link-inner--text d-lg-none">Facebook</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
                  <i class="fa fa-instagram"></i>
                  <span class="nav-link-inner--text d-lg-none">Instagram</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
                  <i class="fa fa-twitter-square"></i>
                  <span class="nav-link-inner--text d-lg-none">Twitter</span>
                </a>
              </li>
              @if (Auth::check())
              @else
            <li class="nav-item">
            <a class="btn btn-outline-primary" href="{{ route('login') }}" target="_blank">
                <span class="nav-link-inner--text">Login</span>
            </a>
            </li>

            <li class="nav-item d-none d-lg-block">
            <a href="{{ route('register') }}" target="_blank" class="btn btn-primary btn-icon">
                <span class="btn-inner--icon">
                    <i class="ni ni-circle-08"></i>
                </span>
                <span class="nav-link-inner--text">Sign Up</span>
            </a>
            </li>
            @endif
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="section section-hero section-shaped">
      <div class="shape shape-style-1 shape-primary">
        <span class="span-150"></span>
        <span class="span-50"></span>
        <span class="span-50"></span>
        <span class="span-75"></span>
        <span class="span-100"></span>
        <span class="span-75"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
      </div>
      <!-- Page Header -->
      <div class="page-header">
        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-15 text-center">
                <img src="{{asset('assets/img/brand/tkjlogo4.png')}}"style="width: 350px;" class="img-fluid">
                <h2 class="display-3 mb-0">PESAN SEKARANG LAYANAN TERBAIK TKJ </h2>
                <p class="lead text-white">Layanan kami menjangkau seluruh wilayah di JAWA TIMUR</p>
                <div>
                    <a></a>
                    <a></a>
                  </div>
                  <div></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Section isi home -->
    @yield('home')

</body>
 <!--   Core JS Files   -->
 <script src="{{asset('assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
 <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
 <script src="{{asset('assets/js/plugins/bootstrap-switch.js')}}"></script>
 <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
 <script src="{{asset('assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/js/plugins/moment.min.js')}}"></script>
 <script src="{{asset('assets/js/plugins/datetimepicker.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/js/plugins/bootstrap-datepicker.min.j')}}"></script>
 <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
 <!--  Google Maps Plugin    -->
 <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
 <script src="{{asset('assets/js/argon-design-system.min.js?v=1.2.2')}}" type="text/javascript"></script>
 <script>
   function scrollToDownload() {

     if ($('.section-download').length != 0) {
       $("html, body").animate({
         scrollTop: $('.section-download').offset().top
       }, 1000);
     }
   }

 </script>
 <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
 <script>
   window.TrackJS &&
     TrackJS.install({
       token: "ee6fab19c5a04ac1a32a645abde4613a",
       application: "argon-design-system-pro"
     });
 </script>

</html>

