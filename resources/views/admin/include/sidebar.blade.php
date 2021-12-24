<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items {{'dashboard' == request()->segment(1) ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('admin.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item menu-items ">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-music"></i>
          </span>
          <span class="menu-title">Musics</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item menu-items {{'artist' == request()->segment(1) ? 'active' : ''}}">
              <a class="nav-link" href="{{ route('admin.artist.index') }}">
                <span class="menu-icon">
                  <i class="mdi mdi-account-star text-danger"></i>
                </span>
                <span class="menu-title">Artist</span>
              </a>
            </li>
            <li class="nav-item menu-items {{'genre' == request()->segment(1) ? 'active' : ''}}">
              <a class="nav-link" href="{{ route('admin.genre.index') }}">
                <span class="menu-icon">
                  <i class="mdi mdi-music-circle text-success"></i>
                </span>
                <span class="menu-title">Genres</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="">
          <span class="menu-icon">
            <i class="mdi mdi-cash-usd"></i>
          </span>
          <span class="menu-title">Ads</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="">
          <span class="menu-icon">
            <i class="mdi mdi-account-multiple"></i>
          </span>
          <span class="menu-title">Member</span>
        </a>
      </li>
      
    </ul>
  </nav>