
@extends('errors::illustrated-layout')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <nav class="navbar navbar-expand-md bg-transparent">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/logo6.png') }}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/"><p class="text-dark">HOME</p></a>
                    </li>
                    @guest
                    <!-- Authentication Links -->
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><p class="text-dark">{{ __('LOGIN') }}</p></a>
                            </li>
                        @endif
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

<footer id="centrar"  class="footer">
    <p class="text-dark"> ©2021 Todos los derechos reservados.</p>
</footer>
@section('code', '404')
@section('title', __('404'))

@section('image')
<div >    
    <img src="{{ asset('img/engranajes.gif') }}" width="200px";>
</div>
@endsection
    @section('message', __('Oops... othing here!'))










