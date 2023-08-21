<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?> <?php echo $__env->yieldContent('title'); ?></title>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
        <!-- ========== Favicon Icon ========== -->
        <link rel="shortcut icon" href="<?php echo e(asset('static/logo.png')); ?>" type="image/x-icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
        <!-- Toastr CSS -->
        <?php echo toastr_css(); ?>
        <!-- Trix editor -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" />

        <?php echo \Livewire\Livewire::styles(); ?>

    </head>
    <body class="flex flex-col min-h-screen">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.author-nav','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('author-nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginaldad1bf2e10119356b3de86f8c3f59baf5fc75cd4 = $component; } ?>
<?php $component = App\View\Components\AuthDashboard::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('auth-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AuthDashboard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldad1bf2e10119356b3de86f8c3f59baf5fc75cd4)): ?>
<?php $component = $__componentOriginaldad1bf2e10119356b3de86f8c3f59baf5fc75cd4; ?>
<?php unset($__componentOriginaldad1bf2e10119356b3de86f8c3f59baf5fc75cd4); ?>
<?php endif; ?>
        <div class="font-sans text-gray-900 antialiased">
            <?php echo e($slot); ?>

        </div>
        <?php if (isset($component)) { $__componentOriginal81fe3637cc5985aa34b02ed21a32611567e1f315 = $component; } ?>
<?php $component = App\View\Components\BackendFooter::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\BackendFooter::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal81fe3637cc5985aa34b02ed21a32611567e1f315)): ?>
<?php $component = $__componentOriginal81fe3637cc5985aa34b02ed21a32611567e1f315; ?>
<?php unset($__componentOriginal81fe3637cc5985aa34b02ed21a32611567e1f315); ?>
<?php endif; ?>
        <?php echo \Livewire\Livewire::scripts(); ?>

        <!-- Scripts -->
        <script>
            Livewire.on('deletePost',id => {
                alert(Are you sure to delete the post: + id);
            })
        </script>
        <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>

        <script src="node_modules/flowbite/dist/flowbite.js"></script>
        <script src="node_modules/flowbite/dist/datepicker.js"></script>
        <script src="https://unpkg.com/flowbite@1.4.7/dist/datepicker.js"></script>

        <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>

        <!-- CKEditor Scripts -->
        <?php echo e(Html::script('ckeditor/ckeditor.js')); ?>


        <?php echo e(Html::script('ckeditor/adapters/jquery.js')); ?>

        <script>
            if(document.getElementById("summary-ckeditor")){
                CKEDITOR.replace( 'summary-ckeditor');
                }
        </script>
        
        <?php echo $__env->yieldPushContent('scripts'); ?>
        <!--Toastr Scripts -->
        <?php echo jquery(); ?>
        <?php echo toastr_js(); ?>
        <?php echo app('toastr')->render(); ?>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\projects\livewire\livewire\resources\views/layouts/author.blade.php ENDPATH**/ ?>