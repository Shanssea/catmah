@extends("layouts.app")

@section('css')
    <link href="css/login.css" rel="stylesheet">
@endsection

@section('content')
<div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
              <div class="card-body">
                <h5 class="card-title text-center">Masuk Halaman Admin</h5>
                <form class="form-signin" method="POST" action="{{ route('admin.login.submit') }}">
                    @csrf
                  <div class="form-label-group">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    <label for="email">Alamat Email</label>
                        @if ($errors->has('inputemail'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                  </div>
    
                  <div class="form-label-group">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    <label for="password">Password</label>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>
    
                  <div class="custom-control custom-checkbox mb-3">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                                {{ __('Ingat Saya') }}
                        </label>
                  </div>

                  <div>
                    <button type="submit" class="btn btn-lg btn-signin btn-block text-uppercase">
                            {{ __('Masuk') }}
                        </button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Lupa Password?') }}
                            </a>
                        @endif
                  </div>

                  <hr class="my-4">
                  <p style="text-align:center">Belum punya akun?</p>
                  <a href="{{ route('register') }}" class="btn btn-block btn-secondary text-uppercase">{{ __('Yuk Daftar!') }}</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
