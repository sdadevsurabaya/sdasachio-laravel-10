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
                        <!-- Head Office -->
                        <li class="contact-item col-12">
                            <h5 class="fw-medium">Head Office</h5>
                            <p class="fw-normal">
                                Jl. Margomulyo Indah 1A No. 7-8 <br>
                                Surabaya 60186, Jawa Timur - Indonesia
                            </p>
                            <p class="fw-normal">
                                Telephone: +62 31 748 2190, 748 2191 <br>
                                WhatsApp: +62 812 2088 8800 <br>
                                Email: headoffice@sda.co.id
                            </p>
                        </li>

                        <!-- Jakarta Office -->
                        <li class="contact-item col-12">
                            <h5 class="fw-medium">Jakarta Office</h5>
                            <p class="fw-normal">
                                Komp. Puri Mutiara Blok BD No. 8 <br>
                                Jl. Raya Griya Utama <br>
                                Sunter Agung, Kec. Tanjung Priok <br>
                                Jakarta Utara 14350 - Indonesia
                            </p>
                            <p class="fw-normal">
                                Telephone: +62 21 3888 8800 <br>
                                WhatsApp: +62 813 1833 8800 <br>
                                Email: jkt@sda.co.id
                            </p>
                        </li>

                        <!-- SDA Surabaya -->
                        <li class="contact-item col-12">
                            <h5 class="fw-medium">SDA Surabaya</h5>
                            <p class="fw-normal">
                                Komp. Raden Saleh Permai Kav. 19-20 <br>
                                Jl. Raden Saleh No. 45 <br>
                                Surabaya 60174, Jawa Timur - Indonesia
                            </p>
                            <p class="fw-normal">
                                Telephone: +62 31 546 8800, 546 7700 <br>
                                WhatsApp: +62 811 1066 8800 <br>
                                Email: sby@sda.co.id
                            </p>
                        </li>

                        <!-- SDA Semarang -->
                        <li class="contact-item col-12">
                            <h5 class="fw-medium">SDA Semarang</h5>
                            <p class="fw-normal">
                                Komp. THD Blok C No. 26 <br>
                                Jl. KH. Agus Salim <br>
                                Purwodinatan, Semarang 50137 <br>
                                Jawa Tengah - Indonesia
                            </p>
                            <p class="fw-normal">
                                Telephone: +62 24 8657 8800 <br>
                                WhatsApp: +62 813 1822 8800 <br>
                                Email: srg@sda.co.id
                            </p>
                        </li>

                        <!-- SDA Cikarang -->
                        <li class="contact-item col-12">
                            <h5 class="fw-medium">SDA Cikarang</h5>
                            <p class="fw-normal">
                                Jl. Kapuk Timur Blok F23 No. 11AB <br>
                                Delta Silicon III, Cicau, Cikarang 17530 <br>
                                Bekasi, Jawa Barat - Indonesia
                            </p>
                            <p class="fw-normal">
                                Telephone: +62 21 8997 9880 <br>
                                WhatsApp: +62 813 1877 8800 <br>
                                Email: ckr@sda.co.id
                            </p>
                        </li>

                        <!-- SDA Balikpapan -->
                        <li class="contact-item col-12">
                            <h5 class="fw-medium">SDA Balikpapan</h5>
                            <p class="fw-normal">
                                Jl. Mayjend. Sutoyo No. 39 <br>
                                Gunung Sari Ulu, Balikpapan 76122 <br>
                                Kalimantan Timur - Indonesia
                            </p>
                            <p class="fw-normal">
                                Telephone: +62 542 776 8800 <br>
                                WhatsApp: +62 813 1855 8800 <br>
                                Email: bpp@sda.co.id
                            </p>
                        </li>

                        <li class="contact-item col-12">
                            <h5 class="fs-3 fw-medium text-blue">Phone</h5>
                            <p class="fs-4 m-0 fw-medium">+62 31 748 2190</p>
                            <p class="fs-4 m-0 fw-medium">+62 748 2193</p>
                        </li>
                        <li class="contact-item col-12">
                            <h5 class="fs-3 fw-medium text-blue">Email</h5>
                            <p class="fs-4 m-0 fw-medium">info@sachio.com</p>
                        </li>
                    </ul>
                    <!-- end contact list -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <section>
        <div class="container">
            <div class="d-lg-flex d-block justify-content-between">
                <!-- Bagian Kiri -->
                <div class="col col-md-5 bg-blue align-items-center justify-content-center p-4">
                    <div class="bg-white p-4">
                        <select class="form-select mb-4" id="locationSelect" aria-label="Select location">
                            <option value="head_office" selected>Head Office</option>
                            <option value="jakarta">Jakarta Office</option>
                            <option value="sby">SDA Surabaya</option>
                            <option value="semarang">SDA Semarang</option>
                            <option value="cikarang">SDA Cikarang</option>
                            <option value="balikpapan">SDA Balikpapan</option>
                        </select>

                        <div id="branchInfo">
                            <p class="fw-bold mb-2">Head Office</p>
                            <p class="mb-0" style="line-height:1.4;">
                                Jl. Margomulyo Indah 1A No. 7-8<br>
                                Surabaya 60186, Jawa Timur - Indonesia<br>
                                Telephone: +62 31 748 2190, 748 2191<br>
                                WhatsApp: +62 812 2088 8800<br>
                                Email: headoffice@sda.co.id
                            </p>
                        </div>

                        <button id="directionBtn" type="button" class="btn btn-dark text-white w-100 mt-4 py-3">Get
                            Direction</button>
                    </div>
                </div>

                <!-- Bagian Kanan -->
                <div class="col col-12 col-lg-7 p-lg-4 mb-sm-0">
                    <div class="ratio ratio-16x9">
                        <iframe id="mapFrame"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.37246697807447!2d112.6761881871338!3d-7.24545262209964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fef3d5aaebf9%3A0x1b9761bc6a8abc7c!2sPT.%20SDA%20Global!5e0!3m2!1sid!2sid!4v1756455528885!5m2!1sid!2sid"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </section>

@section('scripts')
    <script>
        const locations = {
            head_office: {
                info: `
                <p class="fw-bold mb-2">Head Office</p>
                <p class="mb-0" style="line-height:1.4;">
                    Jl. Margomulyo Indah 1A No. 7-8<br>
                    Surabaya 60186, Jawa Timur - Indonesia<br>
                    Telephone: +62 31 748 2190, 748 2191<br>
                    WhatsApp: +62 812 2088 8800<br>
                    Email: headoffice@sda.co.id
                </p>
            `,
                map: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.37246697807447!2d112.6761881871338!3d-7.24545262209964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fef3d5aaebf9%3A0x1b9761bc6a8abc7c!2sPT.%20SDA%20Global!5e0!3m2!1sid!2sid!4v1756455528885!5m2!1sid!2sid",
                direction: "https://www.google.com/maps/dir/?api=1&destination=-7.245381821225234,112.67639614920121"
            },
            jakarta: {
                info: `
                <p class="fw-bold mb-2">Jakarta Office</p>
                <p class="mb-0" style="line-height:1.4;">
                    Komp. Puri Mutiara Blok BD No. 8<br>
                    Jl. Raya Griya Utama<br>
                    Sunter Agung, Kec. Tanjung Priok<br>
                    Jakarta Utara 14350 - Indonesia<br>
                    Telephone: +62 21 3888 8800<br>
                    WhatsApp: +62 813 1833 8800<br>
                    Email: jkt@sda.co.id
                </p>
            `,
                map: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.91543337208!2d106.85471280000002!3d-6.142061399999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5c876e9fc4d%3A0xd842da5de0d57a1e!2sSDA%20Global!5e0!3m2!1sid!2sid!4v1756455144358!5m2!1sid!2sid",
                direction: "https://www.google.com/maps/dir/?api=1&destination=-6.141869373480886,106.8553350744229"
            },
            sby: {
                info: `
                <p class="fw-bold mb-2">SDA Surabaya</p>
                <p class="mb-0" style="line-height:1.4;">
                    Komp. Raden Saleh Permai Kav. 19-20<br>
                    Jl. Raden Saleh No. 45<br>
                    Surabaya 60174, Jawa Timur - Indonesia<br>
                    Telephone: +62 31 546 8800, 546 7700<br>
                    WhatsApp: +62 811 1066 8800<br>
                    Email: sby@sda.co.id
                </p>
            `,
                map: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.477570387844!2d112.73220396606631!3d-7.251051429820073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f946c8d959b5%3A0xc2d2e219e8d38e3d!2sSDA%20Global!5e0!3m2!1sid!2sid!4v1756455614367!5m2!1sid!2sid",
                direction: "https://www.google.com/maps/dir/?api=1&destination=-7.249408566436806,112.73311387385539"
            },
            semarang: {
                info: `
                <p class="fw-bold mb-2">SDA Semarang</p>
                <p class="mb-0" style="line-height:1.4;">
                    Komp. THD Blok C No. 26<br>
                    Jl. KH. Agus Salim<br>
                    Purwodinatan, Semarang 50137<br>
                    Jawa Tengah - Indonesia<br>
                    Telephone: +62 24 8657 8800<br>
                    WhatsApp: +62 813 1822 8800<br>
                    Email: srg@sda.co.id
                </p>
            `,
                map: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4468546574967!2d110.42938620000002!3d-6.970843599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f326b7960f2f%3A0xcdc595af1172955c!2sSDA%20Global%20-%20Semarang!5e0!3m2!1sid!2sid!4v1756454303348!5m2!1sid!2sid",
                direction: "https://www.google.com/maps/dir/?api=1&destination=-6.970625274218783,110.42942911737607"
            },
            cikarang: {
                info: `
                <p class="fw-bold mb-2">SDA Cikarang</p>
                <p class="mb-0" style="line-height:1.4;">
                    Jl. Kapuk Timur Blok F23 No. 11AB<br>
                    Delta Silicon III, Cicau, Cikarang 17530<br>
                    Bekasi, Jawa Barat - Indonesia<br>
                    Telephone: +62 21 8997 9880<br>
                    WhatsApp: +62 813 1877 8800<br>
                    Email: ckr@sda.co.id
                </p>
            `,
                map: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2223959262014!2d107.1544011!3d-6.3652579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699bbb4282d917%3A0xcf73ce01a1474e3f!2sSDA%20Global%20-%20Cikarang!5e0!3m2!1sid!2sid!4v1756455032698!5m2!1sid!2sid",
                direction: "https://www.google.com/maps/dir/?api=1&destination=-6.3651405958799865,107.15469077912714"
            },
            balikpapan: {
                info: `
                <p class="fw-bold mb-2">SDA Balikpapan</p>
                <p class="mb-0" style="line-height:1.4;">
                    Jl. Mayjend. Sutoyo No. 39<br>
                    Gunung Sari Ulu, Balikpapan 76122<br>
                    Kalimantan Timur - Indonesia<br>
                    Telephone: +62 542 776 8800<br>
                    WhatsApp: +62 813 1855 8800<br>
                    Email: bpp@sda.co.id
                </p>
            `,
                map: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.849168849545!2d116.84655079999999!3d-1.2628905000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df147714a6c7013%3A0x5e28c07f28a633b7!2sSDA%20Global%20-%20Balikpapan!5e0!3m2!1sid!2sid!4v1756455252107!5m2!1sid!2sid",
                direction: "https://www.google.com/maps/dir/?api=1&destination=-1.2626491598222556,116.8466044441736"
            }
        };

        const selectEl = document.getElementById("locationSelect");
        const infoEl = document.getElementById("branchInfo");
        const mapEl = document.getElementById("mapFrame");
        const btnEl = document.getElementById("directionBtn");

        selectEl.addEventListener("change", function() {
            const selected = this.value;
            infoEl.innerHTML = locations[selected].info;
            mapEl.src = locations[selected].map;
            btnEl.onclick = () => window.open(locations[selected].direction, "_blank");
        });

        // default (Head Office)
        btnEl.onclick = () => window.open(locations['head_office'].direction, "_blank");
    </script>
@endsection
@endsection
