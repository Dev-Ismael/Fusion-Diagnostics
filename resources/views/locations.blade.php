@extends('layouts.app')

@section('content')




    <!-- Page Title -->
    <section class="page-title centred mt-7" style="background-image: url(/front/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="title">
                    <h1> Fusion Location</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route("home") }}">Home</a></li>
                    <li>Locations</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->



    <section class="sidebar-page-container sec-pad-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">

                    <!----------------- If No Locations ------------------>
                    @if ($locations->isEmpty())

                        @if( preg_match('(search)', url()->current()) == 1 )  <!---- in search Page ---->
                            <h4 class="title"> <i class="fa-solid fa-magnifying-glass" style="color:#0d3050"></i> '0' Results Found "{{ Request::input('search') }}" </h4>
                        @else
                            <h4>  No Locations Found </h4>
                        @endif

                    <!----------------- If Exist Locations ------------------>
                    @else

                        <div class="blog-grid-content">
                            <div class="row clearfix">
                                @foreach ( $locations as $location )
                                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                        <div class="news-block-one">
                                            <div class="inner-box">
                                                <figure class="image-box">
                                                    <iframe src="{{ $location->location_map }}" width="100%" height="260px"></iframe>
                                                </figure>
                                                <div class="lower-content">
                                                    <h4><a href="{{ route('location.show', $location->slug) }}" >{{ $location->title }}</a></h4>
                                                    <div class="btn-box"><a href="{{ route('location.show', $location->slug) }}" class="theme-btn-two">More..</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="pagination-wrapper">
                                <ul class="pagination clearfix">
                                    {{ $locations->links('pagination::bootstrap-4') }}
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="blog-sidebar">
                        <div class="sidebar-widget search-widget">
                            <div class="widget-title">
                                <h3>Search</h3>
                            </div>
                            <form action="{{ route("location.search") }}" method="POST"  class="search-form">
                                @csrf
                                <div class="form-group">
                                    <input type="search" name="search" placeholder="Search Here..."  autocomplete="nope" required/>
                                    <button type="submit"><i class="icon-1"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>All Locations</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    @foreach ( $all_locations as $location )
                                        <li><a href="{{ route('location.show', $location->slug) }}"> {{ $location->title }} </a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
