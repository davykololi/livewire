<!-- Container -->
<div class="max-w-screen mx-0 px-4">
  <!-- Grid wrapper -->
  <div class="-mx-4 flex flex-wrap">
    <!-- Grid column -->
    <div class="flex flex-col lg:flex-row">
      <main class="bg-white max-w-screen lg:w-2/3 py-4 px-4 lg:px-16 ml-0 lg:mx-2 lg:mr-0 bg-gradient-to-r from-red-100 to-red 500 via-orange-500 select-none">
        @include('frontend.article_universal')
        <article class="text-gray-700 text-base leading-normal prose prose-sm">
          {{ $post->content }} 
        </article>
        @include('frontend.post_tags')
        <div wire:ignore class="prose prose-sm"> Share: {!! $shareComponent !!}</div>

        <div x-data="{ open: false}" class="text-center">
            <button @click="open =! open" class="p-4 text-white bg-blue-600">Click</button>
            <div x-show="open" class="mt-8">It working</div>
        </div>
      <!--Frontend Articles-->
      <div class="mt-4 mx-2">
        @livewire('frondend.randomn-articles')
      </div>
      </main>
    <!--Right Sidebar-->
    <x-sidebar/>
    </div>
</div>
</div>