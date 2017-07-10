@extends('master.layouts.master')

@section('title','Tambah Paket - Master Az Zahra')

@section('content')
  <section id="funfacts" class="root-sec grey lighten-5 funfact-wrap">
    <div class="sec-inner padd-tb-120">
      <div class="container">
        <div class="row">
          <div class="funfact-inner">

            <div class="col-md-6 col-md-offset-3 funfact-box">
              <div class="card-panel white">
                <h3 class="about-subtitle">{{$bundle->nama}}</h3>
                <ul class="grey-text text-darken-1" style="margin-bottom:30px">
                    @foreach ($bundle->services as $bundleservice)
                      <li>{{$bundleservice->nama}}</li>
                    @endforeach
                </ul>
                <form method="POST" action="{{ route('master.addBundleService.submit') }}">
                    {{ csrf_field() }}

                  <input type="hidden" name="bundle" value="{{$bundle->id_bundle}}">
                  <div class="input-field grey-text text-darken-1">
                    <select name="service">
                      <option value="" disabled selected>Pilih Layanan</option>
                      @foreach ($service as $service)
                        <option value="{{ $service->id_service}}">{{$service->nama}}</option>
                      @endforeach
                    </select>
                    <label>Layanan</label>
                  </div>
                  <div class="row center-align" style="margin-top:30px">
                    <div class="col-sm-6">
                      <button class="btn waves-effect waves-light brand-bg white-text regular-text" type="submit" name="action">Tambah</button>
                    </div>
                    <div class="col-sm-6">
                      <a href="{{route('master.service')}}" class="btn waves-effect waves-light brand-bg white-text regular-text">Selesai</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>

      </div>
      <!-- .container end -->
    </div>
  </section>

@endsection

@section('js')
  <script type="text/javascript">
  $(document).ready(function() {
    $('select').material_select();
  });
  </script>
@endsection
