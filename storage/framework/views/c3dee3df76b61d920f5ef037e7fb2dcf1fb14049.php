<?php $__env->startPush('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('sneat/vendor/libs/apex-charts/apex-charts.css')); ?>" />
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('sneat/vendor/libs/apex-charts/apexcharts.js')); ?>"></script>
    <script>
        const options = {
            chart: {
                type: 'bar'
            },
            series: [{
                name: '<?php echo e(__('dashboard.letter_transaction')); ?>',
                data: [<?php echo e($todayIncomingLetter); ?>,<?php echo e($todayOutgoingLetter); ?>,<?php echo e($todayDispositionLetter); ?>]
            }],
            stroke: {
                curve: 'smooth',
            },
            xaxis: {
                categories: [
                    '<?php echo e(__('dashboard.incoming_letter')); ?>',
                    '<?php echo e(__('dashboard.outgoing_letter')); ?>',
                    '<?php echo e(__('dashboard.disposition_letter')); ?>',
                ],
            }
        }

        const chart = new ApexCharts(document.querySelector("#today-graphic"), options);

        chart.render();
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card mb-4">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h4 class="card-title text-primary"><?php echo e($greeting); ?></h4>
                            <p class="mb-4">
                                <?php echo e($currentDate); ?>

                            </p>
                            <p style="font-size: smaller" class="text-gray">*) <?php echo e(__('dashboard.today_report')); ?></p>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="<?php echo e(asset('sneat/img/man-with-laptop-light.png')); ?>" height="140"
                                 alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                 data-app-light-img="illustrations/man-with-laptop-light.png">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between flex-sm-row flex-column gap-3"
                             style="position: relative;">
                            <div class="">
                                <div class="card-title">
                                    <h5 class="text-nowrap mb-2"><?php echo e(__('dashboard.today_graphic')); ?></h5>
                                    <span class="badge bg-label-warning rounded-pill"><?php echo e(__('dashboard.today')); ?></span>
                                </div>
                                <div class="mt-sm-auto">
                                    <?php if($percentageLetterTransaction > 0): ?>
                                    <small class="text-success text-nowrap fw-semibold">
                                        <i class="bx bx-chevron-up"></i> <?php echo e($percentageLetterTransaction); ?>%
                                    </small>
                                    <?php elseif($percentageLetterTransaction < 0): ?>
                                        <small class="text-danger text-nowrap fw-semibold">
                                            <i class="bx bx-chevron-down"></i> <?php echo e($percentageLetterTransaction); ?>%
                                        </small>
                                    <?php endif; ?>
                                    <h3 class="mb-0 display-4"><?php echo e($todayLetterTransaction); ?></h3>
                                </div>
                            </div>
                            <div id="profileReportChart" style="min-height: 80px; width: 80%">
                                <div id="today-graphic"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <?php if (isset($component)) { $__componentOriginal0bcffe2ea2eb01285ce9348b90e24091d9346191 = $component; } ?>
<?php $component = App\View\Components\DashboardCardSimple::resolve(['label' => __('dashboard.incoming_letter'),'value' => $todayIncomingLetter,'daily' => true,'color' => 'success','icon' => 'bx-envelope','percentage' => $percentageIncomingLetter] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard-card-simple'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\DashboardCardSimple::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0bcffe2ea2eb01285ce9348b90e24091d9346191)): ?>
<?php $component = $__componentOriginal0bcffe2ea2eb01285ce9348b90e24091d9346191; ?>
<?php unset($__componentOriginal0bcffe2ea2eb01285ce9348b90e24091d9346191); ?>
<?php endif; ?>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <?php if (isset($component)) { $__componentOriginal0bcffe2ea2eb01285ce9348b90e24091d9346191 = $component; } ?>
<?php $component = App\View\Components\DashboardCardSimple::resolve(['label' => __('dashboard.outgoing_letter'),'value' => $todayOutgoingLetter,'daily' => true,'color' => 'danger','icon' => 'bx-envelope','percentage' => $percentageOutgoingLetter] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard-card-simple'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\DashboardCardSimple::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0bcffe2ea2eb01285ce9348b90e24091d9346191)): ?>
<?php $component = $__componentOriginal0bcffe2ea2eb01285ce9348b90e24091d9346191; ?>
<?php unset($__componentOriginal0bcffe2ea2eb01285ce9348b90e24091d9346191); ?>
<?php endif; ?>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <?php if (isset($component)) { $__componentOriginal0bcffe2ea2eb01285ce9348b90e24091d9346191 = $component; } ?>
<?php $component = App\View\Components\DashboardCardSimple::resolve(['label' => __('dashboard.disposition_letter'),'value' => $todayDispositionLetter,'daily' => true,'color' => 'primary','icon' => 'bx-envelope','percentage' => $percentageDispositionLetter] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard-card-simple'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\DashboardCardSimple::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0bcffe2ea2eb01285ce9348b90e24091d9346191)): ?>
<?php $component = $__componentOriginal0bcffe2ea2eb01285ce9348b90e24091d9346191; ?>
<?php unset($__componentOriginal0bcffe2ea2eb01285ce9348b90e24091d9346191); ?>
<?php endif; ?>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <?php if (isset($component)) { $__componentOriginal0bcffe2ea2eb01285ce9348b90e24091d9346191 = $component; } ?>
<?php $component = App\View\Components\DashboardCardSimple::resolve(['label' => __('dashboard.active_user'),'value' => $activeUser,'daily' => false,'color' => 'info','icon' => 'bx-user-check','percentage' => 0] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard-card-simple'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\DashboardCardSimple::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0bcffe2ea2eb01285ce9348b90e24091d9346191)): ?>
<?php $component = $__componentOriginal0bcffe2ea2eb01285ce9348b90e24091d9346191; ?>
<?php unset($__componentOriginal0bcffe2ea2eb01285ce9348b90e24091d9346191); ?>
<?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-surat-menyurat-v1-main\resources\views/pages/dashboard.blade.php ENDPATH**/ ?>