@extends('frontend.layouts.master')

@section('content')
    <!-- login -->
    <section class="wrap__section bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-white border-0 py-3">
                            <h4 class="card-title mb-0 text-center text-primary">{{ __('frontend.Sign in') }}</h4>
                        </div>
                        <div class="card-body px-4 py-4">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="email" class="form-label small text-muted">{{ __('frontend.Email') }}</label>
                                    <input class="form-control form-control-lg rounded-pill @error('email') is-invalid @enderror"
                                           placeholder="your@email.com"
                                           type="email"
                                           name="email"
                                           id="email"
                                           required
                                           autofocus>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password" class="form-label small text-muted">{{ __('frontend.Password') }}</label>
                                    <input class="form-control form-control-lg rounded-pill @error('password') is-invalid @enderror"
                                           placeholder="••••••••"
                                           type="password"
                                           name="password"
                                           id="password"
                                           required>
                                </div>

                                <div class="form-group mb-4 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                        <label class="form-check-label small" for="remember">
                                            {{ __('frontend.Remember me') }}
                                        </label>
                                    </div>
                                    <a href="{{ route('password.request') }}" class="small text-decoration-none">
                                        {{ __('frontend.Forgot password?') }}
                                    </a>
                                </div>

                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill py-2 fw-bold">
                                        {{ __('frontend.Login') }}
                                    </button>
                                </div>

                                <div class="text-center mt-4 pt-3 border-top">
                                    <p class="small text-muted mb-0">{{ __('frontend.Dont have account?') }}
                                        <a href="{{ route('register') }}" class="text-primary fw-semibold text-decoration-none">
                                            {{ __('frontend.Sign up') }}
                                        </a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end login -->
@endsection
