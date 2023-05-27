<!DOCTYPE html>
<html lang="tr">
    <head>
        @include('layouts.main.head')
        <link rel="stylesheet" href="{{ asset('vendor/toastr/toastr.min.css') }}">
        @yield('css')
        @livewireStyles
    </head>

    <body class="flex flex-col min-h-screen overflow-x-hidden">
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
