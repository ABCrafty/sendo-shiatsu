<nav role="navigation" class="navbar navbar-toggleable-sm navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand logo-img" href="{{ asset('/') }}" title="homepage">
        <img src="{{asset('')}}" title="logo" alt="logo">
    </a>

    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Shiatsu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Do In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Qui suis-je ?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Tarifs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Me contacter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Blog</a>
            </li>

            @role('admin')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.index') }}">Accéder à la zone admin</a>
            </li>
            @endrole
        </ul>

        <ul class="nav navbar-nav navbar-right">

            @if (Auth::guest())
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Se connecter</a></li>
                <li class="nav-item"><a href="{{ route('register.create') }}" class="nav-link">Créer un compte</a></li>
            @else
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle dropdown-custom-style" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if(auth()->user()->avatar)
                            <div class="admin-pic-dropdown">
                                <img src="/{{ auth()->user()->avatar }}" alt="">
                            </div>
                        @endif
                        {{ auth()->user()->username }}
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        @role('admin')
                        <a class="dropdown-item" href="{{ route('users.edit', auth()->user()->id) }}">Voir mon profil</a>
                        @endrole
                        <a class="dropdown-item" href="{{ route('logout') }}">Me déconnecter</a>
                    </div>
                </div>
            @endif
        </ul>
    </div>
</nav>