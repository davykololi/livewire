<!-- Container -->
<div class="max-w-screen mx-auto px-4">
  <!-- Grid wrapper -->
  <div class="-mx-4 flex flex-wrap">
    <!-- Grid column -->
    <div class="flex flex-col lg:flex-row">
      <main class="bg-white w-full lg:w-2/3 py-4 p-2 lg:p-4 mx-2 lg:mr-0">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frondend.frontend-articles')->html();
} elseif ($_instance->childHasBeenRendered('l2894419708-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2894419708-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2894419708-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2894419708-0');
} else {
    $response = \Livewire\Livewire::mount('frondend.frontend-articles');
    $html = $response->html();
    $_instance->logRenderedChild('l2894419708-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
      </main>
      <!--Sidebar-->
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
</div>

<?php /**PATH C:\xampp\htdocs\projects\livewire\livewire\resources\views/livewire/frondend/category-posts.blade.php ENDPATH**/ ?>