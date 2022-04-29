<div>
    <section class="relative py-6 bg-white min-w-screen animation-fade animation-delay">
        <div class="container h-full max-w-5xl ml-8 overflow-hidden rounded-lg shadow">
            <h1 class="text-bold text-2xl text-center uppercase my-2 text-red-800">Contact Us</h1>
            <div class="h-full sm:flex">
                <div class="flex items-center justify-center w-full p-20 bg-white">
                    <form wire:submit.prevent="store" method="post" class="w-full">
                        @csrf
                        <div class="pb-3">
                            <input type="text" wire:model="name" name="name" value="{{ old('name') }}" class="w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline" placeholder="Your Name">
                            @error('name')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="pb-3">
                            <input type="text" wire:model="email" name="email" value="{{ old('email') }}" class="w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline" placeholder="Email Address">
                            @error('email')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="pb-3">
                            <input type="text" wire:model="subject" name="subject" value="{{ old('subject') }}" class="w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline" placeholder="Subject Title">
                            @error('subject')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="pb-3">
                            <textarea wire:model="message" name="message" row="4" class="w-full h-40 px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline" placeholder="Your message here...">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="pb-3">
                            <button class="flex px-6 py-3 text-white bg-indigo-500 rounded-md hover:bg-indigo-600 hover:text-white focus:outline-none focus:shadow-outline focus:border-indigo-300" type="submit">
                                <span class="self-center float-left ml-3 text-base font-medium">Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>