		  <aside class="p-4 md:p-2 mt-0 lg:w-1/3 shadow-3xl border-ouset rounded-md h-60 lg:mr-8 lg:mt-3 w-screen ml-2 mr-2 bg-white mb-4">
        	<div class="overflow-hidden p-2">
        		<h3 class="font-2xl font-bold">Categories</h3>
           		<div class="p-2">
                @foreach($categories as $catec)
                <ul>
                  <li class="text-red-800">
                    <a href="{{ route('category',['slug'=>$catec->slug]) }}">
                      {{ $catec->name }}
                      <span class="bg-gray-400 text-black rounded-full px-1.5 text-center text-sm mx-2">{{ $catec->posts->count() }}</span>
                    </a>
                  </li>
                </ul>
                @endforeach
           		</div>

              <h3 class="font-2xl font-bold mb-2">Recent Posts</h3>
              <div class="p-0">
                @foreach($catec->posts as $post)
                <ul>
                  <li class=" flex items-left inline-block text-red-800">
                    <a href="{{ route('post-detail',['slug'=>$post->slug]) }}">
                      <img src="{{ asset('static/kagwe.jpg')}}" alt="{{ $post->title}}" class="shadow-lg md:hover:rotate-45" width="96" height="128">
                    </a>
                    <p class="ml-2">
                      <a href="{{ route('post-detail',['slug'=>$post->slug]) }}" class="text-right">{{ $post->title }}</a>
                    </p>
                  </li>
                </ul>
                @endforeach
              </div>
        	</div>   
    	</aside>