<nav x-data="{ open: false }" @keydown.escape="open = false" class="z-10 flex flex-wrap justify-between max-w-screen lg:w-screen p-4 shadow-md sticky top-0 bg-white">
    <div class="mr-6 text-xl font-bold">
        <a href="<?php echo e(route('home')); ?>"
        class="grid grid-cols-3 gap-1 transition duration-500 hover:text-purple-500">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.application-logo','data' => ['class' => 'w-8 h-8 border border-blue-300 rounded-full']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-application-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-8 h-8 border border-blue-300 rounded-full']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <div class="col-span-2"><?php echo e(config('app.name')); ?></div>
        </a>
    </div>
    <button @click="open =! open" type="button" class="px-2 lg:hidden" :class="{ 'transition transform-180': open }">
        <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path x-show="open"
                d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z" />
            <path x-show="!open"
                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z" />
        </svg>
    </button>
    <div class="flex-grow w-full transition-all duration-500 ease-in lg:flex lg:items-center lg:w-auto"
        :class="{ 'block shadow-3xl': open, 'hidden': !open }" @click.away="open = false" x-show.transition="true">

        <ul class="items-center justify-start flex-1 pt-4 space-y-4 lg:pt-0 list-reset lg:flex lg:space-y-0 text-red-700">
            <li class="py-2 md:py-0">
                <a href="<?php echo e(route('home')); ?>" class="nav-a-left">Home</a>
            </li>

            <li class="py-2 md:py-0">
                <a href="<?php echo e(route('about')); ?>" class="nav-a-left">About</a>
            </li>

            <li class="py-2 md:py-0">
                <a href="<?php echo e(route('contact')); ?>" class="nav-a-left">Contact</a>
            </li>
        </ul>

        <ul class="items-center justify-end flex-1 pt-4 space-y-4 lg:pt-0 list-reset lg:flex lg:space-y-0">
            <?php if(auth()->guard()->guest()): ?>
            <?php if(Route::has('login')): ?>
            <li class="py-2 md:py-0">
                <a href="<?php echo e(route('login')); ?>" class="nav-a-right">
                    <button class="bg-gradient-to-r from-red-200 to-red-800 via-red-500 px-2 py-1 text-white rounded-md hover:text-red-500 hover:bg-gradient-to-l from-black to-white via-red-700 hover:shadow-2xl">
                        Signin
                    </button>
                </a>
            </li>
            <?php endif; ?>

            <?php if(Route::has('register')): ?>
            <li class="py-2 md:py-0">
                <a href="<?php echo e(route('register')); ?>" class="nav-a-right">
                    <button class="bg-gradient-to-r from-red-200 to-red-800 via-red-500 px-2 py-1 text-white rounded-md hover:text-red-500 hover:bg-gradient-to-l from-black to-white via-red-700 hover:shadow-2xl">
                        Signup
                    </button>
                </a>
            </li>
            <?php endif; ?>

            <?php else: ?>
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown','data' => ['align' => 'right','width' => '48']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['align' => 'right','width' => '48']); ?>
                     <?php $__env->slot('trigger', null, []); ?> 
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <?php if (isset($component)) { $__componentOriginalabd049615ad0a72d9895b9323d026e59f1d31031 = $component; } ?>
<?php $component = App\View\Components\AuthUserName::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('auth-user-name'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AuthUserName::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalabd049615ad0a72d9895b9323d026e59f1d31031)): ?>
<?php $component = $__componentOriginalabd049615ad0a72d9895b9323d026e59f1d31031; ?>
<?php unset($__componentOriginalabd049615ad0a72d9895b9323d026e59f1d31031); ?>
<?php endif; ?>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                     <?php $__env->endSlot(); ?>

                     <?php $__env->slot('content', null, []); ?> 
                        <!-- Authentication -->
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>

                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => route('logout'),'onclick' => 'event.preventDefault();
                                                this.closest(\'form\').submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'onclick' => 'event.preventDefault();
                                                this.closest(\'form\').submit();']); ?>
                                <span class="font-bold text-red-800 lg:hover:text-red-500"><?php echo e(__('Logout')); ?></span>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </form>
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
            <?php endif; ?>

        </ul>
    </div>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\projects\livewire\livewire\resources\views/components/nav.blade.php ENDPATH**/ ?>