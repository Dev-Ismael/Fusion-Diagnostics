@extends('layouts.app')

@section('content')



    <!-- Page Title -->
    <section class="page-title centred mt-7" style="background-image: url(/front/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="title">
                    <h1>Fusion Locations</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Locations</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->

    <section class="chooseus-section sec-pad-2">
        <div class="auto-container">
            <div class="row clearfix h-100">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_6">
                        <div class="content-box">
                            <div class="sec-title">
                                {{-- <h6>Why Choose</h6> --}}
                                <h2>We'll Ensure You Always Get The Best Results.</h2>
                            </div>
                            {{-- <div class="text">
                                <p>Quasi architebeat vitae dicta sunt explicabo nemo enim ipsam volup tatem quia voluptassit aspernatur aut odit fugit sed quia consequuntur magni dolores eos.</p>
                            </div> --}}
                            <div class="inner-box">
                                <div class="single-item">
                                    <div class="icon-box"><i class="fa-solid fa-location-dot"></i></div>
                                    <h4>Location</h4>
                                    <p>{{ $location->title }}.</p>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="fa-solid fa-street-view"></i></div>
                                    <h4>Street View</h4>
                                    <p>
                                        <div class="btn-box"><a href="{{ $location->street_view }}" target="_blank" class="theme-btn-two"> <i
                                            class="fa-solid fa-paper-plane"></i> &nbsp; Explore </a>
                                        </div>
                                    </p>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="fa-solid fa-clock"></i></div>
                                    <h4> Working Hours</h4>
                                    <p>{{ $location->working_hours }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column justify-content-center align-self-center">
                    <div class="image_block_9">
                        <div class="image-box">
                            <div class="shape">
                                <div class="shape-1 rotate-me" style="background-image: url(assets/images/shape/shape-58.png);"></div>
                                <div class="shape-2 rotate-me" style="background-image: url(assets/images/shape/shape-58.png);"></div>
                                <div class="shape-3"></div>
                            </div>
                            <iframe src="{{ $location->location_map }}" width="100%" height="500"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
