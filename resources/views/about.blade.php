@extends('layouts.layout')

@section('content')
    <section>
        <div class="container">
            <div class="col py-2 text-center">
                <h5 class="display-5 fw-medium text-blue">
                    <span class="">@lang('company.company_title')</span>
                </h5>
                <p class="">
                    @lang('company.lorem_ipsum')
                </p>
            </div>
        </div>
    </section>
    <section class="position-relative" style="background-color: var(--color-default);">
        <div class="container py-5">
            <div class="row">
                <div class="col text-end pe-lg-5">
                    <span class="fw-medium text-blue display-4">33</span><br>
                    <span>@lang('company.years_of_experience')</span>
                </div>
                <div class="col text-start border-start ps-lg-5" style="border-color: #005fb9 !important;">
                    <span class="fw-medium text-blue display-4">177</span><br>
                    <span>@lang('company.employees')</span>
                </div>
            </div>
    </section>
    <section>
        <div class="container">
            <div class="row row-cols-1 row-gap-1">
                <div class="col">
                    <div class="d-lg-flex d-block justify-content-between">
                        <div class="col col-12 col-lg-6 mb-lg-0 mb-3">
                            <div class="ratio ratio-4x3 bg-secondary">
                                <img src="{{ url('/') }}/assets/img/gambar/banner.png" class="object-fit-cover"
                                    alt="">
                            </div>
                        </div>
                        <div class="col col-12 col-lg-6 ps-lg-5 d-flex flex-column justify-content-center">
                            <h5 class="display-6" style="color: var(--color-primary)">
                                @lang('company.lorem_ipsum_title')
                            </h5>
                            <p class="">
                                @lang('company.swaging_description')<br><br>
                                @lang('company.swaging_description')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-lg-flex d-block justify-content-between">
                        <div class="col col-12 col-lg-6 order-2 mb-lg-0 mb-3">
                            <div class="ratio ratio-4x3 bg-secondary">
                                <img src="{{ url('/') }}/assets/img/gambar/banner-2.jpg" class="object-fit-cover"
                                    alt="">
                            </div>
                        </div>
                        <div class="col col-12 col-lg-6 order-1 ps-lg-5 d-flex flex-column justify-content-center">
                            <h5 class="display-6" style="color: var(--color-primary)">
                                @lang('company.iso_title')
                            </h5>
                            <p class="">
                                @lang('company.swaging_description')<br><br>
                                @lang('company.swaging_description')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .icon-container {
            display: flex;
            align-items: center;
        }

        .blue-line {
            /* width: 20px; */
            /* height: 80px; */
            background-color: #0072CE;
            /* margin-right: 10px; */
        }

        .border-5 {
            border-width: 25px !important;
        }

        .border-primary {
            border-color: #0072CE !important;
        }

        .icon {
            width: 60px;
            height: 60px;
        }
    </style>
    <section>
        <div class="container">
            <div class="container">
                <div class="row col-12 mb-5">
                    <div
                        class="col-12 col-lg-2 border-start border-4 border-primary d-flex justify-content-center align-items-center">
                        <img src="../assets/img/logo/Icon_1.svg" class="" height="100" width="100">
                    </div>
                    <div class="col-12 col-lg-10 ms-lg-auto">
                        <h5 class="display-lg-6 fs-2 text-lg-start text-center" style="color: var(--color-primary)">
                            @lang('company.sophisticated_infrastructure_title')
                        </h5>
                        <p class="m-0 text-justify">
                            @lang('company.sophisticated_infrastructure_description')
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row col-12 mb-5">
                    <div
                        class="col-12 col-lg-2 border-start border-4 border-primary d-flex justify-content-center align-items-center">
                        <img src="../assets/img/logo/Icon_2.svg" class="ms-4" height="100" width="100">
                    </div>
                    <div class="col-12 col-lg-10 ms-auto">
                        <h5 class="display-lg-6 fs-2 text-lg-start text-center" style="color: var(--color-primary)">
                            @lang('company.competitive_strengths_title')
                        </h5>
                        <span class="m-0 text-justify">
                            <h5 class="fw-medium">@lang('company.technical_proficiency_title')</h5>
                            <p class="mb-3">@lang('company.technical_proficiency_description')</p>

                            <h5 class="fw-medium">@lang('company.quality_assurance_title')</h5>
                            <p class="mb-3">@lang('company.quality_assurance_description')</p>
                            <p>

                            </p>
                            <h5 class="fw-medium">@lang('company.timely_deliveries_title')</h5>
                            <p class="mb-3">@lang('company.timely_deliveries_description')</p>

                            <h5 class="fw-medium">@lang('company.affordable_pricing_title')</h5>
                            <p class="mb-3">@lang('company.affordable_pricing_description')</p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row col-12 mb-5">
                    <div
                        class="col-12 col-lg-2 border-start border-4 border-primary d-flex justify-content-center align-items-center">
                        <img src="../assets/img/logo/Icon_3.svg" class="" height="100" width="100">
                    </div>
                    <div class="col-12 col-lg-10 ms-auto">
                        <h5 class="display-lg-6 fs-2 text-lg-start text-center" style="color: var(--color-primary)">
                            @lang('company.customers_satisfaction_title')
                        </h5>
                        <p class="m-0 text-justify">
                            @lang('company.customers_satisfaction_description')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <script>
        $('#nav-about').addClass('active');
    </script>
@endsection
