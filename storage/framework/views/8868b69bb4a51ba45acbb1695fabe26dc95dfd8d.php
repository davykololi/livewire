<div class="mx-auto min-h-screen">
    <div class="flex flex-col lg:flex-row justify-around gap-1">
        <!--Main-->       
        <main class="p-2 my-1 w-screen lg:w-2/3 bg-white mix-blend-normal shadow mx-auto lg:ml-16">
            <article class="lg:mx-6 mx-auto">
                <?php echo $__env->make('frontend.article_universal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <p class="text-gray-700 text-base leading-tight"><?php echo e($post->content); ?> </p>
                <?php echo $__env->make('frontend.post_tags', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div> Share: <?php echo $shareComponent; ?></div>
            </article>
        </main>
        <!--Right Sidebar-->
        <?php if (isset($component)) { $__componentOriginale693a7c9877111390c4f137e9b32bff882976680 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FrontendRightSidebar::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend-right-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\FrontendRightSidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale693a7c9877111390c4f137e9b32bff882976680)): ?>
<?php $component = $__componentOriginale693a7c9877111390c4f137e9b32bff882976680; ?>
<?php unset($__componentOriginale693a7c9877111390c4f137e9b32bff882976680); ?>
<?php endif; ?>
    </div>
</div><?php /**PATH C:\xampp\htdocs\projects\livewire\livewire\resources\views/livewire/detail.blade.php ENDPATH**/ ?>