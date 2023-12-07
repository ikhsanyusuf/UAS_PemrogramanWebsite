<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal40fe594eae3d7d27fa8bd9a508c1498f43cae280 = $component; } ?>
<?php $component = App\View\Components\Breadcrumb::resolve(['values' => [__('menu.transaction.menu'), __('menu.transaction.incoming_letter'), __('menu.general.view')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Breadcrumb::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal40fe594eae3d7d27fa8bd9a508c1498f43cae280)): ?>
<?php $component = $__componentOriginal40fe594eae3d7d27fa8bd9a508c1498f43cae280; ?>
<?php unset($__componentOriginal40fe594eae3d7d27fa8bd9a508c1498f43cae280); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginala12cf9d8ec193c5c993c1d268447f046d729e034 = $component; } ?>
<?php $component = App\View\Components\LetterCard::resolve(['letter' => $data] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('letter-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\LetterCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div class="mt-2">
            <div class="divider">
                <div class="divider-text"><?php echo e(__('menu.general.view')); ?></div>
            </div>
            <dl class="row mt-3">

                <dt class="col-sm-3"><?php echo e(__('model.letter.letter_date')); ?></dt>
                <dd class="col-sm-9"><?php echo e($data->formatted_letter_date); ?></dd>

                <dt class="col-sm-3"><?php echo e(__('model.letter.received_date')); ?></dt>
                <dd class="col-sm-9"><?php echo e($data->formatted_received_date); ?></dd>

                <dt class="col-sm-3"><?php echo e(__('model.letter.reference_number')); ?></dt>
                <dd class="col-sm-9"><?php echo e($data->reference_number); ?></dd>

                <dt class="col-sm-3"><?php echo e(__('model.letter.agenda_number')); ?></dt>
                <dd class="col-sm-9"><?php echo e($data->agenda_number); ?></dd>

                <dt class="col-sm-3"><?php echo e(__('model.classification.code')); ?></dt>
                <dd class="col-sm-9"><?php echo e($data->classification_code); ?></dd>

                <dt class="col-sm-3"><?php echo e(__('model.classification.type')); ?></dt>
                <dd class="col-sm-9"><?php echo e($data->classification?->type); ?></dd>

                <dt class="col-sm-3"><?php echo e(__('model.letter.from')); ?></dt>
                <dd class="col-sm-9"><?php echo e($data->from); ?></dd>

                <dt class="col-sm-3"><?php echo e(__('model.general.created_by')); ?></dt>
                <dd class="col-sm-9"><?php echo e($data->user?->name); ?></dd>

                <dt class="col-sm-3"><?php echo e(__('model.general.created_at')); ?></dt>
                <dd class="col-sm-9"><?php echo e($data->formatted_created_at); ?></dd>

                <dt class="col-sm-3"><?php echo e(__('model.general.updated_at')); ?></dt>
                <dd class="col-sm-9"><?php echo e($data->formatted_updated_at); ?></dd>
            </dl>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala12cf9d8ec193c5c993c1d268447f046d729e034)): ?>
<?php $component = $__componentOriginala12cf9d8ec193c5c993c1d268447f046d729e034; ?>
<?php unset($__componentOriginala12cf9d8ec193c5c993c1d268447f046d729e034); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-surat-menyurat-v1-main\resources\views/pages/transaction/incoming/show.blade.php ENDPATH**/ ?>