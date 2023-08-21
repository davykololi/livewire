<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
        <!-- ========== Favicon Icon ========== -->
        <link rel="shortcut icon" href="<?php echo e(asset('static/logo.png')); ?>" type="image/x-icon">
        <!-- Feed Link -->
        <?php echo $__env->make('feed::links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Meta Tags -->
        <?php echo SEOMeta::generate(); ?>

        <?php echo OpenGraph::generate(); ?>

        <?php echo Twitter::generate(); ?>

        <?php echo JsonLd::generate(); ?>


        <?php echo \Livewire\Livewire::styles(); ?>

    </head>
    <body class="font-sans antialiased ">
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        <div>
            <?php echo e($slot); ?>

        </div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frondend.blog-newsletter', [])->html();
} elseif ($_instance->childHasBeenRendered('VKsAb20')) {
    $componentId = $_instance->getRenderedChildComponentId('VKsAb20');
    $componentTag = $_instance->getRenderedChildComponentTagName('VKsAb20');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('VKsAb20');
} else {
    $response = \Livewire\Livewire::mount('frondend.blog-newsletter', []);
    $html = $response->html();
    $_instance->logRenderedChild('VKsAb20', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php if (isset($component)) { $__componentOriginale896d2e37756d2f745b6dce807f3d1c6 = $component; } ?>
<?php $component = App\View\Components\FrontendFooter::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FrontendFooter::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale896d2e37756d2f745b6dce807f3d1c6)): ?>
<?php $component = $__componentOriginale896d2e37756d2f745b6dce807f3d1c6; ?>
<?php unset($__componentOriginale896d2e37756d2f745b6dce807f3d1c6); ?>
<?php endif; ?>
        <?php echo \Livewire\Livewire::scripts(); ?>

        <!-- Scripts -->
        <script src="<?php echo e(mix('js/app.js')); ?>"></script>
        <script src="node_modules/flowbite/dist/flowbite.js"></script>
        <script src="node_modules/flowbite/dist/datepicker.js"></script>
        <script src="https://unpkg.com/flowbite@1.4.7/dist/datepicker.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\projects\livewire\livewire\resources\views/components/guest-layout.blade.php ENDPATH**/ ?>