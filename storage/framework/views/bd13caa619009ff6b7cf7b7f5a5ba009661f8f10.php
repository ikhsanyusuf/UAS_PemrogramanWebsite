<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between flex-column flex-sm-row">
            <div>
                <h5 class="card-title mb-0 text-uppercase"><?php echo e($extension); ?></h5>
                <small>
                    <?php if($letter->type == 'incoming'): ?>
                        <a href="<?php echo e(route('transaction.incoming.show', $letter)); ?>" class="fw-bold"><?php echo e($letter->reference_number); ?></a>
                    <?php else: ?>
                        <a href="<?php echo e(route('transaction.outgoing.show', $letter)); ?>" class="fw-bold"><?php echo e($letter->reference_number); ?></a>
                    <?php endif; ?>
                </small>
            </div>
            <?php if(strtolower($extension) == 'pdf'): ?>
                <i class="bx bxs-file-pdf display-5"></i>
            <?php elseif(strtolower($extension) == 'png'): ?>
                <i class="bx bxs-file-png display-5"></i>
            <?php elseif(in_array(strtolower($extension), ['jpeg', 'jpg'])): ?>
                <i class="bx bxs-file-jpg display-5"></i>
            <?php else: ?>
                <i class="bx bxs-file display-5"></i>
            <?php endif; ?>
        </div>
        <div class="accordion mt-3" id="accordion-<?php echo e(str_replace('.', '-', $filename)); ?>">
            <div class="accordion-item card">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-id-<?php echo e(str_replace('.', '-', $filename)); ?>" aria-expanded="false" aria-controls="accordion-id-<?php echo e(str_replace('.', '-', $filename)); ?>">
                    <?php echo e($filename); ?>

                </button>
                <div id="accordion-id-<?php echo e(str_replace('.', '-', $filename)); ?>" class="accordion-collapse collapse text-center" data-bs-parent="#accordion-<?php echo e(str_replace('.', '-', $filename)); ?>" style="">
                    <?php if(strtolower($extension) == 'pdf'): ?>
                        <a class="btn my-3 btn-primary" download href="<?php echo e($path); ?>"><?php echo e(__('menu.general.download')); ?></a>
                    <?php elseif(in_array(strtolower($extension), ['jpg', 'jpeg', 'png'])): ?>
                        <img src="<?php echo e($path); ?>" width="100%" alt="Picture">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\enfor\Documents\#KULIAH\SEMESTER 7\Pemrograman Website\UAS\resources\views/components/gallery-card.blade.php ENDPATH**/ ?>