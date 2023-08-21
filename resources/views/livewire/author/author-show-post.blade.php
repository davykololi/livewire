<div class="bg-white lg:bg-gray-200 h-full py-5">
	<div class="m-auto md:mx-4 lg:mx-8 bg-white md:bg-yellow-100 rounded-md">
        @can('isAuthor')
        <div class="mb-2">
            <h1 class="text-2xl font-semibold uppercase text-red-800 py-2 ml-4">Post Details</h1>
            <div class="text-right mr-16">
                <a href="{{ url()->previous() }}" class="px-4 py-0 text-white text-center bg-blue-600 rounded-full shadow-lg uppercase font-extrabold border-2 hover:bg-purple-500 inline-flex focus:outline-none disabled:opacity-100" data-turbolinks-action="replace">
                    Back
                </a>
            </div>
        </div>
        @endcan
		<div class="p-4">
    		<!-- The Master doesn't talk, he acts. -->
    		<div class="mt-2 flex flex-col md:flex-row gap-2">
                <div class="bg-white lg:bg-red-300 w-full lg:w-1/3 lg:p-4 md:rounded-l-md">
                    <figure class="bg-gray-700 rounded-t-md">
                        <img src="{{ $post->imageUrl()}}" alt="{{ $post->title }}" class="object-fill h-48 w-96 rounded-t-md mx-auto lg:hover:opacity-60 lg:hover:scale-110">
                        <figcaption class="text-white p-2">{{ $post->caption }}</figcaption>
                    </figure>
                </div>
                <div class="bg-white w-full lg:w-2/3 lg:p-4 md:rounded-r-md">
                    <h1 class="font-extrabold text-black uppercase tracking-tight lg:text-red-800 text-lg lg:text-2xl lg:hover:text-indigo-500 lg:hover:scale-y-150 mb-2">
                        {{ $post->title }}
                    </h1>
                    <p class="text-gray-600 tracking-tight leading-tight">{{ $post->content }}</p>
                </div>
    		</div>
    	</div>
    </div>
</div>
