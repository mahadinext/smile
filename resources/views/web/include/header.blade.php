<!-- Start Header Area -->
<header class="rbt-header rbt-header-3">
    <div class="rbt-sticky-placeholder"></div>

    {{-- @include('web.include.top-header') --}}

    <!-- Start Header Top -->
    <div class="rbt-header-middle position-relative rbt-header-mid-1 header-space-betwween bg-color-white rbt-border-bottom d-none d-xl-block">
        <div class="container-fluid">
            <div class="rbt-header-sec align-items-center ">

                <div class="rbt-header-sec-col rbt-header-left">
                    <div class="rbt-header-content">
                    </div>
                </div>

                <div class="rbt-header-sec-col rbt-header-center">
                    <div class="rbt-header-content">
                        <div class="header-info">
                            @include('web.include.search')
                        </div>
                    </div>
                </div>

                <div class="rbt-header-sec-col rbt-header-right">
                    <div class="rbt-header-content">
                        <div class="header-info">
                            @include('web.include.quick-access-bar')
                        </div>

                        <div class="header-info">
                            <a class="rbt-btn rbt-switch-btn btn-gradient btn-sm hover-transform-none" href="#">
                                <span data-text="Get Free Course">Get Free Course</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <div class="rbt-header-wrapper height-50 header-space-betwween bg-color-white header-sticky"
        style="padding-top: 15px; padding-bottom: 15px;">
        <div class="container-fluid">
            <div class="mainbar-row rbt-navigation-center align-items-center">
                <div class="header-left d-block d-xl-none">
                    <div class="header-info">
                        <ul class="quick-access">
                            <li class="access-icon">
                                <a class="search-trigger-active rbt-round-btn" href="#">
                                    <i class="feather-search"></i>
                                </a>
                            </li>

                            <li class="access-icon">
                                <a class="rbt-round-btn" href="wishlist.html.htm">
                                    <i class="feather-heart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="rbt-header-sec-col rbt-header-left">
                    <div class="rbt-header-content">
                        <div class="header-info">
                            @include('web.include.header-logo')
                        </div>
                    </div>
                </div>

                <div class="rbt-main-navigation d-none d-xl-block">
                    @include('web.include.navbar')
                </div>

                @include('web.include.mobile-topbar')

            </div>
        </div>

        <!-- Start Search Dropdown  -->
        <div class="rbt-search-dropdown search-with-category-popup">
            <div class="wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        @include('web.include.search')
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Dropdown  -->
    </div>
</header>
