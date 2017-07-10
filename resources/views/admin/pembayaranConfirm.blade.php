@extends('admin.layouts.master')

@section('title','Pembayaran - Admin AzZahra')

@section('content')
  <!-- Home Section start -->
<section id="funfacts" class="root-sec grey lighten-5 funfact-wrap">
  <div class="sec-inner padd-tb-120">
    <div class="container">
      <div class="row">
        <div class="funfact-inner">

          <div class="col-md-10 col-md-offset-1 funfact-box">
            <div class="card-panel white">
              <h3 class="dashboard-title">Pembayaran</h3>

              <div style="margin-top:24px">
                <div class="row">
                  <div class="col-sm-6 col-sm-offset-3 pembayaran-detail">
                    <h5><span>Nama:</span>{{$pembayaran->nama}}</h5>
                    @if (!empty($pembayaran->id_service))
                      <h5><span>Layanan:</span>{{$pembayaran->service->nama}}</h5>
                    @else
                      <h5><span>Paket:</span>{{$pembayaran->bundle->nama}}</h5>
                    @endif

                    @if (!empty($pembayaran->id_service))
                      <h5><span>Jumlah:</span>Rp. {{$pembayaran->service->harga}}</h5>
                    @else
                      <h5><span>Jumlah:</span>Rp. {{$pembayaran->bundle->harga}}</h5>
                    @endif

                  </div>
                  <div class="col-sm-6 col-sm-offset-3 center-align" style="margin-top:20px">
                    <a href="{{ route('admin.pembayaranConfirm.submit', ['id' => $pembayaran->id_pembayaran]) }}" class="menu-smooth-scroll" onclick="event.preventDefault();
                             document.getElementById('konfirmasi').submit();"><button type="button" class="btn waves-effect waves-light brand-bg white-text">Konfirmasi Pembayaran</button></a>
                      <form id="konfirmasi" action="{{ route('admin.pembayaranConfirm.submit', ['id' => $pembayaran->id_pembayaran]) }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </div>

                </div>

              </div>
            </div>

          </div>
        </div>

      </div>
      <!-- .container end -->
    </div>
</section>
    <!-- #home Section end -->
@endsection
@section('css')
  <link rel="stylesheet" href="{{ asset('css/materialtable.css') }}">
@endsection
@section('js')
  {{-- Date Picker --}}
  <script type="text/javascript" src="{{asset('js/pickadate.js')}}"></script>
  <script type="text/javascript">
    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      firstDay: 1,
      min: new Date(2015,3,20),
      disable: [0],
      formatSubmit: 'yyyy-mm-dd',
    });
  </script>
  {{-- Date Picker --}}
@endsection
