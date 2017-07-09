@extends('master.layouts.master')

@section('title','Pegawai - Master AzZahra')

@section('content')
  <!-- Home Section start -->
  <section id="funfacts" class="root-sec grey lighten-5 funfact-wrap">
    <div class="sec-inner padd-tb-120">
      <div class="container">
        <div class="row">
          <div class="funfact-inner">

            <div class="col-md-10 col-md-offset-1 funfact-box">
              <div class="card-panel white">
                <h3 class="dashboard-title">Pegawai</h3>
                <div class="row dashboard-menu center-align">
                  <div class="col-xs-6">
                    <a href="{{route('master.registerPegawai')}}">
                    <i class="fa fa-user-plus fa-fw "></i>
                    <h3 class="menu-title">Tambah Pegawai</h3>
                    </a>
                  </div>

                  <div class="col-xs-6">
                    <a href="{{route('master.registerAdmin')}}">
                    <i class="fa fa-user-plus fa-fw "></i>
                    <h3 class="menu-title">Tambah Admin</h3>
                    </a>
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
