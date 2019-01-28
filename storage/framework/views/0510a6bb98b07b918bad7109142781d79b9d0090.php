<?php $__env->startSection('title'); ?>
    Page d'accueil
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('admin.homepage.update')); ?>" class="homepage" enctype="multipart/form-data" method="POST">
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

        <h4>Informations de la page d'accueil</h4>

        <ul class="nav nav-tabs" id="tabulations" role="tablist">
            <li class="nav-item">
                <a
                    class="nav-link active"
                    id="prestations-tab"
                    data-toggle="tab"
                    href="#prestations"
                    role="tab"
                    aria-controls="prestations"
                    aria-selected="true"
                >
                    Prestations
                </a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link"
                    id="shiatsu-tab"
                    data-toggle="tab"
                    href="#shiatsu"
                    role="tab"
                    aria-controls="shiatsu"
                    aria-selected="false"
                >
                    Shiatsu
                </a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link"
                    id="doin-tab"
                    data-toggle="tab"
                    href="#doin"
                    role="tab"
                    aria-controls="doin"
                    aria-selected="false"
                >
                    Do In
                </a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div
                class="tab-pane fade show active"
                id="prestations"
                role="tabpanel"
                aria-labelledby="prestations-tab"
            >
                <!-- PREMIER BLOC -->

                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="first_title">Titre de la 1ère prestation</label>
                    <div class="col-md-4">
                        <input
                            id="first_title"
                            name="first_presta_title"
                            type="text"
                            <?php if($homepage): ?>value="<?php echo e($homepage->first_presta_title); ?>" <?php endif; ?>
                            placeholder="Titre"
                            class="form-control <?php echo e(!$errors->has('first_presta_title') ?: 'is-invalid'); ?>"
                            required
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="first_content">Description de la 1ère prestation</label>
                    <div class="col-md-4">
                        <textarea
                            class="form-control <?php echo e(!$errors->has('first_presta_content') ?: 'is-invalid'); ?>"
                            id="first_content"
                            name="first_presta_content"
                            placeholder="Max: 255 caractères"
                            required
                        ><?php if($homepage): ?><?php echo e($homepage->first_presta_content); ?><?php endif; ?></textarea>
                    </div>
                </div>

                <hr />

                <!-- DEUXIÈME BLOC -->

                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="second_title">Titre de la 2ème prestation</label>
                    <div class="col-md-4">
                        <input
                            id="second_title"
                            name="second_presta_title"
                            type="text"
                            <?php if($homepage): ?>value="<?php echo e($homepage->second_presta_title); ?>" <?php endif; ?>
                            placeholder="Titre"
                            class="form-control <?php echo e(!$errors->has('second_presta_title') ?: 'is-invalid'); ?>"
                            required
                        >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="second_content">Description de la 2ème prestation</label>
                    <div class="col-md-4">
                        <textarea
                            class="form-control <?php echo e(!$errors->has('second_presta_content') ?: 'is-invalid'); ?>"
                            id="second_content"
                            name="second_presta_content"
                            placeholder="Max: 255 caractères"
                            required
                        ><?php if($homepage): ?><?php echo e($homepage->second_presta_content); ?><?php endif; ?></textarea>
                    </div>
                </div>

                <hr />

                <!-- TROISIÈME BLOC -->

                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="third_title">Titre de la 3ème prestation</label>
                    <div class="col-md-4">
                        <input
                            id="third_title"
                            name="third_presta_title"
                            type="text"
                            <?php if($homepage): ?>value="<?php echo e($homepage->third_presta_title); ?>" <?php endif; ?>
                            placeholder="Titre"
                            class="form-control <?php echo e(!$errors->has('third_presta_title') ?: 'is-invalid'); ?>"
                        >

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="third_content">Description de la 3ème prestation</label>
                    <div class="col-md-4">
                        <textarea
                            class="form-control <?php echo e(!$errors->has('third_presta_content') ?: 'is-invalid'); ?>"
                            id="third_content"
                            name="third_presta_content"
                            placeholder="Max: 255 caractères"
                            required
                        ><?php if($homepage): ?><?php echo e($homepage->third_presta_content); ?><?php endif; ?></textarea>
                    </div>
                </div>
            </div>
            <div
                class="tab-pane fade"
                id="shiatsu"
                role="tabpanel"
                aria-labelledby="shiatsu-tab"
            >
                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="shiatsu">Illustration du Shiatsu</label>
                    <div class="col-md-4">
                        <input type="file" name="shiatsu" class="form-control-file" id="shiatsu_image" />
                    </div>
                </div>

                <div class="preview-shiatsu">
                    <?php if($homepage): ?><img src="<?php echo e($homepage->shiatsu_image); ?>" alt=""><?php endif; ?>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="shiatsu_text">Description du Shiatsu</label>
                    <div class="col-md-4">
                        <textarea
                            class="form-control <?php echo e(!$errors->has('shiatsu_text') ?: 'is-invalid'); ?>"
                            id="shiatsu_text"
                            name="shiatsu_text"
                            placeholder="Max: 255 caractères"
                            required
                        ><?php if($homepage): ?><?php echo e($homepage->shiatsu_text); ?><?php endif; ?></textarea>
                    </div>
                </div>
            </div>
            <div
                class="tab-pane fade"
                id="doin"
                role="tabpanel"
                aria-labelledby="doin-tab"
            >
                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="doin">Illustration du Do In</label>
                    <div class="col-md-4">
                        <input type="file" name="doin" class="form-control-file" id="doin_image" />
                    </div>
                </div>

                <div class="preview-doin">
                    <?php if($homepage): ?><img src="<?php echo e($homepage->doin_image); ?>" alt=""><?php endif; ?>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="doin_text">Description du Do In</label>
                    <div class="col-md-4">
                        <textarea
                            class="form-control <?php echo e(!$errors->has('doin_text') ?: 'is-invalid'); ?>"
                            id="doin_text"
                            name="doin_text"
                            placeholder="Max: 255 caractères"
                            required><?php if($homepage): ?><?php echo e($homepage->doin_text); ?><?php endif; ?></textarea>
                    </div>
                </div>
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