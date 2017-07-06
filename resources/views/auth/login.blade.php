@extends('layouts.single')
@section('title','Login - Az Zahra')

@section('content')
<section id="funfacts" class="root-sec grey lighten-5 funfact-wrap">
  <div class="sec-inner padd-tb-120">
    <div class="container">
      <div class="row">
        <div class="funfact-inner">

          <div class="col-md-6 col-md-offset-3 funfact-box">
            <div class="card-panel white">
              <h3 class="about-subtitle">Login</h3>
              <form action="{{ route('login') }}" method="post">
                {{ csrf_field() }}
                <div class="input-field grey-text text-darken-1">
                  <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                  <label for="email">Email</label>
                </div>
                <div class="input-field grey-text text-darken-1">
                  <input id="password" type="password" name="password" required>
                  <label for="password">Password</label>
                </div>
                @if ($errors->has('email'))
                    <span class="help-error">
                        <strong>Email atau Password anda salah</strong>
                    </span>
                @endif
                <p>
                  <input type="checkbox" class="filled-in" id="filled-in-box" name="remember" {{ old('remember') ? 'checked' : '' }}/>
                  <label for="filled-in-box">Remember Me</label>
                </p>
                <label for="register" style="margin-bottom:20px"><a href="{{ route('register')}}">Belum punya akun?</a><br></label><br>
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
