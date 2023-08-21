<div class="h-lg bg-white shadow-lg max-w-screen mx-0 lg:mx-2">
  <h1 class="font-bold text-lg lg:text-2xl  text-red-800 lg:hover:text-indigo-500 py-4 lg:hover:scale-y-150 text-center lg:text-left lg:ml-16">
    Contact Us
  </h1>
  <div class="flex flex-col lg:flex-row">
  <div class="block shadow-lg shadow-pink-800 py-4 bg-red-700 lg:bg-gray-300 ml-0 my-4 lg:ml-16 gap-2 lg:rounded-t-lg max-w-screen lg:w-2/3">
    <form wire:submit.prevent="store" enctype="multipart/form-data" class="mx-0 lg:px-8 lg:mt-4">
      <div class="form-group mb-6 mx-2">
        <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7" wire:model="name" placeholder="Name">
        <x-jet-input-error for="name"/>
      </div>
      <div class="form-group mb-6 mx-2">
        <input type="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8" wire:model="email" placeholder="Email address">
        <x-jet-input-error for="email"/>
      </div>
      <div class="form-group mb-6 mx-2">
        <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput9" wire:model="subject" placeholder="Subject">
        <x-jet-input-error for="subject"/>
      </div>
      <div class="form-group mb-6 mx-2">
        <textarea class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlTextarea13" rows="4" wire:model="message"placeholder="Message">
        </textarea>
        <x-jet-input-error for="message"/>
      </div>
      <div class="form-group mb-6 mx-2">
        <button type="submit" class="text-white bg-gradient-to-r from-red-200 via-red-500 to-red-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2 text-center mx-2 font-bold border-2 border-white">Send
        </button>
      </div>
    </form>
  </div>
  <div class="block shadow-lg shadow-pink-800 py-4 bg-red-700 lg:bg-gray-200 ml-0 -mt-8 lg:mt-4 mb-0 lg:mb-4 lg:ml-4 lg:mr-16 lg:rounded-t-lg max-w-screen lg:w-1/3">
     <div class="p-8">
       SIDEBAR 
     </div>
  </div>
</div>
</div>
