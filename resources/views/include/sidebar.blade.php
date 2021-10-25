        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #2D3E50;" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
                <div class="sidebar-brand-icon">
                   <img src="{{ asset('assets/img/logo-2.png') }}" width="50" alt="" srcset="">
                </div>
                <div class="sidebar-brand-text mx-3">Spotipu</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>
            
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">
                    <i class="fas fa-fw fa-compass"></i>
                    <span>Beranda</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/artist') }}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Artis</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/genre') }}">
                    <i class="fas fa-fw fa-music"></i>
                    <span>Genre</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/album') }}">
                    <i class="fas fa-fw fa-compact-disc"></i>
                    <span>Album</span></a>
            </li>

            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Membership
            </div>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/member') }}">
                    <i class="far fa-fw fa-gem"></i>
                    <span>Langganan</span></a>
            </li>
            

            {{-- Tes Update --}}
            <!-- Sidebar Toggler (Sidebar) -->
            {{-- <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div> --}}

        </ul>
        <!-- End of Sidebar -->