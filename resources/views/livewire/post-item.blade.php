        <main class="p-2 m-0 mt-2 lg:w-2/3 shadow-2xl rounded-md border border-red border-2 lg:ml-8 lg:mt-3 w-screen ml-2 mr-2 mb-2 bg-white mix-blend-normal">
            <article class="lg:ml-6 mx-auto">
                <figure>
                    <a href="{{ route('post-detail', ['slug' => $post->slug]) }}">
                        <img class="lg:w-3/4 lg:h-auto lg:hover:opacity-70" src="{{ asset('static/kagwe.jpg')}}" alt="{{ $post->title }}"/>
                    </a>
                    <figcaption>
                        <a href="{{ route('post-detail', ['slug' => $post->slug]) }}">
                            <h2 class="font-bold text-xl mb-2 mt-2 text-red-900 md:hover:text-indigo-500">{{ $post->title }}</h2>
                        </a>
                    </figcaption>
                </figure>
                <div class="my-2 justify-between inline-flex">
                    <span>{{ $post->user->name }}</span> <span>{{ $post->created_at }}</span> 
                    @if(!empty($post->comments))
                    <span>{{ $post->comments->count() }} comments</span>
                        @endif
                </div>
                <p class="text-gray-700 text-base leading-tight">
                    {{ $post->excerpt() }} 
                    <a href="{{ route('post-detail', ['slug' => $post->slug]) }}">
                        <button type="button" class="w-full text-center bg-transparent text-red-900 rounded-md md:hover:bg-red-400 md:hover:text-white lg:px-4 inline-block py-4 mt-2">
                            Read More
                        </button>
                    </a>
                </p>
                @include('frontend.post_tags')
            </article>
        </main>