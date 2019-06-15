<?php $__env->startSection('title'); ?>
    Contact
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="contact-form-container"> <!-- Supprimer si besoin -->
    <h1>Contactez-moi si vous avez besoin de renseignements, je vous répondrai dans les plus brefs délais.</h1>
    <form action="<?php echo e(route('contact.store')); ?>" method="POST">
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

        <div class="col-md-8 offset-md-2">
            <div class="form-group">
                <label for="email">Adresse email</label>
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
</div> <!-- Supprimer si besoin -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>