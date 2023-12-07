<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal40fe594eae3d7d27fa8bd9a508c1498f43cae280 = $component; } ?>
<?php $component = App\View\Components\Breadcrumb::resolve(['values' => [__('menu.transaction.menu'), $letter->reference_number, __('menu.transaction.disposition_letter')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Breadcrumb::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <a href="<?php echo e(route('transaction.disposition.create', $letter)); ?>" class="btn btn-primary"><?php echo e(__('menu.general.create')); ?></a>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal40fe594eae3d7d27fa8bd9a508c1498f43cae280)): ?>
<?php $component = $__componentOriginal40fe594eae3d7d27fa8bd9a508c1498f43cae280; ?>
<?php unset($__componentOriginal40fe594eae3d7d27fa8bd9a508c1498f43cae280); ?>
<?php endif; ?>

    <div class="alert alert-primary alert-dismissible" role="alert">
        <?php echo e(__('model.disposition.notice_me', ['reference_number' => $letter->reference_number])); ?> <a href="<?php echo e(route('transaction.incoming.show', $letter)); ?>" class="fw-bold"><?php echo e(__('menu.general.view')); ?></a>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disposition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginal37d2cabdbe8313e811b8253033f603dcd3705351 = $component; } ?>
<?php $component = App\View\Components\DispositionCard::resolve(['letter' => $letter,'disposition' => $disposition] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('disposition-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\DispositionCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal37d2cabdbe8313e811b8253033f603dcd3705351)): ?>
<?php $component = $__componentOriginal37d2cabdbe8313e811b8253033f603dcd3705351; ?>
<?php unset($__componentOriginal37d2cabdbe8313e811b8253033f603dcd3705351); ?>
<?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php echo $data->appends(['search' => $search])->links(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\enfor\Documents\#KULIAH\SEMESTER 7\Pemrograman Website\UAS\resources\views/pages/transaction/disposition/index.blade.php ENDPATH**/ ?>