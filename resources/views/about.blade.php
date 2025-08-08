@extends('layouts.layout')

@section('content')
    <section>
        <div class="container">
            <div class="col py-2 text-center">
                <h5 class="display-5 fw-medium text-blue">
                    <span class="">Company</span>
                </h5>
                <p class="">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </p>
            </div><!-- end col -->
        </div>
    </section>
    <section class="position-relative" style="background-color: var(--color-default);">
        <div class="container py-5">
            <div class="row">
                <div class="col text-end pe-lg-5">
                    <span class="fw-medium text-blue display-4">33</span><br>
                    <span>Years of Experience</span>
                </div>
                <div class="col text-start border-start ps-lg-5" style="border-color: #005fb9 !important;">
                    <span class="fw-medium text-blue display-4">177</span><br>
                    <span>Employess</span>
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
                                <img src="{{ url('/') }}/assets/img/gambar/banner.png" class="object-fit-cover" alt="">
                            </div>
                        </div><!-- end col -->
                        <div class="col col-12 col-lg-6 ps-lg-5 d-flex flex-column justify-content-center">
                            <h5 class="display-6" style="color: var(--color-primary)">
                                Lorem ipsum dolor sit amet
                            </h5>
                            <p class="">
                                Our Swaging/Crimping Center is dedicated to providing high-quality assembly solutions for
                                hydraulic, pneumatic and industrial applications. This specialized facility is equipped with
                                sophisticated swaging and crimping.<br><br>
                                Our Swaging/Crimping Center is dedicated to providing high-quality assembly solutions for
                                hydraulic, pneumatic and industrial applications. This specialized facility is equipped with
                                sophisticated swaging and crimping.
                            </p>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div>
                <div class="col">
                    <div class="d-lg-flex d-block justify-content-between">
                        <div class="col col-12 col-lg-6 order-2 mb-lg-0 mb-3">
                            <div class="ratio ratio-4x3 bg-secondary">
                                <img src="{{ url('/') }}/assets/img/gambar/banner-2.jpg" class="object-fit-cover" alt="">
                            </div>
                        </div><!-- end col -->
                        <div class="col col-12 col-lg-6 order-1 ps-lg-5 d-flex flex-column justify-content-center">
                            <h5 class="display-6" style="color: var(--color-primary)">
                                ISO 9001:2015
                            </h5>
                            <p class="">
                                Our Swaging/Crimping Center is dedicated to providing high-quality assembly solutions for
                                hydraulic, pneumatic and industrial applications. This specialized facility is equipped with
                                sophisticated swaging and crimping.<br><br>
                                Our Swaging/Crimping Center is dedicated to providing high-quality assembly solutions for
                                hydraulic, pneumatic and industrial applications. This specialized facility is equipped with
                                sophisticated swaging and crimping.
                            </p>
                        </div><!-- end col -->
                    </div><!-- end row -->
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
                        <img src="../assets/img/logo/icon_1.svg" class="" height="100" width="100">
                    </div>
                    <div class="col-12 col-lg-10 ms-lg-auto">
                        <h5 class="display-lg-6 fs-2 text-lg-start text-center" style="color: var(--color-primary)">
                            Sophisticated Infrastructure
                        </h5>
                        <p class="m-0 text-justify">
                            Our robust and expansive warehouse empowers us to fulfill orders of
                            any quantity, whether they are substantial or modest, regardless of the
                            location. Our extensive dealer network ensures timely product delivery
                            across the country. The dedication and expertise of our experienced
                            staff have been instrumental in our remarkable success.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row col-12 mb-5">
                    <div
                        class="col-12 col-lg-2 border-start border-4 border-primary d-flex justify-content-center align-items-center">
                        <img src="../assets/img/logo/icon_2.svg" class="ms-4" height="100" width="100">
                    </div>
                    <div class="col-12 col-lg-10 ms-auto">
                        <h5 class="display-lg-6 fs-2 text-lg-start text-center" style="color: var(--color-primary)">
                            Competitive Strengths
                        </h5>
                        <span class="m-0 text-justify">
                            <h5 class="fw-medium">Technical Proficiency</h5>
                            <p class="mb-3">Supported by a team of skilled and knowledgeable staff.</p>

                            <h5 class="fw-medium">Quality Assurance</h5>
                            <p class="mb-3">Meeting customer requirements and industry standards consistently.
                            </p>
                            <p>

                            </p>
                            <h5 class="fw-medium">Timely Deliveries</h5>
                            <p class="mb-3">Ensuring products are delivered promptly every time.</p>

                            <h5 class="fw-medium">Affordable Pricing</h5>
                            <p class="mb-3">Offering market-friendly prices that provide value for both clients and end
                                users.</p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row col-12 mb-5">
                    <div
                        class="col-12 col-lg-2 border-start border-4 border-primary d-flex justify-content-center align-items-center">
                        <img src="../assets/img/logo/icon_3.svg" class="" height="100" width="100">
                    </div>
                    <div class="col-12 col-lg-10 ms-auto">
                        <h5 class="display-lg-6 fs-2 text-lg-start text-center" style="color: var(--color-primary)">
                            Customers' Satisfaction
                        </h5>
                        <p class="m-0 text-justify">
                            Our dedicated professionals have built strong relationships with clients by consistently
                            delivering an
                            extensive range of economical, high-performing, durable, and safe products. We prioritize
                            customer
                            satisfaction, actively seeking and valuing customer feedback. This input helps us enhance
                            product
                            quality while ensuring competitive pricing, ultimately bringing immense gratification to clients
                            across Indonesia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
