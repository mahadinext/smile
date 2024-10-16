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