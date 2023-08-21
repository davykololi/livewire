<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- ========== Favicon Icon ========== -->
        <link rel="shortcut icon" href="{{ asset('static/logo.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
        <!-- Toastr CSS -->
        @toastr_css
        <!-- Trix editor -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" />

        @livewireStyles
    </head>
    <body class="flex flex-col min-h-screen">
        <x-author-nav/>
        <x-auth-dashboard/>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        <x-backend-footer/>
        @livewireScripts
        <!-- Scripts -->
        <script>
            Livewire.on('deletePost',id => {
                alert(Are you sure to delete the post: + id);
            })
        </script>
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>

        <script src="node_modules/flowbite/dist/flowbite.js"></script>
        <script src="node_modules/flowbite/dist/datepicker.js"></script>
        <script src="https://unpkg.com/flowbite@1.4.7/dist/datepicker.js"></script>

        <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>

        <!-- CKEditor Scripts -->
        {{ Html::script('ckeditor/ckeditor.js') }}

        {{ Html::script('ckeditor/adapters/jquery.js') }}
        <script>
            if(document.getElementById("summary-ckeditor")){
                CKEDITOR.replace( 'summary-ckeditor');
                }
        </script>
        
        @stack('scripts')
        <!--Toastr Scripts -->
        @jquery
        @toastr_js
        @toastr_render
    </body>
</html>
