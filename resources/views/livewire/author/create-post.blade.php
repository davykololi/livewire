<div class="p-4 mx-auto mt-2 bg-gray-100 md:p-4 md:w-full md:mt-0 bg-pink-300 rounded-md">
    <h1 class="text-white text-xl font-semibold uppercase text-white">New post</h1>
    @can('isAuthor')
        <div class="mb-5 text-right">
            <a href="{{ url('author/posts') }}" class="px-4 py-0 text-white text-center bg-blue-600 rounded-full shadow-lg uppercase font-extrabold border-2 hover:bg-purple-500 inline-flex focus:outline-none disabled:opacity-100">
            	Back
            </a>
        </div>
    @endcan
    <form wire:submit.prevent="save" method="post" enctype="multipart/form-data">
        @csrf
        <div class="overflow-hidden bg-white rounded-md shadow">
            <div class="px-4 py-3 space-y-8 sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label for="title" class="font-bold">{{ __("Title") }}</x-jet-label>
                        <x-jet-input class="w-full" type="text" wire:model="title" placeholder="Title"/>
                        <x-jet-input-error for="title"/>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label for="description" class="font-bold">{{ __("Description") }}</x-jet-label>
                        <x-jet-input type="text" class="w-full" wire:model="description" placeholder="Description"/>
                        <x-jet-input-error for="description"/>
                    </div>
                </div>
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label for="caption" class="block text-sm font-medium text-gray-700 font-bold">
                        	{{ __("Caption") }}
                        </x-jet-label>
                        <x-jet-input id="caption" wire:model="caption" type="text" placeholder="Caption" class="w-full"/>
                        <x-jet-input-error for="caption"/>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label for="image" class="font-bold mt-2">{{ __("Image") }}</x-jet-label>
                        <x-jet-input type="file" id="image" accept="jpg,png,gif" class="w-full" wire:model="image"/>
                        <x-jet-input-error for="image"/>
                    </div>
                </div>
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label for="category_id" class="block text-sm font-medium text-gray-700 font-bold">
                            {{ __("Category") }}
                        </x-jet-label>
                        <select name="category_id" wire:model="category_id" class="p-2 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline w-full">
                            <option value="">{{ __('Select Category') }}</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id}}" {{ $category->id === old('category_id') ? 'selected' : ''}}>
                                {{ $category->name }}
                            </option>
                            @endforeach
                        </select>
                        <x-jet-input-error for="category_id"/>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label for="tags" class="block text-sm font-medium text-gray-700 font-bold">{{ __("Tags") }}</x-jet-label>
                        <select name="tags" wire:model="tags" class="p-2 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline w-full" multiple>
                            
                            
                            
                        </select>
                        <x-jet-input-error for="tags"/>
                    </div>
                </div>
                <div class="flex flex-col">
                    <x-jet-label for="content" class="font-bold">{{ __("Content") }}</x-jet-label>
                    <textarea id="content" rows="4" wire:model="content" class="border-gray-300 rounded-sm form-textarea" placeholder="Content">
                    </textarea>
                    <x-jet-input-error for="content"/>
                </div>
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label for="keywords" class="block text-sm font-medium text-gray-700 font-bold">
                            {{ __("Keywords") }}
                        </x-jet-label>
                        <x-jet-input id="keywords" wire:model="keywords" type="text" placeholder="Keywords" class="w-full"/>
                        <x-jet-input-error for="keywords"/>
                    </div>
                    <div class="col-span-6 mt-4 sm:col-span-1">
                        <x-jet-label class="text-sm font-medium text-gray-700 font-bold">
                            <x-jet-input wire:click="togglePublished" type="checkbox" class="form-checkbox"/>{{ __("Publish") }}
                        </x-jet-label>
                        <x-jet-input-error for="is_published"/>
                    </div>
                </div>
            </div>
            <div class="px-4 py-3 text-center bg-gray-50 sm:px-6">
                <x-jet-button class="inline-flex justify-center">{{ __("Create") }}</x-jet-button>
            </div>
        </div>
    </form>
</div>
