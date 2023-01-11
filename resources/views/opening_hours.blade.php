@extends('layouts.app')

@section('content')







    <!-- Page Title -->
    <section class="page-title centred" style="background-image: url(/front/images/background/working-hours-header.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="title">
                    <h1> <i class="fa-solid fa-clock"></i> Working Hours</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route("home") }}">Home</a></li>
                    <li>Working Hours</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->



    <!-- books-page-section -->
    <section class="books-page-section sec-pad">
        <div class="auto-container">
            <div class="title-inner clearfix">
                <div class="sec-title pull-left">
                    <h6>Latest Books</h6>
                    <h2>Check Our Working <br /> Hours in Alltime</h2>
                </div>
                <div class="text pull-right">
                    <p>Quasi architebeat vitae dicta sunt explicabo nemo enim ipsam volup tatem quia voluptassit aspernatur aut odit fugit sed quia consequuntur magni dolores eos.</p>
                </div>
            </div>
            <div class="inner-content">
                @foreach ( $locations as $location )
                    <div class="inner-box">
                        <div class="arrow" style="background-image: url(front/images/icons/decor-3.png);"></div>
                        <div class="single-item">
                            <h4><a href="{{ route("location.show", $location->slug) }}">
                                <i class="fa-solid fa-map-location-dot"></i>
                                &nbsp;
                                    {{ $location->title }}
                                </a>
                            </h4>
                            <p>
                                <i class="fa-solid fa-clock"></i>
                                &nbsp;
                                {{ $location->working_hours }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- books-page-section end -->




@endsection
