<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link border-bottom">
        <img src="{{ asset('storage/logo.png') }}" alt="Logo" class="brand-image img-circle elevation-3 bg-white"
            style="opacity: .8">
        <span class="brand-text font-weight-bold">MCC</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ Request::routeIs('dashboard') ? 'aktif' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about.edit', '1') }}"
                        class="nav-link {{ Request::routeIs('about.edit', '1') ? 'aktif' : '' }}">
                        <i class="nav-icon fas fa-address-card"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('category.index') }}"
                        class="nav-link {{ Request::routeIs('category.index') ? 'aktif' : '' }}">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Category
                        </p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="{{ route('package.index') }}"
                        class="nav-link {{ Request::routeIs('package.index') ? 'aktif' : '' }}">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p>
                            Package
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('feedback.index') }}"
                        class="nav-link {{ Request::routeIs('feedback.index') ? 'aktif' : '' }}">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>
                            Feedback
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.index') }}"
                        class="nav-link {{ Request::routeIs('user.index') ? 'aktif' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            User
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                        @csrf
                    </form>
                    <a href="#" class="nav-link @yield('')"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
