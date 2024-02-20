<!doctype html>
<html lang="en">
<head>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('src/img/logo_black.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('src/img/logo_black.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('src/img/logo_black.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('src/img/logo_black.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('src/img/logo_black.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('src/img/logo_black.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('src/img/logo_black.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('src/img/logo_black.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('src/img/logo_black.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('src/img/logo_black.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('src/img/logo_black.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('src/img/logo_black.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('src/img/logo_black.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @include('includes.css')
</head>
<body class="d-flex flex-column min-vh-100">
    @include('includes.navbar')

    <main class="flex-shrink-0">
        @yield('content')
    </main>

    @include('includes.footer')
    @include('includes.js')
    @yield('custom-js')
</body>
</html>
