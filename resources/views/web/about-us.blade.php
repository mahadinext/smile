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
                            <li class="rbt-breadcrumb-item"><a href="index.html.htm">Home</a></li>
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
                            <img data-parallax='{"x": 0, "y": -20}' src="{!! asset('web/assets/images/about/about-07.jpg') !!}" alt="Education Images">
                        </div>
                        <div class="thumbnail image-2 d-none d-xl-block">
                            <img data-parallax='{"x": 0, "y": 60}' src="{!! asset('web/assets/images/about/about-09.jpg') !!}" alt="Education Images">
                        </div>
                        <div class="thumbnail image-3 d-none d-md-block">
                            <img data-parallax='{"x": 0, "y": 80}' src="{!! asset('web/assets/images/about/about-08.jpg') !!}" alt="Education Images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner pl--50 pl_sm--0 pl_md--0">
                        <div class="section-title text-start">
                            <span class="subtitle bg-coral-opacity">Know About Us</span>
                            <h2 class="title">Know About Histudy <br> Learning Platform</h2>
                        </div>
                        <p class="description mt--30">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <!-- Start Feature List  -->
                        <div class="rbt-feature-wrapper mt--40">

                            <div class="rbt-feature feature-style-1">
                                <div class="icon bg-pink-opacity">
                                    <i class="feather-heart"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="feature-title">Flexible Classes</h6>
                                    <p class="feature-description">It is a long established fact that a reader will
                                        be distracted by this on readable content of when looking at its layout.</p>
                                </div>
                            </div>

                            <div class="rbt-feature feature-style-1">
                                <div class="icon bg-primary-opacity">
                                    <i class="feather-book"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="feature-title">Learn From Anywhere</h6>
                                    <p class="feature-description">Sed distinctio repudiandae eos recusandae laborum eaque non eius iure suscipit laborum eaque non eius iure suscipit.</p>
                                </div>
                            </div>

                            <div class="rbt-feature feature-style-1">
                                <div class="icon bg-coral-opacity">
                                    <i class="feather-monitor"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="feature-title">Experienced Teacher's service.</h6>
                                    <p class="feature-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, aliquid mollitia Officia, aliquid mollitia.</p>
                                </div>
                            </div>
                        </div>

                        <!-- End Feature List  -->
                        <div class="about-btn mt--40">
                            <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                <span class="icon-reverse-wrapper">
                            <span class="btn-text">More About Us</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-about-area about-style-1 bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnail-wrapper">
                        <div class="thumbnail image-1">
                            <img data-parallax='{"x": 0, "y": -20}' src="{!! asset('web/assets/images/about/about-01.png') !!}" alt="Education Images">
                        </div>
                        <div class="thumbnail image-2 d-none d-xl-block">
                            <img data-parallax='{"x": 0, "y": 60}' src="{!! asset('web/assets/images/about/about-02.png') !!}" alt="Education Images">
                        </div>
                        <div class="thumbnail image-3 d-none d-md-block">
                            <img data-parallax='{"x": 0, "y": 80}' src="{!! asset('web/assets/images/about/about-03.png') !!}" alt="Education Images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner pl--50 pl_sm--0 pl_md--0">
                        <div class="section-title text-start">
                            <span class="subtitle bg-coral-opacity">Know About Us</span>
                            <h2 class="title">Know About Histudy <br> Learning Platform</h2>
                        </div>

                        <p class="description mt--30">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

                        <!-- Start Feature List  -->

                        <div class="rbt-feature-wrapper mt--20 ml_dec_20">
                            <div class="rbt-feature feature-style-2 rbt-radius">
                                <div class="icon bg-pink-opacity">
                                    <i class="feather-heart"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="feature-title">Flexible Classes</h6>
                                    <p class="feature-description">It is a long established fact that a reader will
                                        be distracted by this on readable content of when looking at its layout.</p>
                                </div>
                            </div>

                            <div class="rbt-feature feature-style-2 rbt-radius">
                                <div class="icon bg-primary-opacity">
                                    <i class="feather-book"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="feature-title">Learn From Anywhere</h6>
                                    <p class="feature-description">Sed distinctio repudiandae eos recusandae laborum eaque non eius iure suscipit laborum eaque non eius iure suscipit.</p>
                                </div>
                            </div>
                        </div>

                        <!-- End Feature List  -->
                        <div class="about-btn mt--40">
                            <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                <span class="icon-reverse-wrapper">
                            <span class="btn-text">More About Us</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-about-area about-style-1 bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-lg-6">
                    <div class="content">
                        <h2 class="title mb--0" data-sal="slide-up" data-sal-duration="700">About the University we are creative preapre you for your career supportive.</h2>
                    </div>
                </div>
                <div class="col-lg-6" data-sal="slide-up" data-sal-duration="700">
                    <p class="mb--40 mb_sm--20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam inventore praesentium alias incidunt! Veritatis, necessitatibus fuga dolore tenetur, beatae suscipit fugit est ea perspiciatis quo provident nisi dolor similique architecto nihil! Ipsa aspernatur aperiam recusandae pariatur odit repudiandae assumenda architecto.</p>
                    <div class="readmore-btn">
                        <a class="rbt-moderbt-btn" href="#">
                            <span class="moderbt-btn-text">University Overview</span>
                            <i class="feather-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-about-area about-style-1 bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-lg-4">
                    <div class="content">
                        <h2 class="title" data-sal="slide-up" data-sal-duration="700">Graduate Programs.</h2>
                    </div>
                </div>
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="700">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam inventore praesentium alias incidunt! Veritatis, necessitatibus fuga dolore tenetur, beatae suscipit fugit est ea perspiciatis quo provident nisi dolor similique architecto nihil.</p>
                </div>
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="700">
                    <p>Graduate Programs dolor sit amet consectetur adipisicing elit. Nam inventore praesentium alias incidunt! Veritatis, necessitatibus fuga dolore tenetur, beatae suscipit fugit est ea perspiciatis quo provident nisi dolor similique architecto nihil.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-about-area about-style-1 bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row row--0 about-wrapper align-items-center theme-shape">
                        <div class="col-lg-6">
                            <div class="thumbnail">
                                <img src="{!! asset('web/assets/images/about/about-12.jpg') !!}" alt="About Images">
                            </div>
                        </div>
                        <div class="col-lg-6 mt_md--30 mt_sm--30">
                            <div class="content">
                                <div class="inner">
                                    <h4 class="title">I'm <span class="theme-gradient">John Lee</span> <br>The Founder Of Histudy Academy.</h4>
                                    <p>Web teacher and leacture for future development.</p>
                                    <ul class="contact-address">
                                        <li>
                                            <i class="feather-file"></i> Web designer &amp; developer
                                        </li>
                                        <li><i class="feather-phone"></i> +01910203040</li>
                                        <li>
                                            <i class="feather-map-pin"></i> Dhaka, Bangladesh
                                        </li>
                                    </ul>
                                    <div class="signature-image mt--20">
                                        <img src="{!! asset('web/assets/images/shape/signature.png') !!}" alt="Signature Images">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="top-circle-shape position-bottom-right"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-about-area about-style-1 bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="content">
                        <img src="{!! asset('web/assets/images/about/about-06.png') !!}" alt="About Images">
                    </div>
                </div>
                <div class="col-lg-6" data-sal="slide-up" data-sal-duration="700">
                    <div class="inner pl--50 pl_sm--5">
                        <div class="section-title text-start">
                            <span class="subtitle bg-primary-opacity">About Histudy</span>
                            <h2 class="title">What is Histudy For You?.</h2>
                            <p class="description mt--20"><strong>Histudy educational platform</strong> ipsum dolor sit amet consectetur adipisicing elit. Nam inventore praesentium alias incidunt! Veritatis, necessitatibus fuga dolore tenetur, beatae suscipit fugit est ea perspiciatis quo provident nisi dolor similique architecto nihil.</p>
                            <div class="read-more-btn mt--40">
                                <a class="rbt-btn radius rbt-marquee-btn marquee-text-y" href="#">
                                    <span data-text="Learn More">
                                Learn More
                            </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-about-area about-style-1 bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="inner">
                        <div class="section-title text-start">
                            <span class="subtitle bg-primary-opacity">About Histudy</span>
                            <h2 class="title">What is Histudy For You?.</h2>
                            <p class="description mt--20"><strong>Histudy educational platform</strong> ipsum dolor sit amet consectetur adipisicing elit. Nam inventore praesentium alias incidunt! Veritatis, necessitatibus fuga dolore tenetur, beatae suscipit fugit est ea perspiciatis quo provident nisi dolor similique architecto nihil.</p>
                            <div class="read-more-btn mt--40">
                                <a class="rbt-btn btn-gradient rbt-switch-btn rbt-switch-y" href="#">
                                    <span data-text="About Histudy">About Histudy</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="content">
                        <img src="{!! asset('web/assets/images/about/about-06.png') !!}" alt="About Images">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-about-area about-style-1 bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row gy-5 align-items-center row--30">
                <div class="col-lg-7">
                    <div class="content radius-6 overflow-hidden">
                        <div class="plyr__video-embed rbtplayer">
                            <iframe class="radius-6 overflow-hidden" src="https://www.youtube.com/embed/qKzhrXqT6oE" allowfullscreen="" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="inner">
                        <div class="section-title text-start">
                            <h2 class="title">What is Histudy For You?.</h2>
                            <p class="description mt--20"><strong>Histudy educational platform</strong> ipsum dolor sit amet consectetur adipisicing elit. Nam inventore praesentium alias incidunt! Veritatis, necessitatibus fuga dolore tenetur, beatae suscipit fugit est ea perspiciatis quo provident nisi dolor similique architecto nihil.</p>
                            <div class="read-more-btn mt--40">
                                <a class="rbt-btn btn-gradient rbt-switch-btn rbt-switch-y" href="#">
                                    <span data-text="About Histudy">About Histudy</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
