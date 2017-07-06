@extends('layouts.master')

@section('navbar')
  <li><a href="{{ route('home') }}" ><i class="fa fa-home fa-fw"></i>Home</a>
  </li>
  <li><a href="{{ route('service') }}" ><i class="fa fa-list fa-fw"></i>Layanan</a>
  </li>
  <li><a href="{{ route('bundle') }}"><i class="fa fa-list fa-fw"></i>Paket</a>
  </li>
  <li><a href="{{ route('reservation') }}"><i class="fa fa-handshake-o fa-fw"></i>Reservasi</a>
  </li>
@endsection

@section('js')
  <script type="text/javascript">
    $('#loginpopover').webuiPopover({url:'#loginContent', animation:'pop'});
  </script>
@endsection
