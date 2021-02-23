@extends('layouts.app')

@section('content')
<html id="fondo" class="html">
  <body class="bg-transparent" id="body">
      <div class="container">
    <div class="col align-self-center">
           <h2 class="centrarform">{{ __('Login form') }}</h2>
    </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row">
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('E-Mail Address') }}" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-danger btn-block" id="botonlogin">
                        {{ __('Login') }}
                    </button>
            </div>
                </div><br>
                    @if (Route::has('password.request'))
                       <a href="{{ route('password.request') }}"><p class="centrar" >
                            {{ __('Forgot Your Password?') }}</p>
                        </a>
                    @endif
                    <a href="{{ route('register') }}"><p class="centrar" >
                        {{ __('Register Now.') }}</p>
                    </a>
        </form>
        <footer  class="footer">
            <p class="centrar" > ©2021 Todos los derechos reservados.</p>
        </footer>
    </div>
  </body>

</html>
@endsection
