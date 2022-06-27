<div class="lg:my-0 w-screen mx-screen mb-0 mix-blend-normal hidden lg:block">
    <div class="flex flex-col lg:flex-row mx-screen bg-white">
    	<a href="<?php echo e(url('/')); ?>">
    		<img class="mx-auto my-10 lg:w-1/3 lg:hover:opacity-70" src="<?php echo e(asset('static/logo2.png')); ?>" alt="top add"/>
    	</a>
    	<img class="mx-auto lg:w-2/3 lg:h-32 lg:hover:opacity-70 py-4 px-8" src="<?php echo e(asset('static/topadd.jpg')); ?>" alt="top add"/>
    </div>
</div>
<nav x-data="{ isOpen: false }" @keydown.escape="isOpen = false" class="z-10 flex flex-wrap justify-between w-full sticky top-0 md:p-2 space-x-8 items-center bg-white border-t border-b tracking-tight">
    <div class="mr-6 ml-8">
        <a href="<?php echo e(route('home')); ?>" class="grid grid-cols-3 gap-1 transition duration-500 hover:text-purple-500 my-2">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.application-logo','data' => ['class' => '-my-1']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-application-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '-my-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <div class="col-span-2 text-xl font-bold"><?php echo e(config('app.name')); ?></div>
        </a>
    </div>
    <button x-on:click="isOpen = !isOpen" type="button" class="px-2 lg:hidden" :class="{ 'transition transform-180': isOpen }">
        <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path x-show="isOpen"
                d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z" />
            <path x-show="!isOpen"
                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z" />
        </svg>
    </button>
    <div class="flex-grow w-full transition-all duration-500 ease-in lg:flex lg:items-center lg:w-auto"
        :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }" @click.away="isOpen = false" x-show.transition="true">

        <ul class="items-center justify-start flex-1 pt-4 space-y-4 lg:pt-0 list-reset lg:flex lg:space-y-0 gap-1">
            <li>
                <a href="<?php echo e(route('home')); ?>" class="mx-4 lg:my-1">Home</a>
            </li>
            <li>
                <a href="<?php echo e(route('about.us')); ?>" class="mx-4 lg:my-1">About</a>
            </li>
            <li>
                <a href="<?php echo e(route('contact.us')); ?>" class="mx-4 lg:my-1 lg:hover:text-indigo-500">Contact</a>
            </li>
        </ul>
        
        <ul class="items-center justify-end flex-1 space-y-4 lg:pt-0 list-reset lg:flex lg:space-y-0 text-normal mx-auto lg:mx-4 gap-2">
            <?php if(auth()->guard()->guest()): ?>
            <?php if(Route::has('login')): ?>
            <li>
                <a href="<?php echo e(route('login')); ?>" class="px-4 text-sm transition-colors duration-300 border-b-4 rounded-full shadow-xl text-red-500 border-red-400 shadow-red-300/30 bg-white lg:hover:bg-red-500 lg:hover:text-white lg:hover:border-b-black">
                    Signin
                </a>
            </li>
            <?php endif; ?>

            <?php if(Route::has('register')): ?>
            <li>
                <a href="<?php echo e(route('register')); ?>" class="px-4 text-sm transition-colors duration-300 border-b-4 rounded-full shadow-xl text-red-500 border-red-400 shadow-red-300/30 bg-white lg:hover:bg-red-500 lg:hover:text-white lg:hover:border-b-black">
                    Signup
                </a>
            </li>
            <?php endif; ?>

            <?php else: ?>
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown','data' => ['align' => 'right','width' => '48']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['align' => 'right','width' => '48']); ?>
                     <?php $__env->slot('trigger', null, []); ?> 
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div><?php echo e(Auth::user()->name); ?></div>

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
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => route('logout'),'onclick' => 'event.preventDefault();
                                                this.closest(\'form\').submit();']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'onclick' => 'event.preventDefault();
                                                this.closest(\'form\').submit();']); ?>
                                <?php echo e(__('Log out')); ?>

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