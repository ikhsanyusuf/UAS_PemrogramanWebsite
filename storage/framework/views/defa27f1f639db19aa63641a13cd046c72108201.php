<div class="card">
    <div class="card-body">
        <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
                <span class="badge bg-label-<?php echo e($color); ?> p-2">
                    <i class="bx <?php echo e($icon); ?> text-<?php echo e($color); ?>"></i>
                </span>
            </div>
            <?php if($label != __('dashboard.disposition_letter') && !(auth()->user()->role == 'staff' && $label == __('dashboard.active_user'))): ?>
                <div class="dropdown">
                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                        <?php if($label == __('dashboard.incoming_letter')): ?>
                            <a class="dropdown-item"
                               href="<?php echo e(route('transaction.incoming.index')); ?>"><?php echo e(__('dashboard.view_more')); ?></a>
                        <?php elseif($label == __('dashboard.outgoing_letter')): ?>
                            <a class="dropdown-item"
                               href="<?php echo e(route('transaction.outgoing.index')); ?>"><?php echo e(__('dashboard.view_more')); ?></a>
                        <?php elseif($label == __('dashboard.active_user')): ?>
                            <a class="dropdown-item"
                               href="<?php echo e(route('user.index')); ?>"><?php echo e(__('dashboard.view_more')); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <span class="fw-semibold d-block mb-1"><?php echo e($label); ?> <?php echo e($daily ? '*' : ''); ?></span>
        <h3 class="card-title mb-2"><?php echo e($value); ?></h3>
        <?php if($percentage > 0): ?>
            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> <?php echo e($percentage); ?>%</small>
        <?php elseif($percentage < 0): ?>
            <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> <?php echo e($percentage); ?>%</small>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\laravel-surat-menyurat-v1-main\resources\views/components/dashboard-card-simple.blade.php ENDPATH**/ ?>