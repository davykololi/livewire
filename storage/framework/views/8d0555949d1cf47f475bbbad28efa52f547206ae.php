<div>
    <section class="relative min-w-screen animation-fade animation-delay">
        <div class="h-auto w-auto mt-1 lg:mt-2 overflow-hidden rounded-lg shadow">
            <h1 class="font-bold text-2xl text-red-800 my-2 mx-20 uppercase tracking-tight">Contact Us</h1>
            <div class="sm:flex">
                <div class="flex items-center justify-center w-full lg:w-8/12">
                    <form wire:submit.prevent="store" method="post" class="w-full p-8 border-2 border-red-800 rounded-md mx-2 lg:ml-8">
                        <?php echo csrf_field(); ?>
                        <div class="pb-3">
                            <input type="text" wire:model="name" name="name" value="<?php echo e(old('name')); ?>" class="w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline" placeholder="Your Name">
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-red-500 mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="pb-3">
                            <input type="text" wire:model="email" name="email" value="<?php echo e(old('email')); ?>" class="w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline" placeholder="Email Address">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-red-500 mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="pb-3">
                            <input type="text" wire:model="subject" name="subject" value="<?php echo e(old('subject')); ?>" class="w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline" placeholder="Subject Title">
                            <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-red-500 mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="pb-3">
                            <textarea wire:model="message" name="message" row="4" class="w-full h-40 px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline" placeholder="Your message here..."><?php echo e(old('message')); ?></textarea>
                            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-red-500 mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="pb-3">
                            <button class="flex px-6 py-2 text-white bg-red-800 rounded-md hover:bg-indigo-600 hover:text-white focus:outline-none focus:shadow-outline focus:border-indigo-300" type="submit">
                                <span class="self-center float-left ml-3 text-base font-medium">Submit</span>
                            </button>
                            <button class="m-2 p-2 text-white rounded-xl transition-all duration-500 bg-gradient-to-t to-white via-black from-red-500 bg-size-200 hover:bg-right-bottom cursor-pointer">
                                Hello
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div><?php /**PATH C:\xampp\htdocs\projects\livewire\livewire\resources\views/livewire/front/contact-us.blade.php ENDPATH**/ ?>