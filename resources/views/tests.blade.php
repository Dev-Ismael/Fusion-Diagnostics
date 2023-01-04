@extends('layouts.app')

@section('content')




    <!-- Page Title -->
    <section class="page-title centred mt-7" style="background-image: url(/front/images/background/page-title.jpg);">
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



    <section class="sidebar-page-container sec-pad-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="mb-5">
                        <!----------------- If No Locations ------------------>
                        <h4 class="title"> <i class="fa-solid fa-magnifying-glass" style="color:#0d3050"></i>
                            '{{ $tests->total() }}' Results Found "{{ Request::input('search') }}"
                        </h4>

                    </div>

                    <!----------------- If Exist Locations ------------------>
                    <div class="blog-grid-content">
                        <div class="row clearfix">
                            @foreach ( $tests as $test )
                                <div class="col-lg-12 col-md-12 col-sm-12 news-block">
                                    <div class="news-block-one">
                                        <div class="inner-box ">
                                            <h4 class="text-center"> <i class="fa-solid fa-tag"></i> {{ $test->title }} </h4>
                                            <p>
                                                <i class="fa-solid fa-hashtag"></i>
                                                <span class="font-weight-bold type"> Code: </span>
                                                <span>
                                                    @if ( $test->code === Null )
                                                        <i class="fa-solid fa-minus"></i>
                                                    @else
                                                        {{ $test->code }}
                                                    @endif
                                                </span>
                                            </p>
                                            <p>
                                                <i class="fa-solid fa-clock"></i>
                                                <span class="font-weight-bold type"> Turnaround Time: </span>
                                                <span>
                                                    @if ( $test->time === Null )
                                                        <i class="fa-solid fa-minus"></i>
                                                    @else
                                                        {{ $test->time }}
                                                    @endif
                                                </span>
                                            </p>
                                            <p>
                                                <i class="fa-solid fa-flask"></i>
                                                <span class="font-weight-bold type"> Component: </span>
                                                <span>
                                                    @if ( $test->components === Null )
                                                        <i class="fa-solid fa-minus"></i>
                                                    @else
                                                        {{ $test->components }}
                                                    @endif
                                                </span>
                                            </p>
                                            <p>
                                                <i class="fa-solid fa-vials"></i>
                                                <span class="font-weight-bold type"> Specimen: </span>
                                                <span>
                                                    @if ( $test->specimen === Null )
                                                        <i class="fa-solid fa-minus"></i>
                                                    @else
                                                        {{ $test->specimen }}
                                                    @endif
                                                </span>
                                            </p>
                                            <p>
                                                <i class="fa-brands fa-42-group"></i>
                                                <span class="font-weight-bold type"> Instructions: </span>
                                                <span>
                                                    @if ( $test->instructions === Null )
                                                        <i class="fa-solid fa-minus"></i>
                                                    @else
                                                        {{ $test->instructions }}
                                                    @endif
                                                </span>
                                            </p>
                                            <p>
                                                <i class="fa-solid fa-money-bill-wave"></i>
                                                <span class="font-weight-bold type"> Billing Codes: </span>
                                                <span>
                                                    @if ( $test->billing_codes === Null )
                                                        <i class="fa-solid fa-minus"></i>
                                                    @else
                                                        {{ $test->billing_codes }}
                                                    @endif
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="pagination-wrapper text-center">
                            <ul class="pagination clearfix">
                                {{ $tests->links('pagination::bootstrap-4') }}
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="blog-sidebar">
                        <div class="sidebar-widget search-widget">
                            <div class="widget-title">
                                <h3>Search</h3>
                            </div>
                            <form action="{{ route("test.search") }}" method="POST"  class="search-form">
                                @csrf
                                <div class="form-group">
                                    <input type="search" name="search" placeholder="Search Here..."  autocomplete="nope" required/>
                                    <button type="submit"><i class="icon-1"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>Other Useful Links</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li><a href="{{ route('home') }}"> Home Page </a></li>
                                    <li><a href="{{ route('about') }}"> About Fusion </a></li>
                                    <li><a href="{{ route('contact') }}"> Contact US </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
