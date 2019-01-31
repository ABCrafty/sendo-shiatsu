<div class="footer-container">
    <div class="footer-block green-block logo-block">
        <div class="img-footer-container">
            <img src="<?php echo e(asset('images/logo_sendo_shiatsu_blanc.png')); ?>"/>
        </div>
    </div>
    <div class="footer-block white-block block-witness">
        <h3>Livre d'or</h3>
        <div id="carouselWitnesses" class="carousel slide witnesses" data-ride="carousel" >
            <div class="carousel-inner">
                <?php $__currentLoopData = $witnesses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $witness): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-item <?php if($i === 1): ?> active <?php endif; ?>">
                    <p class="witness-content"><?php echo e($witness->content); ?><span class="witness-author"> ~<?php echo e($witness->author); ?></span><p>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <div class="footer-block green-block">
        <p>Blog (à venir)</p>
    </div>
    <div class="footer-block white-block">
        <a href="<?php echo e(route('home')); ?>">Accueil</a>
        <a href="<?php echo e(route('front.shiatsu')); ?>">Shiatsu</a>
        <a href="<?php echo e(route('front.doin')); ?>">Do In</a>
        <a href="#">Prestations/Prendre rdv</a>
        <a href="#">Tarifs</a>
        <a href="<?php echo e(route('contact.create')); ?>">Me contacter</a>
    </div>
    <div class="footer-block green-block">
        <a href="#">Politique de confidentialité</a>
        <a href="#">Mentions légales</a>
    </div>
    <div class="footer-block white-block">
        <p>Adresse</p>
        <p>Numéro de téléphone</p>
        <p>Lien vers Maps<p>
    </div>
    <div class="footer-block footer-social green-block">
        <p><a><i class="fab fa-linkedin-in"></i></a></p>
        <p><a><i class="fab fa-facebook-f"></i></a></p>
    </div>
</div>