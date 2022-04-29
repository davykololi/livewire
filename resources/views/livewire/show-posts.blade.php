<div class="mx-auto min-h-screen relative">
    <div class="flex flex-col lg:flex-row justify-around gap-1">
        <!--Main-->
    	@foreach ($posts as $post)
        	@livewire('post-item', ['post' => $post], key($post->id))
    	@endforeach
		<!--Side Bar-->
    	<x-frontend-sidebar/>
	</div>
</div>
