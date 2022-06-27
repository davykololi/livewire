<nav x-data="{ isOpen: false }" @keydown.escape="isOpen = false" class="z-10 flex flex-wrap justify-between w-full p-4 shadow-md space-x-8">
    <div class="mr-6 text-xl font-bold">
        <a href="{{ route('home') }}"
        class="grid grid-cols-3 gap-1 transition duration-500 hover:text-purple-500">
            <x-jet-application-logo class="w-8 h-8 border border-blue-300 rounded-full" />
            <div class="col-span-2">{{ config('app.name') }}</div>
        </a>
    </div>
    <button x-on:click="isOpen = !isOpen" type="button" class="px-2 lg:hidden"
        :class="{ 'transition transform-180': isOpen }">
        <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path x-show="isOpen"
                d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z" />
            <path x-show="!isOpen"
                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z" />
        </svg>
    </button>
    <div class="flex-grow w-full transition-all duration-500 ease-in lg:flex lg:items-center lg:w-auto"
        :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }" @click.away="isOpen = false" x-show.transition="true">

        <ul class="items-center justify-start flex-1 pt-4 space-y-4 lg:pt-0 list-reset lg:flex lg:space-y-0">
            @can('isAuthor')
            <li class="py-2 md:py-0">
                <a href="{{ url('author/posts') }}" class="mx-4 text-sm text-bold hover:text-indigo-500 uppercase">Posts</a>
            </li>
            @endcan
        </ul>

        <ul class="items-center justify-end flex-1 pt-4 space-y-4 lg:pt-0 list-reset lg:flex lg:space-y-0">
            @guest
            @if (Route::has('login'))
            <li class="py-2 md:py-0">
                <a href="{{ route('login') }}" class="mx-4 text-lg hover:text-indigo-500">
                    Signin
                </a>
            </li>
            @endif

            @if (Route::has('register'))
            <li class="py-2 md:py-0">
                <a href="{{ route('register') }}" class="mx-4 text-lg hover:text-indigo-500">
                    Signup
                </a>
            </li>
            @endif

            @else
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <x-auth-user-name/>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            @endguest

        </ul>
    </div>
    </div>
</nav>
