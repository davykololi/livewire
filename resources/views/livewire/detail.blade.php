<div class="px-20 md:w-4/5 lg:w-full">
    <h2 class="mt-2 text-xl text-blue-500 font-bold lg:text-2xl lg:hover:text-red-700">
        {{ $post->title }}
    </h2>
    <div class="flex flex-row my-3">
        <div class="mr-2 text-gray-700">
            {{ $post->user->name }}
        </div>
        <div class="w-2 h-2 my-auto mr-1 text-xl bg-gray-300 rounded-full"></div>
        <div class="my-auto mr-2 text-sm text-gray-500" title="Category">
            {{ ucwords($post->category->name) }}
        </div>
        <div class="w-2 h-2 my-auto mr-1 text-xl bg-gray-300 rounded-full"></div>
        <div class="col-span-3 my-auto text-sm text-gray-500">
            {{ $post->pubDate() }}
        </div>
    </div>
    <img src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}"class="mx-auto my-4 rounded-sm max-h-96 border px-20">
    <div class="text-green-300 font-semibold lg:hover:text-gray-800 lg:hover:bg-gray-200">
        {!! $post->content !!}
    </div>
</div>
