<!-- Container -->
<div class="max-w-screen mx-0 px-4">
  <!-- Grid wrapper -->
  <div class="-mx-4 flex flex-wrap">
    <!-- Grid column -->
    <div class="flex flex-col lg:flex-row">
      <main class="bg-white max-w-screen lg:w-2/3 py-4 px-4 lg:px-16 ml-0 lg:mx-2 lg:mr-0 bg-gradient-to-r from-red-100 to-red 500 via-orange-500 select-none">
        <?php echo $__env->make('frontend.article_universal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <article class="text-gray-700 text-base leading-normal prose prose-sm">
          <?php echo e($post->content); ?> 
        </article>
        <?php echo $__env->make('frontend.post_tags', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div wire:ignore class="prose prose-sm"> Share: <?php echo $shareComponent; ?></div>

        <div x-data="{ open: false}" class="text-center">
            <button @click="open =! open" class="p-4 text-white bg-blue-600">Click</button>
            <div x-show="open" class="mt-8">It working</div>
        </div>
      <!--Frontend Articles-->
      <div class="mt-4 mx-2">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frondend.randomn-articles')->html();
} elseif ($_instance->childHasBeenRendered('l165290340-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l165290340-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l165290340-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l165290340-0');
} else {
    $response = \Livewire\Livewire::mount('frondend.randomn-articles');
    $html = $response->html();
    $_instance->logRenderedChild('l165290340-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
      </div>
      </main>
    <!--Right Sidebar-->
    <?php if (isset($component)) { $__componentOriginalee6f77ea8284c9edd154cd0c9b3b80eff04c2bfa = $component; } ?>
<?php $component = App\View\Components\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Sidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee6f77ea8284c9edd154cd0c9b3b80eff04c2bfa)): ?>
<?php $component = $__componentOriginalee6f77ea8284c9edd154cd0c9b3b80eff04c2bfa; ?>
<?php unset($__componentOriginalee6f77ea8284c9edd154cd0c9b3b80eff04c2bfa); ?>
<?php endif; ?>
    </div>
</div>
</div><?php /**PATH C:\xampp\htdocs\projects\livewire\livewire\resources\views/livewire/frondend/detail.blade.php ENDPATH**/ ?>