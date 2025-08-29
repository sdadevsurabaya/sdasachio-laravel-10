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
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37889.534669306646!2d112.66902143718794!3d-7.24166355999649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fef3d5aaebf9%3A0x1b9761bc6a8abc7c!2sPT.%20SDA%20Global!5e1!3m2!1sid!2sid!4v1756448882308!5m2!1sid!2sid"
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
                map: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37889.534669306646!2d112.66902143718794!3d-7.24166355999649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fef3d5aaebf9%3A0x1b9761bc6a8abc7c!2sPT.%20SDA%20Global!5e1!3m2!1sid!2sid!4v1756449148150!5m2!1sid!2sid",
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
                map: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8481889654693!2d106.87750937499182!3d-6.152388860158833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f59ffb1c2a7b%3A0x1234567890abcdef!2sKomp.+Puri+Mutiara+Blok+BD+No.+8!5e0!3m2!1sid!2sid!4v1756462222332!5m2!1sid!2sid",
                direction: "https://www.google.com/maps/dir/?api=1&destination=Komp.+Puri+Mutiara+Blok+BD+No.+8,+Jakarta"
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
                map: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37889.534669306646!2d112.66902143718794!3d-7.24166355999649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f946c8d959b5%3A0xc2d2e219e8d38e3d!2sSDA%20Global!5e1!3m2!1sid!2sid!4v1756450699239!5m2!1sid!2sid",
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
                map: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.993454090326!2d110.42250937500212!3d-6.982388960157777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b123456789%3A0xabcdefabcdefabcd!2sKomp.+THD+Blok+C+No.+26,+Semarang!5e0!3m2!1sid!2sid!4v1756462333333!5m2!1sid!2sid",
                direction: "https://www.google.com/maps/dir/?api=1&destination=Komp.+THD+Blok+C+No.+26,+Semarang"
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
                map: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.123456789012!2d107.1265093749955!3d-6.313388960123456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6999123456789%3A0xabcdefabcdefabcd!2sDelta+Silicon+III,+Cikarang!5e0!3m2!1sid!2sid!4v1756462388888!5m2!1sid!2sid",
                direction: "https://www.google.com/maps/dir/?api=1&destination=Jl.+Kapuk+Timur+Blok+F23+No.+11AB,+Cikarang"
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
                map: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.987654321012!2d116.8745093749981!3d-1.263388960145678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df1234567890%3A0xabcdefabcdefabcd!2sJl.+Mayjend.+Sutoyo+No.+39,+Balikpapan!5e0!3m2!1sid!2sid!4v1756462444444!5m2!1sid!2sid",
                direction: "https://www.google.com/maps/dir/?api=1&destination=Jl.+Mayjend.+Sutoyo+No.+39,+Balikpapan"
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
