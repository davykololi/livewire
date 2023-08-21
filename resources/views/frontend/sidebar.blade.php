		  <aside class="bg-gradient-to-l from-red-300 to-red-800 via-orange-500 lg:bg-gradient-to-r from-red-300 to-red-800 via-orange-500 lg:w-1/3 mx-0 lg:mr-2 lg:ml-0 lg:shadow-lg lg:shadow-blue-900/50 block shrink-0 px-2 flex flex-grow">
          <div class="overflow-hidden p-4 w-full">
            <form>   
              <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Your Email</label>
              <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                  <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="search" id="search" class="w-full block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500" placeholder="Search" required>
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Search
                </button>
              </div>
            </form>
            <h3 class="font-2xl font-bold mb-2 border-b-2 border-solid text-2xl uppercase lg:animate-bounce">Recent Posts</h3>
              <div class="p-0">
                @foreach($latestPosts as $post)
                <ul class="bg-white p-2 border border-solid-sm">
                  <li class=" flex flex-row clear-both">
                    <a href="{{ $post->postDetails() }}">
                      <img src="{{ $post->imageUrl() }}" alt="{{ $post->title}}" class="md:hover:scale-110 md:hover:opacity-60 relative w-32 h-16 object-cover">
                    </a>
                    <div class="w-full">
                    <h4 class="text-xs ml-2">
                      <a href="{{ route('category',['slug'=>$post->category->slug])}}">
                        <span class="text-red-500">{{ $post->category->name}}</span> / 
                        <span class="text-gray-500 italic">{{ $post->created_date }}</span>
                      </a>
                    </h4>
                    <h2 class="-mt-1 ml-2">
                      <a href="{{ $post->postDetails() }}" class="text-right text-red-800 lg:hover:text-indigo-500 cursor-pointer leading-tight font-semibold lg:font-bold">
                        {{ $post->title }}
                      </a>
                    </h2>
                    </div>
                  </li>
                </ul>
                @endforeach
              </div>
          </div>   
      </aside>