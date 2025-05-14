<x-guest-layout>
    <section class="wrap__section bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-white border-0 py-3">
                            <h4 class="card-title mb-0 text-center text-primary">{{ __('frontend.Verify Your Email') }}</h4>
                        </div>
                        <div class="card-body px-4 py-4">
                            <p class="text-muted small text-center mb-4">
                                {{ __('frontend.Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                            </p>

                            @if (session('status') == 'verification-link-sent')
                                <div class="alert alert-success rounded-pill text-center small py-2 mb-4">
                                    {{ __('frontend.A new verification link has been sent to the email address you provided during registration.') }}
                                </div>
                            @endif

                            <div class="mt-4 d-flex justify-content-between align-items-center">
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-primary rounded-pill px-4 py-2 fw-bold">
                                        {{ __('frontend.Resend Verification Email') }}
                                    </button>
                                </form>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-link text-decoration-none text-muted">
                                        {{ __('frontend.Log Out') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
