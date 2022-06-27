<div class="mx-auto min-h-screen relative">
	<div class="flex flex-col lg:flex-row">
		<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        	<?php echo $__env->make('frontend.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
</div>
<?php /**PATH C:\xampp\htdocs\projects\livewire\livewire\resources\views/livewire/show-posts.blade.php ENDPATH**/ ?>