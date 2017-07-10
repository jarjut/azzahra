@extends('layouts.master')
@section('title','Az Zahra Muslimah Salon and Spa')

@section('navbar')
  <li><a href="#about" data-section="#about" class="menu-smooth-scroll"><i class="fa fa-user fa-fw"></i>Tentang Kami</a>
  </li>
  <li><a href="#services" data-section="#services" class="menu-smooth-scroll"><i class="fa fa-list fa-fw"></i>Layanan</a>
  </li>
  <li><a href="#bundles" data-section="#bundles" class="menu-smooth-scroll"><i class="fa fa-list fa-fw"></i>Paket</a>
  </li>
  <li><a href="#testimonial" data-section="#testimonial" class="menu-smooth-scroll"><i class="fa fa-comments fa-fw"></i>Testimonial</a>
  </li>
  <li><a href="#contact" data-section="#contact" class="menu-smooth-scroll"><i class="fa fa-phone-square fa-fw"></i>Contact</a>
  </li>
  <li><a href="{{ route('reservation') }}"><i class="fa fa-handshake-o fa-fw"></i>Reservasi</a>
  </li>
@endsection


@section('content')
<!-- Home Section start -->
<section id="home" class="scroll-section root-sec grey lighten-5 home-wrap">
  <div class="sec-overlay">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="home-inner">
            <div class="center-align home-content">
              <h1 class="home-title">Az <span>Zahra</span></h1>
              <h2 class="home-subtitle">Muslimah Salon and Spa</h2>
              <a href="{{route('reservation')}}" class="btn waves-effect waves-light btn-large brand-bg white-text regular-text">Reservasi <i class="mdi-content-send left"></i>
                      </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- .container end -->
    <div class="section-call-to-area">
      <div class="container">
        <div class="row">
          <a href="#about" class="btn-floating btn-large button-middle call-to-about section-call-to-btn animated btn-up btn-hidden" data-section="#about">
                  <i class="mdi-navigation-expand-more"></i>
                </a>
        </div>
      </div>
      <!-- .container end -->
    </div>
  </div>
</section>
<!-- #home Section end -->

<!-- About Section start -->
<section id="about" class="scroll-section root-sec padd-tb-60 grey lighten-5 about-wrap">
  <div class="container">
    <div class="row">
      <div class="clearfix about-inner">

        <div class="col-sm-12 col-md-8">
          <div class="person-about">
            <h3 class="about-subtitle">Azzahra Salon and Spa</h3>
            <p>Dalam menghadapi rutinitas sehari-hari sebagai wanita berhijab memang tak mudah, kadang kita butuh <i style="font-style: italic;">Me Time</i> untuk meluangkan waktu menenangkan diri dan menyegarkan pikiran. Azzahra Muslimah Salon and Spa, merupakan salon kecantikan khusus untuk muslimah dengan pelayanan yang lengkap dan berkualitas, dengan demikian, muslimah bisa melakukan perawatan kecantikan, tidak hanya cantik fisik tetapi juga cantik dari dalam. Didirikan sejak 9 Oktober 2015 dengan beragam layanan seperti perawatan rambut, wajah, tangan dan kaki, dan tubuh.</p>
            {{-- <a class="waves-effect waves-light btn-large brand-bg white-text"><i class="mdi-content-archive left"></i> Download Resume</a> --}}
          </div>
        </div>
        <!-- about me description -->


        <div class="col-sm-12 col-md-4">
          <div class="person-info">
            <h3 class="about-subtitle">Jam Kerja</h3>
            <table>
            <tr>
              <td><h5><span>Senin - Sabtu :</span></h5></td>
              <td><h5>10AM - 8PM</h5></td>
            </tr>
            <tr>
              <td><h5><span>Minggu :</span></h5></td>
              <td><h5>Tutup</h5></td>
            </tr>
            </table>
          </div>
        <!-- about me info -->

      </div>
    </div>
  </div>
  <!-- .container end -->
</section>
<!-- #about Section end -->


<!-- #services section start -->
<section id="services" class="scroll-section root-sec padd-tb-120 brand-bg experience-wrap">
  <div class="container">
    <div class="row">
      <div class="blog-inner">
        <div class="col-sm-12 card-box-wrap">
          <div class="row">
            <div class="clearfix section-head blog-text">
              <div class="col-sm-10">
                <h2 class="title">Layanan</h2>
                <p class="regular-text"></p>
              </div>
            </div>
            <div class="clearfix card-element-wrapper" id="blog-posts">
              <article class="col-sm-6 col-md-4 single-card-box single-post">
                <div class="card wow fadeInUpSmall" data-wow-duration=".7s">
                  <div class="card-image">
                    <div class="card-img-wrap">
                      <div class="blog-post-thumb waves-effect waves-block waves-light">
                        <a href="{{route('service')}}"><img class="activator" src="{{asset('images/hair.jpg')}}" alt="">
                              </a>
                      </div>
                      <div class="post-body">
                        <a href="{{route('service')}}" class="post-title-link brand-text"><h2 class="post-title">Hair Treatment</h2></a>
                        <p class="post-content">Cuci - Gunting, Creambath, Hair Spa, Hair Mask, HairLoss, . . . .</p>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix card-content">
                    <a href="{{route('service')}}" class="brand-text right waves-effect">Read More</a>
                  </div>
                </div>
              </article>
              <!-- ./single blog post end -->
              <article class="col-sm-6 col-md-4  single-card-box single-post">
                <div class="card wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                  <div class="card-image">
                    <div class="card-img-wrap">
                      <div class="blog-post-thumb waves-effect waves-block waves-light">
                        <a href="{{route('service')}}"><img class="activator" src="{{asset('images/face.jpg')}}" alt="">
                              </a>
                      </div>
                      <div class="post-body">
                        <a href="{{route('service')}}" class="post-title-link brand-text"><h2 class="post-title">Face Treatment</h2></a>
                        <p class="post-content">Make up, Facial, Masker Wajah, Totok Wajah Setrika Wajah . . . </p>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix card-content">
                    <a href="{{route('service')}}" class="brand-text right waves-effect">Read More</a>
                  </div>
                </div>
              </article>
              <!-- ./single blog post end -->
              <article class="col-sm-6 col-md-4 single-card-box single-post">
                <div class="card wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
                  <div class="card-image">
                    <div class="card-img-wrap">
                      <div class="blog-post-thumb waves-effect waves-block waves-light">
                        <a href="{{route('service')}}"><img class="activator" src="{{asset('images/handsandfeet.jpg')}}" alt="">
                              </a>
                      </div>
                      <div class="post-body">
                        <a href="{{route('service')}}" class="post-title-link brand-text"><h2 class="post-title">Hands and Feet Treatment</h2></a>
                        <p class="post-content">Pedicure, Menicure, Refleksi, Massage, Bleaching . . . </p>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix card-content">
                    <a href="{{route('service')}}" class="brand-text right waves-effect">Read More</a>
                  </div>
                </div>
              </article>
              <!-- ./single blog post end -->
            </div>
            <div class="clearfix left-align">
              <div class="col-sm-12">
                <a href="{{ route('service') }}" class="waves-effect waves-light btn-large load-more">See More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- #services section end -->

<!-- Bundles Section start -->
<section id="bundles" class="scroll-section root-sec grey lighten-5 padd-tb-120 education-wrap">
  <div class="container">
    <div class="row">
      <div class="blog-inner">
        <div class="col-sm-12 card-box-wrap">
          <div class="row">
            <div class="clearfix section-head blog-text">
              <div class="col-sm-10">
                <h2 class="title">Paket Cantik</h2>
                <p class="regular-text">Kami menyediakan berbagai paket dengan harga yang lebih murah.</p>
              </div>
            </div>
            <div class="clearfix card-element-wrapper" id="blog-posts">
              <article class="col-sm-6 col-md-4 single-card-box single-post">
                <div class="card wow fadeInUpSmall" data-wow-duration=".7s">
                  <div class="card-image">
                    <div class="card-img-wrap">
                      <div class="blog-post-thumb waves-effect waves-block waves-light">
                        <a href="{{route('bundle')}}"><img class="activator" src="{{asset('images/bundle.jpg')}}" alt="">
                              </a>
                      </div>
                      <div class="post-body">
                        <a href="{{route('bundle')}}" class="post-title-link brand-text"><h2 class="post-title">AzZahra Face Spa</h2></a>
                        <p class="post-content">Masker Wajah + Totok Wajah + Refleksi .............................</p>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix card-content">
                    <a href="{{route('bundle')}}" class="brand-text right waves-effect">Read More</a>
                  </div>
                </div>
              </article>
              <!-- ./single blog post end -->
              <article class="col-sm-6 col-md-4  single-card-box single-post">
                <div class="card wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                  <div class="card-image">
                    <div class="card-img-wrap">
                      <div class="blog-post-thumb waves-effect waves-block waves-light">
                        <a href="{{route('bundle')}}"><img class="activator" src="{{asset('images/bundle.jpg')}}" alt="">
                              </a>
                      </div>
                      <div class="post-body">
                        <a href="{{route('bundle')}}" class="post-title-link brand-text"><h2 class="post-title">AzZahra Body Spa</h2></a>
                        <p class="post-content">Masker Body + Body Scrup + Body Massage + Body Steam + Rendam Rempah</p>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix card-content">
                    <a href="{{route('bundle')}}" class="brand-text right waves-effect">Read More</a>
                  </div>
                </div>
              </article>
              <!-- ./single blog post end -->
              <article class="col-sm-6 col-md-4 single-card-box single-post">
                <div class="card wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
                  <div class="card-image">
                    <div class="card-img-wrap">
                      <div class="blog-post-thumb waves-effect waves-block waves-light">
                        <a href="{{route('bundle')}}"><img class="activator" src="{{asset('images/bundle.jpg')}}" alt="">
                              </a>
                      </div>
                      <div class="post-body">
                        <a href="{{route('bundle')}}" class="post-title-link brand-text"><h2 class="post-title">Paket Assadina</h2></a>
                        <p class="post-content">Creambath + Facial + Pedicure + Menicure + Lulur Spa</p>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix card-content">
                    <a href="{{route('bundle')}}" class="brand-text right waves-effect">Read More</a>
                  </div>
                </div>
              </article>
              <!-- ./single blog post end -->
            </div>
            <div class="clearfix left-align">
              <div class="col-sm-12">
                <a href="{{ route('bundle') }}" class="waves-effect waves-light btn-large load-more">See More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- #bundles Section end -->

<!-- Testimonial Section end -->
<section id="testimonial" class="scroll-section root-sec brand-bg padd-tb-120 testimonial-wrap">
  <div class="container">
    <div class="row">
      <div class="testimonial-inner">
        <div class="col-sm-12 col-md-10 card-box-wrap">
          <div class="row">
            <div class="clearfix section-head testimonial-text">
              <div class="col-sm-12">
                <h2 class="title">Testimonial</h2>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="overflow-hidden">
                <div class="row">

                  <div id="testimonialSlider" class="clearfix card-element-wrapper">
                    <div class="col-sm-6 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                          <div class="card-img-wrap">
                            <img class="activator" src="materialx/example/images/avatar.png" alt="">
                            <p class="saying-about">Pegawainya ramah-ramah, bikin betah pas nyalon.</p>
                          </div>
                        </div>
                        <div class="card-content">
                          <span class="card-title activator brand-text">Fitriya -</span>
                          <a href="#">Mahasiswa Unair</a>
                        </div>
                      </div>
                    </div>
                    <!-- ./single testimonial box -->
                    <div class="col-sm-6 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                          <div class="card-img-wrap">
                            <img class="activator" src="materialx/example/images/avatar.png" alt="">
                            <p class="saying-about">Nyalon disini nggak bikin kantong bolong.</p>
                          </div>
                        </div>
                        <div class="card-content">
                          <span class="card-title activator brand-text">Sulistyowati -</span>
                          <a href="#">Mahasiswa Unair</a>
                        </div>
                      </div>
                    </div>
                    <!-- ./single testimonial box -->
                    <div class="col-sm-6 single-card-box">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                          <div class="card-img-wrap">
                            <img class="activator" src="materialx/example/images/avatar.png" alt="">
                            <p class="saying-about">Pelayanannya terbaik.</p>
                          </div>
                        </div>
                        <div class="card-content">
                          <span class="card-title activator brand-text">Rini Sutisno -</span>
                          <a href="#">Mahasiswa Unair</a>
                        </div>
                      </div>
                    </div>
                    <!-- ./single testimonial box -->
                  </div>
                  <!-- #testimonialSlider end -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="btn-wrapp tmo-ctrl">
          <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
          <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- ./container end -->
</section>
<!-- #testimonial Section end -->

<!-- Contact Section end -->
<section id="contact" class="scroll-section root-sec brand-bg padd-tb-120 contact-wrap">
  <div class="container">
    <div class="row">
      <div class="contact-inner">
        <div class="col-sm-12 card-box-wrap">
          <div class="row">
            <div class="clearfix section-head contact-text">
              <div class="col-sm-12">
                <h2 class="title">Contact</h2>
                <p class="regular-text">Jika ada pesan atau keluhan silahkan hubungi kami</p>
              </div>
            </div>
            <!-- contact text end -->

            <div class="clearfix contact-form">

            <!-- Contact Form start -->
            <div class="col-sm-5">
              <div class="clearfix card-panel grey lighten-5 cform-wrapper">
                <div class="person-info">
                  <h3 class="about-subtitle">Kantor Cabang Utama</h3>
                  <h5><span>Alamat :</span> Kampus C Mulyorejo, Surabaya Indonesia</h5>
                  <h5><span>Telp :</span> +62 8501 2345678</h5>
                  <h5><span> </span> +62 8508 7654321</h5>
                  <h5><span>Email :</span> customerservice@azzahra.com</h5>
                </div>
              </div>
            </div>
            <!-- ./contact form end -->
              <!-- Map Start -->
              <div class="col-sm-7">
                <div class="map-wrapper">
                  <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ46FNOYj51y0R-r7s_BJaq20&key=AIzaSyCj8eTDsAVHIy-YBQm95o0M7CzD_7NbEL4" allowfullscreen></iframe>
                </div>
              </div>
              <!-- Map end -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ./container end -->
  <div class="section-call-to-area">
    <div class="container">
      <div class="row">
        <a href="#home" class="btn-floating btn-large button-middle call-to-home section-call-to-btn animated btn-up btn-hidden" data-section="#home">
                <i class="mdi-navigation-expand-less"></i>
              </a>
      </div>
    </div>
  </div>
</section>
<!-- #contact Section end -->

@endsection

@section('js')
  <script type="text/javascript">
    $('#loginpopover').webuiPopover({url:'#loginContent', animation:'pop'});
  </script>
@endsection
