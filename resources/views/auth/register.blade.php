<x-app-auth-layout title="Register">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth px-0">
      <div class="row w-100 mx-0">
        <div class="col-lg-4 mx-auto">
          <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            <div class="brand-logo">
              <img src="{{ asset('assets/images/logo.svg') }}" alt="logo">
            </div>
            <h4>New here?</h4>
            <h6 class="fw-light">Signing up is easy. It only takes a few steps</h6>
            <form class="pt-3" action="{{ route('register') }}" method="POST">
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
                <input type="text" name="name" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email@example.com">
              </div>
            
              <div class="form-group">
                <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group">
                <input type="password" name="password_confirmation" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password Confirmation">
              </div>
              <div class="mb-4 d-none">
                <div class="form-check">
                  <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
                </div>
              </div>
              <div class="mt-3 d-grid gap-2">
                <button type="submit" class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn">SIGN UP</button>
              </div>
              <div class="text-center mt-4 fw-light"> Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-auth-layout>

