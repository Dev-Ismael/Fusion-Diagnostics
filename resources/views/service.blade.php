@extends('layouts.app')

@section('content')

    <section class="event-details sec-pad-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                    <div class="event-details-content">
                        <div class="content-one">
                            <figure class="image"><img src="{{ asset('storage/images/services/'.$service->img) }}" alt="service-img" class="img-fluid rounded"></figure>
                            <div class="text">
                                <h3>{{ $service->title }}</h3>
                                <p>
                                    {!! $service->content !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
