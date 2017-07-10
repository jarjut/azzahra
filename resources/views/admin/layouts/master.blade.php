<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicon-->
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >

  <!-- WebUI PopOver Plugin -->
  <link rel="stylesheet" href="{{ asset('webuipopover/jquery.webui-popover.css')}}">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('materialx/css/normalize.css') }}">
  <link rel="stylesheet" href="{{ asset('materialx/font/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('materialx/libs/materialize/css/materialize.min.css') }}" media="screen,projection" />
  <link rel="stylesheet" href="{{ asset('materialx/css/bootstrap.css') }}" media="screen,projection" />

  <link rel="stylesheet" href="{{ asset('materialx/css/animate.min.css') }}" media="screen,projection" />
  <link rel="stylesheet" href="{{ asset('materialx/libs/sweetalert/sweet-alert.css') }}" media="screen,projection" />

  <link rel="stylesheet" href="{{ asset('materialx/libs/owl-carousel/owl.carousel.css') }}" media="screen,projection" />
  <link rel="stylesheet" href="{{ asset('materialx/libs/owl-carousel/owl.transitions.css') }}" media="screen,projection" />
  <link rel="stylesheet" href="{{ asset('materialx/libs/owl-carousel/owl.theme.css') }}" media="screen,projection" />

  <link rel="stylesheet" href="{{ asset('materialx/css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('materialx/css/responsive.css') }}">

  <!-- Choose your default colors -->
  <!-- colors/colorX.css replace X with 1-8 -->
  <link rel="stylesheet" href="{{ asset('materialx/css/colors/color1.css') }}">
  <!--[if lt IE 9]>
      <script src="materialx/js/html5shiv.js"></script>
  <![endif]-->
  @yield('css')
</head>

<body>

  <!-- Preloader -->
    <div id="preloader">
      <div class="loader">
            <svg class="circle-loader" height="50" width="50">
              <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="6" stroke-miterlimit="10" />
            </svg>
        </div>
    </div><!--preloader end-->

  <!-- Main Container -->
  <main id="app" class="main-section">
    <!-- header navigation start -->
    <header id="navigation" class="root-sec white nav">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="nav-inner">
              <nav class="primary-nav">
                <div class="clearfix nav-wrapper">
                  <a href="{{route("admin.home")}}" class="left brand-logo"><img src="{{ asset('images/logo.png')}}" alt="">
                  </a>
                  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                  <ul class="right static-menu">

                    <li>
                      <a class="dropdown-button blog-submenu-init" href="#!" data-activates="dropdown1">
                        <i class="mdi-navigation-more-vert right"></i>
                      </a>
                    </li>
                  </ul>

                  <ul class="inline-menu side-nav" id="mobile-demo">

                  <!-- Mini Profile // only visible in Tab and Mobile -->
                    <li class="mobile-profile">
                     <div class="profile-inner">
                        <div class="pp-container">
                            <img src="{{ asset('images/favicon.ico')}}" alt="">
                        </div>
                        <h3>Admin Az Zahra</h3>
                        <h5>Muslimah Salon and Spa</h5>
                      </div>
                    </li><!-- mini profile end-->


                    {{-- Main Navigation --}}



                    @if (Auth::guard('admin')->check())
                      <li><a href="#"><i class="fa fa-home fa-fw"></i>Cabang {{auth()->guard('admin')->user()->cabang->nama}}</a>
                      </li>
                      <li><a href="{{ route('admin.home') }}" ><i class="fa fa-home fa-fw"></i>Dashboard</a>
                      </li>
                      <li><a href="{{ route('admin.reservation') }}" ><i class="fa fa-handshake-o fa-fw"></i>Reservasi</a>
                      </li>
                      <li><a href="{{ route('admin.pelayanan') }}"><i class="fa fa-id-card-o fa-fw"></i>Pelayanan</a>
                      </li>
                      <li><a href="{{ route('admin.pembayaran') }}"><i class="fa fa-money fa-fw"></i>Pembayaran</a>
                      </li>

                      <li><a href="{{ route('admin.logout') }}" class="menu-smooth-scroll" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();"><i class="fa fa-user fa-fw"></i>Logout</a>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                      </li>
                    @else
                      <li><a href="{{ route('admin.login') }}">Login</a></li>
                    @endif
                    {{-- Main Navigation End --}}
                  </ul>

                  {{-- rightnav 3dot dropdown menu --}}
                  {{-- <ul id="dropdown1" class="inline-menu submenu-ul dropdown-content">

                  </ul> --}}
                  {{--rightnav end--}}

                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- .container end -->
    </header>
    <!-- #header  navigation end -->

    @yield('content')


    <!-- Footer Section end -->
    <footer id="footer" class="root-sec white root-sec footer-wrap">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="clearfix footer-inner">
              <ul class="left social-icons">
                <li><a href="#" class="tooltips tooltipped facebook" data-position="top" data-delay="50" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped twitter" data-position="top" data-delay="50" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped google-plus" data-position="top" data-delay="50" data-tooltip="Google Plus"><i class="fa fa-google-plus"></i></a>
                </li>
              </ul> <!-- ./social icons end -->
              <div class="right copyright">
                <p>Simolas &copy; All Rights Reserved</p>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- ./container end-->
    </footer>
    <!-- #footer end -->

  </main>
  <!-- Main Container end-->


  <!-- JavaScripts -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="{{ asset('materialx/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ asset('materialx/js/detectmobilebrowser.js')}}"></script>
  <script src="{{ asset('materialx/js/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('materialx/js/wow.min.js')}}"></script>
  <script src="{{ asset('materialx/js/waypoints.js')}}"></script>
  <script src="{{ asset('materialx/js/jquery.counterup.min.js')}}"></script>
  <script src="{{ asset('materialx/js/jquery.nicescroll.min.js')}}"></script>
  <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
  <script src="{{ asset('materialx/js/gmaps.js')}}"></script>
  <script src="{{ asset('materialx/libs/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('materialx/libs/materialize/js/materialize.min.js')}}"></script>
  <script src="{{ asset('materialx/libs/jwplayer/jwplayer.js')}}"></script>
  <script src="{{ asset('materialx/libs/sweetalert/sweet-alert.min.js')}}"></script>
  <script src="{{ asset('materialx/js/common.js')}}"></script>
  <script src="{{ asset('materialx/js/main.js')}}"></script>
  <script src="{{ asset('webuipopover/jquery.webui-popover.js')}}"></script>
  @yield('js')

</body>

</html>
