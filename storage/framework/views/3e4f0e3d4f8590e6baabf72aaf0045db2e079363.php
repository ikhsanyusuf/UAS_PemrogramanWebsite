<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
    lang="en"
    class="light-style customizer-hide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="<?php echo e(asset('public/sneat/')); ?>"
    data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title><?php echo e(__('menu.auth.login')); ?> | <?php echo e(config('app.name')); ?></title>

    <meta name="description" content=""/>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('sneat/img/favicon/favicon.ico')); ?>"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?php echo e(asset('sneat/vendor/fonts/boxicons.css')); ?>"/>

    <!-- Core CSS -->
    <link rel="stylesheet" class="template-customizer-core-css" href="<?php echo e(asset('sneat/vendor/css/core.css')); ?>"/>
    <link rel="stylesheet" class="template-customizer-theme-css"
          href="<?php echo e(asset('sneat/vendor/css/theme-default.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('sneat/css/demo.css')); ?>"/>

    <!-- Page -->
    <link rel="stylesheet" href="<?php echo e(asset('sneat/vendor/css/pages/page-auth.css')); ?>"/>
</head>

<body>
<!-- Content -->

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="<?php echo e(route('home')); ?>" class="app-brand-link gap-2">
                            <img src="<?php echo e(asset('logo-black.png')); ?>" alt="<?php echo e(config('app.name')); ?>" srcset="" width="75px">
                        </a>
                    </div>

                    <form id="formAuthentication" class="mb-3" action="<?php echo e(route('login')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <?php if (isset($component)) { $__componentOriginal354c763c8b638ae676752d74b2c32ad8c0868483 = $component; } ?>
<?php $component = App\View\Components\InputForm::resolve(['name' => 'email','type' => 'email','label' => __('model.user.email')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                        <div class="mb-3">
                            <?php if (isset($component)) { $__componentOriginal354c763c8b638ae676752d74b2c32ad8c0868483 = $component; } ?>
<?php $component = App\View\Components\InputForm::resolve(['name' => 'password','type' => 'password','label' => __('model.user.password')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                        <div class="mt-2">
                            <button class="btn btn-primary d-grid w-100" type="submit"><?php echo e(__('menu.auth.login')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
</div>

<!-- / Content -->
</body>
</html>
<?php /**PATH C:\Users\enfor\Documents\#KULIAH\SEMESTER 7\Pemrograman Website\UAS\resources\views/pages/login.blade.php ENDPATH**/ ?>