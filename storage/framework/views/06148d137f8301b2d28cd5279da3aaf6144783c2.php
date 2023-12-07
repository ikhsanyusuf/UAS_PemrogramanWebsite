<div class="card mb-4">
    <div class="card-header pb-0">
        <div class="d-flex justify-content-between flex-column flex-sm-row">
            <div class="card-title">
                <h5 class="text-nowrap mb-0 fw-bold"><?php echo e($letter->reference_number); ?></h5>
                <small class="text-black">
                    <?php echo e($letter->type == 'incoming' ? $letter->from : $letter->to); ?> |
                    <span
                        class="text-secondary"><?php echo e(__('model.letter.agenda_number')); ?>:</span> <?php echo e($letter->agenda_number); ?>

                    |
                    <?php echo e($letter->classification?->type); ?>

                </small>
            </div>
            <div class="card-title d-flex flex-row">
                <div class="d-inline-block mx-2 text-end text-black">
                    <small class="d-block text-secondary"><?php echo e(__('model.letter.letter_date')); ?></small>
                    <?php echo e($letter->formatted_letter_date); ?>

                </div>
                <?php if($letter->type == 'incoming'): ?>
                    <div class="mx-3">
                        <a href="<?php echo e(route('transaction.disposition.index', $letter)); ?>"
                           class="btn btn-primary btn"><?php echo e(__('model.letter.dispose')); ?> <span>(<?php echo e($letter->dispositions->count()); ?>)</span></a>
                    </div>
                <?php endif; ?>
                <div class="dropdown d-inline-block">
                    <button class="btn p-0" type="button" id="dropdown-<?php echo e($letter->type); ?>-<?php echo e($letter->id); ?>"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <?php if($letter->type == 'incoming'): ?>
                        <div class="dropdown-menu dropdown-menu-end"
                             aria-labelledby="dropdown-<?php echo e($letter->type); ?>-<?php echo e($letter->id); ?>">
                            <?php if(!\Illuminate\Support\Facades\Route::is('*.show')): ?>
                                <a class="dropdown-item"
                                   href="<?php echo e(route('transaction.incoming.show', $letter)); ?>"><?php echo e(__('menu.general.view')); ?></a>
                            <?php endif; ?>
                            <a class="dropdown-item"
                               href="<?php echo e(route('transaction.incoming.edit', $letter)); ?>"><?php echo e(__('menu.general.edit')); ?></a>
                            <form action="<?php echo e(route('transaction.incoming.destroy', $letter)); ?>" class="d-inline"
                                  method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <span
                                    class="dropdown-item cursor-pointer btn-delete"><?php echo e(__('menu.general.delete')); ?></span>
                            </form>
                        </div>
                    <?php else: ?>
                        <div class="dropdown-menu dropdown-menu-end"
                             aria-labelledby="dropdown-<?php echo e($letter->type); ?>-<?php echo e($letter->id); ?>">
                            <?php if(!\Illuminate\Support\Facades\Route::is('*.show')): ?>
                                <a class="dropdown-item"
                                   href="<?php echo e(route('transaction.outgoing.show', $letter)); ?>"><?php echo e(__('menu.general.view')); ?></a>
                            <?php endif; ?>
                            <a class="dropdown-item"
                               href="<?php echo e(route('transaction.outgoing.edit', $letter)); ?>"><?php echo e(__('menu.general.edit')); ?></a>
                            <form action="<?php echo e(route('transaction.outgoing.destroy', $letter)); ?>" class="d-inline"
                                  method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <span
                                    class="dropdown-item cursor-pointer btn-delete"><?php echo e(__('menu.general.delete')); ?></span>
                            </form>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <hr>
        <p><?php echo e($letter->description); ?></p>
        <div class="d-flex justify-content-between flex-column flex-sm-row">
            <small class="text-secondary"><?php echo e($letter->note); ?></small>
            <?php if(count($letter->attachments)): ?>
                <div>
                    <?php $__currentLoopData = $letter->attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e($attachment->path_url); ?>" target="_blank">
                            <?php if($attachment->extension == 'pdf'): ?>
                                <i class="bx bxs-file-pdf display-6 cursor-pointer text-primary"></i>
                            <?php elseif(in_array($attachment->extension, ['jpg', 'jpeg'])): ?>
                                <i class="bx bxs-file-jpg display-6 cursor-pointer text-primary"></i>
                            <?php elseif($attachment->extension == 'png'): ?>
                                <i class="bx bxs-file-png display-6 cursor-pointer text-primary"></i>
                            <?php endif; ?>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>
        <?php echo e($slot); ?>

    </div>
</div>
<?php /**PATH C:\Users\enfor\Documents\#KULIAH\SEMESTER 7\Pemrograman Website\UAS\resources\views/components/letter-card.blade.php ENDPATH**/ ?>