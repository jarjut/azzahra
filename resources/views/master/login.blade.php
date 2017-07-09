@extends('master.layouts.master')

@section('title','Login - Master AzZahra')

@section('content')
  <section id="funfacts" class="root-sec grey lighten-5 funfact-wrap">
    <div class="sec-inner padd-tb-120">
      <div class="container">
        <div class="row">
          <div class="funfact-inner">

            <div class="col-md-6 col-md-offset-3 funfact-box">
              <div class="card-panel white">
                <h3 class="about-subtitle">Login</h3>
                <form action="{{ route('master.login.submit') }}" method="post">
                  {{ csrf_field() }}
                  <div class="input-field grey-text text-darken-1">
                    <input id="username" type="text" name="username" value="{{ old('username') }}" required>
                    <label for="username">Username</label>
                  </div>
                  <div class="input-field grey-text text-darken-1">
                    <input id="password" type="password" name="password" required>
                    <label for="password">Password</label>
                  </div>
                  @if ($errors->has('nip'))
                      <span class="help-error">
                          <strong>Username atau Password anda salah</strong>
                      </span>
                  @endif
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
