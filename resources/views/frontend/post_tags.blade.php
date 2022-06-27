				<div class="my-2">
                    <h4 class="text-blue-900 font-bold mb-2">{{ __('Tags')}}</h4>
                    @foreach($post->tags as $tag)
                    <span class="text-white bg-gradient-to-r from-red-500 via-red-600 to-red-700 hover:bg-gradient-to-br focus:ring-4 focus-ring-red-800 font-medium rounded-lg text-sm px-2 py-1 text-center mx-2">
                        <a href="{{ route('tag', ['slug' => $tag->slug]) }}"">{{ $tag->name}}</a>
                    </span>
                    @endforeach
                </div>