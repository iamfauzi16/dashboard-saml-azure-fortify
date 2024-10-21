<x-app-auth-layout title="Reset Password">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <img src="{{ asset('assets/images/logo.svg') }}" alt="logo">
                        </div>
                        <h4>Reset Password</h4>
                        <h6 class="fw-light">We will send a link to reset your password</h6>

                        <form class="pt-3" action="{{ route('password.update') }}" method="POST">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <input type="text" name="token" value="{{ $request->token }}" hidden>
                            <div class="form-group">
                                <input type="email" name="email" value="{{ $request->email }}"
                                    class="form-control form-control-lg" id="exampleInputEmail1"
                                    placeholder="email@example.com">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-lg"
                                    id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password_confirmation" class="form-control form-control-lg"
                                    id="exampleInputPassword1" placeholder="Password Confirmation">
                            </div>
                            <div class="mt-3 d-grid gap-2">
                                <button type="submit"
                                    class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn">SIGN
                                    IN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
</x-app-auth-layout>
