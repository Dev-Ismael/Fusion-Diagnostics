@extends('layouts.app')

@section('content')




    <!-- Page Title -->
    <section class="page-title centred" style="background-image: url(/front/images/background/test-header.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="title">
                    <h1> Fusion Tests</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route("home") }}">Home</a></li>
                    <li>Tests</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- service-section start -->
    <section class="service-section section-padding">
        <div class="sec-title centred">
            <h6>Laboratory Services</h6>
            <h2>Reliable & High-Quality <br />Laboratory Service</h2>
        </div>
        <div class="auto-container">
            <div class="row">
                @foreach ( $services as $service )
                    <div class="col-md-3 service-block-one mb-5">
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



@endsection
