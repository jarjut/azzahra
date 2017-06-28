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
  <link rel="shortcut icon" href="images/favicon.png" >

  <!-- Stylesheets -->
  <link rel="stylesheet" href="materialx/css/normalize.css">
  <link rel="stylesheet" href="materialx/font/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="materialx/libs/materialize/css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="materialx/css/bootstrap.css" media="screen,projection" />

  <link rel="stylesheet" href="materialx/css/animate.min.css" media="screen,projection" />
  <link rel="stylesheet" href="materialx/libs/sweetalert/sweet-alert.css" media="screen,projection" />

  <link rel="stylesheet" href="materialx/libs/owl-carousel/owl.carousel.css" media="screen,projection" />
  <link rel="stylesheet" href="materialx/libs/owl-carousel/owl.transitions.css" media="screen,projection" />
  <link rel="stylesheet" href="materialx/libs/owl-carousel/owl.theme.css" media="screen,projection" />

  <link rel="stylesheet" href="materialx/css/main.css">
  <link rel="stylesheet" href="materialx/css/responsive.css">

  <!-- Choose your default colors -->
  <link rel="stylesheet" href="materialx/css/colors/color1.css">
  <!-- <link rel="stylesheet" href="materialx/css/colors/color2.css"> -->
  <!-- <link rel="stylesheet" href="materialx/css/colors/color3.css"> -->
  <!-- <link rel="stylesheet" href="materialx/css/colors/color4.css"> -->
  <!-- <link rel="stylesheet" href="materialx/css/colors/color5.css"> -->
  <!-- <link rel="stylesheet" href="materialx/css/colors/color6.css"> -->
  <!-- <link rel="stylesheet" href="materialx/css/colors/color7.css"> -->
  <!-- <link rel="stylesheet" href="materialx/css/colors/color8.css"> -->

  <!--[if lt IE 9]>
      <script src="materialx/js/html5shiv.js"></script>
  <![endif]-->
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
                  <a href="#home" class="left brand-logo menu-smooth-scroll" data-section="#home"><img src="images/logo.png" alt="">
                  </a>
                  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                  <ul class="right static-menu">
                    <li class="search-form-li">
                      <a id="initSearchIcon" class=""><i class="mdi-action-search"></i> </a>
                      <div class="search-form-wrap hide">
                        <form action="#" class="">
                          <input type="search" class="search">
                          <button type="submit"><i class="mdi-action-search"></i>
                          </button>
                        </form>
                      </div>
                    </li>
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
                            <img src="images/person.png" alt="">
                        </div>
                        <h3>John Doe</h3>
                        <h5>Creative UI/UX Expert</h5>
                      </div>
                    </li><!-- mini profile end-->


                    <li><a href="#about" data-section="#about" class="menu-smooth-scroll"><i class="fa fa-user fa-fw"></i>About Me</a>
                    </li>
                    <li><a href="#resume" data-section="#resume" class="menu-smooth-scroll"><i class="fa fa-file-text fa-fw"></i>Resume</a>
                    </li>
                    <li><a href="#portfolio" data-section="#portfolio" class="menu-smooth-scroll"><i class="fa fa-briefcase fa-fw"></i>Portfolio</a>
                    </li>
                    <li><a href="#team" data-section="#team" class="menu-smooth-scroll"><i class="fa fa-users fa-fw"></i>Team</a>
                    </li>
                    <li><a href="#testimonial" data-section="#testimonial" class="menu-smooth-scroll"><i class="fa fa-comments fa-fw"></i>Testimonial</a>
                    </li>
                    <li><a href="#blog" data-section="#blog" class="menu-smooth-scroll"><i class="fa fa-pencil fa-fw"></i>Blog</a>
                    </li>
                    <li><a href="#contact" data-section="#contact" class="menu-smooth-scroll"><i class="fa fa-paper-plane fa-fw"></i>Contact</a>
                    </li>
                  </ul>
                  <ul id="dropdown1" class="inline-menu submenu-ul dropdown-content">
                    <li>Home</li>
                    <li><a href="blog.html">All Blog</a>
                    </li>
                    <li><a href="blog-with-sidebar.html">Blog with Sidebar</a>
                    </li>
                    <li><a href="single.html">Single Blog</a>
                    </li>
                  </ul>

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
                <li><a href="#" class="tooltips tooltipped linkedin" data-position="top" data-delay="50" data-tooltip="Linkdin"><i class="fa fa-linkedin"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped twitter" data-position="top" data-delay="50" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped google-plus" data-position="top" data-delay="50" data-tooltip="Google Plus"><i class="fa fa-google-plus"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped dribbble" data-position="top" data-delay="50" data-tooltip="Dribbble"><i class="fa fa-dribbble"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped behance" data-position="top" data-delay="50" data-tooltip="Behance"><i class="fa fa-behance"></i></a>
                </li>
              </ul> <!-- ./social icons end -->
              <div class="right copyright">
                <p>MaterialX &copy; All Rights Reserved</p>
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
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="materialx/js/jquery.easing.1.3.js"></script>
  <script src="materialx/js/detectmobilebrowser.js"></script>
  <script src="materialx/js/isotope.pkgd.min.js"></script>
  <script src="materialx/js/wow.min.js"></script>
  <script src="materialx/js/waypoints.js"></script>
  <script src="materialx/js/jquery.counterup.min.js"></script>
  <script src="materialx/js/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
  <script src="materialx/js/gmaps.js"></script>
  <script src="materialx/libs/owl-carousel/owl.carousel.min.js"></script>
  <script src="materialx/libs/materialize/js/materialize.min.js"></script>
  <script src="materialx/libs/jwplayer/jwplayer.js"></script>
  <script src="materialx/libs/sweetalert/sweet-alert.min.js"></script>
  <script src="materialx/js/common.js"></script>
  <script src="materialx/js/main.js"></script>
</body>

</html>
