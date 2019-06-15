<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
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
    <meta name="description" content="<?php echo $__env->yieldContent('meta-description'); ?><?php echo $__env->yieldSection(); ?>">
    <meta property="og:title" content="Sendo Shiatsu Strasbourg">
    <meta property="og:description" content="<?php echo $__env->yieldContent('meta-description'); ?><?php echo $__env->yieldSection(); ?>"/>
    <meta property="og:image" content="<?php echo e(asset('images/logo_sendo_shiatsu_color.png')); ?>"/>
    <meta property="og:image:alt" content="logo sendo shiatsu strasbourg"/>
    <meta property="og:url" content="http://www.sendoshiatsu.com" />
    <meta property="og:site_name" content="Sendo Shiatsu" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="fr_FR"/>
    <meta name="geo.region" content="FR" />
    <meta name="geo.placename" content="Strasbourg" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo e(asset('images/logo_sendo_shiatsu_color.png')); ?>" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>
        <?php echo $__env->yieldContent('title'); ?>
        Sendo Shiatsu Strasbourg
        <?php echo $__env->yieldSection(); ?>
    </title>

    <!-- Fonts -->


<!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
<header role="banner">
    <?php echo $__env->make('layouts.partials._menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</header>

<?php if($flash = session('message')): ?>
    <div class="alert alert-success alert-admin animated bounceInRight" role="alert">
        <p><?php echo e($flash); ?></p>
    </div>
<?php endif; ?>

<main role="main">
    <?php echo $__env->yieldContent('content'); ?>
</main>

<footer role="footer">
    <?php echo $__env->make('layouts.partials._footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</footer>

<!-- Scripts -->
<script src="<?php echo e(asset('js/app.js')); ?>"></script>

</body>
</html>
