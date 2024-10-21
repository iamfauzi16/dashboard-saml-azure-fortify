<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('home') }}">
        <i class="mdi mdi-grid-large menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item nav-category">Settings Management</li>
   
    <li class="nav-item">
      <a class="nav-link" href="{{ route('users.index') }}">
        <i class="menu-icon mdi mdi-file-document"></i>
        <span class="menu-title">Users</span>
      </a>
    </li>
  </ul>
</nav>