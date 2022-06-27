<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- ========== Favicon Icon ========== -->
        <link rel="shortcut icon" href="{{ asset('static/logo.png') }}" type="image/x-icon">

        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.1.1/dist/flowbite.min.css" />
        <!-- Meta Tags -->
        {!! SEOMeta::generate() !!}
        {!! OpenGraph::generate() !!}
        {!! Twitter::generate() !!}
        {!! JsonLd::generate() !!}

        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-white lg:bg-gray-100">
        <x-nav/>
        <div>
            {{ $slot }}
        </div>
        <livewire:front.blog-newsletter/>
        <x-frontend-footer/>
        @livewireScripts
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://unpkg.com/flowbite@1.1.1/dist/flowbite.js"></script>
    </body>
</html>
