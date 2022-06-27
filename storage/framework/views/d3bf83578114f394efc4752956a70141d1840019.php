        <main class="p-2 my-1 w-screen lg:w-2/3 bg-white mix-blend-normal shadow mx-auto lg:ml-16">
            <article class="mx-auto flex-1">
                <?php echo $__env->make('frontend.article_universal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <p class="text-gray-700 text-base leading-tight">
                    <?php echo e($post->excerpt()); ?> 
                    <a href="<?php echo e(route('post-detail', ['slug' => $post->slug])); ?>">
                        <button type="button" class="w-full lg:w-auto text-center bg-red-800 lg:bg-transparent lg:border-red-800 text-white lg:text-red-900 rounded-md md:hover:bg-gray-600 md:hover:text-white lg:px-4 inline-block py-4 lg:py-2 mt-2">
                            Read More
                        </button>
                    </a>
                </p>
                <?php echo $__env->make('frontend.post_tags', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </article>
        </main>
        <?php /**PATH C:\xampp\htdocs\projects\livewire\livewire\resources\views/frontend/main.blade.php ENDPATH**/ ?>