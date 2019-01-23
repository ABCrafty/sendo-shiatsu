<!DOCTYPE html>

<html lang="{{ config('app.locale') }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="admin">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('dashboard.index') }}">Administration</a>
    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.homepage') }}">Présentation des services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.doin.show') }}">Présentation du Do In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.shiatsu.show') }}">Présentation du Shiatsu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Tarifs</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('contact.index') }}" class="nav-link">Messages reçus</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Blog</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Témoignages</a>
            </li>
        </ul>
        <div class="my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ auth()->user()->username }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}">Déconnexion</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

@if($flash = session('message'))
    <div class="alert alert-success alert-admin animated bounceInRight" role="alert">
        <p>{{ $flash }}</p>
    </div>
@endif

@if($flash = session('warning'))
    <div class="alert alert-warning alert-admin animated bounceInRight" role="alert">
        <p>{{ $flash }}</p>
    </div>
@endif

@if($flash = session('danger'))
    <div class="alert alert-danger alert-admin animated bounceInRight" role="alert">
        <p>{{ $flash }}</p>
    </div>
@endif

<div class="container">
@yield('content')
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
</body>

</html>
