<div class="md:flex-shrink-0">   
    <a href="{{ $post->postDetails() }}">
        <img class="md:hover:opacity-60 object-fill lg:py-2" src="{{ $post->imageUrl() }}" alt="{{ $post->title }}"/>
    </a>
</div>
<div class="mt-4 md:mt-4 md:mt-0 md-mx-1">
    <a href="{{ $post->postDetails() }}">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white lg:hover:text-indigo-500">{{ $post->title }}</h5>
    </a>
</div>