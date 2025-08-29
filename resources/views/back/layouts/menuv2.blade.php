<div class="vertical-menu">
    <nav class="sidebar" tabindex="-1" data-bs-scroll="false">
        <div class="sidebar-header">
            <div class="offcanvas-header d-block text-center position-relative py-4">
                <div class="position-relative d-inline-block mb-1">
                    <img src="{{ asset('images/users/user.png') }}" class="img-thumbnail rounded-circle border-0 bg-dark" width="66"
                        alt="user-image">
                    {{-- <img src="/ui/img/bunga-kopi.svg" class="img-fluid position-absolute top-0 end-0" width="20"
                        alt="" style="transform: translateY(-18%) translateX(54%);"> --}}
                </div>

                <h5 class="offcanvas-title" id="sidebarLabel">Username</h5>
                <p class="mb-0 small text-secondary">
                    Jabatan
                </p>
            </div>
            <div class="sidebar-toggler position-absolute top-0 end-0 m-2 d-lg-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="sidebar-body" style="overflow-y: auto; height: calc(100% - 160px);">
            <ul class="nav" id="sidebarNav">
                {{-- <li class="nav-item nav-category">Main</li>
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                <i class="link-icon" data-lucide="box"></i>
                <span class="link-title">Dashboard</span>
                </a>
                </li> --}}

                @include('back.layouts.sidebar.admin')

                {{-- @auth
                @if (auth()->user()->role_id == 1)
                @include('back.layouts.sidebar.superadmin')
                @elseif (auth()->user()->role_id == 2)
                @include('back.layouts.sidebar.admin')
                @elseif (auth()->user()->role_id == 3)
                @include('back.layouts.sidebar.staff')
                @elseif (auth()->user()->role_id == 4)
                @include('back.layouts.sidebar.supervisor')
                @elseif (auth()->user()->role_id == 5)
                @include('back.layouts.sidebar.manager')
                @elseif (auth()->user()->role_id == 6)
                @include('back.layouts.sidebar.direktur')
                @elseif (auth()->user()->role_id == 7)
                @include('back.layouts.sidebar.owner')
                @elseif (auth()->user()->role_id == 8)
                @include('back.layouts.sidebar.hcs')
                @endif
                @endauth --}}

            </ul>
        </div>
    </nav>
</div>
