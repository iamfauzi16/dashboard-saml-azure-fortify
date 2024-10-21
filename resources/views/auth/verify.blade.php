<x-app-auth-layout title="Verification Account">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo mb-4">
                            <img src="{{ asset('assets/images/logo.svg') }}" alt="logo">
                        </div>
                        <h4>Verification</h4>
                        <h6 class="fw-light">Please check your email for verification</h6>
                        @if (session('status') === 'verification-link-sent')
                            <div class="alert alert-success" role="alert">
                                A new email verification link has been sent to your email address!
                            </div>
                        @endif

                        <form class="pt-3" action="{{ route('verification.send') }}" method="POST">
                            @csrf
                            <div class="d-grid mt-3">
                                <button type="submit" class="btn btn-primary btn-lg fw-medium auth-form-btn">
                                    Resend Verification Email
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-auth-layout>
