
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
            href="{{ route('admin.dashboard.index') }}"
            >
            <span class="menu-icon">
                <i class="bi bi-house fs-3"></i>
            </span>
            <span class="link-title">Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link"
            href="{{ route('back.admin.category.index') }}">
            <span class="menu-icon">
                <i class="bi bi-geo-alt fs-3"></i>
            </span>
            <span class="link-title">Category</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link"
            href="{{ route('back.admin.product.index') }}">
            <span class="menu-icon">
                <i class="bi bi-geo-alt fs-3"></i>
            </span>
            <span class="link-title">Product</span>
        </a>
    </li>



