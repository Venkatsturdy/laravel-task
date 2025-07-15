<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('meta')
    @include('layout.web.dependency.css')
    @yield('css')

</head>

<body>
    <!-- partial:index.partial.html -->
    <button class="icon-button e-dark-mode-button u-animation-click" id="darkMode" aria-label="Dark Mode"><span
            class="icon" aria-hidden="true">🌜</span></button>
    <div class="common-structure">
        @include('layout.web.partial.header')
        @include('layout.web.partial.nav')
        @section('content')
        @show
    </div>
    <!-- partial -->
    @include('layout.web.partial.footer')
    @include('layout.web.dependency.js')
    @yield('script')
</body>

</html>
