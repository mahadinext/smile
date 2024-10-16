<!DOCTYPE html>
<html data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg">

    <head>

        <title>Dashboard</title>
        @include('admin.include.title-meta')


        <!-- jsvectormap css -->
        <link href="{!! asset('theme/admin/assets/libs/jsvectormap/css/jsvectormap.min.css') !!}" rel="stylesheet" type="text/css" />

        <!--Swiper slider css-->
        <link href="{!! asset('theme/admin/assets/libs/swiper/swiper-bundle.min.css') !!}" rel="stylesheet" type="text/css" />

        @include('admin.include.head-css')

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles">

        <!--Jquery-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('admin.include.topbar')
            @include('admin.include.sidebar')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">


                @yield('content')


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Mahadi
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by <a href="https://mahadiislam.com" target="_blank">Mahadi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        @yield('scripts')

        @include('admin.include.customizer')
        @include('admin.include.vendor-scripts')


    </body>

</html>
