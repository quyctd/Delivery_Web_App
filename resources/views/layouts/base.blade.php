<!doctype html>
<html lang="en">
<head>
    @section('head')
        @include('layouts.head')
    @show
    @yield('header')
</head>
<body class="base-background-color">
    @yield('navbar')

    @yield('content')

    @yield('footer')
</body>
</html>