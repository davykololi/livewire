				<div class="my-2">
                    <h4 class="text-blue-900 font-bold mb-2"><?php echo e(__('Tags')); ?></h4>
                    <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="text-white bg-gradient-to-r from-red-500 via-red-600 to-red-700 hover:bg-gradient-to-br focus:ring-4 focus-ring-red-800 font-medium text-sm px-2 py-0 text-center">
                        <a href="<?php echo e(route('tag', ['slug' => $tag->slug])); ?>"><?php echo e($tag->name); ?></a>
                    </span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div><?php /**PATH C:\xampp\htdocs\projects\livewire\livewire\resources\views/frontend/post_tags.blade.php ENDPATH**/ ?>