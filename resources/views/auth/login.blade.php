@extends('layouts.app')

@section('content')

    <section class="error-section centred">
        <div class="auto-container">
            <div class="inner-box">
                <h2 class="mt-5">Login Page</h2>
                <h4>create your session to control your site</h4>

                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <form method="POST" action="{{ route('login') }}">

                            @csrf

                            <div class="form-group text-left">
                                <label for="email"> <i class="fa-solid fa-envelope"></i> Email  </label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Type Your Email address..." required autocomplete="off" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group  text-left">
                                <label for="password"> <i class="fa-solid fa-lock"></i> Password </label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Type Your password..." required autocomplete="new-password" >
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="theme-btn-one">Go To Home</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>





@endsection
