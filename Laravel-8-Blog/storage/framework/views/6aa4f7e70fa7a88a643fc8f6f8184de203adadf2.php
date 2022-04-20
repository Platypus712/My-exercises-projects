<?php if(session()->has('success')): ?>
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
        class="bg-blue-500 bottom-3 fixed px-4 py-2 right-3 rounded-xl text-sm text-white">
        <p><?php echo e(session('success')); ?></p>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/components/flash.blade.php ENDPATH**/ ?>