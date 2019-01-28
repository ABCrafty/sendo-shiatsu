<nav class="navbar navbar-expand-lg navbar-light sendo-navbar">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('') }}" width="30" height="30" class="d-inline-block align-top" alt="">
        Sendo Shiatsu
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                <a class="nav-link" href="">Prestations/Prendre rdv</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Tarifs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact.create') }}">Me contacter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="blog-nav" href="">Blog</a>
            </li>

            @role('admin')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.index') }}">Accéder à la zone admin</a>
            </li>
            @endrole
        </ul>
        <div class="my-2 my-lg-0">
            @if (Auth::guest())
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Se connecter</a></li>
                </ul>

            @else
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Username
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}">Me déconnecter</a>
                        </div>
                    </li>
                </ul>
            @endif
        </div>
    </div>
</nav>
