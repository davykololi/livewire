<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="dark">
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

        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.1.1/dist/flowbite.min.css" />
        <!-- Meta Tags -->
        <?php echo SEOMeta::generate(); ?>

        <?php echo OpenGraph::generate(); ?>

        <?php echo Twitter::generate(); ?>

        <?php echo JsonLd::generate(); ?>


        <?php echo \Livewire\Livewire::styles(); ?>

    </head>
    <body class="font-sans antialiased bg-white lg:bg-gray-100">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.nav','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <div>
            <?php echo e($slot); ?>

        </div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('front.blog-newsletter', [])->html();
} elseif ($_instance->childHasBeenRendered('PL8VQ6E')) {
    $componentId = $_instance->getRenderedChildComponentId('PL8VQ6E');
    $componentTag = $_instance->getRenderedChildComponentTagName('PL8VQ6E');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('PL8VQ6E');
} else {
    $response = \Livewire\Livewire::mount('front.blog-newsletter', []);
    $html = $response->html();
    $_instance->logRenderedChild('PL8VQ6E', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php if (isset($component)) { $__componentOriginalb7cc904673b4640fcec34703342d73a999616317 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FrontendFooter::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\FrontendFooter::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb7cc904673b4640fcec34703342d73a999616317)): ?>
<?php $component = $__componentOriginalb7cc904673b4640fcec34703342d73a999616317; ?>
<?php unset($__componentOriginalb7cc904673b4640fcec34703342d73a999616317); ?>
<?php endif; ?>
        <?php echo \Livewire\Livewire::scripts(); ?>

        <!-- Scripts -->
        <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>
        <script src="https://unpkg.com/flowbite@1.1.1/dist/flowbite.js"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\projects\livewire\livewire\resources\views/layouts/guest.blade.php ENDPATH**/ ?>