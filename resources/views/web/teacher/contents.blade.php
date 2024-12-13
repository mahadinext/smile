@extends('web.include.master')

@section('css')
    @parent
    <link href="https://vjs.zencdn.net/8.0.4/video-js.css" rel="stylesheet">
    <style>
        .video-js {
            font-size: 16px; /* Customize player text size */
            color: #fff; /* Customize player text color */
        }

        .video-js .vjs-control-bar {
            background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent control bar */
        }
    </style>
@endsection

@section('content')
    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">Teacher Contents</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Teacher Contents</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <div class="rbt-team-area bg-color-extra2 rbt-section-gap" style="background:#f38b051f;">
        <div class="container">
            <div class="row g-5">

                @foreach($contents as $key => $data)
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="rbt-team team-style-default style-three small-layout rbt-hover">
                            <video
                                id="video-{{ $data->id }}"
                                class="video-js vjs-default-skin"
                                controls
                                preload="auto"
                                width="640"
                                height="360"
                                poster="{{ $data->thumbnail }}"
                                data-setup='{}'>
                                <source src="{{ $data->file_path }}" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="row">
                <div class="col-lg-12 mt--60">
                    <nav>
                        {{ $contents->withQueryString()->links('web.include.paginator') }}
                    </nav>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('scripts')
    @parent
    <script src="https://vjs.zencdn.net/8.0.4/video.min.js"></script>
    <script>
        $(document).ready(function() {
            const player = videojs('my-video', {
                autoplay: false,
                controls: true,
                responsive: true,
                fluid: true, // Makes the player responsive
                playbackRates: [0.5, 1, 1.5, 2], // Add playback speed options
            });
        });
    </script>
@endsection
