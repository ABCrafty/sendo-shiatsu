<?php $__env->startSection('title'); ?>
    Présentation du Shiatsu
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('admin.shiatsu.update')); ?>" class="shiatsu" enctype="multipart/form-data" method="POST">
        <?php echo csrf_field(); ?>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>

    <?php endif; ?>

        <h4>Description du Shiatsu</h4>

    <!-- Premier bloc -->
        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="first_title">Titre du 1er paragraphe</label>
            <div class="col-md-4">
                <input
                        id="first_title"
                        name="first_paragraph_title"
                        type="text"
                        <?php if($shiatsu): ?>value="<?php echo e($shiatsu->first_paragraph_title); ?>" <?php endif; ?>
                        placeholder="Titre"
                        class="form-control <?php echo e(!$errors->has('first_paragraph_title') ?: 'is-invalid'); ?>"
                        required
                />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="first_content">1er paragraphe</label>
            <div class="col-md-4">
                <textarea
                        id="first_content"
                        name="first_paragraph_content"
                        type="text"
                        rows="6"
                        class="form-control <?php echo e(!$errors->has('first_paragraph_content') ?: 'is-invalid'); ?>"
                        required
                > <?php if($shiatsu): ?><?php echo e($shiatsu->first_paragraph_content); ?> <?php endif; ?></textarea>
            </div>
        </div>

        <hr />

        <!-- Deuxième bloc -->
        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="second_title">Titre du 2ème paragraphe</label>
            <div class="col-md-4">
                <input
                        id="second_title"
                        name="second_paragraph_title"
                        type="text"
                        <?php if($shiatsu): ?>value="<?php echo e($shiatsu->second_paragraph_title); ?>" <?php endif; ?>
                        placeholder="Titre"
                        class="form-control <?php echo e(!$errors->has('second_paragraph_title') ?: 'is-invalid'); ?>"
                        required
                />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="second_content">2ème paragraphe</label>
            <div class="col-md-4">
                <textarea
                        id="second_content"
                        name="second_paragraph_content"
                        type="text"
                        rows="6"
                        placeholder="Titre"
                        class="form-control <?php echo e(!$errors->has('second_paragraph_content') ?: 'is-invalid'); ?>"
                        required
                > <?php if($shiatsu): ?><?php echo e($shiatsu->second_paragraph_content); ?> <?php endif; ?></textarea>
            </div>
        </div>

        <hr />

        <!-- Troisième bloc -->
        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="third_title">Titre du 3ème paragraphe</label>
            <div class="col-md-4">
                <input
                        id="third_title"
                        name="third_paragraph_title"
                        type="text"
                        <?php if($shiatsu): ?>value="<?php echo e($shiatsu->third_paragraph_title); ?>" <?php endif; ?>
                        placeholder="Titre"
                        class="form-control <?php echo e(!$errors->has('third_paragraph_title') ?: 'is-invalid'); ?>"
                        required
                />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="third_content">3ème paragraphe</label>
            <div class="col-md-4">
                <textarea
                        id="third_content"
                        name="third_paragraph_content"
                        type="text"
                        rows="6"
                        placeholder="Titre"
                        class="form-control <?php echo e(!$errors->has('third_paragraph_content') ?: 'is-invalid'); ?>"
                        required
                > <?php if($shiatsu): ?><?php echo e($shiatsu->third_paragraph_content); ?> <?php endif; ?></textarea>
            </div>
        </div>

        <hr />

        <!-- Image + wellness -->
        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="image">Titre du 3ème paragraphe</label>
            <div class="col-md-4">
                <input type="file" name="img" class="form-control-file" id="image" />
            </div>
        </div>

        <div class="preview-shiatsu">
            <?php if($shiatsu): ?><img src="<?php echo e($shiatsu->image); ?>" alt=""> <?php endif; ?>
        </div>

        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="wellness">Liste des bienfaits</label>
            <div class="col-md-4">
                <textarea
                        id="third_content"
                        name="wellness"
                        type="text"
                        rows="6"
                        placeholder="Hello"
                        class="form-control <?php echo e(!$errors->has('wellness') ?: 'is-invalid'); ?>"
                        required
                ><?php if($shiatsu): ?><?php echo e($shiatsu->wellness); ?> <?php endif; ?></textarea>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">
                Enregistrer
                <i class="fas fa-check"></i>
            </button>
        </div>

    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>