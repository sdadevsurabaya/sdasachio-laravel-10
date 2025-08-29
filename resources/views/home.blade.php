@extends('layouts.layout')

@section('content')
    <section id="home-banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="@lang('homepage.slide_1')"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row justify-content-lg-between">
                            <div class="col-8 col-md-6 col-lg-5 mb-5 mb-lg-0">
                                <img src="../assets/img/gambar/banner-home.png" class="img-fluid">
                            </div>
                            <div class="col-lg-6">
                                <p class="fs-2 text-blue">@lang('homepage.pneumatic_title')</p>
                                <p class="text-justify mb-5">
                                    @lang('homepage.pneumatic_description')
                                </p>
                                <a href="#" class="btn btn-outline-dark btn-max rounded-0">@lang('homepage.contact_us')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><section class="page-section">
        <div class="container">
            <h5 class="display-5 text-blue">
                <span class="fw-medium">@lang('homepage.our_product_line')</span>
            </h5>
            <div class="col py-2">
                <p class="text-justify">
                    @lang('homepage.product_line_description')
                </p>
            </div><div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 gx-3 row-gap-3 gx-xl-4">
                <div class="col">
                    <a href="sda-cikarang-opening.php" class="text-decoration-none">
                        <div class="card h-100 rounded-0 border-0">
                            <div class="card-header border-0 ratio ratio-1x1">
                                <img src="../assets/img/gambar/Pneumatic-Cylinders1.webp" class="object-fit-cover"
                                    alt="">
                            </div>
                            <div class="card-body ps-0">
                                <div class="title">
                                    <h5 class="fw-medium text-blue ">@lang('homepage.pneumatic_cylinders_title')</h5>
                                </div>
                                <div class="desc">
                                    <p class="fw-normal">
                                        @lang('homepage.pneumatic_cylinders_text')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="sda-cikarang-opening.php" class="text-decoration-none">
                        <div class="card h-100 rounded-0 border-0">
                            <div class="card-header border-0 ratio ratio-1x1">
                                <img src="../assets/img/gambar/Air-Tools-Pneumatics1.webp" class="object-fit-cover"
                                    alt="">
                            </div>
                            <div class="card-body ps-0">
                                <div class="title">
                                    <h5 class="fw-medium text-blue ">@lang('homepage.air_source_title')</h5>
                                </div>
                                <div class="desc">
                                    <p class="fw-normal">
                                        @lang('homepage.air_source_text')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="sda-cikarang-opening.php" class="text-decoration-none">
                        <div class="card h-100 rounded-0 border-0">
                            <div class="card-header border-0 ratio ratio-1x1">
                                <img src="../assets/img/gambar/Directional-valves1.webp" class="object-fit-cover"
                                    alt="">
                            </div>
                            <div class="card-body ps-0">
                                <div class="title">
                                    <h5 class="fw-medium text-blue ">@lang('homepage.directional_valve_title')</h5>
                                </div>
                                <div class="desc">
                                    <p class="fw-normal">
                                        @lang('homepage.directional_valve_text')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="sda-cikarang-opening.php" class="text-decoration-none">
                        <div class="card h-100 rounded-0 border-0">
                            <div class="card-header border-0 ratio ratio-1x1">
                                <img src="../assets/img/gambar/Fluid-Process-Valves1.webp" class="object-fit-cover"
                                    alt="">
                            </div>
                            <div class="card-body ps-0">
                                <div class="title">
                                    <h5 class="fw-medium text-blue ">@lang('homepage.fluid_solenoid_valve_title')</h5>
                                </div>
                                <div class="desc">
                                    <p class="fw-normal">
                                        @lang('homepage.fluid_solenoid_valve_text')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="sda-cikarang-opening.php" class="text-decoration-none">
                        <div class="card h-100 rounded-0 border-0">
                            <div class="card-header border-0 ratio ratio-1x1">
                                <img src="../assets/img/gambar/FittingsTubingsAccessories1.webp" class="object-fit-cover"
                                    alt="">
                            </div>
                            <div class="card-body ps-0">
                                <div class="title">
                                    <h5 class="fw-medium text-blue ">@lang('homepage.pneumatic_accessories_title')</h5>
                                </div>
                                <div class="desc">
                                    <p class="fw-normal">
                                        @lang('homepage.pneumatic_accessories_text')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div></section>

    <section class="page-section">
        <div class="container">
            <h5 class="display-5 text-blue">
                <span class="fw-medium">@lang('homepage.company_views_title')</span>
            </h5>
            <div class="row row-cols-1 row-gap-3">
                <div class="col py-2">
                    <p class="m-0 text-justify">
                        @lang('homepage.company_views_description')
                    </p>
                </div><div class="col">
                    <div class="d-lg-flex d-block justify-content-between border-top border-bottom border-secondary-subtle">
                        <div class="col col-12 col-lg-7">
                            <div class="ratio ratio-2x1 bg-secondary">
                                <img src="../assets/img/gambar/banner-2.jpg" class="object-fit-cover" alt="">
                            </div>
                        </div><div class="col col-12 col-lg-5 ps-5 d-flex bg-gray flex-column justify-content-center">
                            <h5 class="display-6 fw-normal" style="color: var(--color-primary)">
                                @lang('homepage.hose_assembly_title')
                            </h5>
                            <p class="">
                                @lang('homepage.hose_assembly_description')
                            </p>
                        </div></div></div>
            </div>
        </div></section>

    <section class="page-section mb-0">
        <div class="container">
            <h5 class="display-5 text-blue">
                <span class="fw-medium">@lang('homepage.exhibition_title')</span>
            </h5>
            <div class="row row-cols-1 row-gap-3">
                <div class="col py-2">
                    <p class="m-0 text-justify">
                        @lang('homepage.exhibition_description')
                    </p>
                </div><div class="col">
                    <img src="../assets/img/gambar/banner.png" class="img-fluid">
                </div>
            </div>
        </div></section>
@endsection
