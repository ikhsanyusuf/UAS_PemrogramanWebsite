<div class="mb-3">
    <label for="<?php echo e($name); ?>" class="form-label"><?php echo e($label); ?></label>
    <textarea class="form-control <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="<?php echo e($name); ?>" name="<?php echo e($name); ?>" rows="3"><?php echo e(old($name, $value)); ?></textarea>
    <span class="error invalid-feedback"><?php echo e($errors->first($name)); ?></span>
</div>
<?php /**PATH C:\xampp\htdocs\laravel-surat-menyurat-v1-main\resources\views/components/input-textarea-form.blade.php ENDPATH**/ ?>