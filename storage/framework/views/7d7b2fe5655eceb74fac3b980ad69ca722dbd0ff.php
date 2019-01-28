<?php $__env->startSection('title'); ?>
    Do-In - ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <?php ($paragraphs1 = ''); ?>
    <?php ($paragraphs2 = ''); ?>
    <?php ($paragraphs3 = ''); ?>

    <div class="container doin">
        <div class="row">
            <div class="col-md-9">
                <div class="presentation">
                    <h3><?php echo e($doin->first_paragraph_title); ?></h3>
                    <div class="paragraph-presentation">
                        <?php $__currentLoopData = explode("\n", $doin->first_paragraph_content); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(trim($line)): ?>
                                <?php echo $paragraphs1 .= '<p>' . $line . '</p>'; ?>

                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="paragraph-presentation">
                        <h3><?php echo e($doin->second_paragraph_title); ?></h3>
                        <?php $__currentLoopData = explode("\n", $doin->second_paragraph_content); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(trim($line)): ?>
                                <?php echo $paragraphs2 .= '<p>' . $line . '</p>'; ?>

                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="paragraph-presentation">
                        <h3><?php echo e($doin->third_paragraph_title); ?></h3>
                        <?php $__currentLoopData = explode("\n", $doin->third_paragraph_content); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(trim($line)): ?>
                                <?php echo $paragraphs3 .= '<p>' . $line . '</p>'; ?>

                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 aside">
                <div class="illustration">
                    <img src="<?php echo e($doin->image); ?>" alt="<?php echo e(basename($doin->image)); ?>">
                </div>

                <div class="wellness-list">
                    <ul>
                        <?php $__currentLoopData = explode("\n", $doin->wellness); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($line); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <div class="link text-center">
                    <a class="btn btn-custom-green">Prendre rendez-vous</a>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>