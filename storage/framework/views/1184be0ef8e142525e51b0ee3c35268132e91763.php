<div>
    <?php if(count($values)): ?>
        <div class="d-flex justify-content-between flex-column flex-sm-row">
            <h4 class="fw-bold py-3 mb-4">
                <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($loop->last): ?>
                        <?php echo e($value); ?>

                    <?php else: ?>
                        <span class="text-muted fw-light"><?php echo e($value); ?> /</span>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </h4>
            <div class="py-3">
                <?php echo e($slot); ?>

            </div>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\enfor\Documents\#KULIAH\SEMESTER 7\Pemrograman Website\UAS\resources\views/components/breadcrumb.blade.php ENDPATH**/ ?>