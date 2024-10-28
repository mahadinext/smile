<!DOCTYPE html>
<html lang="en">

    <head>
        @include('web.include.title-meta')

        @include('web.include.head-css')

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles">

        @yield('css')

        <!--Jquery-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </head>

    <body class="rbt-header-sticky">
        @include('web.include.color')
        @include('web.include.campaign')
        @include('web.include.header')
        @include('web.include.mobile-menu')
        @include('web.include.side-cart')

        @yield('content')

        @yield('scripts')

        @include('web.include.seperator')
        @include('web.include.copyright')
        @include('web.include.progress-bar')
        @include('web.include.vendor-scripts')
    </body>

</html>
