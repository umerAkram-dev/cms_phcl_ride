    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home*') ? '' : 'collapsed' }}" href="{{ route('admin.index') }}">
                    <i class="bi bi-file-earmark-fill"></i><span>Landing Page</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/header*') ? '' : 'collapsed' }}" href="{{ route('admin.header') }}">
                    <i class="bi bi-file-earmark-fill"></i><span>Header</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/about_us*') ? '' : 'collapsed' }}" href="{{ route('admin.about_us') }}">
                    <i class="bi bi-file-earmark-fill"></i><span>About Us Page</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/donation*') ? '' : 'collapsed' }}" href="{{ route('admin.donation') }}">
                    <i class="bi bi-file-earmark-fill"></i><span>Donation</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/contact*') ? '' : 'collapsed' }}" href="{{ route('admin.contact') }}">
                    <i class="bi bi-file-earmark-fill"></i><span>Contact</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/programhighlights/cooking_classes*') ? '' : 'collapsed' }}" href="{{ route('admin.programhighlights','cooking_classes') }}">
                    <i class="bi bi-file-earmark-fill"></i><span>Cooking Classes</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/programhighlights/lifestyle_changes*') ? '' : 'collapsed' }}" href="{{ route('admin.programhighlights', 'lifestyle_changes') }}">
                    <i class="bi bi-file-earmark-fill"></i><span>Lifestyle Changes</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/programhighlights/treatments*') ? '' : 'collapsed' }}" href="{{ route('admin.programhighlights', 'treatments') }}">
                    <i class="bi bi-file-earmark-fill"></i><span>Treatments</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/ride_page*') ? '' : 'collapsed' }}" href="{{ route('admin.ride_page') }}">
                    <i class="bi bi-file-earmark-fill"></i><span>Ride</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/qurey_listing*')? '' : 'collapsed'}}" data-bs-target="#forms-nav" href="{{ route('admin.qurey_listing') }}">
                    <i class="bi bi-file-earmark-fill"></i><span>User Queries</span>
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
