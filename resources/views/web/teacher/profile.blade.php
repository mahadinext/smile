@extends('web.include.master')
@section('content')

    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
    </div>

    <div class="rbt-dashboard-area rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <div class="row">
                @if ($teacher->cover_image)
                    <div class="col-lg-12">
                        <!-- Start Dashboard Top  -->
                        <div class="rbt-dashboard-content-wrapper">
                            <div class="tutor-bg-photo bg_image height-260">
                                <img src="{{ $teacher->cover_image }}" alt="">
                            </div>
                            <!-- Start Tutor Information  -->
                            {{-- <div class="rbt-tutor-information">
                                <div class="rbt-tutor-information-left">
                                    <div class="thumbnail rbt-avatars size-lg">
                                        <img src="assets/images/team/avatar.jpg" alt="Instructor">
                                    </div>
                                    <div class="tutor-content">
                                        <h5 class="title">John Due</h5>
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
                                        <ul class="rbt-meta rbt-meta-white mt--5">
                                            <li><i class="feather-book"></i>20 Courses</li>
                                            <li><i class="feather-users"></i>40 Students</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- End Tutor Information  -->
                        </div>
                        <!-- End Dashboard Top  -->
                    </div>
                @endif

                <div class="col-lg-12 mt--30">
                    <div class="profile-content rbt-shadow-box">
                        <h4 class="rbt-title-style-3">Biography</h4>
                        <div class="row g-5">
                            <div class="col-lg-8">
                                {{-- <p class="mt--10 mb--20">I'm the Front-End Developer for #Rainbow IT in Bangladesh, OR. I have serious passion for UI effects, animations and creating intuitive, dynamic user experiences.</p>
                                <ul class="social-icon social-default justify-content-start">
                                    <li><a href="https://www.facebook.com/">
                                            <i class="feather-facebook"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.twitter.com">
                                            <i class="feather-twitter"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.instagram.com/">
                                            <i class="feather-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkdin.com/">
                                            <i class="feather-linkedin"></i>
                                        </a>
                                    </li>
                                </ul> --}}
                                {!! $teacher->detailed_info !!}
                                <ul class="rbt-information-list mt--15">
                                    <li>
                                        <a href="#"><i class="feather-phone"></i>{{ $teacher->phone_no }}</a>
                                    </li>
                                    <li>
                                        <a href="mailto:{{ $teacher->email }}"><i class="feather-mail"></i>{{ $teacher->email }}</a>
                                    </li>
                                </ul>
                            </div>
                            {{-- <div class="col-lg-2 offset-lg-2">
                                <div class="feature-sin best-seller-badge text-end h-100">
                                    <span class="rbt-badge-2 w-100 text-center badge-full-height">
                                        <span class="image"><img src="assets/images/icons/card-icon-1.png" alt="Best Seller Icon"></span> Bestseller
                                    </span>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start Card Area -->
            <div class="rbt-profile-course-area mt--60">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sction-title">
                            <h2 class="rbt-title-style-3">Courses</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt--5">

                    @foreach ($teacherCourses as $key => $data)
                        <!-- Start Single Card  -->
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
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
            </div>
            <!-- End Card Area -->

            <div class="row">
                <div class="col-lg-12 mt--60">
                    <nav>
                        {{ $teacherCourses->withQueryString()->links('web.include.paginator') }}
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>

    @endsection
