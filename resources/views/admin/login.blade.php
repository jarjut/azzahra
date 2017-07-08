@extends('admin.layouts.master')

@section('title','Login - Admin AzZahra')

@section('content')
  <section id="funfacts" class="root-sec grey lighten-5 funfact-wrap">
    <div class="sec-inner padd-tb-120">
      <div class="container">
        <div class="row">
          <div class="funfact-inner">

            <div class="col-md-6 col-md-offset-3 funfact-box">
              <div class="card-panel white">
                <h3 class="about-subtitle">Login</h3>
                <form action="{{ route('admin.login.submit') }}" method="post">
                  {{ csrf_field() }}
                  <div class="input-field grey-text text-darken-1">
                    <input id="nip" type="text" name="nip" value="{{ old('nip') }}" required>
                    <label for="nip">NIP</label>
                  </div>
                  <div class="input-field grey-text text-darken-1">
                    <input id="password" type="password" name="password" required>
                    <label for="password">Password</label>
                  </div>
                  @if ($errors->has('nip'))
                      <span class="help-error">
                          <strong>NIP atau Password anda salah</strong>
                      </span>
                  @endif
                  <p>
                    <input type="checkbox" class="filled-in" id="filled-in-box" name="remember" {{ old('remember') ? 'checked' : '' }}/>
                    <label for="filled-in-box">Remember Me</label>
                  </p>
                  <button class="btn waves-effect waves-light brand-bg white-text regular-text" type="submit" name="action">Login</button>
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
