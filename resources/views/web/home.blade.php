@extends('web.include.master')
@section('content')

    <!-- Start Banner Area -->
    <div class="rbt-banner-area rbt-banner-1 variation-2 height-750 mb-5">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-8">
                    <div class="content">
                        <div class="inner">
                            <div class="rbt-new-badge rbt-new-badge-one">
                                {{ $heroSection->subtitle }}
                            </div>
                            <h1 class="title">{!! $heroSection->title !!}</h1>
                            <p class="description">{!! $heroSection->description !!}</p>
                            <div class="slider-btn">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="{{ route('courses') }}">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">View Course</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="content">
                        <div class="banner-card pb--60 swiper rbt-dot-bottom-center banner-swiper-active">
                            <div class="swiper-wrapper">
                                @foreach ($latestCourses as $key => $data)
                                    <!-- Start Single Card  -->
                                    <div class="swiper-slide">
                                        <div class="rbt-card variation-01 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('course-details', $data->id) }}">
                                                    <img src="{{ $data->card_image }}" alt="Card image">
                                                    {{-- <div class="rbt-badge-3 bg-white">
                                                        <span>-{{ $data->discount_amount . App\Models\Course::TYPE_ARRAY[$data->discount_type] }}</span>
                                                        <span>Off</span>
                                                    </div> --}}
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>{{ $data->total_class }} Lessons</li>
                                                    <li><i class="feather-users"></i>{{ $data->courseStudents->count() }} Students</li>
                                                </ul>
                                                <p class="rbt-card-text">{!! $data->short_description !!}</p>
                                                <div class="rbt-author-meta mb--10">
                                                    <div class="rbt-avater">
                                                        <a href="#">
                                                            <img src="{{ $data->courseTeacher->image }}" alt="{{ $data->courseTeacher->first_name }}">
                                                        </a>
                                                    </div>
                                                    <div class="rbt-author-info">
                                                        By <a href="{{ route('teacher-profile', $data->courseTeacher->user_id) }}">{{ $data->courseTeacher->first_name }}</a>
                                                    </div>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <span class="current-price">৳{{ $data->price }}</span>
                                                        {{-- <span class="off-price">৳{{ $data->price }}</span> --}}
                                                    </div>
                                                    <a class="rbt-btn-link" href="{{ route('course-details', $data->id) }}">Learn
                                                        More<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->
                                @endforeach
                            </div>
                            <div class="rbt-swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->

    {{-- About Section --}}
    <div class="rbt-about-area about-style-1 bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnail-wrapper">
                        <div class="thumbnail image-1">
                            <img data-parallax='{"x": 0, "y": -20}' src="{{ $aboutSection->image_3 }}" alt="Education Images">
                        </div>
                        <div class="thumbnail image-2 d-none d-xl-block">
                            <img data-parallax='{"x": 0, "y": 60}' src="{{ $aboutSection->image_1 }}" alt="Education Images">
                        </div>
                        <div class="thumbnail image-3 d-none d-md-block">
                            <img data-parallax='{"x": 0, "y": 80}' src="{{ $aboutSection->image_2 }}" alt="Education Images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner pl--50 pl_sm--0 pl_md--0">
                        <div class="section-title text-start">
                            <span class="subtitle bg-coral-opacity">{{ $aboutSection->title }}</span>
                            <h2 class="title">{{ $aboutSection->subtitle }}</h2>
                        </div>
                        <p class="description mt--30">
                            {!! $aboutSection->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Course Area  -->
    <div class="rbt-course-area bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row mb--60 g-5 align-items-end">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title text-start">
                        <span class="subtitle bg-coral-opacity">Latest Course</span>
                        {{-- <h2 class="title">Latest course</h2> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="read-more-btn text-start text-md-end">
                        <a class="rbt-btn btn-gradient hover-icon-reverse radius-round" href="{{ route('courses') }}">
                            <div class="icon-reverse-wrapper">
                                <span class="btn-text">VIEW ALL COURSES</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Start Card Area -->
            <div class="row g-5">
                @foreach ($latestCourses as $key => $data)
                    <!-- Start Single Card  -->
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="{{ route('course-details', $data->id) }}">
                                    <img src="{{ $data->card_image }}" alt="Card image">
                                    {{-- <div class="rbt-badge-3 bg-white">
                                        <span>-{{ $data->discount_amount . App\Models\Course::TYPE_ARRAY[$data->discount_type] }}</span>
                                        <span>Off</span>
                                    </div> --}}
                                </a>
                            </div>
                            <div class="rbt-card-body">

                                <div class="rbt-card-top">
                                    <div class="rbt-bookmark-btn">
                                        <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                                    </div>
                                    <div class="rbt-review">
                                        <a class="rbt-round-btn left-icon" title="Add To Cart" href="#"><i class="feather-shopping-cart"></i></a>
                                    </div>
                                </div>

                                <h4 class="rbt-card-title"><a href="{{ route('course-details', $data->id) }}">{{ $data->title }}</a>
                                </h4>

                                <ul class="rbt-meta">
                                    <li><i class="feather-book"></i>{{ $data->total_class }} Lessons</li>
                                    <li><i class="feather-users"></i>{{ $data->courseStudents->count() }} Students</li>
                                </ul>

                                <p class="rbt-card-text">{!! $data->short_description !!}</p>
                                <div class="rbt-author-meta mb--10">
                                    <div class="rbt-avater">
                                        <a href="#">
                                            <img src="{{ $data->courseTeacher->image }}" alt="{{ $data->courseTeacher->first_name }}">
                                        </a>
                                    </div>
                                    <div class="rbt-author-info">
                                        By <a href="{{ route('teacher-profile', $data->courseTeacher->user_id) }}">{{ $data->courseTeacher->first_name }}</a>
                                    </div>
                                </div>
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <span class="current-price">৳{{ $data->price }}</span>
                                        {{-- <span class="off-price">৳{{ $data->price }}</span> --}}
                                    </div>
                                    <a class="rbt-btn-link" href="{{ route('course-details', $data->id) }}">Learn
                                        More<i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->
                @endforeach
            </div>
            <!-- End Card Area -->
        </div>
    </div>
    <!-- End Course Area  -->

    {{-- Counter --}}
    <div class="rbt-counterup-area rbt-section-gapBottom bg-gradient-1 mt--60">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-coral-opacity">Why Choose Us</span>
                        <h2 class="title">Why Choose Smile Academy</h2>
                        {{-- <p class="description has-medium-font-size mt--20 mb--0"></p> --}}
                    </div>
                </div>
            </div>
            <div class="row g-5 hanger-line">
                <!-- Start Single Counter  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                        <div class="top-circle-shape"></div>
                        <div class="inner">
                            <div class="rbt-round-icon">
                                <img src="{!! asset('web/assets/images/icons/counter-01.png') !!}" alt="Icons Images">
                            </div>
                            <div class="content">
                                <h3 class="counter"><span class="odometer" data-count="500">00</span>
                                </h3>
                                <span class="subtitle">Learners &amp; counting</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Counter  -->

                <!-- Start Single Counter  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--60 mt_md--30 mt_sm--30 mt_mobile--60">
                    <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                        <div class="top-circle-shape"></div>
                        <div class="inner">
                            <div class="rbt-round-icon">
                                <img src="{!! asset('web/assets/images/icons/counter-02.png') !!}" alt="Icons Images">
                            </div>
                            <div class="content">
                                <h3 class="counter"><span class="odometer" data-count="800">00</span>
                                </h3>
                                <span class="subtitle">Courses & Video</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Counter  -->

                <!-- Start Single Counter  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt_md--60 mt_sm--60">
                    <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                        <div class="top-circle-shape"></div>
                        <div class="inner">
                            <div class="rbt-round-icon">
                                <img src="{!! asset('web/assets/images/icons/counter-03.png') !!}" alt="Icons Images">
                            </div>
                            <div class="content">
                                <h3 class="counter"><span class="odometer" data-count="1000">00</span>
                                </h3>
                                <span class="subtitle">Certified Students</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Counter  -->

                <!-- Start Single Counter  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--60 mt_md--30 mt_sm--30 mt_mobile--60">
                    <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                        <div class="top-circle-shape"></div>
                        <div class="inner">
                            <div class="rbt-round-icon">
                                <img src="{!! asset('web/assets/images/icons/counter-04.png') !!}" alt="Icons Images">
                            </div>
                            <div class="content">
                                <h3 class="counter"><span class="odometer" data-count="100">00</span>
                                </h3>
                                <span class="subtitle">Registered Enrolls</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Counter  -->
            </div>
        </div>
    </div>

    <!-- Start Campain Area  -->
    <div class="rbt-buy-now-area bg-gradient-7 rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rbt-buy-now-content text-center">
                        <h2 class="title color-white">{{ $campaignSection->title }}</h2>
                        <h4 class="subtitle color-white">{{ $campaignSection->subtitle }}</h4>

                        <a class="rbt-btn btn-white radius hover-icon-reverse btn-xl" href="{{ route('contact-us') }}">
                            <span class="icon-reverse-wrapper">
                                <span class="btn-text">Contact Now</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-image">
            <img src="{!! asset('web/assets/images/splash/icons/map.png') !!}" alt="Map Image">
        </div>
    </div>
    <!-- End Campain Area  -->

@endsection
