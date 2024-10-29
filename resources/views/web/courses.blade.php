﻿@extends('web.include.master')
@section('content')

    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
        <div class="rbt-banner-content">
            <!-- Start Banner Content Top  -->
            <div class="rbt-banner-content-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Start Breadcrumb Area  -->
                            <ul class="page-list">
                                <li class="rbt-breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li>
                                    <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                </li>
                                <li class="rbt-breadcrumb-item active">All Courses</li>
                            </ul>
                            <!-- End Breadcrumb Area  -->

                            <div class=" title-wrapper">
                                <h1 class="title mb--0">All Courses</h1>
                                <a href="#" class="rbt-badge-2">
                                    <div class="image">🎉</div> 50 Courses
                                </a>
                            </div>

                            <p class="description">Courses that help beginner designers become true unicorns. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner Content Top  -->
            <!-- Start Course Top  -->
            <div class="rbt-course-top-wrapper mt--40">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-5 col-md-12">
                            <div class="rbt-sorting-list d-flex flex-wrap align-items-center">
                                <div class="rbt-short-item switch-layout-container">
                                    <ul class="course-switch-layout">
                                        <li class="course-switch-item"><button class="rbt-grid-view active" title="Grid Layout"><i class="feather-grid"></i> <span class="text">Grid</span></button></li>
                                        <li class="course-switch-item"><button class="rbt-list-view" title="List Layout"><i class="feather-list"></i> <span class="text">List</span></button></li>
                                    </ul>
                                </div>
                                <div class="rbt-short-item">
                                    <span class="course-index">Showing 1-9 of 19 results</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12">
                            <div class="rbt-sorting-list d-flex flex-wrap align-items-center justify-content-start justify-content-lg-end">
                                <div class="rbt-short-item">
                                    <div class="filter-select">
                                        <span class="select-label d-block">Short By</span>
                                        <div class="filter-select rbt-modern-select search-by-category">
                                            <select data-size="7">
                                                <option>Default</option>
                                                <option>Latest</option>
                                                <option>Popularity</option>
                                                <option>Trending</option>
                                                <option>Price: low to high</option>
                                                <option>Price: high to low</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Course Top  -->
        </div>
    </div>

    <!-- Start Card Style -->
    <div class="rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <div class="row row--30 gy-5">
                <div class="col-lg-3 order-2 order-lg-1">
                    <aside class="rbt-sidebar-widget-wrapper">

                        <!-- Start Widget Area  -->
                        <div class="rbt-single-widget rbt-widget-search">
                            <div class="inner">
                                <form action="#" class="rbt-search-style-1">
                                    <input type="text" placeholder="Search Courses">
                                    <button class="search-btn"><i class="feather-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- End Widget Area  -->

                        <!-- Start Widget Area  -->
                        <div class="rbt-single-widget rbt-widget-categories has-show-more">
                            <div class="inner">
                                <h4 class="rbt-widget-title">Categories</h4>
                                <ul class="rbt-sidebar-list-wrapper categories-list-check has-show-more-inner-content">
                                    <li class="rbt-check-group">
                                        <input id="cat-list-1" type="checkbox" name="cat-list-1">
                                        <label for="cat-list-1">Art &amp; Humanities <span class="rbt-lable count">15</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="cat-list-2" type="checkbox" name="cat-list-2">
                                        <label for="cat-list-2">Web Design <span class="rbt-lable count">20</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="cat-list-3" type="checkbox" name="cat-list-3">
                                        <label for="cat-list-3">Graphic Design <span class="rbt-lable count">10</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="cat-list-4" type="checkbox" name="cat-list-4">
                                        <label for="cat-list-4">Art &amp; Humanities <span class="rbt-lable count">15</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="cat-list-5" type="checkbox" name="cat-list-5">
                                        <label for="cat-list-5">Technology <span class="rbt-lable count">20</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="cat-list-6" type="checkbox" name="cat-list-6">
                                        <label for="cat-list-6">Humanities Art <span class="rbt-lable count">25</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="cat-list-7" type="checkbox" name="cat-list-7">
                                        <label for="cat-list-7">Management <span class="rbt-lable count">50</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="cat-list-8" type="checkbox" name="cat-list-8">
                                        <label for="cat-list-8">Photoshop <span class="rbt-lable count">45</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="cat-list-9" type="checkbox" name="cat-list-9">
                                        <label for="cat-list-9">Online Course <span class="rbt-lable count">45</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="cat-list-10" type="checkbox" name="cat-list-10">
                                        <label for="cat-list-10">English Clud <span class="rbt-lable count">45</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="cat-list-11" type="checkbox" name="cat-list-11">
                                        <label for="cat-list-11">Graphic Design <span class="rbt-lable count">45</span></label>
                                    </li>
                                </ul>
                            </div>
                            <div class="rbt-show-more-btn">Show More</div>
                        </div>
                        <!-- End Widget Area  -->

                        <!-- Start Widget Area  -->
                        <div class="rbt-single-widget rbt-widget-rating">
                            <div class="inner">
                                <h4 class="rbt-widget-title">Ratings</h4>
                                <ul class="rbt-sidebar-list-wrapper rating-list-check">
                                    <li class="rbt-check-group">
                                        <input id="cat-radio-1" type="radio" name="rbt-radio">
                                        <label for="cat-radio-1">
                                            <span class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                                            <span class="rbt-lable count">5</span>
                                        </label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="cat-radio-2" type="radio" name="rbt-radio">
                                        <label for="cat-radio-2">
                                            <span class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="off fas fa-star"></i>
                        </span>
                                            <span class="rbt-lable count">4</span>
                                        </label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="cat-radio-3" type="radio" name="rbt-radio">
                                        <label for="cat-radio-3">
                                            <span class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="off fas fa-star"></i>
                            <i class="off fas fa-star"></i>
                        </span>
                                            <span class="rbt-lable count">3</span>
                                        </label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="cat-radio-4" type="radio" name="rbt-radio">
                                        <label for="cat-radio-4">
                                            <span class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="off fas fa-star"></i>
                            <i class="off fas fa-star"></i>
                            <i class="off fas fa-star"></i>
                        </span>
                                            <span class="rbt-lable count">2</span>
                                        </label>
                                    </li>

                                    <li class="rbt-check-group">
                                        <input id="cat-radio-5" type="radio" name="rbt-radio">
                                        <label for="cat-radio-5">
                                            <span class="rating">
                            <i class="fas fa-star"></i>
                            <i class="off fas fa-star"></i>
                            <i class="off fas fa-star"></i>
                            <i class="off fas fa-star"></i>
                            <i class="off fas fa-star"></i>
                        </span>
                                            <span class="rbt-lable count">1</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget Area  -->

                        <!-- Start Widget Area  -->
                        <div class="rbt-single-widget rbt-widget-instructor">
                            <div class="inner">
                                <h4 class="rbt-widget-title">Instructors</h4>
                                <ul class="rbt-sidebar-list-wrapper instructor-list-check">
                                    <li class="rbt-check-group">
                                        <input id="ins-list-1" type="checkbox" name="ins-list-1">
                                        <label for="ins-list-1">Slaughter <span class="rbt-lable count">15</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="ins-list-2" type="checkbox" name="ins-list-2">
                                        <label for="ins-list-2">Patrick <span class="rbt-lable count">20</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="ins-list-3" type="checkbox" name="ins-list-3">
                                        <label for="ins-list-3">Angela <span class="rbt-lable count">10</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="ins-list-4" type="checkbox" name="ins-list-4">
                                        <label for="ins-list-4">Fatima Asrafy <span class="rbt-lable count">15</span></label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget Area  -->

                        <!-- Start Widget Area  -->
                        <div class="rbt-single-widget rbt-widget-prices">
                            <div class="inner">
                                <h4 class="rbt-widget-title">Prices</h4>
                                <ul class="rbt-sidebar-list-wrapper prices-list-check">
                                    <li class="rbt-check-group">
                                        <input id="prices-list-1" type="checkbox" name="prices-list-1">
                                        <label for="prices-list-1">All <span class="rbt-lable count">15</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="prices-list-2" type="checkbox" name="prices-list-2">
                                        <label for="prices-list-2">Free <span class="rbt-lable count">0</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="prices-list-3" type="checkbox" name="prices-list-3">
                                        <label for="prices-list-3">Paid <span class="rbt-lable count">10</span></label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget Area  -->

                        <!-- Start Widget Area  -->
                        <div class="rbt-single-widget rbt-widget-lavels">
                            <div class="inner">
                                <h4 class="rbt-widget-title">Levels</h4>
                                <ul class="rbt-sidebar-list-wrapper lavels-list-check">
                                    <li class="rbt-check-group">
                                        <input id="lavels-list-1" type="checkbox" name="lavels-list-1">
                                        <label for="lavels-list-1">All Levels<span class="rbt-lable count">15</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="lavels-list-2" type="checkbox" name="lavels-list-2">
                                        <label for="lavels-list-2">Beginner <span class="rbt-lable count">0</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="lavels-list-3" type="checkbox" name="lavels-list-3">
                                        <label for="lavels-list-3">Intermediate <span class="rbt-lable count">10</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="lavels-list-4" type="checkbox" name="lavels-list-4">
                                        <label for="lavels-list-4">Expert <span class="rbt-lable count">10</span></label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget Area  -->

                    </aside>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="rbt-course-grid-column">
                        <!-- Start Single Card  -->
                        <div class="course-grid-3">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="{{ route('course-details', 000) }}">
                                        <img src="{!! asset('web/assets/images/course/course-online-01.jpg') !!}" alt="Card image">
                                        <div class="rbt-badge-3 bg-white">
                                            <span>-40%</span>
                                            <span>Off</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <div class="rbt-card-top">
                                        <div class="rbt-review">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="rating-count"> (15 Reviews)</span>
                                        </div>
                                        <div class="rbt-bookmark-btn">
                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                                        </div>
                                    </div>

                                    <h4 class="rbt-card-title"><a href="{{ route('course-details', 000) }}">React Front To Back</a>
                                    </h4>

                                    <ul class="rbt-meta">
                                        <li><i class="feather-book"></i>12 Lessons</li>
                                        <li><i class="feather-users"></i>50 Students</li>
                                    </ul>

                                    <p class="rbt-card-text">It is a long established fact that a reader will be
                                        distracted.</p>
                                    <div class="rbt-author-meta mb--10">
                                        <div class="rbt-avater">
                                            <a href="#">
                                                <img src="{!! asset('web/assets/images/client/avatar-02.png') !!}" alt="Sophia Jaymes">
                                            </a>
                                        </div>
                                        <div class="rbt-author-info">
                                            By <a href="{{ route('teacher-profile', 000) }}">Angela</a> In <a href="#">Development</a>
                                        </div>
                                    </div>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <span class="current-price">$60</span>
                                            <span class="off-price">$120</span>
                                        </div>
                                        <a class="rbt-btn-link" href="{{ route('course-details', 000) }}">Learn
                                            More<i class="feather-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="course-grid-3">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="{{ route('course-details', 000) }}">
                                        <img src="{!! asset('web/assets/images/course/course-online-02.jpg') !!}" alt="Card image">
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <div class="rbt-card-top">
                                        <div class="rbt-review">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="rating-count"> (15 Reviews)</span>
                                        </div>
                                        <div class="rbt-bookmark-btn">
                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                                        </div>
                                    </div>
                                    <h4 class="rbt-card-title"><a href="{{ route('course-details', 000) }}">PHP Beginner Advanced</a>
                                    </h4>
                                    <ul class="rbt-meta">
                                        <li><i class="feather-book"></i>12 Lessons</li>
                                        <li><i class="feather-users"></i>50 Students</li>
                                    </ul>

                                    <p class="rbt-card-text">It is a long established fact that a reader will be
                                        distracted.</p>
                                    <div class="rbt-author-meta mb--10">
                                        <div class="rbt-avater">
                                            <a href="#">
                                                <img src="{!! asset('web/assets/images/client/avatar-02.png') !!}" alt="Sophia Jaymes">
                                            </a>
                                        </div>
                                        <div class="rbt-author-info">
                                            By <a href="{{ route('teacher-profile', 000) }}">Angela</a> In <a href="#">Development</a>
                                        </div>
                                    </div>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <span class="current-price">$60</span>
                                            <span class="off-price">$120</span>
                                        </div>
                                        <a class="rbt-btn-link left-icon" href="{{ route('course-details', 000) }}"><i class="feather-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="course-grid-3">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="{{ route('course-details', 000) }}">
                                        <img src="{!! asset('web/assets/images/course/course-online-03.jpg') !!}" alt="Card image">
                                        <div class="rbt-badge-3 bg-white">
                                            <span>-10%</span>
                                            <span>Off</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <div class="rbt-card-top">
                                        <div class="rbt-review">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="rating-count"> (5 Reviews)</span>
                                        </div>
                                        <div class="rbt-bookmark-btn">
                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                                        </div>
                                    </div>
                                    <h4 class="rbt-card-title"><a href="{{ route('course-details', 000) }}">Angular Zero to Mastery</a>
                                    </h4>
                                    <ul class="rbt-meta">
                                        <li><i class="feather-book"></i>8 Lessons</li>
                                        <li><i class="feather-users"></i>30 Students</li>
                                    </ul>
                                    <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by
                                        the readable.</p>

                                    <div class="rbt-author-meta mb--20">
                                        <div class="rbt-avater">
                                            <a href="#">
                                                <img src="{!! asset('web/assets/images/client/avatar-03.png') !!}" alt="Sophia Jaymes">
                                            </a>
                                        </div>
                                        <div class="rbt-author-info">
                                            By <a href="{{ route('teacher-profile', 000) }}">Slaughter</a> In <a href="#">Languages</a>
                                        </div>
                                    </div>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <span class="current-price">$80</span>
                                            <span class="off-price">$100</span>
                                        </div>
                                        <a class="rbt-btn-link" href="{{ route('course-details', 000) }}">Learn
                                            More<i class="feather-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="course-grid-3">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="{{ route('course-details', 000) }}">
                                        <img src="{!! asset('web/assets/images/course/course-online-04.jpg') !!}" alt="Card image">
                                        <div class="rbt-badge-3 bg-white">
                                            <span>-40%</span>
                                            <span>Off</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <div class="rbt-card-top">
                                        <div class="rbt-review">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="rating-count"> (15 Reviews)</span>
                                        </div>
                                        <div class="rbt-bookmark-btn">
                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                                        </div>
                                    </div>

                                    <h4 class="rbt-card-title"><a href="{{ route('course-details', 000) }}">Web Front To Back</a>
                                    </h4>
                                    <ul class="rbt-meta">
                                        <li><i class="feather-book"></i>20 Lessons</li>
                                        <li><i class="feather-users"></i>40 Students</li>
                                    </ul>
                                    <p class="rbt-card-text">Web Js long fact that a reader will be distracted by
                                        the readable.</p>
                                    <div class="rbt-author-meta mb--20">
                                        <div class="rbt-avater">
                                            <a href="#">
                                                <img src="{!! asset('web/assets/images/client/avater-01.png') !!}" alt="Sophia Jaymes">
                                            </a>
                                        </div>
                                        <div class="rbt-author-info">
                                            By <a href="{{ route('teacher-profile', 000) }}">Patrick</a> In <a href="#">Languages</a>
                                        </div>
                                    </div>

                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <span class="current-price">$60</span>
                                            <span class="off-price">$120</span>
                                        </div>
                                        <a class="rbt-btn-link" href="{{ route('course-details', 000) }}">Learn
                                            More<i class="feather-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="course-grid-3">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="{{ route('course-details', 000) }}">
                                        <img src="{!! asset('web/assets/images/course/course-online-05.jpg') !!}" alt="Card image">
                                        <div class="rbt-badge-3 bg-white">
                                            <span>-20%</span>
                                            <span>Off</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <div class="rbt-card-top">
                                        <div class="rbt-review">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="rating-count"> (15 Reviews)</span>
                                        </div>
                                        <div class="rbt-bookmark-btn">
                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                                        </div>
                                    </div>
                                    <h4 class="rbt-card-title"><a href="{{ route('course-details', 000) }}">SQL Beginner Advanced</a>
                                    </h4>
                                    <ul class="rbt-meta">
                                        <li><i class="feather-book"></i>12 Lessons</li>
                                        <li><i class="feather-users"></i>50 Students</li>
                                    </ul>
                                    <p class="rbt-card-text">It is a long established fact that a reader will be
                                        distracted
                                        by the readable.</p>
                                    <div class="rbt-author-meta mb--20">
                                        <div class="rbt-avater">
                                            <a href="#">
                                                <img src="{!! asset('web/assets/images/client/avatar-02.png') !!}" alt="Sophia Jaymes">
                                            </a>
                                        </div>
                                        <div class="rbt-author-info">
                                            By <a href="{{ route('teacher-profile', 000) }}">Angela</a> In <a href="#">Development</a>
                                        </div>
                                    </div>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <span class="current-price">$60</span>
                                            <span class="off-price">$120</span>
                                        </div>
                                        <a class="rbt-btn-link left-icon" href="{{ route('course-details', 000) }}"><i class="feather-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="course-grid-3">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="{{ route('course-details', 000) }}">
                                        <img src="{!! asset('web/assets/images/course/course-online-06.jpg') !!}" alt="Card image">
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <div class="rbt-card-top">
                                        <div class="rbt-review">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="rating-count"> (5 Reviews)</span>
                                        </div>
                                        <div class="rbt-bookmark-btn">
                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                                        </div>
                                    </div>
                                    <h4 class="rbt-card-title"><a href="{{ route('course-details', 000) }}">JS Zero to Mastery</a>
                                    </h4>
                                    <ul class="rbt-meta">
                                        <li><i class="feather-book"></i>8 Lessons</li>
                                        <li><i class="feather-users"></i>30 Students</li>
                                    </ul>
                                    <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by
                                        the readable.</p>

                                    <div class="rbt-author-meta mb--20">
                                        <div class="rbt-avater">
                                            <a href="#">
                                                <img src="{!! asset('web/assets/images/client/avatar-03.png') !!}" alt="Sophia Jaymes">
                                            </a>
                                        </div>
                                        <div class="rbt-author-info">
                                            By <a href="{{ route('teacher-profile', 000) }}">Slaughter</a> In <a href="#">Languages</a>
                                        </div>
                                    </div>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <span class="current-price">$80</span>
                                            <span class="off-price">$100</span>
                                        </div>
                                        <a class="rbt-btn-link" href="{{ route('course-details', 000) }}">Learn
                                            More<i class="feather-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="course-grid-3">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="{{ route('course-details', 000) }}">
                                        <img src="{!! asset('web/assets/images/course/course-online-04.jpg') !!}" alt="Card image">
                                        <div class="rbt-badge-3 bg-white">
                                            <span>-40%</span>
                                            <span>Off</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <div class="rbt-card-top">
                                        <div class="rbt-review">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="rating-count"> (15 Reviews)</span>
                                        </div>
                                        <div class="rbt-bookmark-btn">
                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                                        </div>
                                    </div>

                                    <h4 class="rbt-card-title"><a href="{{ route('course-details', 000) }}">Web Front To Back</a>
                                    </h4>
                                    <ul class="rbt-meta">
                                        <li><i class="feather-book"></i>20 Lessons</li>
                                        <li><i class="feather-users"></i>40 Students</li>
                                    </ul>
                                    <p class="rbt-card-text">Web Js long fact that a reader will be distracted by
                                        the readable.</p>
                                    <div class="rbt-author-meta mb--20">
                                        <div class="rbt-avater">
                                            <a href="#">
                                                <img src="{!! asset('web/assets/images/client/avater-01.png') !!}" alt="Sophia Jaymes">
                                            </a>
                                        </div>
                                        <div class="rbt-author-info">
                                            By <a href="{{ route('teacher-profile', 000) }}">Patrick</a> In <a href="#">Languages</a>
                                        </div>
                                    </div>

                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <span class="current-price">$60</span>
                                            <span class="off-price">$120</span>
                                        </div>
                                        <a class="rbt-btn-link" href="{{ route('course-details', 000) }}">Learn
                                            More<i class="feather-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="course-grid-3">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="{{ route('course-details', 000) }}">
                                        <img src="{!! asset('web/assets/images/course/course-online-05.jpg') !!}" alt="Card image">
                                        <div class="rbt-badge-3 bg-white">
                                            <span>-20%</span>
                                            <span>Off</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <div class="rbt-card-top">
                                        <div class="rbt-review">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="rating-count"> (15 Reviews)</span>
                                        </div>
                                        <div class="rbt-bookmark-btn">
                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                                        </div>
                                    </div>
                                    <h4 class="rbt-card-title"><a href="{{ route('course-details', 000) }}">SQL Beginner Advanced</a>
                                    </h4>
                                    <ul class="rbt-meta">
                                        <li><i class="feather-book"></i>12 Lessons</li>
                                        <li><i class="feather-users"></i>50 Students</li>
                                    </ul>
                                    <p class="rbt-card-text">It is a long established fact that a reader will be
                                        distracted
                                        by the readable.</p>
                                    <div class="rbt-author-meta mb--20">
                                        <div class="rbt-avater">
                                            <a href="#">
                                                <img src="{!! asset('web/assets/images/client/avatar-02.png') !!}" alt="Sophia Jaymes">
                                            </a>
                                        </div>
                                        <div class="rbt-author-info">
                                            By <a href="{{ route('teacher-profile', 000) }}">Angela</a> In <a href="#">Development</a>
                                        </div>
                                    </div>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <span class="current-price">$60</span>
                                            <span class="off-price">$120</span>
                                        </div>
                                        <a class="rbt-btn-link left-icon" href="{{ route('course-details', 000) }}"><i class="feather-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="course-grid-3">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="{{ route('course-details', 000) }}">
                                        <img src="{!! asset('web/assets/images/course/course-online-06.jpg') !!}" alt="Card image">
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <div class="rbt-card-top">
                                        <div class="rbt-review">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="rating-count"> (5 Reviews)</span>
                                        </div>
                                        <div class="rbt-bookmark-btn">
                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                                        </div>
                                    </div>
                                    <h4 class="rbt-card-title"><a href="{{ route('course-details', 000) }}">JS Zero to Mastery</a>
                                    </h4>
                                    <ul class="rbt-meta">
                                        <li><i class="feather-book"></i>8 Lessons</li>
                                        <li><i class="feather-users"></i>30 Students</li>
                                    </ul>
                                    <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by
                                        the readable.</p>

                                    <div class="rbt-author-meta mb--20">
                                        <div class="rbt-avater">
                                            <a href="#">
                                                <img src="{!! asset('web/assets/images/client/avatar-03.png') !!}" alt="Sophia Jaymes">
                                            </a>
                                        </div>
                                        <div class="rbt-author-info">
                                            By <a href="{{ route('teacher-profile', 000) }}">Slaughter</a> In <a href="#">Languages</a>
                                        </div>
                                    </div>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <span class="current-price">$80</span>
                                            <span class="off-price">$100</span>
                                        </div>
                                        <a class="rbt-btn-link" href="{{ route('course-details', 000) }}">Learn
                                            More<i class="feather-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                    </div>

                    <div class="row">
                        <div class="col-lg-12 mt--60">
                            <nav>
                                <ul class="rbt-pagination">
                                    <li><a href="#" aria-label="Previous"><i class="feather-chevron-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#" aria-label="Next"><i class="feather-chevron-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Card Style -->

@endsection
