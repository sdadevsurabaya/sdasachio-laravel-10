    <!DOCTYPE html>
    <html lang="en">

    <head>
        {{-- <?php include 'layout/head.php' ?> --}}
        @include('layout.head')
        <title>SACHIO</title>
        <style>
            * {
                outline: solid 1px green;
                outline: solid 1px transparent;
            }

            .align-center {
                align-self: center;
            }

            .custom-card {
                background-color: #f0f0f0;
                /* Warna awal */
                transition: background-color 0.3s ease;
            }

            .card-title {
                position: relative;
                display: inline-block;
                padding-bottom: 10px;
                color: #000;
                /* Warna teks awal */
                transition: color 0.3s ease;
            }

            .card-title::after {
                content: "";
                position: absolute;
                left: 0;
                bottom: 0;
                width: 30px;
                height: 4px;
                background-color: #0057b8;
                /* Warna garis awal */
                transition: background-color 0.3s ease;
            }

            /* Efek hover */
            .custom-card:hover {
                background-color: #0057b8;
                /* Ubah warna card ke biru */
            }

            .custom-card:hover .card-title {
                color: #ffffff;
                /* Ubah teks ke putih */
            }

            .custom-card:hover .card-title::after {
                background-color: #ffffff;
                /* Ubah garis ke putih */
            }
        </style>
    </head>

    <body>
        <div class="page ">
            <header class="page-header">
                {{-- <?php include 'layout/navbar.php' ?> --}}
                @include('layout.navbar')
            </header><!-- end page wrapper -->
            <main class="page-content">
                <section>
                    <div class="container">
                        <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-5 gx-3 row-gap-3 gx-xl-4">
                            <div class="col">
                                <div class="card custom-card border-0 rounded-0">
                                    <div class="card-body">
                                        <h5 class="card-title">Pneumatic Cylinders</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-0 custom-card rounded-0">
                                    <div class="card-body">
                                        <h5 class="card-title">Fluid Solenoid Valve</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-0 custom-card rounded-0">
                                    <div class="card-body">
                                        <h5 class="card-title">Air Source Treatment Units</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-0 custom-card rounded-0">
                                    <div class="card-body">
                                        <h5 class="card-title">Pneumatic Accessories</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-0 custom-card rounded-0">
                                    <div class="card-body">
                                        <h5 class="card-title">Directional Valves</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="container">
                        <div class="row border-bottom">
                            <div class="col-3 col-lg-3 ps-0 align-self-center">
                                <img src="../assets/img/gambar/image-home-pneumatics.png" class="img-fluid" alt="Pneumatics">
                            </div>
                            <div class="col-9 col-lg-9">
                                <h5 class="display-4 text-blue">
                                    <span class="fw-medium">Our Product Line</span>
                                </h5>
                                <div class="col py-2">
                                    <p class="text-justify">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    </p>
                                </div><!-- end col -->
                            </div>
                        </div>
                    </div><!-- end container -->
                </section>
                <section>
                    <div class="container">
                        <div class="d-flex align-items-start">
                            <div class="col-2 col-lg-3 ps-0">
                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <button class="nav-link card border-0 rounded-0 active" id="pills-pneumatic-tab" data-bs-toggle="pill" data-bs-target="#pills-pneumatic" type="button" role="tab" aria-controls="pills-pneumatic" aria-selected="true">
                                        <div class="card-body">
                                            <h5 class="card-produk">Pneumatic Cylinders</h5>
                                        </div>
                                    </button>
                                    <button class="nav-link card border-0 rounded-0" id="pills-solenoid-tab" data-bs-toggle="pill" data-bs-target="#pills-solenoid" type="button" role="tab" aria-controls="pills-solenoid" aria-selected="false">
                                        <div class="card-body">
                                            <h5 class="card-produk">Fluid Solenoid Valve</h5>
                                        </div>
                                    </button>
                                    <button class="nav-link card border-0 rounded-0" id="pills-air-tab" data-bs-toggle="pill" data-bs-target="#pills-air" type="button" role="tab" aria-controls="pills-air" aria-selected="false">
                                        <div class="card-body">
                                            <h5 class="card-produk">Air Source Treatment Units</h5>
                                        </div>
                                    </button>
                                    <button class="nav-link card border-0 rounded-0" id="pills-accessories-tab" data-bs-toggle="pill" data-bs-target="#pills-accessories" type="button" role="tab" aria-controls="pills-accessories" aria-selected="false">
                                        <div class="card-body">
                                            <h5 class="card-produk">Pneumatic Accessories</h5>
                                        </div>
                                    </button>
                                    <button class="nav-link card border-0 rounded-0" id="pills-directional-tab" data-bs-toggle="pill" data-bs-target="#pills-directional" type="button" role="tab" aria-controls="pills-directional" aria-selected="false">
                                        <div class="card-body">
                                            <h5 class="card-produk">Directional Valves</h5>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <div class="col-9 col-lg-9">
                                <div class="tab-kontent tab-kontent" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active text-dark" id="pills-pneumatic" role="tabpanel" aria-labelledby="pills-pneumatic-tab" tabindex="0">
                                        <div class="row border-bottom">
                                            <div class="col-3 col-lg-3 ps-0 align-self-center">
                                                <img src="../assets/img/gambar/image-home-pneumatics.png" class="img-fluid" alt="Pneumatics">
                                            </div>
                                            <div class="col-9 col-lg-9">
                                                <h5 class="text-blue">
                                                    <span class="fw-light">Our Product Line</span>
                                                </h5>
                                                <div class="col py-2">
                                                    <p class="text-justify">
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </p>
                                                </div><!-- end col -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade text-dark" id="pills-solenoid" role="tabpanel" aria-labelledby="pills-solenoid-tab" tabindex="0">
                                        Konten untuk Fluid Solenoid Valve
                                    </div>
                                    <div class="tab-pane fade text-dark" id="pills-air" role="tabpanel" aria-labelledby="pills-air-tab" tabindex="0">
                                        Konten untuk Air Source Treatment Units
                                    </div>
                                    <div class="tab-pane fade text-dark" id="pills-accessories" role="tabpanel" aria-labelledby="pills-accessories-tab" tabindex="0">
                                        Konten untuk Pneumatic Accessories
                                    </div>
                                    <div class="tab-pane fade text-dark" id="pills-directional" role="tabpanel" aria-labelledby="pills-directional-tab" tabindex="0">
                                        Konten untuk Directional Valves
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main><!-- end page content -->
            <div class="connect bg-blue text-white py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-lg-6 align-self-center">
                            <h4 class="m-0 fw-light">Stay Connected with Us</h4>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 ms-auto">
                            <div class="input-group align-items-center">
                                <input class="form-control border-0 border-1 rounded-0" name="email" placeholder="Masukan alamat email" onmouseover="this.select()">
                                <button class="btn btn-dark rounded-0 text-white btn-popup" id="btnSub" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="page-footer">
                {{-- <?php include 'layout/footbar.php' ?> --}}
                @include('layout.footbar')
            </footer><!-- end page footer -->
        </div><!-- end page -->
        <script src="../assets/js/script.js"></script>
    </body>

    </html>
