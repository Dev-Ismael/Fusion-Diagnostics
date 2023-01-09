@extends('layouts.app')

@section('content')


    <!-- banner-section -->
    <section class="banner-section style-four" style="background-image: url(/front/images/shape/shape-33.png);">
        <div class="pattern-layer" style="background-image: url(/front/images/shape/shape-34.png);"></div>
        <div class="anim-icon">
            <div class="anim-icon-1" style="background-image: url(/front/images/shape/shape-36.png);"></div>
            <div class="anim-icon-2" style="background-image: url(/front/images/shape/shape-37.png);"></div>
            <div class="anim-icon-3 rotate-me" style="background-image: url(/front/images/shape/shape-38.png);"></div>
            <div class="anim-icon-4" style="background-image: url(/front/images/shape/shape-39.png);"></div>
        </div>
        <div class="banner-carousel owl-theme owl-carousel owl-dots-none">

            <div class="slide-item">
                <div class="auto-container">
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <h2>99% of tests performed in-house</h2>
                                <p>See your healthcare provider regularly. Home use tests are intended to help you with your health care, but they should not replace periodic visits to your doctor. Most tests are best evaluated together with your medical history, a physical exam, and another testing.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <div class="shape">
                                    <div class="shape-1 rotate-me"
                                        style="background-image: url(/front/images/shape/shape-35.png);"></div>
                                    <div class="shape-2 rotate-me"
                                        style="background-image: url(/front/images/shape/shape-35.png);"></div>
                                </div>
                                <figure class="image"><img src="{{ asset('front/images/banner/banner-1.png') }}"
                                        alt="">
                                </figure>
                                <div class="text">
                                    <h3> {{ $locations_count }} </h3>
                                    <h4>Location Branchs</h4>
                                </div>
                                <div class="admin-box">
                                    <figure class="admin-thumb"><img src="{{ asset('front/images/banner/admin-1.png') }}"
                                            alt="">
                                    </figure>
                                    <h4>{{ $tests_count }}+ Different Tests</h4>
                                    <p>Experienced professionals</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="auto-container">
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <h2>Most Insurance Policies Accepted</h2>
                                <p>The benefits of being in-network to give you access to advanced testing options and trusted results, Quest partners with some of the biggest names in health insurance.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <div class="shape">
                                    <div class="shape-1 rotate-me"
                                        style="background-image: url(/front/images/shape/shape-35.png);"></div>
                                    <div class="shape-2 rotate-me"
                                        style="background-image: url(/front/images/shape/shape-35.png);"></div>
                                </div>
                                <figure class="image"><img src="{{ asset('front/images/banner/banner-2.png') }}"
                                        alt="">
                                </figure>
                                <div class="text">
                                    <h3> {{ $locations_count }} </h3>
                                    <h4>Location Branchs</h4>
                                </div>
                                <div class="admin-box">
                                    <figure class="admin-thumb"><img src="{{ asset('front/images/banner/admin-1.png') }}"
                                            alt="">
                                    </figure>
                                    <h4>{{ $tests_count }}+ Different Tests</h4>
                                    <p>Experienced professionals</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="auto-container">
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <h2>Patients without health insurance will receive
                                    discounted .</h2>
                                {{-- <p>Excepteur sint occaecat cupidatat non proident sunt <br />culpa qui officia deserunt
                                    mollit.</p> --}}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <div class="shape">
                                    <div class="shape-1 rotate-me"
                                        style="background-image: url(/front/images/shape/shape-35.png);"></div>
                                    <div class="shape-2 rotate-me"
                                        style="background-image: url(/front/images/shape/shape-35.png);"></div>
                                </div>
                                <figure class="image"><img src="{{ asset('front/images/banner/banner-3.png') }}"
                                        alt="">
                                </figure>
                                <div class="text">
                                    <h3> {{ $locations_count }} </h3>
                                    <h4>Location Branchs</h4>
                                </div>
                                <div class="admin-box">
                                    <figure class="admin-thumb"><img src="{{ asset('front/images/banner/admin-1.png') }}"
                                            alt="">
                                    </figure>
                                    <h4>{{ $tests_count }}+ Different Tests</h4>
                                    <p>Experienced professionals</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="auto-container">
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <h2>COVID-19 vaccines</h2>
                                <p>Vaccines save millions of lives each year. The development of safe and effective COVID-19 vaccines is crucial in helping us get back to doing more of the things we enjoy with the people we love.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <div class="shape">
                                    <div class="shape-1 rotate-me"
                                        style="background-image: url(/front/images/shape/shape-35.png);"></div>
                                    <div class="shape-2 rotate-me"
                                        style="background-image: url(/front/images/shape/shape-35.png);"></div>
                                </div>
                                <figure class="image"><img src="{{ asset('front/images/banner/banner-4.png') }}"
                                        alt="">
                                </figure>
                                <div class="text">
                                    <h3> {{ $locations_count }} </h3>
                                    <h4>Location Branchs</h4>
                                </div>
                                <div class="admin-box">
                                    <figure class="admin-thumb"><img src="{{ asset('front/images/banner/admin-1.png') }}"
                                            alt="">
                                    </figure>
                                    <h4>{{ $tests_count }}+ Different Tests</h4>
                                    <p>Experienced professionals</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- banner-section end -->


    <!-- feature-section strat -->
    <section class="feature-section alternat-2 centred">
        <div class="auto-container">
            <div class="inner-content">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-31"></i></div>
                                <h4><a href="index-2.html">Laboratory Services</a></h4>
                                <p>Excepteur sint ocecat pro dent sunt in culpa qui officia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-32"></i></div>
                                <h4><a href="index-2.html">Professionals Area</a></h4>
                                <p>Excepteur sint ocecat pro dent sunt in culpa qui officia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-33"></i></div>
                                <h4><a href="{{ route("opening_hours") }}">Opening Hours</a></h4>
                                <p>Excepteur sint ocecat pro dent sunt in culpa qui officia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature-section end -->

    <!-- about-style-four -->
    <section class="about-style-four sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_5">
                        <div class="image-box">
                            <div class="shape">
                                <div class="shape-3" style="background-image: url(/front/images/shape/shape-40.png);"></div>
                                <div class="shape-4" style="background-image: url(/front/images/shape/shape-40.png);"></div>
                                <div class="shape-5" style="background-image: url(/front/images/shape/shape-41.png);"></div>
                            </div>
                            <figure class="image image-1 paroller"><img src="front/images/resource/about-1.jpg" alt="about-us-image"></figure>
                            <figure class="image image-2 paroller-2"><img src="front/images/resource/about-2.jpg" style="width: 240px !important" alt="about-us-image"></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_1">
                        <div class="content-box ml-70">
                            <div class="sec-title">
                                <h6>About Research</h6>
                                <h2>Reliable Agroscience & Soil Analysis Research.</h2>
                            </div>
                            <div class="bold-text">
                                <p>Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id est laborum. sed  spiciatis unde omnis natus error Inventore.</p>
                            </div>
                            <div class="text">
                                <p>quasi architebeat vitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptassit.</p>
                            </div>
                            <div class="singl-block centred">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="icon-36"></i></div>
                                            <h4>Medical Research</h4>
                                            <p>Excepteur sint ocecat pro dent sunt in culpa qui.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="icon-37"></i></div>
                                            <h4>Blood Resources</h4>
                                            <p>Excepteur sint ocecat pro dent sunt in culpa qui.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-four end -->


    <!-- Services-section -->
    @if ( count( $services ) > 0 )
        <section class="service-section section-padding">
            <div class="pattern-layer">
                <div class="pattern-1 wow zoomIn animated" data-wow-delay="00ms" data-wow-duration="1500ms"
                    style="background-image: url(/front/images/shape/shape-3.png);"></div>
                <div class="pattern-2  wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms"
                    style="background-image: url(/front/images/shape/shape-4.png);"></div>
            </div>
            <div class="sec-title centred">
                <h6>Laboratory Services</h6>
                <h2>Reliable & High-Quality <br />Laboratory Service</h2>
            </div>
            <div class="auto-container">
                <div class="four-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                    @foreach ( $services as $service )
                        <div class="service-block-one mb-5">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <img src="{{ asset("storage/images/services/".$service->icon) }}" alt="icon" width="80">
                                </div>
                                <h4 class="service-title"><a href="{{ route("service.show", $service->slug ) }}"> {{ $service->title }} </a></h4>
                                <p class="service-summary"> {{ $service->summary }} </p>
                                <div class="btn-box"><a href="{{ route("service.show", $service->slug ) }}" class="theme-btn-two">Read More</a></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- service-section end -->
    @endif


    <!-- video-section -->
    <section class="video-style-two centred">
        <div class="auto-container">
            <div class="inner-box" style="background-image: url(front/images/background/video-2.jpg);">
                <div class="content-box">
                    <div class="video-btn">
                        <a href="https://www.youtube.com/watch?v=vC-LmWFogEE" class="lightbox-image" data-caption=""><i class="icon-4"></i></a>
                    </div>
                    <h3>Lets Watch Our Recent Work</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- video-section -->



    <!-- testimonial-section -->
    @if ( count($testimonials) > 0 )
        <section class="testimonial-section sec-pad-2"
            style="background-image: url(/front/images/background/testimonial-1.jpg);">
            <div class="auto-container">
                <div class="inner-content">
                    <div class="sec-title">
                        <h6>Testimonials</h6>
                        <h2>What Our Patient Say?</h2>
                    </div>
                    <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">

                        @foreach ( $testimonials as $testimonial )
                            <div class="content_block_3">
                                <div class="content-box">
                                    <ul class="rating clearfix">
                                        <li><i class="icon-20"></i></li>
                                        <li><i class="icon-20"></i></li>
                                        <li><i class="icon-20"></i></li>
                                        <li><i class="icon-20"></i></li>
                                        <li><i class="icon-20"></i></li>
                                    </ul>
                                    <div class="text">
                                        <p> {{ $testimonial->content }} </p>
                                    </div>
                                    <div class="author-box">
                                        <figure class="author-thumb"><img src="{{ asset("storage/images/testimonials/".$testimonial->img) }}"
                                                alt=""></figure>
                                        <h4> {{ $testimonial->name }} </h4>
                                        {{-- <span class="designation">New York</span> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- testimonial-section end -->


@endsection
