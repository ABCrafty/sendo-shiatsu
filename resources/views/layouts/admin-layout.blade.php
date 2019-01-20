<!DOCTYPE html>

<html lang="{{ config('app.locale') }}">

<head>

    <meta name="description" content="Site portfolio d'Alexandre Black | Contient un portfolio et des articles">
    <meta name="keyword" content="Alexandre Black, Lyon, Developpeur, Web, PHP, JavaScript, jQuery, Bootstrap, SASS">
    <meta name="twitter:site" content="@Kuro_KD"/>
    <meta name="twitter:image" content="{{ asset('images/logo.png') }}"/>
    <meta property="og:title" content="Alexandre Black">
    <meta property="og:description" content="Site portfolio d'Alexandre Black | Contient un portfolio et des articles"/>
    <meta property="og:image" content="{{ asset('images/logo.png') }}"/>
    <meta property="og:url" content="http://www.alexandreblack.fr" />
    <meta property="og:site_name" content="Alexandre Black" />
    <meta property="og:type" content="website" />
    <meta name="geo.region" content="FR" />
    <meta name="geo.placename" content="Lyon" />
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

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

<div class="admin-container">

    <main role="main">
        <div class="row no-gutters">
            <div class="sidebar-admin">
                <div class="admin-button">
                    <a href="{{ route('dashboard.index') }}">Admin <span class="show-sidebar">Portfolio</span></a>
                </div>
                <div class="sidebar-profile">
                    <div class="admin-pic">
                        @if(auth()->user()->avatar)
                            <img src="/{{ auth()->user()->avatar }}" alt="">
                        @else
                            <img src="{{ url('images/gravatar.png') }}" alt="">
                        @endif
                    </div>
                    <div class="admin-info show-sidebar">
                        <p>Bonjour {{ auth()->user()->username }}</p>
                        <div class="admin-actions">
                            <a href="{{ route('users.edit', auth()->user()->id) }}"><i class="fa fa-id-card" aria-hidden="true"></i></a>
                            <a href="{{ route('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                        </div>
                    </div>

                </div>
                <ul class="list-unstyled menu-admin">
                    <li>
                        <i class="fa fa-tachometer" aria-hidden="true"></i>
                        <span class="show-sidebar">
                            <a href="{{ route('dashboard.index') }}">Tableau de bord</a>
                        </span>
                    </li>
                    @if($homepage)
                        <li>
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span class="show-sidebar">
                                <a href="{{ route('homepage.edit', ['id' => $homepage->id]) }}">Page d'accueil</a>
                            </span>
                        </li>
                    @else
                        <li>
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span class="show-sidebar">
                                <a href="{{ route('homepage.create') }}">Page d'accueil</a>
                            </span>
                        </li>
                    @endif
                    <li>
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <span class="show-sidebar">
                            <a href="{{ route('projects.index') }}">Projets</a>
                        </span>
                    </li>
                    <li>
                        <i class="fa fa-pencil-square" aria-hidden="true"></i>
                        <span class="show-sidebar">
                                <a href="{{ route('blog.index') }}">Blog</a>
                            </span>
                    </li>
                    <li>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="show-sidebar">
                            <a href="{{ route('users.index') }}">Utilisateurs</a>
                        </span>
                    </li>
                </ul>
            </div>
            <div class="admin-main-content">
                <div class="admin-header">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle dropdown-custom-style" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="admin-pic-dropdown">
                                @if(auth()->user()->avatar)
                                    <img src="/{{ auth()->user()->avatar }}" alt="">
                                @else
                                    <img src="{{ url('images/gravatar.png') }}" alt="">
                                @endif
                            </div>
                            {{ auth()->user()->username }}
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('users.edit', auth()->user()->id) }}">Voir mon profil</a>
                            <a class="dropdown-item" href="{{ route('home') }}">Retourner sur le site</a>
                            <a class="dropdown-item" href="{{ route('logout') }}">Me déconnecter</a>
                        </div>
                    </div>
                </div>
                <div class="admin-content">
                    @yield('content')
                </div>
            </div>
        </div>

    </main>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
</body>

</html>
