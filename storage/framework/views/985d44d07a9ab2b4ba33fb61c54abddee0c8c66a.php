<?php $__env->startSection('title'); ?>
    Shiatsu - ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="container shiatsu">
        <div class="row">
            <div class="col-md-9">
                <div class="presentation">
                    <h3><?php echo e($shiatsu->first_paragraph_title); ?></h3>
                    <div class="paragraph-presentation">
                        <?php $__currentLoopData = explode("\n", $shiatsu->first_paragraph_content); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(trim($line)): ?>
                                <?php echo '<p>' . $line . '</p>'; ?>

                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="paragraph-presentation">
                        <h3><?php echo e($shiatsu->second_paragraph_title); ?></h3>
                        <?php $__currentLoopData = explode("\n", $shiatsu->second_paragraph_content); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(trim($line)): ?>
                                <?php echo '<p>' . $line . '</p>'; ?>

                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="paragraph-presentation">
                        <h3><?php echo e($shiatsu->third_paragraph_title); ?></h3>
                        <?php $__currentLoopData = explode("\n", $shiatsu->third_paragraph_content); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(trim($line)): ?>
                                <?php echo '<p>' . $line . '</p>'; ?>

                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 aside">
                <div class="illustration">
                    <img src="<?php echo e($shiatsu->image); ?>" alt="<?php echo e(basename($shiatsu->image)); ?>">
                </div>

                <div class="wellness-list">
                    <ul>
                    <?php $__currentLoopData = explode("\n", $shiatsu->wellness); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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