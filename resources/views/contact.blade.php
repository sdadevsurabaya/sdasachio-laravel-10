@extends('layouts.layout')

@section('content')
    <section>
        <div class="container">
            <h5 class="display-5 text-blue">
                <span class="">Get in Touch</span>
            </h5>
            <p></p>
            <div class="row gx-lg-5 row-gap-5 justify-content-lg-between">
                <!-- end col -->
                <div class="col col-12 col-lg-6 pe-lg-5">
                    <form action="contact_process.php" method="POST" class="d-flex flex-column row-gap-4"
                        style="max-width: calc(36rem + 2vw);">

                        <div class="form-group">
                            <input type="text"
                                class="form-control fs-6 form-control-lg rounded-0 border-secondary opacity-50 fw-light"
                                placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <input type="email"
                                class="form-control fs-6 form-control-lg rounded-0 border-secondary opacity-50 fw-light"
                                placeholder="Email Address" name="email">
                        </div>
                        <div class="form-group">
                            <input type="text"
                                class="form-control fs-6 form-control-lg rounded-0 border-secondary opacity-50 fw-light"
                                placeholder="Alamat" name="Alamat">
                        </div>
                        <div class="form-group">
                            <input type="number"
                                class="form-control fs-6 form-control-lg rounded-0 border-secondary opacity-50 fw-light"
                                placeholder="Contact Number" name="contact_number">
                        </div>
                        <div class="form-group">
                            <textarea name="message" rows="10" id=""
                                class="form-control fs-6 rounded-0 border-secondary opacity-50 fw-light"></textarea>
                        </div>

                        <!-- <div class="form-group">
                                                <img src="generate-captcha.php" alt="CAPTCHA" id="captcha-img">
                                                <button type="button" class="btn btn-sm btn-outline-secondary" onclick="document.getElementById('captcha-img').src='generate-captcha.php?'+Date.now();">
                                                    ↻
                                                </button>
                                                <input type="text" name="captcha" class="form-control fs-6 form-control-lg rounded-0 border-secondary opacity-50 fw-light" placeholder="Enter Captcha" required="">
                                            </div> -->

                        <div class="form-group pt-3">
                            <button class="btn btn-dark btn-lg text-white rounded-0 w-100">Submit</button>
                        </div>
                    </form>

                </div><!-- end col -->

                <div class="col col-12 col-lg-6 border-start ps-lg-5">
                    <h5 class="fs-3 mb-4 text-blue">
                        <span class="fw-medium">Address</span>
                    </h5>
                    <style>
                        .contact-list {
                            max-width: 42rem;
                        }

                        /* Untuk layar tablet (ukuran antara 768px - 1024px) */
                        @media (min-width: 768px) and (max-width: 1024px) {
                            .contact-list {
                                max-width: 28rem;
                            }
                        }
                    </style>
                    <ul class="list-unstyled contact-list row g-3">
                        <h5 class="fw-normal">
                            PT. SACHIO INDONESIA <br>
                            Fluid Power, Engineering & Industrial
                        </h5>
                        <li class="contact-item col-12">
                            <h5 class="fw-medium ">Head Office:</h5>
                            <p class="fw-normal text-nowrap">
                                Jl. Margomulyo Indah 1A No. 7-8 <br>
                                Kec. Tandes, Surabaya 60186 <br>
                                Jawa Timur - Indonesia <br>
                                T: +62 31 748 2190
                            </p>
                        </li><!-- end contact item -->
                        <li class="contact-item col-12">
                            <h5 class="fw-medium">Jakarta Branch:</h5>
                            <p class="fw-normal text-nowrap">
                                Komp. Puri Mutiara Blok BD No. 8 <br>
                                Jl. Raya Griya Utama <br>
                                Sunter Agung, Kec. Tanjung Priok <br>
                                Jakarta Utara 14350 - Indonesia <br>
                                T: +62 21 3888 8800
                            </p>
                        </li><!-- end contact item -->
                        <li class="contact-item col-12">
                            <h5 class="fs-3 fw-medium text-blue">Phone</h5>
                            <p class="fs-4 m-0 fw-medium">+62 31 748 2190</p>
                            <p class="fs-4 m-0 fw-medium">+62 748 2193</p>
                        </li>
                        <li class="contact-item col-12">
                            <h5 class="fs-3 fw-medium text-blue">Email</h5>
                            <p class="fs-4 m-0 fw-medium">info@sachio.com</p>
                        </li>
                    </ul><!-- end contact list -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <section>
        <div class="container">
            <div class="d-lg-flex d-block justify-content-between">
                <div class="col col-md-5 bg-blue align-items-center justify-content-center p-4">
                    <div class="bg-white p-4">
                        <select class="form-select mb-4" aria-label="Select location">
                            <option selected="">Jakarta</option>
                        </select>
                        <div>
                            <p class="fw-bold mb-2">PT. SACHIO INDONESIA</p>
                            <p class="mb-0" style="line-height:1.4;">
                                Jakarta Branch:<br>
                                Komp. Puri Mutiara Blok BD No. 8<br>
                                Jl. Raya Griya Utama<br>
                                Sunter Agung, Kec. Tanjung Priok<br>
                                Jakarta Utara 14350 - Indonesia<br>
                                T: +62 21 3888 8800
                            </p>
                        </div>
                        <button type="button" class="btn btn-dark text-white w-100 mt-4 py-3">Get Direction</button>
                    </div>
                </div>
                <div class="col col-12 col-lg-7 p-lg-4 mb-sm-0">
                    <div class="ratio ratio-16x9">
                        <img src="https://storage.googleapis.com/a1aa/image/bcf9c4f0-c1cd-414f-bdd9-2de0a0db0ed8.jpg"
                            class="object-fit-cover" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



<html lang="en">

<head>
    <?php include 'layout/head.php'; ?>
    <title>SACHIO</title>
    <style>
        * {
            outline: solid 1px green;
            outline: solid 1px transparent;
        }

        .align-center {
            align-self: center;
        }
    </style>
</head>

<body>
    <div class="page ">
        <header class="page-header">
            <?php include 'layout/navbar.php'; ?>
        </header><!-- end page wrapper -->
        <main class="page-content">

        </main><!-- end page content -->
        <div class="connect bg-blue text-white py-3">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-lg-6 align-self-center">
                        <h4 class="m-0 fw-light">Stay Connected with Us</h4>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 ms-auto">
                        <div class="input-group align-items-center">
                            <input class="form-control border-0 border-1 rounded-0" name="email"
                                placeholder="Masukan alamat email" onmouseover="this.select()">
                            <button class="btn btn-dark rounded-0 text-white btn-popup" id="btnSub"
                                type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="page-footer">
            <?php include 'layout/footbar.php'; ?>
        </footer><!-- end page footer -->
    </div><!-- end page -->
    <script src="../assets/js/script.js"></script>
</body>

</html>
