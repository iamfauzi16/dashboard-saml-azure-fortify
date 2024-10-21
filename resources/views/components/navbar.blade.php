<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <div class="me-3">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
        <span class="icon-menu"></span>
      </button>
    </div>
    <div>
      <a class="navbar-brand brand-logo" href="{{ route('home') }}">
        <img src="{{ asset('assets/images/logo.svg') }}" alt="logo" />
      </a>
      <a class="navbar-brand brand-logo-mini" href="{{ route('home') }}">
        <img src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo" />
      </a>
    </div>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-top">
   
    <ul class="navbar-nav ms-auto">
      <li class="nav-item dropdown d-none d-lg-block">
        <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Select Category </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
          <a class="dropdown-item py-3">
            <p class="mb-0 fw-medium float-start">Select category</p>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-item-content flex-grow py-2">
              <p class="preview-subject ellipsis fw-medium text-dark">Bootstrap Bundle </p>
              <p class="fw-light small-text mb-0">This is a Bundle featuring 16 unique dashboards</p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-item-content flex-grow py-2">
              <p class="preview-subject ellipsis fw-medium text-dark">Angular Bundle</p>
              <p class="fw-light small-text mb-0">Everything you’ll ever need for your Angular projects</p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-item-content flex-grow py-2">
              <p class="preview-subject ellipsis fw-medium text-dark">VUE Bundle</p>
              <p class="fw-light small-text mb-0">Bundle of 6 Premium Vue Admin Dashboard</p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-item-content flex-grow py-2">
              <p class="preview-subject ellipsis fw-medium text-dark">React Bundle</p>
              <p class="fw-light small-text mb-0">Bundle of 8 Premium React Admin Dashboard</p>
            </div>
          </a>
        </div>
      </li>
      <li class="nav-item d-none d-lg-block">
        <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
          <span class="input-group-addon input-group-prepend border-right">
            <span class="icon-calendar input-group-text calendar-icon"></span>
          </span>
          <input type="text" class="form-control">
        </div>
      </li>
      <li class="nav-item">
        <form class="search-form" action="#">
          <i class="icon-search"></i>
          <input type="search" class="form-control" placeholder="Search Here" title="Search here">
        </form>
      </li>
      <li class="nav-item dropdown d-none">
        <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
          <i class="icon-bell"></i>
          <span class="count"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
          <a class="dropdown-item py-3 border-bottom">
            <p class="mb-0 fw-medium float-start">You have 4 new notifications </p>
            <span class="badge badge-pill badge-primary float-end">View all</span>
          </a>
          <a class="dropdown-item preview-item py-3">
            <div class="preview-thumbnail">
              <i class="mdi mdi-alert m-auto text-primary"></i>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
              <p class="fw-light small-text mb-0"> Just now </p>
            </div>
          </a>
          <a class="dropdown-item preview-item py-3">
            <div class="preview-thumbnail">
              <i class="mdi mdi-lock-outline m-auto text-primary"></i>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
              <p class="fw-light small-text mb-0"> Private message </p>
            </div>
          </a>
          <a class="dropdown-item preview-item py-3">
            <div class="preview-thumbnail">
              <i class="mdi mdi-airballoon m-auto text-primary"></i>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
              <p class="fw-light small-text mb-0"> 2 days ago </p>
            </div>
          </a>
        </div>
      </li>
    
      <li class="nav-item dropdown d-none d-lg-block user-dropdown">
        <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
          @if (Auth::user()->image_url)
            <img class="img-xs rounded-circle p-2" src="{{ url(Auth::user()->image_url) }}" alt="Profile image"> 
          @else
            <img class="img-xs rounded-circle p-2" src="https://www.transparentpng.com/download/user/gray-user-profile-icon-png-fP8Q1P.png" alt="Profile image"> 

          @endif
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
          <div class="dropdown-header text-center">
            @if (Auth::user()->image_url)
            <img class="img-xs rounded-circle p-2" src="{{ url(Auth::user()->image_url) }}" alt="Profile image"> 
          @else
            <img class="img-xs rounded-circle p-2" src="https://www.transparentpng.com/download/user/gray-user-profile-icon-png-fP8Q1P.png" alt="Profile image"> 

          @endif
            <p class="mb-1 mt-3 fw-semibold">{{ Auth::user()->name }}</p>
            <p class="fw-light text-muted mb-0">{{ Auth::user()->email }}</p>
          </div>
          <a class="dropdown-item" href="{{ route('profile') }}"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile</a>
       
          <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout').submit();"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
          <form action="{{ route('logout') }}" method="post" id="logout" hidden>
            @csrf
          </form>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>