@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row w-100 gap-5" style="max-width: 900px;">

        <div class="col-lg-5 col-md-6 d-flex flex-column justify-content-center text-center">
            <h1 class="mb-4 display-4 fw-bold">
                Welcome <span class="text-warning">back!</span>
            </h1>
            <p class="text-muted">
                Log in to continue and access all the features.
            </p>
        </div>

        <div class="col-lg-5 col-md-6">
            <div class="border-0 p-4 rounded-4 bg-light" style="backdrop-filter: blur(10px);">
                <div class="card-body">
                    <h4 class="mb-3 text-center fw-bold">Sign up</h4>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Your Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">Your Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            @if (Route::has('password.request'))
                                <a class="text-decoration-none text-warning" href="{{ route('password.request') }}">
                                    Forgot your password?
                                </a>
                            @endif
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-warning w-100 fw-semibold shadow-sm">
                                Log In
                            </button>
                        </div>

                        <p class="text-center text-muted">
                        Have already an account?
                            <a href="{{ route('register') }}" class="text-warning text-decoration-none fw-semibold">Register</a>
                        </p>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
