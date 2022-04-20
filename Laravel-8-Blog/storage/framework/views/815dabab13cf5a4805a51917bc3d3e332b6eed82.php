<?php $attributes = $attributes->exceptProps(['name']); ?>
<?php foreach (array_filter((['name']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<label for="<?php echo e($name); ?>"
    class="block mb-2 uppercase font-bold text-xs text-gray-700"><?php echo e(ucwords($name)); ?></label>
<?php /**PATH C:\xampp\htdocs\Laravel\Laravel1\resources\views/components/form/label.blade.php ENDPATH**/ ?>