@extends('layouts.single')
@section('title','Paket - Az Zahra')

@section('content')
  <section class="scroll-section root-sec white portfolio-wrap">
    <div class="padd-tb-120 brand-bg portfolio-top">
      <div class="portfolio-inner">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="title">Paket Cantik</h2>
            </div>
          </div>
        </div>
      </div>
      <!-- .container end -->
    </div>

    <div class="portfolio-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <ul class="clearfix bundle-item" id="protfolio-msnry">

              @foreach ($bundle as $bundle)
              <!-- Single Portfolio-->
              <li class="single-port-item category-1 category-3">
                <div class="single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                  <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <div class="card-img-wrap">
                        <img class="activator" src="{{asset('images/bundle.jpg')}}" alt="">
                      </div>
                    </div>
                    <div class="card-content">
                      <span class="card-title activator brand-text">{{$bundle->nama}}<i class="mdi-navigation-more-vert right"></i></span>
                      <p>Rp {{$bundle->harga}}</p>
                    </div>
                    <div class="card-reveal">
                      <div class="rev-title-wrap">
                        <span class="card-title activator brand-text">{{$bundle->nama}}<i class="mdi-navigation-close right"></i></span>
                        <p>Rp {{$bundle->harga}}</p>
                      </div>
                      <div class="rev-title-wrap">
                        <span class="card-title brand-text">Daftar Layanan</span>
                      </div>
                      <div class="rev-content">
                        @foreach ($bundle->services as $service)
                          <h5>{{$service->nama}}</h5>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <!--/ single portfolio -->


              @endforeach

            </ul>
            <!-- portfolio load more button-->
            <a href="{{ route('reservation')}}" class="hire-me-btn btn waves-effect waves-light btn-large brand-bg white-text regular-text">Reservasi <i class="mdi-content-send left"></i>
                </a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
