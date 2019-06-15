<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142151354-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-142151354-1');
    </script>

    <meta charset="utf-8">
    <meta name="description" content="@yield('meta-description')@show">
    <meta property="og:title" content="Sendo Shiatsu Strasbourg">
    <meta property="og:description" content="@yield('meta-description')@show"/>
    <meta property="og:image" content="{{ asset('images/logo_sendo_shiatsu_color.png') }}"/>
    <meta property="og:image:alt" content="logo sendo shiatsu strasbourg"/>
    <meta property="og:url" content="http://www.sendoshiatsu.com" />
    <meta property="og:site_name" content="Sendo Shiatsu" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="fr_FR"/>
    <meta name="geo.region" content="FR" />
    <meta name="geo.placename" content="Strasbourg" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('images/logo_sendo_shiatsu_color.png') }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
        Sendo Shiatsu Strasbourg
        @show
    </title>

    <!-- Fonts -->
{{--<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">--}}

<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header role="banner">
    @include('layouts.partials._menu')
</header>

@if($flash = session('message'))
    <div class="alert alert-success alert-admin animated bounceInRight" role="alert">
        <p>{{ $flash }}</p>
    </div>
@endif

<main role="main">
    @yield('content')
</main>

<footer role="footer">
    @include('layouts.partials._footer')
</footer>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
