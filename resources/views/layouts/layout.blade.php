<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Prodotti</title>
    </head>
    <body>
        @include('partials.header')
        <main>
            @yield('mainContent')
        </main>
        @include('partials.footer')
    </body>
    {{-- //scripts --}}
</html>
