@extends('layouts.app')

@section('content')

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row w-100 gap-5" style="max-width: 1000px;">
        
        
                <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-center me-5">
                    <h1 class="my-5 display-3 fw-bold ls-tight">
                        Welcome<br />
                        <span class="text-primary">back!</span>
                      </h1>
                      <p style="color: hsl(217, 10%, 50.8%)">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eveniet, itaque accusantium odio, soluta, corrupti aliquam
                        quibusdam tempora at cupiditate quis eum maiores libero
                        veritatis? Dicta facilis sint aliquid ipsum atque?
                      </p>

                </div>

                <div class="d-flex flex-grow-1 w-50 justify-content-center align-items-center">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="email" class="form-label">{{ __('Correo electronico') }}</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror focus-ring input-blur" name="email" 
                                    value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <div class="row">
                                <label for="password" class="form-label w-25">{{ __('Contraseña') }}</label>
                                @if (Route::has('password.request'))
                                <div class="text-end w-75">
                                    <a class="text-decoration-none" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu contraseña?') }}
                                    </a>
                                </div>
                                @endif
                            </div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror focus-ring input-blur" name="password" 
                                    required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="row text-nowrap mt-3">
                                <div class="row w-50">
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Recuerdame') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 w-100">
                            <button type="submit" class="btn btn-primary w-100">{{ __('Iniciar Sesión') }}</button>
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="mx-2 my-2">Ó</span>
                            </div>
                            <button class="btn btn-outline-secondary text-dark w-100 mb-4">
                                <img src="https://pluspng.com/img-png/google-logo-png-open-2000.png" alt="Google logo" style="width: 20px; margin-right: 8px;">
                                Iniciar Sesión con Google
                            </button>
                        </div>
                        <p class="text-center">Aun no tienes una cuenta? <a href="{{ route('register') }}" class="text-decoration-none">Regístrate</a></p>

                    </form>

                </div>
        </div>
    </div>
</div>
@endsection
