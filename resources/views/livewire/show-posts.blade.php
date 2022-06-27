<div class="mx-auto min-h-screen relative">
	<div class="flex flex-col lg:flex-row">
		@foreach($posts as $post)
        	@include('frontend.main')
        @endforeach
        <!--Right Sidebar-->
        <x-frontend-right-sidebar/>
   </div>    	
</div>
