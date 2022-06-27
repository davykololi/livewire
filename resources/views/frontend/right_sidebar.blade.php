		  <aside class="p-2 my-1 w-screen lg:w-1/3 bg-fuchsia-100 mix-blend-normal mx-auto lg:mr-16">
        	<div class="overflow-hidden p-2">
            <h3 class="font-2xl font-bold mb-2 border-b-2 animate-pulse">Recent Posts</h3>
              <div class="p-0">
                @foreach($latestPosts as $post)
                <ul class="bg-white">
                  <li class="my-2 flex flex-row">
                    <a href="{{ $post->postDetails() }}">
                      <img src="{{ asset('static/kagwe.jpg')}}" alt="{{ $post->title}}" class="shadow-lg md:hover:scale-90 relative w-32 h-auto object-cover">
                    </a>
                    <div class="w-full">
                    <h4 class="text-xs ml-2">
                      <a href="{{ route('category',['slug'=>$post->category->slug])}}">
                        <span class="text-red-500">{{ $post->category->name}}</span> / 
                        <span class="text-gray-500 italic">{{ $post->created_date }}</span>
                      </a>
                    </h4>
                    <h2 class="-mt-1 ml-2">
                      <a href="{{ $post->postDetails() }}" class="text-right text-red-800 lg:hover:text-indigo-500 cursor-pointer tracking-tight font-bold">
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