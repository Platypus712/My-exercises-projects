<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <!--  Category -->
        <div class="relative lg:inline-flex bg-gray-100 rounded-xl">

            <?php if (isset($component)) { $__componentOriginal4f66722947691db01920253e9e2edd1fa3282e1d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CategoryDropdown::class, []); ?>
<?php $component->withName('category-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal4f66722947691db01920253e9e2edd1fa3282e1d)): ?>
<?php $component = $__componentOriginal4f66722947691db01920253e9e2edd1fa3282e1d; ?>
<?php unset($__componentOriginal4f66722947691db01920253e9e2edd1fa3282e1d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

        </div>

        <!-- Other Filters -->
        <!--<div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
            <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                <option value="category" disabled selected>Other Filters
                </option>
                <option value="foo">Foo
                </option>
                <option value="bar">Bar
                </option>
            </select>

            <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22" height="22"
                viewBox="0 0 22 22">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                    </path>
                    <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                    </path>
                </g>
            </svg>
        </div>-->

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="#">
                <input type="text" name="search" placeholder="Find something"
                    class="bg-transparent placeholder-black font-semibold text-sm" value="<?php echo e(request('search')); ?>">
            </form>
        </div>
    </div>
</header>
<?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/_posts-header.blade.php ENDPATH**/ ?>