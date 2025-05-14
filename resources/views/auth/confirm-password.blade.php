<x-guest-layout>
    <section class="wrap__section bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-white border-0 py-3">
                            <h4 class="card-title mb-0 text-center text-primary">{{ __('frontend.Password Confirmation') }}</h4>
                        </div>
                        <div class="card-body px-4 py-4">
                            <p class="text-muted small text-center mb-4">
                                {{ __('frontend.This is a secure area of the application. Please confirm your password before continuing.') }}
                            </p>

                            <form method="POST" action="{{ route('password.confirm') }}">
                                @csrf

                                <!-- Password Field -->
                                <div class="form-group mb-4">
                                    <label for="password" class="form-label small text-muted">{{ __('frontend.Password') }}</label>
                                    <input class="form-control form-control-lg rounded-pill @error('password') is-invalid @enderror"
                                           id="password"
                                           type="password"
                                           name="password"
                                           required
                                           autocomplete="current-password">
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill py-2 fw-bold">
                                        {{ __('frontend.Confirm') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
