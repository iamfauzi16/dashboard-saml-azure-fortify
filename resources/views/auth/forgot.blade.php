<x-app-auth-layout title="Forgot Password">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                  <img src="{{ asset('assets/images/logo.svg') }}" alt="logo">
                </div>
                <h4>Forgot Password</h4>
                <h6 class="fw-light">We will send a link to reset your password</h6>
                <form class="pt-3" action="{{ route('password.email') }}" method="POST">
                  @csrf

                  @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                  @endif
                      
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
                
                  <div class="mt-3 d-grid gap-2">
                    <button type="submit" class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn">FORGOT PASSWORD</button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
</x-app-auth-layout>