{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('frontend.Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('frontend.Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('frontend.Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('frontend.Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
@extends('frontend.layouts.master')

@section('content')
    <!-- password reset -->
    <section class="wrap__section bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-white border-0 py-3">
                            <h4 class="card-title mb-0 text-center text-primary">{{ __('frontend.Reset Password') }}</h4>
                        </div>
                        <div class="card-body px-4 py-4">
                            <form method="POST" action="{{ route('password.store') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <!-- Email Field -->
                                <div class="form-group mb-3">
                                    <label for="email" class="form-label small text-muted">{{ __('frontend.Email') }}</label>
                                    <input class="form-control form-control-lg rounded-pill @error('email') is-invalid @enderror"
                                           placeholder="your@email.com"
                                           type="email"
                                           name="email"
                                           id="email"
                                           value="{{ old('email', $request->email) }}"
                                           required
                                           autofocus>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- New Password Field -->
                                <div class="form-group mb-3">
                                    <label for="password" class="form-label small text-muted">{{ __('frontend.New Password') }}</label>
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
                                        {{ __('frontend.Reset Password') }}
                                    </button>
                                </div>

                                <!-- Back to Login Link -->
                                <div class="text-center mt-4 pt-3 border-top">
                                    <p class="small text-muted mb-0">{{ __('frontend.Remembered your password?') }}
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
    <!-- end password reset -->
@endsection
