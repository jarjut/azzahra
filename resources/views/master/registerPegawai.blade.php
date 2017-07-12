@extends('master.layouts.master')

@section('title','Register Pegawai - Master AzZahra')

@section('content')
  <section id="funfacts" class="root-sec grey lighten-5 funfact-wrap">
    <div class="sec-inner padd-tb-120">
      <div class="container">
        <div class="row">
          <div class="funfact-inner">

            <div class="col-md-6 col-md-offset-3 funfact-box">
              <div class="card-panel white">
                <h3 class="about-subtitle">Register Pegawai</h3>
                <form method="POST" action="{{ route('master.registerPegawai.submit') }}">
                    {{ csrf_field() }}

                  <div class="input-field grey-text text-darken-1">
                    <select name="cabang">
                      <option value="" disabled selected>Pilih Cabang</option>
                      @foreach ($cabang as $cabang)
                        <option value="{{ $cabang->kodeCabang}}">{{$cabang->nama}}</option>
                      @endforeach
                    </select>
                    <label>Cabang</label>
                  </div>

                  <div class="input-field grey-text text-darken-1">
                    <input id="nama" class="{{ $errors->has('nama') ? ' invalid' : '' }}"type="text" name="nama" value="{{ old('nama') }}" required>
                    <label for="nama">Nama</label>
                  </div>
                  @if ($errors->has('nama'))
                      <span class="help-error">
                          <strong>{{ $errors->first('nama') }}</strong>
                      </span>
                  @endif

                  <div class="input-field grey-text text-darken-1">
                    <input id="nip" class="{{ $errors->has('nip') ? ' invalid' : '' }}" type="text" name="nip" value="{{ old('nip') }}" required>
                    <label for="nip">NIP</label>
                  </div>
                  @if ($errors->has('nip'))
                      <span class="help-error">
                          <strong>{{ $errors->first('nip') }}</strong>
                      </span>
                  @endif

                  <button class="btn waves-effect waves-light brand-bg white-text regular-text" type="submit" name="action">Register</button>
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
