<?php $__env->startPush('script'); ?>
    <script>
        $('input#accountActivation').on('change', function () {
           $('button.deactivate-account').attr('disabled', !$(this).is(':checked'));
        });

        document.addEventListener('DOMContentLoaded', function (e) {
            (function () {
                // Update/reset user image of account page
                let accountUserImage = document.getElementById('uploadedAvatar');
                const fileInput = document.querySelector('.account-file-input'),
                    resetFileInput = document.querySelector('.account-image-reset');

                if (accountUserImage) {
                    const resetImage = accountUserImage.src;
                    fileInput.onchange = () => {
                        if (fileInput.files[0]) {
                            accountUserImage.src = window.URL.createObjectURL(fileInput.files[0]);
                        }
                    };
                    resetFileInput.onclick = () => {
                        fileInput.value = '';
                        accountUserImage.src = resetImage;
                    };
                }
            })();
        });
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal40fe594eae3d7d27fa8bd9a508c1498f43cae280 = $component; } ?>
<?php $component = App\View\Components\Breadcrumb::resolve(['values' => [__('navbar.profile.profile')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

    <div class="row">
        <div class="col">
            
            <?php if(auth()->user()->role == 'admin'): ?>
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0);"><?php echo e(__('navbar.profile.profile')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('settings.show')); ?>"><?php echo e(__('navbar.profile.settings')); ?></a>
                </li>
            </ul>
            <?php endif; ?>

            <div class="card mb-4">
                <form action="<?php echo e(route('profile.update')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <!-- Account -->
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="<?php echo e($data->profile_picture); ?>" alt="user-avatar"
                                 class="d-block rounded" height="100" width="100" id="uploadedAvatar">
                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                    <span class="d-none d-sm-block"><?php echo e(__('menu.general.upload')); ?></span>
                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                    <input type="file" name="profile_picture" id="upload" class="account-file-input" hidden=""
                                           accept="image/png, image/jpeg">
                                </label>
                                <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                    <i class="bx bx-reset d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block"><?php echo e(__('menu.general.cancel')); ?></span>
                                </button>

                                <p class="text-muted mb-0">< 800K (JPG, GIF, PNG)</p>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0">
                    <div class="card-body">
                        <div class="row">
                            <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                            <div class="col-md-6 col-lg-12">
                                <?php if (isset($component)) { $__componentOriginal354c763c8b638ae676752d74b2c32ad8c0868483 = $component; } ?>
<?php $component = App\View\Components\InputForm::resolve(['name' => 'name','label' => __('model.user.name'),'value' => $data->name] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <div class="col-md-6">
                                <?php if (isset($component)) { $__componentOriginal354c763c8b638ae676752d74b2c32ad8c0868483 = $component; } ?>
<?php $component = App\View\Components\InputForm::resolve(['name' => 'email','label' => __('model.user.email'),'value' => $data->email] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <div class="col-md-6">
                                <?php if (isset($component)) { $__componentOriginal354c763c8b638ae676752d74b2c32ad8c0868483 = $component; } ?>
<?php $component = App\View\Components\InputForm::resolve(['name' => 'phone','label' => __('model.user.phone'),'value' => $data->phone ?? ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2"><?php echo e(__('menu.general.update')); ?></button>
                            <button type="reset" class="btn btn-outline-secondary"><?php echo e(__('menu.general.cancel')); ?></button>
                        </div>
                    </div>
                    <!-- /Account -->
                </form>
            </div>

            <?php if(auth()->user()->role == 'staff'): ?>
            <div class="card">
                <h5 class="card-header"><?php echo e(__('navbar.profile.deactivate_account')); ?></h5>
                <div class="card-body">
                    <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                            <h6 class="alert-heading fw-bold mb-1"><?php echo e(__('navbar.profile.deactivate_confirm_message')); ?></h6>
                        </div>
                    </div>
                    <form id="formAccountDeactivation" action="<?php echo e(route('profile.deactivate')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation">
                            <label class="form-check-label" for="accountActivation"><?php echo e(__('navbar.profile.deactivate_confirm')); ?></label>
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account" disabled><?php echo e(__('navbar.profile.deactivate_account')); ?></button>
                    </form>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\enfor\Documents\#KULIAH\SEMESTER 7\Pemrograman Website\UAS\resources\views/pages/profile.blade.php ENDPATH**/ ?>