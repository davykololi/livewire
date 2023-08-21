<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-r from-red-300 to-red-800 via-orange-500">
    <div class="mt-4">
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-4 mb-0 lg:mb-12 px-6 py-4 bg-red-700 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
