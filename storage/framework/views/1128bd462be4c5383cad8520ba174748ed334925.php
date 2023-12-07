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
    lang="id"
    class="light-style layout-menu-fixed"
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

    <title><?php echo e(config('app.name')); ?></title>

    <meta name="description" content=""/>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('logo-black.png')); ?>"/>

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

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('sneat/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('sneat/vendor/libs/sweetalert2/sweetalert2.min.css')); ?>"/>

    <!-- Page CSS -->
    <?php echo $__env->yieldPushContent('style'); ?>

    <!-- Helpers -->
    <script src="<?php echo e(asset('sneat/vendor/js/helpers.js')); ?>"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?php echo e(asset('sneat/js/config.js')); ?>"></script>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->
        <?php echo $__env->make('components.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->
            <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
                <!-- / Content -->

                <!-- Footer -->
                <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?php echo e(asset('sneat/vendor/libs/jquery/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('sneat/vendor/libs/popper/popper.js')); ?>"></script>
<script src="<?php echo e(asset('sneat/vendor/js/bootstrap.js')); ?>"></script>
<script src="<?php echo e(asset('sneat/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')); ?>"></script>

<script src="<?php echo e(asset('sneat/vendor/js/menu.js')); ?>"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?php echo e(asset('sneat/vendor/libs/masonry/masonry.js')); ?>"></script>
<script src="<?php echo e(asset('sneat/vendor/libs/sweetalert2/sweetalert2.all.min.js')); ?>"></script>

<!-- Main JS -->
<script src="<?php echo e(asset('sneat/js/main.js')); ?>"></script>
<script>
    $(document).on('click', '.btn-delete', function (req) {
        Swal.fire({
            title: '<?php echo e(__('menu.general.delete_confirm')); ?>',
            text: "<?php echo e(__('menu.general.delete_warning')); ?>",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#696cff',
            confirmButtonText: '<?php echo e(__('menu.general.delete')); ?>',
            cancelButtonText: '<?php echo e(__('menu.general.cancel')); ?>'
        }).then((result) => {
            if (result.isConfirmed) {
                $(this).parent('form').submit();
            }
        })
    });
</script>

<!-- Page JS -->
<?php echo $__env->yieldPushContent('script'); ?>

<?php if(session('success')): ?>
    <script>
        Toast.fire({
            icon: 'success',
            title: '<?php echo e(session('success')); ?>'
        })
    </script>
<?php elseif(session('error')): ?>
    <script>
        Toast.fire({
            icon: 'error',
            title: '<?php echo e(session('error')); ?>'
        })
    </script>
<?php elseif(session('info')): ?>
    <script>
        Toast.fire({
            icon: 'info',
            title: '<?php echo e(session('info')); ?>'
        })
    </script>
<?php endif; ?>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>

<?php /**PATH C:\Users\enfor\Documents\#KULIAH\SEMESTER 7\Pemrograman Website\UAS\resources\views/layout/main.blade.php ENDPATH**/ ?>