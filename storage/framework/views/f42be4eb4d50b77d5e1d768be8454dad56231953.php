<?php $__env->startSection('title'); ?>
    Accueil - ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta-description'); ?>
    Découvrez les bienfaits de la thérapie par le Shiatsu, en plein centre de Strasbourg, à votre domicile
    ou dans votre entreprise.
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="activites-home">
        <div    class="home-shiatsu"
                style="background-image: url('<?php echo e($homepage->shiatsu_image); ?>');
                       background-repeat: no-repeat;
                       background-size: cover">
            <div class="white-background">
                <h1>Shiatsu</h1>
                <p><?php echo e($homepage->shiatsu_text); ?></p>
                <a href="<?php echo e(route('front.shiatsu')); ?>" class="btn btn-custom-green">
                    Découvrez le Shiatsu
                </a>
            </div>
        </div>
        <div    class="home-doin"
                style="background-image: url('<?php echo e($homepage->doin_image); ?>');
                       background-repeat: no-repeat;
                       background-size: cover">
            <div class="white-background">
                <h2>Do In</h2>
                <p><?php echo e($homepage->doin_text); ?></p>
                <a href="<?php echo e(route('front.doin')); ?>" class=" btn btn-custom-green">
                    Découvrez le Do In
                </a>
            </div>
        </div>
    </div> <!-- activites-home -->

    <h3 class="prestation-title">Mes prestations</h3>

    <div class="prestations-home">
        <div class="prestation">
            <h3><?php echo e($homepage->first_presta_title); ?></h3>
            <p><?php echo e($homepage->first_presta_content); ?></p>
            <button class="btn btn-custom-white" href="<?php echo e(route('front.prestations')); ?>">En savoir plus</button>
        </div>
        <div class="prestation">
            <h3><?php echo e($homepage->second_presta_title); ?></h3>
            <p><?php echo e($homepage->second_presta_content); ?></p>
        <button class="btn btn-custom-white" href="<?php echo e(route('front.prestations')); ?>">En savoir plus</button>
        </div>
        <div class="prestation">
            <h3><?php echo e($homepage->third_presta_title); ?></h3>
            <p><?php echo e($homepage->third_presta_content); ?></p>
            <button class="btn btn-custom-white" href="<?php echo e(route('contact.create')); ?>">Me contacter</button>
        </div>
    </div>

    <div class="home-form-container">
            <h3>Vous avez des questions ? Vous souhaitez me contacter ? Envoyez-moi un message
                    et je vous répondrai dans les plus brefs délais !
            </h3>
            <div class="form-container">
                <form action="<?php echo e(route('contact.store')); ?>" method="POST" class="home-form">
                    <?php echo csrf_field(); ?>
                    <?php if($errors->any()): ?>
                        <div class="alert alert-warning" role="alert">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <div class="col-12 col-md-8 offset-md-2">
                        <input type="hidden" name="home" value="home" />
                        <div class="form-group">
                            <label for="email">Votre adresse email</label>
                            <input type="email" id="email" placeholder="Adresse email" name="email" class="form-control <?php echo e(!$errors->has('email') ?: 'is-invalid'); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="sujet">Sujet</label>
                            <input type="text" id="sujet" placeholder="Sujet" name="sujet" class="form-control <?php echo e(!$errors->has('sujet') ?: 'is-invalid'); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" placeholder="Tapez votre message..." name="message" class="form-control <?php echo e(!$errors->has('message') ?: 'is-invalid'); ?>" required></textarea>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-custom-green">Envoyer</button>
                        </div>
                    </div>

                </form>
            </div>

    </div>

    <!-- <h3>Les derniers articles du blog</h3>
    <div class="blog-home">
        <div class="blog-preview">
            <h3>Titre article</h3>
            <p>Aperçu article...</p>
            <div class="blog-buttons">
                <button class="btn btn-primary">Lire l'article</button>
                <button class=" btn">Tous les articles</button>
            </div>
            <div class="blog-img">
                <img src="#" alt="">
            </div>
        </div>
    </div>

    -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>