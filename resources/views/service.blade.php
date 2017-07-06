@extends('layouts.single')
@section('title','Layanan - Az Zahra')

@section('content')
  <section class="scroll-section root-sec white portfolio-wrap">
    <div class="padd-tb-120 brand-bg portfolio-top">
      <div class="portfolio-inner">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="title">LAYANAN</h2>
              <ul class="inline-menu clearfix portfolio-category" id="portfolio-msnry-sort">
                <li class="active"><a href="#" data-target="*">All</a>
                </li>
                @foreach ($category as $jenis)
                  <li><a href="#" data-target=".{{$jenis->id_category}}">{{$jenis->nama}}</a>
                  </li>
                @endforeach
              </ul>
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
            <ul class="clearfix category-item" id="protfolio-msnry">

              @foreach ($category as $category)
              <!-- Single Portfolio-->
              <li class="single-port-item {{$category->id_category}}">

                  <div class="layanan-info">
                    <h3 class="about-subtitle">{{$category->nama}} Treatment</h3>
                    @foreach ($category->services as $services)
                        <h5><span>{{$services->nama}}</span> Rp {{$services->harga}},-</h5>
                    @endforeach
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
