<div class="mx-auto min-h-screen">  
  <div class="flex flex-col lg:flex-row justify-start gap-1">
    <div class="p-2 mt-0 w-full lg:w-3/5 shadow-2xl rounded-md lg:ml-8 lg:mt-2 mx-2 mb-2 bg-gray-600">
      <div class="text-center p-2 lg:p-4">
          <h4 class="text-white font-bold">Subscribe To Our Newsletter</h4>
          <p class="text-white">Sign up here to get the latest news updates and special offers delivered directly to your inbox.</p>
        <div class="items-center justify-center mt-2">
          <form wire:submit.prevent="store">
            @csrf
            <div>
              <input type="email" class="w-1/2" name="email" placeholder="Your Email Address">
              <button type="submit" class="text-white">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

