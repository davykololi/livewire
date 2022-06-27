<div class="px-8 bg-pink-200 h-screen py-5">
    <!-- The Master doesn't talk, he acts. -->
    <h1 class="text-center font-extrabold bg-red-600 text-white  rounded-full uppercase hover:bg-purple-500">
    	{{ $post->title }}
    </h1>
    <div class="">
    	<img src="{{ $post->imageUrl()}}" alt="{{ $post->title }}" class="w-full h-56 rounded-t-md">
    	<p class="px-2">{{ $post->description }}</p>
    </div>
</div>
