@extends('layouts.layout')

@section('content')
    <section id="home-banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row justify-content-lg-between">
                            <div class="col-8 col-md-6 col-lg-5 mb-5 mb-lg-0">
                                <img src="../assets/img/gambar/banner-home.png" class="img-fluid">
                            </div>
                            <div class="col-lg-6">
                                <p class="fs-2 text-blue">Pneumatic Components Air Source Treatment Frl Unit</p>
                                <p class="text-justify mb-5">
                                    Kami terus mengembangkan relasi bisnis dan terbuka untuk hubungan potensial
                                    yang saling
                                    menguntungkan di dalam lingkup lokal maupun internasional. Jika Anda
                                    memiliki tujuan dan misi yang
                                    sama, silakan hubungi kami. Setiap ide dan masukan dalam pengembangan bisnis
                                    akan sangat bernilai,
                                    dan kami harap dapat bekerjasama dengan Anda segera.
                                </p>
                                <a href="#" class="btn btn-outline-dark  btn-max rounded-0">Hubungi
                                    Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end home banner -->

    <section class="page-section">
        <div class="container">
            <h5 class="display-5 text-blue">
                <span class="fw-medium">Our Product Line</span>
            </h5>
            <div class="col py-2">
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </p>
            </div><!-- end col -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 gx-3 row-gap-3 gx-xl-4">
                <div class="col">
                    <a href="sda-cikarang-opening.php" class="text-decoration-none">
                        <div class="card h-100 rounded-0 border-0">
                            <div class="card-header border-0 ratio ratio-1x1">
                                <img src="../assets/img/gambar/image-home-pneumatics.png" class="object-fit-cover"
                                    alt="">
                            </div>
                            <div class="card-body ps-0">
                                <div class="title">
                                    <h5 class="fw-medium text-blue ">Pneumatic Cylinders</h5>
                                </div>
                                <div class="desc">
                                    <p class="fw-light">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                        nonummy nibh euismod tincidunt ut laoreet dolor
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
                                <img src="../assets/img/gambar/image-home-airsource.png" class="object-fit-cover"
                                    alt="">
                            </div>
                            <div class="card-body ps-0">
                                <div class="title">
                                    <h5 class="fw-medium text-blue ">Air Source Treatment Unit</h5>
                                </div>
                                <div class="desc">
                                    <p class="fw-light">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                        nonummy nibh euismod tincidunt ut laoreet dolor
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
                                <img src="../assets/img/gambar/image-home-directionalvalves.png" class="object-fit-cover"
                                    alt="">
                            </div>
                            <div class="card-body ps-0">
                                <div class="title">
                                    <h5 class="fw-medium text-blue ">Directional Valve</h5>
                                </div>
                                <div class="desc">
                                    <p class="fw-light">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                        nonummy nibh euismod tincidunt ut laoreet dolor
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div><!-- end container -->
    </section>

    <section class="page-section">
        <div class="container">
            <h5 class="display-5 text-blue">
                <span class="fw-medium">Company Views</span>
            </h5>
            <div class="row row-cols-1 row-gap-3">
                <div class="col py-2">
                    <p class="m-0 text-justify">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    </p>
                </div><!-- end col -->
                <div class="col">
                    <div class="d-lg-flex d-block justify-content-between border-top border-bottom border-secondary-subtle">
                        <div class="col col-12 col-lg-7">
                            <div class="ratio ratio-2x1 bg-secondary">
                                <img src="../assets/img/gambar/banner-2.jpg" class="object-fit-cover" alt="">
                            </div>
                        </div><!-- end col -->
                        <div class="col col-12 col-lg-5 ps-5 d-flex bg-gray flex-column justify-content-center">
                            <h5 class="display-6 fw-light" style="color: var(--color-primary)">
                                Hose Assembly
                            </h5>
                            <p class="fw-light">
                                Our Swaging/Crimping Center is dedicated to providing high-quality assembly
                                solutions for hydraulic, pneumatic and industrial applications. This specialized
                                facility is equipped with sophisticated swaging and crimping.
                            </p>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div>
            </div>
        </div><!-- end container -->
    </section>

    <section class="page-section mb-0">
        <div class="container">
            <h5 class="display-5 text-blue">
                <span class="fw-medium">Exhibition</span>
            </h5>
            <div class="row row-cols-1 row-gap-3">
                <div class="col py-2">
                    <p class="m-0 text-justify">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    </p>
                </div><!-- end col -->
                <div class="col">
                    <img src="../assets/img/gambar/banner.png" class="img-fluid">
                </div>
            </div>
        </div><!-- end container -->

    </section>
@endsection
