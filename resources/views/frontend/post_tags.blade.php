				<div class="pt-2 pb-2">
                    <h4 class="text-blue-900 font-bold mb-2">{{ __('Tags')}}</h4>
                    @foreach($post->tags as $tag)
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 shadow-lg">
                        <a href="{{ route('tag', ['slug' => $tag->slug]) }}"">{{ $tag->name}}</a>
                    </span>
                    @endforeach
                </div>