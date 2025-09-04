<nav class="navbar navbar-expand-lg py-3 position-absolute top-0 start-0 end-0 z-3">
    <div class="container">
        <h1 class="m-0">
            <a href="{{ url('/') }}" class="navbar-brand d-grid text-decoration-none">
                <img src="{{ url('/') }}/assets/img/logo/logo-a.svg" width="70%" height="auto" alt="SDA">
            </a>
        </h1>
        <button class="navbar-toggler border-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="color:#fff;">
            <span class="navbar-toggler-icon"></span>
        </button>
        <style>
            .p-5 {
                padding: 2rem !important;
            }

            .border-right {
                border-right: 1px solid #dee2e6 !important;
                height: 10px
            }
        </style>
        <div class="navbar-collapse collapse" id="#">
            <ul class="navbar-nav text-white text-capitalize ms-auto bg-blue">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link py-1 p-5" id="nav-home">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/about') }}" class="nav-link py-1 p-4" id="nav-about">About Sachio</a>
                </li>
                <li class="nav-item position-relative">
                    <a class="nav-link py-1 p-4" href="{{ url('/product') }}" id="nav-produk">Products</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/contact') }}" class="nav-link py-1 p-4" id="nav-contact">contact</a>
                </li>

                <!-- Language Switch -->
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link px-2" href="{{ route('locale.change', 'id') }}">ID</a>
                    <span class="text-white">|</span>
                    <a class="nav-link px-2 " href="{{ route('locale.change', 'en') }}">EN</a>
                </li>

                <li class="nav-item" style="align-self: center;">
                    <a href="#" class="nav-link py-1 p-5" id="nav-wtb">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="produk-menu" class="collapse position-absolute w-100 bg-white shadow-sm" >
    <div class="container">
        <div class="col-12 py-5">
            <div class="row">
                <div class="col-8 px-4 order-2">
                    <div class="nav nav-pills mb-3 row row-cols-1 row-cols-sm-3 row-cols-lg-3 gx-3 row-gap-3 gx-xl-4"
                        id="nav-pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link card border-0 rounded-0 active" id="nav-tab-cylinders"
                                data-bs-toggle="pill" data-bs-target="#nav-content-cylinders" type="button"
                                role="tab" aria-controls="nav-content-cylinders" aria-selected="true">
                                <a href="{{ url('/category') }}/pneumatic_cylinders" class="text-decoration-none">
                                    <div class="card-body p-2">
                                        <h5 class="card-produk">Pneumatic Cylinders</h5>
                                    </div>
                                </a>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link card border-0 rounded-0" id="nav-tab-solenoid" data-bs-toggle="pill"
                                data-bs-target="#nav-content-solenoid" type="button" role="tab"
                                aria-controls="nav-content-solenoid" aria-selected="false">
                                <a href="{{ url('/category') }}/air_source_treatment_units"
                                    class="text-decoration-none">
                                    <div class="card-body p-2">
                                        <h5 class="card-produk">Air Source Treatment Units</h5>
                                    </div>
                                </a>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link card border-0 rounded-0" id="nav-tab-air" data-bs-toggle="pill"
                                data-bs-target="#nav-content-air" type="button" role="tab"
                                aria-controls="nav-content-air" aria-selected="false">
                                <a href="{{ url('/category') }}/http://127.0.0.1:8000/category/directional_valves"
                                    class="text-decoration-none">
                                    <div class="card-body p-2">
                                        <h5 class="card-produk">Directional Valve</h5>
                                    </div>
                                </a>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link card border-0 rounded-0" id="nav-tab-directional"
                                data-bs-toggle="pill" data-bs-target="#nav-content-directional" type="button"
                                role="tab" aria-controls="nav-content-directional" aria-selected="false">
                                <a href="{{ url('/category') }}/fluid_solenoid_valve" class="text-decoration-none">
                                    <div class="card-body p-2">
                                        <h5 class="card-produk">Fluid Solenoid Valve</h5>
                                    </div>
                                </a>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link card border-0 rounded-0" id="nav-tab-accessories"
                                data-bs-toggle="pill" data-bs-target="#nav-content-accessories" type="button"
                                role="tab" aria-controls="nav-content-accessories" aria-selected="false">
                                <a href="{{ url('/category') }}/pneumatic_accessories" class="text-decoration-none">
                                    <div class="card-body p-2">
                                        <h5 class="card-produk">Pneumatic Accessories</h5>
                                    </div>
                                </a>
                            </button>
                        </li>

                    </div>
                </div>
                <div class="col-4 order-1">
                    <div class="tab-kontent" id="nav-pills-tabContent">
                        <div class="tab-pane fade show active" id="nav-content-cylinders" role="tabpanel"
                            aria-labelledby="nav-tab-cylinders" tabindex="0">
                            <div class="ratio ratio-16x9">
                                <img src="/assets/img/gambar/Cover_menu_Pneumatic_Cylinders.webp" class="img-fluid"
                                    alt="Pneumatic Cylinders">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-content-solenoid" role="tabpanel"
                            aria-labelledby="nav-tab-solenoid" tabindex="0">
                            <div class="ratio ratio-16x9">
                                <img src="/assets/img/gambar/Cover_menu_Fluid_Solenoid_Valve.webp" class="img-fluid"
                                    alt="Fluid Solenoid Valve">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-content-air" role="tabpanel"
                            aria-labelledby="nav-tab-air" tabindex="0">
                            <div class="ratio ratio-16x9">
                                <img src="/assets/img/gambar/Cover_menu_Air_Source_Treatment_Units.webp"
                                    class="img-fluid" alt="Air Source Treatment Units">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-content-accessories" role="tabpanel"
                            aria-labelledby="nav-tab-accessories" tabindex="0">
                            <div class="ratio ratio-16x9">
                                <img src="/assets/img/gambar/Cover_menu_Pneumatic_Accessories.webp" class="img-fluid"
                                    alt="Pneumatic Accessories">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-content-directional" role="tabpanel"
                            aria-labelledby="nav-tab-directional" tabindex="0">
                            <div class="ratio ratio-16x9">
                                <img src="/assets/img/gambar/Cover_menu_Directional_Valves.webp" class="img-fluid"
                                    alt="Directional Valves">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel"
    style="width: 300px; height: 100%; overflow-y:scroll">
    <div class="offcanvas-header">
        <!-- <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/about') }}">About Sachio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#mobileSachio" data-bs-toggle="collapse"
                    data-bs-parent="#offcanvasNavbar">
                    Products</a>
                <div class="collapse" id="mobileSachio">
                    <ul class="navbar-nav ps-4 mb-3">
                        <li class="nav-item"> <a href="{{ url('/category') }}/pneumatic_cylinders" class="nav-link"
                                id="nav-about-mobile">Pneumatic Cylinders</a></li>
                        <li class="nav-item"> <a href="{{ url('/category') }}/air_source_treatment_units"
                                class="nav-link">Air Source Treatment Units</a></li>
                        <li class="nav-item"> <a href="{{ url('/category') }}/directional_valves"
                                class="nav-link">Directional Valves</a></li>
                        <li class="nav-item"> <a href="{{ url('/category') }}/fluid_solenoid_valve"
                                class="nav-link">Fluid Solenoid Valve</a></li>
                        <li class="nav-item"> <a href="{{ url('/category') }}/pneumatic_accessories"
                                class="nav-link">Pneumatic Accessories</a></li>

                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
            </li>

        </ul>
    </div>
</div>

<script type="text/javascript">
    // window.onload = (event) => {
    //    document.getElementById('sub-product-brand').style.display = 'none';
    // };
    // sticky navbar
    $(window).on('scroll', function() {
        if ($(window).scrollTop()) {
            $('.navbar').addClass('scroll');
        } else {
            $('.navbar').removeClass('scroll');
        }
    })
</script>
