@extends('layouts.app')

@section('content')


    <!-- banner-section -->
    <section class="banner-section style-four" style="background-image: url(front/images/shape/shape-33.png);">
        <div class="pattern-layer" style="background-image: url(front/images/shape/shape-34.png);"></div>
        <div class="anim-icon">
            <div class="anim-icon-1" style="background-image: url(front/images/shape/shape-36.png);"></div>
            <div class="anim-icon-2" style="background-image: url(front/images/shape/shape-37.png);"></div>
            <div class="anim-icon-3 rotate-me" style="background-image: url(front/images/shape/shape-38.png);"></div>
            <div class="anim-icon-4" style="background-image: url(front/images/shape/shape-39.png);"></div>
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
                                        style="background-image: url(front/images/shape/shape-35.png);"></div>
                                    <div class="shape-2 rotate-me"
                                        style="background-image: url(front/images/shape/shape-35.png);"></div>
                                </div>
                                <figure class="image"><img src="{{ asset('front/images/banner/banner-1.png') }}"
                                        alt="">
                                </figure>
                                <div class="text">
                                    <h3>15</h3>
                                    <h4>Location Branchs</h4>
                                </div>
                                <div class="admin-box">
                                    <figure class="admin-thumb"><img src="{{ asset('front/images/banner/admin-1.png') }}"
                                            alt="">
                                    </figure>
                                    <h4>600+ Different Tests</h4>
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
                                        style="background-image: url(front/images/shape/shape-35.png);"></div>
                                    <div class="shape-2 rotate-me"
                                        style="background-image: url(front/images/shape/shape-35.png);"></div>
                                </div>
                                <figure class="image"><img src="{{ asset('front/images/banner/banner-2.png') }}"
                                        alt="">
                                </figure>
                                <div class="text">
                                    <h3>15</h3>
                                    <h4>Location Branchs</h4>
                                </div>
                                <div class="admin-box">
                                    <figure class="admin-thumb"><img src="{{ asset('front/images/banner/admin-1.png') }}"
                                            alt="">
                                    </figure>
                                    <h4>600+ Different Tests</h4>
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
                                        style="background-image: url(front/images/shape/shape-35.png);"></div>
                                    <div class="shape-2 rotate-me"
                                        style="background-image: url(front/images/shape/shape-35.png);"></div>
                                </div>
                                <figure class="image"><img src="{{ asset('front/images/banner/banner-3.png') }}"
                                        alt="">
                                </figure>
                                <div class="text">
                                    <h3>15</h3>
                                    <h4>Location Branchs</h4>
                                </div>
                                <div class="admin-box">
                                    <figure class="admin-thumb"><img src="{{ asset('front/images/banner/admin-1.png') }}"
                                            alt="">
                                    </figure>
                                    <h4>600+ Different Tests</h4>
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
                                        style="background-image: url(front/images/shape/shape-35.png);"></div>
                                    <div class="shape-2 rotate-me"
                                        style="background-image: url(front/images/shape/shape-35.png);"></div>
                                </div>
                                <figure class="image"><img src="{{ asset('front/images/banner/banner-4.png') }}"
                                        alt="">
                                </figure>
                                <div class="text">
                                    <h3>15</h3>
                                    <h4>Location Branchs</h4>
                                </div>
                                <div class="admin-box">
                                    <figure class="admin-thumb"><img src="{{ asset('front/images/banner/admin-1.png') }}"
                                            alt="">
                                    </figure>
                                    <h4>600+ Different Tests</h4>
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


        <!-- about-style-four -->
        <section class="about-style-four sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_5">
                            <div class="image-box">
                                <div class="shape">
                                    <div class="shape-3" style="background-image: url(front/images/shape/shape-40.png);"></div>
                                    <div class="shape-4" style="background-image: url(front/images/shape/shape-40.png);"></div>
                                    <div class="shape-5" style="background-image: url(front/images/shape/shape-41.png);"></div>
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




    <!-- Service-section -->
    <section class="sec-pad-2 bg-color-1">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="inner-box">
                            <div class="icon-box">
                                <img src="{{ asset("front/images/icons/icon-11.png") }}" alt="icon" width="80">
                            </div>
                            <h4><a href="index.html">Clinical <br>Microbiology Tests</a></h4>
                            <p>Excepteur sint ocecat pro dent sunt in culpa.</p>
                            <div class="btn-box"><a href="index.html" class="theme-btn-two">Read More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                        <div class="inner-box">
                            <div class="icon-box">
                                <img src="{{ asset("front/images/icons/icon-10.png") }}" alt="icon" width="80">
                            </div>
                            <h4><a href="index.html">Testing for <br>Traces &amp; Impurities</a></h4>
                            <p>Excepteur sint ocecat pro dent sunt in culpa.</p>
                            <div class="btn-box"><a href="index.html" class="theme-btn-two">Read More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="400ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                        <div class="inner-box">
                            <div class="icon-box">
                                <img src="{{ asset("front/images/icons/icon-08.png") }}" alt="icon" width="80">
                            </div>
                            <h4><a href="index.html">Clinical <br>Biochemistry Tests</a></h4>
                            <p>Excepteur sint ocecat pro dent sunt in culpa.</p>
                            <div class="btn-box"><a href="index.html" class="theme-btn-two">Read More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                        <div class="inner-box">
                            <div class="icon-box">
                                <img src="{{ asset("front/images/icons/icon-11.png") }}" alt="icon" width="80">
                            </div>
                            <h4><a href="index.html">Clinical <br>Histopatology Tests</a></h4>
                            <p>Excepteur sint ocecat pro dent sunt in culpa.</p>
                            <div class="btn-box"><a href="index.html" class="theme-btn-two">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service-section -->



    <!-- video-style-two -->
    <section class="video-style-two centred pb-5 pt-5 mt-5">
        <div class="auto-container">
            <div class="inner-box" style="background-image: url(front/images/background/video-2.jpg);">
                <div class="content-box">
                    <div class="video-btn">
                        <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image"
                            data-caption=""><i class="icon-4"></i></a>
                    </div>
                    <h3>Lets Watch Our Recent Work</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- video-style-two end -->



    <!-- testimonial-section -->
    <section class="testimonial-section sec-pad-2"
        style="background-image: url(front/images/background/testimonial-1.jpg);">
        <div class="auto-container">
            <div class="inner-content">
                <div class="sec-title">
                    <h6>Testimonials</h6>
                    <h2>What Our Patient Say?</h2>
                </div>
                <div class="single-item-carousel owl-carousel owl-theme owl-dots-none owl-loaded owl-drag">



                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-2240px, 0px, 0px); transition: all 0.5s ease 0s; width: 3920px;">
                            <div class="owl-item cloned" style="width: 530px; margin-right: 30px;">
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
                                            <p>Lorem ipsum dolor amet consectet adipiscing sed do eiusmod tempor incididunt
                                                labore dolor magna aliqua ipsum suspen disse ultrices gravida Risus</p>
                                        </div>
                                        <div class="author-box">
                                            <figure class="author-thumb"><img
                                                    src="{{ asset('front/images/resource/testimonial-1.png') }}"
                                                    alt=""></figure>
                                            <h4>Robert Downey</h4>
                                            <span class="designation">New York</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 530px; margin-right: 30px;">
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
                                            <p>Lorem ipsum dolor amet consectet adipiscing sed do eiusmod tempor incididunt
                                                labore dolor magna aliqua ipsum suspen disse ultrices gravida Risus</p>
                                        </div>
                                        <div class="author-box">
                                            <figure class="author-thumb"><img
                                                    src="{{ asset('front/images/resource/testimonial-1.png') }}"
                                                    alt=""></figure>
                                            <h4>Robert Downey</h4>
                                            <span class="designation">New York</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 530px; margin-right: 30px;">
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
                                            <p>Lorem ipsum dolor amet consectet adipiscing sed do eiusmod tempor incididunt
                                                labore dolor magna aliqua ipsum suspen disse ultrices gravida Risus</p>
                                        </div>
                                        <div class="author-box">
                                            <figure class="author-thumb"><img
                                                    src="{{ asset('front/images/resource/testimonial-1.png') }}"
                                                    alt=""></figure>
                                            <h4>Robert Downey</h4>
                                            <span class="designation">New York</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 530px; margin-right: 30px;">
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
                                            <p>Lorem ipsum dolor amet consectet adipiscing sed do eiusmod tempor incididunt
                                                labore dolor magna aliqua ipsum suspen disse ultrices gravida Risus</p>
                                        </div>
                                        <div class="author-box">
                                            <figure class="author-thumb"><img
                                                    src="{{ asset('front/images/resource/testimonial-1.png') }}"
                                                    alt=""></figure>
                                            <h4>Robert Downey</h4>
                                            <span class="designation">New York</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 530px; margin-right: 30px;">
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
                                            <p>Lorem ipsum dolor amet consectet adipiscing sed do eiusmod tempor incididunt
                                                labore dolor magna aliqua ipsum suspen disse ultrices gravida Risus</p>
                                        </div>
                                        <div class="author-box">
                                            <figure class="author-thumb"><img
                                                    src="{{ asset('front/images/resource/testimonial-1.png') }}"
                                                    alt=""></figure>
                                            <h4>Robert Downey</h4>
                                            <span class="designation">New York</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 530px; margin-right: 30px;">
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
                                            <p>Lorem ipsum dolor amet consectet adipiscing sed do eiusmod tempor incididunt
                                                labore dolor magna aliqua ipsum suspen disse ultrices gravida Risus</p>
                                        </div>
                                        <div class="author-box">
                                            <figure class="author-thumb"><img
                                                    src="{{ asset('front/images/resource/testimonial-1.png') }}"
                                                    alt=""></figure>
                                            <h4>Robert Downey</h4>
                                            <span class="designation">New York</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 530px; margin-right: 30px;">
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
                                            <p>Lorem ipsum dolor amet consectet adipiscing sed do eiusmod tempor incididunt
                                                labore dolor magna aliqua ipsum suspen disse ultrices gravida Risus</p>
                                        </div>
                                        <div class="author-box">
                                            <figure class="author-thumb"><img
                                                    src="{{ asset('front/images/resource/testimonial-1.png') }}"
                                                    alt=""></figure>
                                            <h4>Robert Downey</h4>
                                            <span class="designation">New York</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                                class="icon-19"></span></button><button type="button" role="presentation"
                            class="owl-next"><span class="icon-18"></span></button></div>
                    <div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button
                            role="button" class="owl-dot"><span></span></button><button role="button"
                            class="owl-dot active"><span></span></button></div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-section end -->



@endsection
