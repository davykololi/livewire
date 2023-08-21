<div class="m-4 h-full">
    <div class="flex flex-row justify-between">
        <h2 class="text-xl font-bold text-gray-600 uppercase">{{ Auth::user()->name }} Posts</h2>
        @can('isAuthor')
        <div class="p-3">
            <a href="{{ url('author/posts/create') }}" class="px-4 py-0 text-white text-center bg-green-700 border-2 rounded-full shadow-lg uppercase font-extrabold hover:bg-purple-500 focus:outline-none disabled:opacity-100">
                New
            </a>
        </div>
        @endcan
    </div>
    <div class="p-3">
        <!-- Session checks -->
        @if (session()->has('success'))
            <!-- Show message -->
            <div class="p-2 text-green-900 bg-green-600 bg-opacity-25 rounded-md">{{ session('success') }}</div>
        @endif
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No.
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                    {{ $post->id }}
                </th>
                <td class="px-6 py-4">
                    {{ $post->category->name }}
                </td>
                <td class="px-6 py-4">
                    {{ ucwords($post->title) }}
                </td>
                <td class="px-6 py-4">
                    {{ $post->is_published ? "Published" : "Pending" }}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('show.post', $post->id) }}" class="bg-blue-600 px-2 py-1.5 text-xs rounded text-white lg:mx-0.5">
                        Details
                    </a>
                    <a href="{{ route('edit.post', $post->id) }}" class="bg-green-600 px-2 py-1.5 text-xs rounded text-white lg:mx-0.5">Edit</a>
                    <button class="bg-red-600 px-2 py-1.5 text-xs rounded text-white" wire:click="delete({{$post->id}})" onclick="return confirm('Are you sure to delete {{ $post->title }} article?')">
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
        <div class="my-3">
            {{ $posts->links() }}
        </div>
    </div>
</div>
