<?php ini_set('memory_limit', '-1'); ?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="format-detection" content="telephone=no">

    <title style="font-family:Sofia">{{  config('app.name', 'Laravel') }}</title>

    @include('layouts.extras.css')
</head>

<body>
    <div id="app">
        <main class="main">
            {{-- @include('layouts.navs.nav') --}}
            @yield('content')
        </main>
    </div>
    @include('layouts.extras.js')

</body>

</html>
