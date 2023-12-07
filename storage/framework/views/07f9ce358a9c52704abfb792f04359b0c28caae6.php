<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal40fe594eae3d7d27fa8bd9a508c1498f43cae280 = $component; } ?>
<?php $component = App\View\Components\Breadcrumb::resolve(['values' => [__('menu.agenda.menu'), __('menu.agenda.outgoing_letter')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

    <div class="card mb-5">
        <div class="card-header">
            <form action="<?php echo e(url()->current()); ?>">
                <input type="hidden" name="search" value="<?php echo e($search ?? ''); ?>">
                <div class="row">
                    <div class="col">
                        <?php if (isset($component)) { $__componentOriginal354c763c8b638ae676752d74b2c32ad8c0868483 = $component; } ?>
<?php $component = App\View\Components\InputForm::resolve(['name' => 'since','label' => __('menu.agenda.start_date'),'type' => 'date','value' => $since ? date('Y-m-d', strtotime($since)) : ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\InputForm::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal354c763c8b638ae676752d74b2c32ad8c0868483)): ?>
<?php $component = $__componentOriginal354c763c8b638ae676752d74b2c32ad8c0868483; ?>
<?php unset($__componentOriginal354c763c8b638ae676752d74b2c32ad8c0868483); ?>
<?php endif; ?>
                    </div>
                    <div class="col">
                        <?php if (isset($component)) { $__componentOriginal354c763c8b638ae676752d74b2c32ad8c0868483 = $component; } ?>
<?php $component = App\View\Components\InputForm::resolve(['name' => 'until','label' => __('menu.agenda.end_date'),'type' => 'date','value' => $until ? date('Y-m-d', strtotime($until)) : ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\InputForm::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal354c763c8b638ae676752d74b2c32ad8c0868483)): ?>
<?php $component = $__componentOriginal354c763c8b638ae676752d74b2c32ad8c0868483; ?>
<?php unset($__componentOriginal354c763c8b638ae676752d74b2c32ad8c0868483); ?>
<?php endif; ?>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="filter" class="form-label"><?php echo e(__('menu.agenda.filter_by')); ?></label>
                            <select class="form-select" id="filter" name="filter">
                                <option
                                    value="letter_date" <?php if(old('filter', $filter) == 'letter_date'): echo 'selected'; endif; ?>><?php echo e(__('model.letter.letter_date')); ?></option>
                                <option
                                    value="created_at" <?php if(old('filter', $filter) == 'created_at'): echo 'selected'; endif; ?>><?php echo e(__('model.general.created_at')); ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label"><?php echo e(__('menu.general.action')); ?></label>
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-primary"
                                            type="submit"><?php echo e(__('menu.general.filter')); ?></button>
                                    <a
                                        href="<?php echo e(route('agenda.outgoing.print') . '?' . $query); ?>"
                                        target="_blank"
                                        class="btn btn-primary">
                                        <?php echo e(__('menu.general.print')); ?>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th><?php echo e(__('model.letter.agenda_number')); ?></th>
                    <th><?php echo e(__('model.letter.reference_number')); ?></th>
                    <th><?php echo e(__('model.letter.to')); ?></th>
                    <th><?php echo e(__('model.letter.letter_date')); ?></th>
                </tr>
                </thead>
                <?php if($data): ?>
                    <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agenda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong><?php echo e($agenda->agenda_number); ?></strong></td>
                            <td>
                                <a href="<?php echo e(route('transaction.outgoing.show', $agenda)); ?>"><?php echo e($agenda->reference_number); ?></a>
                            </td>
                            <td><?php echo e($agenda->to); ?></td>
                            <td><?php echo e($agenda->formatted_letter_date); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                <?php else: ?>
                    <tbody>
                    <tr>
                        <td colspan="4" class="text-center">
                            <?php echo e(__('menu.general.empty')); ?>

                        </td>
                    </tr>
                    </tbody>
                <?php endif; ?>
                <tfoot class="table-border-bottom-0">
                <tr>
                    <th><?php echo e(__('model.letter.agenda_number')); ?></th>
                    <th><?php echo e(__('model.letter.reference_number')); ?></th>
                    <th><?php echo e(__('model.letter.to')); ?></th>
                    <th><?php echo e(__('model.letter.letter_date')); ?></th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <?php echo $data->appends(['search' => $search, 'since' => $since, 'until' => $until, 'filter' => $filter])->links(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-surat-menyurat-v1-main\resources\views/pages/transaction/outgoing/agenda.blade.php ENDPATH**/ ?>