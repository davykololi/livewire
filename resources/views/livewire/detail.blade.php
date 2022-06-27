<div class="mx-auto min-h-screen">
    <div class="flex flex-col lg:flex-row justify-around gap-1">
        <!--Main-->       
        <main class="p-2 my-1 w-screen lg:w-2/3 bg-white mix-blend-normal shadow mx-auto lg:ml-16">
            <article class="lg:mx-6 mx-auto">
                @include('frontend.article_universal')
                <p class="text-gray-700 text-base leading-tight">{{ $post->content }} </p>
                @include('frontend.post_tags')
                <div> Share: {!! $shareComponent !!}</div>
            </article>
        </main>
        <!--Right Sidebar-->
        <x-frontend-right-sidebar/>
    </div>
</div>