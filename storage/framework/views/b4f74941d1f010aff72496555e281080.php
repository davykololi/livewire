    <div class="mx-4">   
        <!-- Simplicity is an acquired taste. - Katharine Gerould -->
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('frontend.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php /**PATH C:\xampp\htdocs\projects\livewire\livewire\resources\views/livewire/frondend/frontend-articles.blade.php ENDPATH**/ ?>