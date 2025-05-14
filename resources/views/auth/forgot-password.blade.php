@extends('frontend.layouts.master')

@section('content')
    <!-- forgot password -->
    <section class="wrap__section bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-white border-0 py-3">
                            <h4 class="card-title mb-0 text-center text-primary">{{ __('frontend.Forget Password') }}</h4>
                        </div>
                        <div class="card-body px-4 py-4">
                            @if (session()->has('status'))
                                <div class="alert alert-success rounded-pill text-center small py-2 mb-4">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <p class="text-muted small text-center mb-4">
                                {{ __('frontend.Enter your email to receive a password reset link') }}
                            </p>

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <!-- Email Field -->
                                <div class="form-group mb-4">
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

                                <!-- Submit Button -->
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill py-2 fw-bold">
                                        {{ __('frontend.Email Password Reset Link') }}
                                    </button>
                                </div>

                                <!-- Back to Login Link -->
                                <div class="text-center mt-4 pt-3 border-top">
                                    <p class="small text-muted mb-0">{{ __('frontend.Remembered your password?') }}
                                        <a href="{{ route('login') }}" class="text-primary fw-semibold text-decoration-none">
                                            {{ __('frontend.Login') }}
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
    <!-- end forgot password -->
@endsection
