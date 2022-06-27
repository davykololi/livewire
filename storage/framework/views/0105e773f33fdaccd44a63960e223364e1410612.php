    <div class="mx-2 w-auto lg:mx-4 rounded-md mt-0 lg:mt-1 mb-2 bg-gray-600">
      <div class="text-center p-2 lg:p-4">
          <h4 class="text-white font-bold">Subscribe To Our Newsletter</h4>
          <p class="text-white">Sign up here to get the latest news updates and special offers delivered directly to your inbox.</p>
        <div class="items-center justify-center mt-2">
          <form wire:submit.prevent="store">
            <?php echo csrf_field(); ?>
            <div>
              <input type="email" class="w-1/2 rounded-l-full border border-white focus:shadow-outline" name="email" placeholder="Your Email Address">
              <button type="submit" class="text-white rounded-r-full border border-white p-2">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  

<?php /**PATH C:\xampp\htdocs\projects\livewire\livewire\resources\views/livewire/front/blog-newsletter.blade.php ENDPATH**/ ?>