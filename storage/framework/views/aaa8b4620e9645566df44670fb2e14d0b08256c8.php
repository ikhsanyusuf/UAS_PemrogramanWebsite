<div class="mb-3">
    <label for="<?php echo e($name); ?>" class="form-label"><?php echo e($label); ?></label>
    <input type="<?php echo e($type); ?>" class="form-control <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="<?php echo e($name); ?>" name="<?php echo e($name); ?>" value="<?php echo e(old($name, $value)); ?>" />
    <span class="error invalid-feedback"><?php echo e($errors->first($name)); ?></span>
</div>
<?php /**PATH C:\Users\enfor\Documents\#KULIAH\SEMESTER 7\Pemrograman Website\UAS\resources\views/components/input-form.blade.php ENDPATH**/ ?>