@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<section class="vh-100 bg-image" style="background-font: white">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-70">
            <div class="row d-flex justify-content-center align-items-center h-50">
                <div class="col-12 col-md-9 col-lg-5 col-xl-4">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-4">
                            <h2 class=" text-center mb-4 primary-color">{{ __('Create an account') }}</h2>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name -->
                                <div class="form-outline mb-3">
                                    <input type="text" id="name" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                                    <label class="form-label" for="name">{{ __('Your Name') }}</label>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="form-outline mb-3">
                                    <input type="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />
                                    <label class="form-label" for="email">{{ __('Your Email') }}</label>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <!-- Password -->
                                <div class="form-outline mb-3">
                                    <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />
                                    <label class="form-label" for="password">{{ __('Password') }}</label>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <!-- Confirm Password -->
                                <div class="form-outline mb-3">
                                    <input type="password" id="password-confirm" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password" />
                                    <label class="form-label" for="password-confirm">{{ __('Repeat your password') }}</label>
                                </div>

                                <!-- Accept terms -->
                                <div class="form-check d-flex justify-content-center mb-4">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                                    <label class="form-check-label" for="form2Example3g">
                                        {{ __('I agree all statements in') }} <a href="#!" class="text-body"><u>{{ __('Terms of service') }}</u></a>
                                    </label>
                                </div>

                                <!-- Register button -->
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4-body btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>

                                <!-- Login link -->
                                <p class="text-center text-muted mt-4 mb-0">{{ __('Have already an account?') }} <a href="{{ route('login') }}" class="fw-bold text-body"><u>{{ __('Login here') }}</u></a></p>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
