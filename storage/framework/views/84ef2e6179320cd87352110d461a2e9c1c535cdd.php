<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Massages Shiatsu à Strasbourg pour particuliers et professionnels">
    <meta name="keyword" content="Shiatsu, Strasbourg, Massage, Energie, Do In">
    <meta property="og:title" content="Sendo Shiatsu">
    <meta property="og:description" content="Massages Shiatsu à Strasbourg pour particuliers et professionnels"/>
    <meta property="og:image" content="<?php echo e(asset('images/logo.png')); ?>"/>
    <meta property="og:url" content="http://www.sendo-shiatsu.com" />
    <meta property="og:site_name" content="Sendo Shiatsu" />
    <meta property="og:type" content="website" />
    <meta name="geo.region" content="FR" />
    <meta name="geo.placename" content="Strasbourg" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="<?php echo e(asset('images/logo.png')); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>
        <?php echo $__env->yieldContent('title'); ?>
        Send Shiatsu
        <?php echo $__env->yieldSection(); ?>
    </title>

    <!-- Fonts -->
    

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
<?php if($flash = session('message')): ?>
    <div class="alert alert-success alert-admin animated bounceInRight" role="alert">
        <p><?php echo e($flash); ?></p>
    </div>
<?php endif; ?>

<header role="banner">
    <?php echo $__env->make('layouts.partials._menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</header>
<main role="main">
    <?php echo $__env->yieldContent('content'); ?>
</main>

<footer role="footer">
    <?php echo $__env->make('layouts.partials._footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</footer>

<!-- Scripts -->
<script src="<?php echo e(asset('js/app.js')); ?>"></script>

</body>
</body>
</html>
