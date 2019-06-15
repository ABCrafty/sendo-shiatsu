<div class="footer-container">
    <div class="footer-block green-block logo-block">
        <div class="img-footer-container">
            <img src="<?php echo e(asset('images/logo_sendo_shiatsu_blanc.png')); ?>" alt="logo sendo shiatsu" />
        </div>
    </div>
    <div class="footer-block white-block block-witness">
        <h3>Livre d'or</h3>
        <div id="carouselWitnesses" class="carousel slide witnesses" data-ride="carousel" >
            <div class="carousel-inner">
                <?php $__currentLoopData = $witnesses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $witness): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-item <?php echo e($i !== 0 ?: 'active'); ?>">
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
        <a href="<?php echo e(route('front.prestations')); ?>">Prestations/Prendre rdv</a>
        <a href="<?php echo e(route('front.prices')); ?>">Tarifs</a>
        <a href="<?php echo e(route('contact.create')); ?>">Me contacter</a>
    </div>
    <div class="footer-block green-block">
        <a href="/mentions-legales">Mentions légales</a>
    </div>
    <div class="footer-block white-block">
        <p>
            Yogdeepam Center Strasbourg
            31 rue du marché aux vins<br />
            67000 Strasbourg<br />
        </p>
        <p>
            <a href="tel:+33616719219">+33616719219</a>
        </p>
    </div>
    <div class="footer-block footer-social green-block">
        <p><a href="https://www.linkedin.com/in/pierre-black3/" target="_blank"><i class="fab fa-linkedin-in"></i></a></p>
        <p><a href="https://www.facebook.com/Sendo-Shiatsu-408042143364071/" target="_blank"><i class="fab fa-facebook-f"></i></a></p>
    </div>
</div>
