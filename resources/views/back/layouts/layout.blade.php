@include('back.layouts.header')

<div class="main-wrapper">
    @include('back.layouts.menuv2')
    <div class="page-wrapper">
        @include('back.layouts.headerv2')
        <div class="page-content">
            @yield('content')
        </div>
        <footer class="px-4 footer border-top">
            <div class="d-flex flex-row align-items-center justify-content-between py-3 small">
                <p class="text-secondary mb-1 mb-md-0">Copyright © 2025 <a href="https://www.sda.co.id" target="_blank">SDA
                        Global</a>.</p>
                <p class="text-secondary">Handcrafted With <i class="mb-1  ms-1 icon-sm"
                    data-lucide="heart"></i></p>
            </div>
        </footer>
    </div>
</div>
@include('back.layouts.footer')
@yield('scripts')
