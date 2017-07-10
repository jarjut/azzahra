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
                  <table class="table bordered grey-text text-darken-3">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Tanggal</th>
                        <th>Customer</th>
                        <th>Layanan</th>
                        <th>Paket</th>
                        <th>Jumlah</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($pembayaran as $pembayaran)
                          <tr onclick="document.location = '{!!URL::to('admin/pembayaranConfirm')!!}/{{$pembayaran->id_pembayaran}}';">
                            <td>{{$pembayaran->id_pembayaran}}</td>
                            <td>{{$pembayaran->tanggal}}</td>
                            <td>{{$pembayaran->nama}}</td>
                            @if (!empty($pembayaran->service))
                              <td>{{$pembayaran->service->nama}}</td>
                            @else
                              <td> - </td>
                            @endif

                            @if (!empty($pembayaran->bundle))
                              <td>{{$pembayaran->bundle->nama}}</td>
                            @else
                              <td> - </td>
                            @endif
                            @if (!empty($pembayaran->service))
                              <td>{{$pembayaran->service->harga}}</td>
                            @else
                              <td>{{$pembayaran->bundle->harga}}</td>
                            @endif
                          </tr>
                      @endforeach
                    </tbody>
                </div>
                </table>
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
