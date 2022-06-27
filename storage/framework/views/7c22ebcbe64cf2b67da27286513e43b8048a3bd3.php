                <figure>
                    <a href="<?php echo e($post->postDetails()); ?>">
                        <img class="lg:w-full lg:h-auto lg:hover:opacity-70" src="<?php echo e(asset('static/kagwe.jpg')); ?>" alt="<?php echo e($post->title); ?>"/>
                    </a>
                    <figcaption>
                        <a href="<?php echo e($post->postDetails()); ?>">
                            <h1 class="font-bold text-xl mb-2 mt-2 md:hover:text-indigo-500"><?php echo e($post->title); ?></h1>
                        </a>
                    </figcaption>
                </figure>
                <div class="my-2 flex justify-start">
                    <span class="rounded-full text-red-800 lg:border lg:hover:bg-red-800 lg:hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-1 text-center mr-2 mb-2">
                        <a href="<?php echo e(route('author.posts',['slug'=>$post->user->slug])); ?>">By <?php echo e($post->user->name); ?></a> 
                    </span> 
                    <span class="rounded-full text-red-800 lg:border lg:hover:bg-red-800 lg:hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-1 text-center mr-2 mb-2">
                        <?php echo e($post->created_date); ?>

                    </span> 
                    <?php if(!empty($post->comments)): ?>
                    <span class="rounded-full text-red-800 lg:border lg:hover:bg-red-800 lg:hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-1 text-center mr-2 mb-2">
                        <?php echo e($post->comments->count()); ?> comments
                    </span>
                    <?php endif; ?>
                </div><?php /**PATH C:\xampp\htdocs\projects\livewire\livewire\resources\views/frontend/article_universal.blade.php ENDPATH**/ ?>