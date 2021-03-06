<nav class="navbar navbar-expand-lg navbar-light sendo-navbar">
    <div class="logo-container-laptop">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('images/logo_sendo_shiatsu.png') }}" class="d-inline-block align-top logo-menu" alt="Sendo Shiatsu">
    </a>
    </div>
    <div class="logo-container-mobile">
            <a class="navbar-brand" href="{{ route('home') }}">
                    Sendo Shiatsu
                </a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                        Accueil
                    </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('front.shiatsu') }}">Shiatsu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('front.doin') }}">Do In</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('front.prestations') }}">Prestations/Prendre rdv</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('front.prices') }}">Tarifs</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact.create') }}">Me contacter</a>
            </li>

            @role('admin')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.index') }}">Accéder à la zone admin</a>
            </li>
            @endrole
        </ul>
        <div class="my-2 my-lg-0">
            @if (!Auth::guest())
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}">Me déconnecter</a>
                        </div>
                    </li>
                </ul>
            @endif
        </div>
    </div>
</nav>
