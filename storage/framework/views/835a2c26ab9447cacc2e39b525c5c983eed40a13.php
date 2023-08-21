<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name')); ?> - <?php echo e(__('Page Not Found')); ?></title>
    <!-- Fonts -->
    <?php echo \Livewire\Livewire::styles(); ?>

  </head>
<body>

<div class="h-screen w-screen bg-blue-600 flex justify-center content-center flex-wrap">
  <p class="font-sans text-white error-text">404</p>
</div>

<div class="absolute w-screen bottom-0 mb-6 text-white text-center font-sans text-xl">
  <span class="opacity-50">Take me back to</span>
  <a class="border-b" href="https://tailwindcomponents.com">tailwindcomponents.com</a>
</div>
<?php echo \Livewire\Livewire::scripts(); ?>

<style>

  * {
    "Whitney SSm A", "Whitney SSm B", "Helvetica Neue", Helvetica, Arial, Sans-Serif;
  }

    .error-text {
      font-size: 130px;
    }

    @media (min-width: 768px) {
      .error-text {
        font-size: 220px;
      }
    }

</style>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\projects\livewire\livewire\resources\views/errors/404.blade.php ENDPATH**/ ?>