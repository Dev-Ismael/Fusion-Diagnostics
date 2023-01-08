@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <section class="page-title centred" style="background-image: url(/front/images/background/contact-header.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="title">
                    <h1>Contact Us</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- google-map-section -->
    <section class="google-map-section">
        <div class="info-section">
            <div class="auto-container">
                <div class="info-inner clearfix">
                    <div class="single-info-box">
                        <div class="icon-box"><i class="icon-23"></i></div>
                        <h4>Office Location</h4>
                        <p><a href="{{ $settings->location }}"> {{ $settings->address }} </a> </p>
                    </div>
                    <div class="single-info-box">
                        <div class="icon-box"><i class="icon-59"></i></div>
                        <h4>Phone Number</h4>
                        <p>
                            <a href="tel:{{ $settings->phone_formatted }}">{{ $settings->phone }}</a>
                            <br/>
                            <a href="tel:+19739988189">973-998-8189</a>
                        </p>
                    </div>
                    <div class="single-info-box">
                        <div class="icon-box"><i class="icon-60"></i></div>
                        <h4>Email Address</h4>
                        <p>
                            <a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a>
                            <br/>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- google-map-section end -->


    <!-- contact-style-two -->
    <section class="contact-style-two sec-pad">
        <div class="auto-container">
            <div class="sec-title centred">
                <h6>Research Topic</h6>
                <h2>Have Any Questins Contact With Us</h2>
            </div>
            <div class="form-inner">
                <form action="{{ route("contact.send") }}" method="POST" id="contact-form" class="default-form">
                    <div class="row clearfix">
                        @csrf
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="name" placeholder="Full Name..." class="@error('name') is-invalid @enderror" value="{{ old("name") }}" />
                            @error('name')
                                <div class="invalid-feedback d-block">{{ $message }}.</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="email" name="email" placeholder="Email Address..." class="@error('email') is-invalid @enderror" value="{{ old("email") }}" />
                            @error('email')
                                <div class="invalid-feedback d-block">{{ $message }}.</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="phone" placeholder="Phone Number..." class="@error('phone') is-invalid @enderror" value="{{ old("phone") }}" />
                            @error('phone')
                                <div class="invalid-feedback d-block">{{ $message }}.</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="subject" placeholder="Subject..." class="@error('subject') is-invalid @enderror" value="{{ old("subject") }}" />
                            @error('subject')
                                <div class="invalid-feedback d-block">{{ $message }}.</div>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <textarea name="body" placeholder="Your Message" class="@error('body') is-invalid @enderror" >{{ old("body") }}</textarea>
                            @error('body')
                                <div class="invalid-feedback d-block">{{ $message }}.</div>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                            <button class="theme-btn-one" type="submit" name="submit-form"> Send Message </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- contact-style-two end -->



@endsection
