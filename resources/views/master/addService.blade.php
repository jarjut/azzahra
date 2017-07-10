@extends('master.layouts.master')

@section('title','Tambah Layanan - Master Az Zahra')

@section('content')
  <section id="funfacts" class="root-sec grey lighten-5 funfact-wrap">
    <div class="sec-inner padd-tb-120">
      <div class="container">
        <div class="row">
          <div class="funfact-inner">

            <div class="col-md-6 col-md-offset-3 funfact-box">
              <div class="card-panel white">
                <h3 class="about-subtitle">Tambah Layanan</h3>
                <form method="POST" action="{{ route('master.addService.submit') }}">
                    {{ csrf_field() }}

                  <div class="input-field grey-text text-darken-1">
                    <select name="category">
                      <option value="" disabled selected>Pilih Category</option>
                      @foreach ($category as $category)
                        <option value="{{ $category->id_category}}">{{$category->nama}}</option>
                      @endforeach
                    </select>
                    <label>Category</label>
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
                    <input id="harga" class="{{ $errors->has('harga') ? ' invalid' : '' }}" type="text" name="harga" value="{{ old('harga') }}" required>
                    <label for="harga">Harga</label>
                  </div>
                  @if ($errors->has('harga'))
                      <span class="help-error">
                          <strong>{{ $errors->first('harga') }}</strong>
                      </span>
                  @endif

                  <button class="btn waves-effect waves-light brand-bg white-text regular-text" type="submit" name="action">Tambah</button>
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
