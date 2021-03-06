<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Massages Shiatsu à Strasbourg pour particuliers et professionnels">
    <meta name="keyword" content="Shiatsu, Strasbourg, Massage, Energie, Do In">
    <meta property="og:title" content="Sendo Shiatsu">
    <meta property="og:description" content="Massages Shiatsu à Strasbourg pour particuliers et professionnels"/>
    <meta property="og:image" content="{{ asset('images/logo.png') }}"/>
    <meta property="og:url" content="http://www.sendo-shiatsu.com" />
    <meta property="og:site_name" content="Sendo Shiatsu" />
    <meta property="og:type" content="website" />
    <meta name="geo.region" content="FR" />
    <meta name="geo.placename" content="Strasbourg" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
        Sendo Shiatsu
        @show
    </title>

    <!-- Fonts -->
    {{--<link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">--}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
@if($flash = session('message'))
    <div class="alert alert-success alert-admin animated bounceInRight" role="alert">
        <p>{{ $flash }}</p>
    </div>
@endif

<header role="banner">
    @include('layouts.partials._menu')
</header>
<main role="main">
    @yield('content')
</main>

<footer role="footer">
    @include('layouts.partials._footer')
</footer>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

</body>
</body>
</html>
