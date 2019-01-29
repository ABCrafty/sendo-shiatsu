<nav class="navbar navbar-expand-lg navbar-light sendo-navbar">
    <div class="logo-container-laptop">
    <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
        <img src="<?php echo e(asset('images/logo_sendo_shiatsu.png')); ?>" class="d-inline-block align-top logo-menu" alt="Sendo Shiatsu">
    </a>
    </div>
    <div class="logo-container-mobile">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                    Sendo Shiatsu
                </a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('home')); ?>">
                        Accueil
                    </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('front.shiatsu')); ?>">Shiatsu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('front.doin')); ?>">Do In</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('front.prestations')); ?>">Prestations/Prendre rdv</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Tarifs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="blog-nav" href="">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('contact.create')); ?>">Me contacter</a>
            </li>

            <?php if (\Entrust::hasRole('admin')) : ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('dashboard.index')); ?>">Accéder à la zone admin</a>
            </li>
            <?php endif; // Entrust::hasRole ?>
        </ul>
        <div class="my-2 my-lg-0">
            <?php if(Auth::guest()): ?>
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="<?php echo e(route('login')); ?>" class="nav-link">Se connecter</a></li>
                </ul>

            <?php else: ?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo e(auth()->user()->username); ?>

                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>">Me déconnecter</a>
                        </div>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>
