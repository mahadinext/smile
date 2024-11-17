@extends('web.include.master')
@section('content')

    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">Instructor</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Instructor</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <div class="rbt-team-area bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row g-5">

                @foreach($teachers as $key => $data)
                    <!-- Start Single Team  -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="rbt-team team-style-default style-three small-layout rbt-hover">
                            <a href="{{ route('instructor-profile', $data->user_id) }}">
                                <div class="inner">
                                    <div class="thumbnail"><img src="{{ $data->image }}" alt="{{ $data->first_name . ' ' . $data->last_name }}"></div>
                                    <div class="content">
                                        <h4 class="title">{{ $data->first_name . ' ' . $data->last_name }}</h4>
                                        {{-- <h6 class="subtitle theme-gradient"></h6>
                                        <span class="team-form">
                                            <i class="feather-map-pin"></i>
                                            <span class="location"></span>
                                        </span> --}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Team  -->
                @endforeach

            </div>

            <div class="row">
                <div class="col-lg-12 mt--60">
                    <nav>
                        {{ $teachers->withQueryString()->links('web.include.paginator') }}
                    </nav>
                </div>
            </div>

        </div>
    </div>

@endsection
