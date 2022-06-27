		  <aside class="p-2 my-1 w-screen lg:w-1/3 bg-fuchsia-100 mix-blend-normal mx-auto lg:mr-16">
        	<div class="overflow-hidden p-2">
            <h3 class="font-2xl font-bold mb-2 border-b-2 animate-pulse">Recent Posts</h3>
              <div class="p-0">
                <?php $__currentLoopData = $latestPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <ul class="bg-white">
                  <li class="my-2 flex flex-row">
                    <a href="<?php echo e($post->postDetails()); ?>">
                      <img src="<?php echo e(asset('static/kagwe.jpg')); ?>" alt="<?php echo e($post->title); ?>" class="shadow-lg md:hover:scale-90 relative w-32 h-auto object-cover">
                    </a>
                    <div class="w-full">
                    <h4 class="text-xs ml-2">
                      <a href="<?php echo e(route('category',['slug'=>$post->category->slug])); ?>">
                        <span class="text-red-500"><?php echo e($post->category->name); ?></span> / 
                        <span class="text-gray-500 italic"><?php echo e($post->created_date); ?></span>
                      </a>
                    </h4>
                    <h2 class="-mt-1 ml-2">
                      <a href="<?php echo e($post->postDetails()); ?>" class="text-right text-red-800 lg:hover:text-indigo-500 cursor-pointer tracking-tight font-bold">
                        <?php echo e($post->title); ?>

                      </a>
                    </h2>
                    </div>
                  </li>
                </ul>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
        	</div>   
    	</aside><?php /**PATH C:\xampp\htdocs\projects\livewire\livewire\resources\views/frontend/right_sidebar.blade.php ENDPATH**/ ?>