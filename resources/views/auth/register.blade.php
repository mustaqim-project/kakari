@extends('frontend.layouts.master')

@section('content')
    <!-- register -->
    <section class="wrap__section bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-white border-0 py-3">
                            <h4 class="card-title mb-0 text-center text-primary">{{ __('frontend.Register') }}</h4>
                        </div>
                        <div class="card-body px-4 py-4">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name Field -->
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label small text-muted">{{ __('frontend.Name') }}</label>
                                    <input class="form-control form-control-lg rounded-pill @error('name') is-invalid @enderror"
                                           placeholder="{{ __('frontend.Enter your name') }}"
                                           type="text"
                                           name="name"
                                           id="name"
                                           value="{{ old('name') }}"
                                           required
                                           autofocus>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Email Field -->
                                <div class="form-group mb-3">
                                    <label for="email" class="form-label small text-muted">{{ __('frontend.Email') }}</label>
                                    <input class="form-control form-control-lg rounded-pill @error('email') is-invalid @enderror"
                                           placeholder="your@email.com"
                                           type="email"
                                           name="email"
                                           id="email"
                                           value="{{ old('email') }}"
                                           required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Password Field -->
                                <div class="form-group mb-3">
                                    <label for="password" class="form-label small text-muted">{{ __('frontend.Password') }}</label>
                                    <input class="form-control form-control-lg rounded-pill @error('password') is-invalid @enderror"
                                           placeholder="••••••••"
                                           type="password"
                                           name="password"
                                           id="password"
                                           required>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="form-text text-muted">Minimum 8 characters</small>
                                </div>

                                <!-- Confirm Password Field -->
                                <div class="form-group mb-4">
                                    <label for="password_confirmation" class="form-label small text-muted">{{ __('frontend.Confirm Password') }}</label>
                                    <input class="form-control form-control-lg rounded-pill"
                                           placeholder="••••••••"
                                           type="password"
                                           name="password_confirmation"
                                           id="password_confirmation"
                                           required>
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill py-2 fw-bold">
                                        {{ __('frontend.Sign up') }}
                                    </button>
                                </div>

                                <!-- Login Link -->
                                <div class="text-center mt-4 pt-3 border-top">
                                    <p class="small text-muted mb-0">{{ __('frontend.Already have an account?') }}
                                        <a href="{{ route('login') }}" class="text-primary fw-semibold text-decoration-none">
                                            {{ __('frontend.Sign in') }}
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
    <!-- end register -->
@endsection
