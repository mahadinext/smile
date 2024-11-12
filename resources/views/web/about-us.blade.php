@extends('web.include.master')
@section('content')

    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">About</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <div class="rbt-about-area about-style-1 bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnail-wrapper">
                        <div class="thumbnail image-1">
                            <img data-parallax='{"x": 0, "y": -20}' src="{{ $sectionOneContent->image_3 }}" alt="Education Images">
                        </div>
                        <div class="thumbnail image-2 d-none d-xl-block">
                            <img data-parallax='{"x": 0, "y": 60}' src="{{ $sectionOneContent->image_1 }}" alt="Education Images">
                        </div>
                        <div class="thumbnail image-3 d-none d-md-block">
                            <img data-parallax='{"x": 0, "y": 80}' src="{{ $sectionOneContent->image_2 }}" alt="Education Images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner pl--50 pl_sm--0 pl_md--0">
                        <div class="section-title text-start">
                            <span class="subtitle bg-coral-opacity">{{ $sectionOneContent->title }}</span>
                            <h2 class="title">{{ $sectionOneContent->subtitle }}</h2>
                        </div>
                        <p class="description mt--30">
                            {!! $sectionOneContent->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service-wrapper bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-pink-opacity">Histudy Feature</span>
                        {{-- <h2 class="title">Check out Histudy's features <br> to win any exam</h2> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row row--15 mt_dec--30">

                        @php
                            $count = 0;
                        @endphp
                        @foreach($sectionThreeContent as $key => $data)
                            @php
                                ++$count;
                                $count = ($count > 4) ? 1 : $count;
                            @endphp
                            <!-- Start Single Card  -->
                            <div class="col-xl-3 col-md-6 col-sm-6 col-12 mt--30">
                                <div class="rbt-flipbox">
                                    <div class="rbt-service rbt-service-1 card-bg-{{ $count }}">
                                        <div class="rbt-flipbox-front rbt-flipbox-face inner">
                                            <div class="icon">
                                                <img src="{{ $data->icon_image }}" alt="card-icon">
                                            </div>
                                            <div class="content">
                                                <h5 class="title"><a href="#">{{ $data->title }}</a></h5>
                                                <p>{{ $data->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Card  -->
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Service Area -->
    <div class="rbt-service-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row mb--60 g-5 align-items-end">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title text-start">
                        <h4 class="title">How to Apply</h4>
                    </div>
                </div>
                {{-- <div class="col-lg-6 col-md-6 col-12">
                    <div class="read-more-btn text-start text-md-end">
                        <a class="rbt-moderbt-btn" href="#">
                            <span class="moderbt-btn-text">View All Requirements</span>
                            <i class="feather-arrow-right"></i>
                        </a>
                    </div>
                </div> --}}
            </div>

            <!-- Start Card Area -->
            <div class="row row--15 mt_dec--30">

                @foreach($sectionTwoContent as $key => $data)
                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-xl-3 col-xxl-3 col-md-6 col-sm-6 col-12 mt--30">
                        <div class="service-card service-card-6">
                            <div class="inner">
                                <div class="icon">
                                    <img src="{{ $data->icon_image }}" alt="icons Images">
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">{{ $data->title }}</a></h6>
                                    <p class="description">{{ $data->description }}</p>
                                </div>
                                <span class="number-text">{{ ++$key }}</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->
                @endforeach

            </div>
            <!-- End Card Area -->
        </div>
    </div>
    <!-- End Service Area -->

    <div class="rbt-team-area bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-pink-opacity">Our Instructor</span>
                        <h2 class="title">Some of our Best Instructor</h2>
                    </div>
                </div>
            </div>
            <div class="row row--15 mt_dec--30">

                @foreach($teachers as $key => $data)
                    <!-- Start Single Team  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30">
                        <div class="team">
                            <div class="thumbnail"><img src="{!! asset('web/assets/images/team/team-05.jpg') !!}" alt="Blog Images">
                            </div>
                            <div class="content">
                                <h4 class="title">{{ $data->first_name . ' ' . $data->last_name }}</h4>
                                {{-- <p class="designation"></p> --}}
                            </div>
                        </div>
                    </div>
                    <!-- End Single Team  -->
                @endforeach

            </div>
        </div>
    </div>

    @endsection
