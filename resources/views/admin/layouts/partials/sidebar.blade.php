    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home*') ? '' : 'collapsed' }}" href="{{ route('admin.ride_page') }}">
                    <i class="bi bi-file-earmark-fill"></i><span>Ride</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/header*') ? '' : 'collapsed' }}" href="{{ route('admin.header') }}">
                    <i class="bi bi-file-earmark-fill"></i><span>Header</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/footer*') ? '' : 'collapsed' }}" href="{{ route('admin.footer') }}">
                    <i class="bi bi-file-earmark-fill"></i><span>Footer</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/change_password_index*') ? '' : 'collapsed' }}" href="{{ route('admin.change_password_index') }}">
                    <i class="bi bi-key"></i><span>Change Password</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('logout*') ? '' : 'collapsed' }}" href="{{ route('logout') }}">
                    <i class="bi bi-box-arrow-right"></i><span>Logout</span>
                </a>
            </li>

        </ul>
    </aside>
