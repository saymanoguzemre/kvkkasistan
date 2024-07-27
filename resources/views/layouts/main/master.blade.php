<!DOCTYPE html>
<html lang="tr">
    <head>
        <!-- Google tag (gtag.js) -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-5QNJ9GSR9G"></script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-5QNJ9GSR9G');
            </script>
        <!-- Google tag (gtag.js) -->
        @include('layouts.main.head')
        <link rel="stylesheet" href="{{ asset('vendor/toastr/toastr.min.css') }}">
        @yield('css')
        @livewireStyles
    </head>

    <body class="flex flex-col min-h-screen overflow-x-hidden bg-gray-200">
        {{-- HEADER --}}
        @if(Route::currentRouteName() !== 'form.index')
            @include('layouts.main.header.header')
        @endif
        {{-- HEADER --}}

        {{-- CONTENT --}}
        @yield('content')
        {{-- CONTENT --}}

        {{-- FOOTER --}}
        @if(Route::currentRouteName() !== 'form.index')
            @include('layouts.main.footer.footer')
        @endif
        {{-- FOOTER --}}
        <script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
        <script src="{{ asset('vendor/toastr/toastr.min.js') }}"></script>
        @livewireScripts
        @yield('js')
    </body>

</html>
