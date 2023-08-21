<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
        <!-- Feed Link -->
        @include('feed::links')
        <!-- Meta Tags -->
        {!! SEOMeta::generate() !!}
        {!! OpenGraph::generate() !!}
        {!! Twitter::generate() !!}
        {!! JsonLd::generate() !!}

        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-gray-200">
        <x-nav/>
        <x-header/>
        <div>
            {{ $slot }}
            <livewire:frondend.blog-newsletter/>
        </div>
        <x-frontend-footer/>
        @livewireScripts
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
