<x-app-auth-layout title="Login">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth px-0">
      <div class="row w-100 mx-0">
        <div class="col-lg-4 mx-auto">
          <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            <div class="brand-logo">
              <img src="{{ asset('assets/images/logo.svg') }}" alt="logo">
            </div>
            <h4>Hello! let's get started</h4>
            <h6 class="fw-light">Sign in to continue.</h6>
            <form class="pt-3" action="{{ route('login') }}" method="POST">
              @csrf

              @if ($errors->any())
              <div class="alert alert-danger" role="alert">
                  <ul>
                      @foreach ( $errors->all() as $error )
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
                </div>
              @endif
              <div class="form-group">
                <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="email@example.com">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="mt-3 d-grid gap-2">
                <button type="submit" class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn">SIGN IN</button>
              </div>
              <div class="my-2 d-flex justify-content-between align-items-center">
                <div class="form-check">
                  <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                </div>
                <a href="{{ route('password.request') }}" class="auth-link text-black">Forgot password?</a>
              </div>
              <div class="mb-2 d-grid gap-2">
                <a href="{{ route('saml.login') }}" class="btn btn-block btn-danger auth-form-btn">
                  <i class="ti-microsoft me-2"></i>CONTINUE WITH MICROSOFT </a>
              </div>
              <div class="text-center mt-4 fw-light"> Don't have an account? <a href="{{ route('register') }}" class="text-primary">Create</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
</x-app-auth-layout>

