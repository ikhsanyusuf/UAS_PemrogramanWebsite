<?php $__env->startPush('script'); ?>
    <script>
        $(document).on('click', '.btn-edit', function () {
            const id = $(this).data('id');
            $('#editModal form').attr('action', '<?php echo e(route('user.index')); ?>/' + id);
            $('#editModal input:hidden#id').val(id);
            $('#editModal input#name').val($(this).data('name'));
            $('#editModal input#phone').val($(this).data('phone'));
            $('#editModal input#email').val($(this).data('email'));
            if ($(this).data('active') == 1) {
                $('#editModal input#is_active').attr('checked', 1)
            } else {
                $('#editModal input#is_active').removeAttribute('checked');
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal40fe594eae3d7d27fa8bd9a508c1498f43cae280 = $component; } ?>
<?php $component = App\View\Components\Breadcrumb::resolve(['values' => [__('menu.users')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Breadcrumb::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <button
            type="button"
            class="btn btn-primary btn-create"
            data-bs-toggle="modal"
            data-bs-target="#createModal">
            <?php echo e(__('menu.general.create')); ?>

        </button>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal40fe594eae3d7d27fa8bd9a508c1498f43cae280)): ?>
<?php $component = $__componentOriginal40fe594eae3d7d27fa8bd9a508c1498f43cae280; ?>
<?php unset($__componentOriginal40fe594eae3d7d27fa8bd9a508c1498f43cae280); ?>
<?php endif; ?>

    <div class="card mb-5">
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th><?php echo e(__('model.user.name')); ?></th>
                    <th><?php echo e(__('model.user.email')); ?></th>
                    <th><?php echo e(__('model.user.phone')); ?></th>
                    <th><?php echo e(__('model.user.is_active')); ?></th>
                    <th><?php echo e(__('menu.general.action')); ?></th>
                </tr>
                </thead>
                <?php if($data): ?>
                    <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($user->name); ?></td>
                            <td><?php echo e($user->email); ?></td>
                            <td><?php echo e($user->phone); ?></td>
                            <td><span
                                    class="badge bg-label-primary me-1"><?php echo e(__('model.user.' . ($user->is_active ? 'active' : 'nonactive'))); ?></span>
                            </td>
                            <td>
                                <button class="btn btn-info btn-sm btn-edit"
                                        data-id="<?php echo e($user->id); ?>"
                                        data-name="<?php echo e($user->name); ?>"
                                        data-email="<?php echo e($user->email); ?>"
                                        data-phone="<?php echo e($user->phone); ?>"
                                        data-active="<?php echo e($user->is_active); ?>"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editModal">
                                    <?php echo e(__('menu.general.edit')); ?>

                                </button>
                                <form action="<?php echo e(route('user.destroy', $user)); ?>" class="d-inline" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger btn-sm btn-delete"
                                            type="button"><?php echo e(__('menu.general.delete')); ?></button>
                                </form>
                            </td>
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
                    <th><?php echo e(__('model.user.name')); ?></th>
                    <th><?php echo e(__('model.user.email')); ?></th>
                    <th><?php echo e(__('model.user.phone')); ?></th>
                    <th><?php echo e(__('model.user.is_active')); ?></th>
                    <th><?php echo e(__('menu.general.action')); ?></th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <?php echo $data->appends(['search' => $search])->links(); ?>


    <!-- Create Modal -->
    <div class="modal fade" id="createModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <form class="modal-content" method="post" action="<?php echo e(route('user.store')); ?>">
                <?php echo csrf_field(); ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalTitle"><?php echo e(__('menu.general.create')); ?></h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <?php if (isset($component)) { $__componentOriginal354c763c8b638ae676752d74b2c32ad8c0868483 = $component; } ?>
<?php $component = App\View\Components\InputForm::resolve(['name' => 'name','label' => __('model.user.name')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                    <?php if (isset($component)) { $__componentOriginal354c763c8b638ae676752d74b2c32ad8c0868483 = $component; } ?>
<?php $component = App\View\Components\InputForm::resolve(['name' => 'email','label' => __('model.user.email'),'type' => 'email'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                    <?php if (isset($component)) { $__componentOriginal354c763c8b638ae676752d74b2c32ad8c0868483 = $component; } ?>
<?php $component = App\View\Components\InputForm::resolve(['name' => 'phone','label' => __('model.user.phone')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <?php echo e(__('menu.general.cancel')); ?>

                    </button>
                    <button type="submit" class="btn btn-primary"><?php echo e(__('menu.general.save')); ?></button>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <form class="modal-content" method="post" action="">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalTitle"><?php echo e(__('menu.general.edit')); ?></h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="id" value="">
                    <?php if (isset($component)) { $__componentOriginal354c763c8b638ae676752d74b2c32ad8c0868483 = $component; } ?>
<?php $component = App\View\Components\InputForm::resolve(['name' => 'name','label' => __('model.user.name')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                    <?php if (isset($component)) { $__componentOriginal354c763c8b638ae676752d74b2c32ad8c0868483 = $component; } ?>
<?php $component = App\View\Components\InputForm::resolve(['name' => 'email','label' => __('model.user.email'),'type' => 'email'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                    <?php if (isset($component)) { $__componentOriginal354c763c8b638ae676752d74b2c32ad8c0868483 = $component; } ?>
<?php $component = App\View\Components\InputForm::resolve(['name' => 'phone','label' => __('model.user.phone')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="is_active" value="true" id="is_active">
                        <label class="form-check-label" for="is_active"> <?php echo e(__('model.user.is_active')); ?> </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="reset_password" value="true" id="reset_password">
                        <label class="form-check-label" for="reset_password"> <?php echo e(__('model.user.reset_password')); ?> </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <?php echo e(__('menu.general.cancel')); ?>

                    </button>
                    <button type="submit" class="btn btn-primary"><?php echo e(__('menu.general.update')); ?></button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\enfor\Documents\#KULIAH\SEMESTER 7\Pemrograman Website\UAS\resources\views/pages/user.blade.php ENDPATH**/ ?>