<footer class="py-5 text-white bg-blue-900 lg:hover:bg-gray-300 lg:hover:text-black lg:hover:border-t-4 lg:hover:border-b-4 mt-2 mb-2 shadow-lg h-64">
	<div class="uppercase text-center font-extrabold"><?php echo e(config('app.name')); ?> Backend Footer</div>
	<div class="flex flex-col lg:flex-row">
		<div class="text-left lg:text-left mx-8 mt-1 border-b-2 lg:border-b-0 lg:mt-0 w-full">
			<a href="<?php echo e(route('about')); ?>">About</a>
		</div>
		<div class="text-left lg:text-center mx-8 mt-1 border-b-2 lg:border-b-0 lg:mt-0 w-full">
			<a href="<?php echo e(route('contact')); ?>">Contact</a>
		</div>
		<div class="text-left lg:text-right mx-8 mt-1 border-b-2 lg:border-b-0 lg:mt-0 w-full">
			<a href="#">Policy</a>
		</div>
	</div>
</footer><?php /**PATH C:\xampp\htdocs\projects\livewire\livewire\resources\views/backend/footer.blade.php ENDPATH**/ ?>