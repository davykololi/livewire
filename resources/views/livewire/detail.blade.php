<div class="mx-auto min-h-screen">
    <div class="flex flex-col lg:flex-row justify-around gap-1">
        <!--Main-->       
        <main class="p-2 m-0 mt-2 lg:w-2/3 shadow-2xl rounded-md border border-red border-2 lg:ml-8 lg:mt-3 w-screen ml-2 mr-2 mb-2 bg-white mix-blend-normal">
            <article class="lg:ml-6 mx-auto">
                <figure>
                    <img class="lg:w-4/5 lg:h-auto lg:hover:opacity-70" src="{{ asset('static/kagwe.jpg')}}" alt="{{ $post->title }}"/>
                    <figcaption>
                        <h1 class="font-bold text-xl mb-2 mt-2 text-red-900 md:hover:text-indigo-500">{{ $post->title }}</h1>
                    </figcaption>
                </figure>
                <div class="my-2 justify-between inline-flex">
                    <span>{{ $post->user->name }}</span> <span>{{ $post->created_at }}</span> 
                    @if(!empty($post->comments))
                    <span>{{ $post->comments->count() }} comments</span>
                    @endif
                </div>
                <p class="text-gray-700 text-base leading-tight">{{ $post->content }} </p>
                @include('frontend.post_tags')
                <div> Share: {!! $shareComponent !!}</div>
            </article>
        </main>
        <!--Side Bar-->
        <x-frontend-sidebar/>
    </div>
</div>