
         @include('frontend.article_universal')
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 w-full lg:w-2/3">
            {{ $post->excerpt() }}
            <a href="{{ $post->postDetails() }}" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-purple-700 rounded-lg hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800 flex-1 w-full md:w-auto mt-2" data-turbolinks-action="replace">
            Read more
            <svg class="mx-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </p>
        
            @include('frontend.post_tags')
        <div class="border-b-2 border-solid-black lg:mt-4"></div> 

        