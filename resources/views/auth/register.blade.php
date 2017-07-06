@extends('layouts.single')
@section('title','Register - Az Zahra')

@section('content')
  <section id="funfacts" class="root-sec grey lighten-5 funfact-wrap">
    <div class="sec-inner padd-tb-120">
      <div class="container">
        <div class="row">
          <div class="funfact-inner">

            <div class="col-md-6 col-md-offset-3 funfact-box">
              <div class="card-panel white">
                <h3 class="about-subtitle">Register</h3>
                <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

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
                    <input id="email" class="{{ $errors->has('email') ? ' invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" required>
                    <label for="email">E-Mail Address</label>
                  </div>
                  @if ($errors->has('email'))
                      <span class="help-error">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif

                  <div class="input-field grey-text text-darken-1">
                    <input id="password" class="{{ $errors->has('password') ? ' invalid' : '' }}" type="password" name="password" required>
                    <label for="password">Password</label>
                  </div>
                  @if ($errors->has('password'))
                      <span class="help-error">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif

                  <div class="input-field grey-text text-darken-1">
                    <input id="password-confirm" type="password" name="password_confirmation" required>
                    <label for="password-confirm">Password Confirmation</label>
                  </div>

                  <br>
                  <label for="jeniskelamin">Jenis Kelamin</label>
                  <br>
                  <br>
                    <div class="row">
                      <div class="col-md-6">
                        <p>
                          <input name="jeniskelamin" class="with-gap" type="radio" id="pria" value="1" checked/>
                          <label for="pria">Laki-Laki</label>
                        </p>
                      </div>

                      <div class="col-md-6">
                        <p>
                          <input name="jeniskelamin" class="with-gap" type="radio" id="wanita" value="0"/>
                          <label for="wanita">Perempuan</label>
                        </p>
                      </div>
                    </div>



                  <div class="input-field grey-text text-darken-1">
                    <input id="nohp" class="{{ $errors->has('nohp') ? ' invalid' : '' }}" type="text" name="nohp" value="{{ old('nohp') }}" required>
                    <label for="nohp">Nomor HP</label>
                  </div>
                  @if ($errors->has('nohp'))
                      <span class="help-error">
                          <strong>{{ $errors->first('nohp') }}</strong>
                      </span>
                  @endif

                  <div class="input-field grey-text text-darken-1">
                    <input id="alamat" class="{{ $errors->has('alamat') ? ' invalid' : '' }}" type="text" name="alamat" value="{{ old('alamat') }}" required>
                    <label for="alamat">Alamat</label>
                  </div>
                  @if ($errors->has('alamat'))
                      <span class="help-error">
                          <strong>{{ $errors->first('alamat') }}</strong>
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
