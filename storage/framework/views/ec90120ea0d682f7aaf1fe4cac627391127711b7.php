<!-- Container -->
<div class="max-w-screen mx-0 px-4">
  <!-- Grid wrapper -->
  <div class="-mx-4 flex flex-wrap">
    <!-- Grid column -->
    <div class="flex flex-col lg:flex-row">
      <main class="bg-white max-w-screen lg:w-2/3 py-4 px-4 lg:px-16 ml-0 lg:mx-2 lg:mr-0 bg-blue-50 bg-gradient-to-r from-red-100 to-red 500 via-orange-500 select-none">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frondend.frontend-articles')->html();
} elseif ($_instance->childHasBeenRendered('l945473839-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l945473839-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l945473839-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l945473839-0');
} else {
    $response = \Livewire\Livewire::mount('frondend.frontend-articles');
    $html = $response->html();
    $_instance->logRenderedChild('l945473839-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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

<?php /**PATH C:\xampp\htdocs\projects\livewire\livewire\resources\views/livewire/frondend/show-posts.blade.php ENDPATH**/ ?>