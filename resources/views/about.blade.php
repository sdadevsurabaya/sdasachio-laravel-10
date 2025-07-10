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
                <section class="mb-0 position-relative" style="background-color: var(--color-default);">
                    <div class="container py-5">
                        <div class="row">
                            <div class="col text-end">
                                <span class="fw-medium text-blue display-4">33</span><br>
                                <span>Years of Experience</span>
                            </div>
                            <div class="col text-start border-start" style="border-color: #005fb9 !important;">
                                <span class="fw-medium text-blue display-4">177</span><br>
                                <span>Employess</span>
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
