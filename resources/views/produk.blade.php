@extends('layouts.layout')

@section('content')
    <section>
        <div class="container">
            <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-5 gx-3 row-gap-3 gx-xl-4">
                <div class="col">
                    <a href="produk.php" class="text-decoration-none">
                        <div class="card custom-card border-0 rounded-0">
                            <div class="card-body">
                                <h5 class="card-title">Pneumatic Cylinders</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="produk.php" class="text-decoration-none">
                        <div class="card border-0 custom-card rounded-0">
                            <div class="card-body">
                                <h5 class="card-title">Fluid Solenoid Valve</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="produk.php" class="text-decoration-none ">
                        <div class="card border-0 custom-card rounded-0">
                            <div class="card-body">
                                <h5 class="card-title">Air Source Treatment Units</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="produk.php" class="text-decoration-none">
                        <div class="card border-0 custom-card rounded-0">
                            <div class="card-body">
                                <h5 class="card-title">Pneumatic Accessories</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="produk.php" class="text-decoration-none">
                        <div class="card border-0 custom-card rounded-0">
                            <div class="card-body">
                                <h5 class="card-title">Directional Valves</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="border-bottom">
                <div class="row">
                    <div class="col col-12 col-lg-auto align-self-center mb-lg-0 mb-3 " style="width: 265px;">
                        <img src="../assets/img/gambar/image-home-pneumatics.png" class="img-fluid" alt="Pneumatics">
                    </div>
                    <div class="col col-12 col-lg">
                        <h5 class="display-lg-4 fs-2 text-blue">
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
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col col-12  col-lg-auto trilling">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link card border-0 rounded-0 active" id="pills-pneumatic-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-pneumatic" type="button" role="tab"
                            aria-controls="pills-pneumatic" aria-selected="true">
                            <a href="#" class="text-decoration-none">
                                <div class="card-body p-2">
                                    <h5 class="card-produk">Pneumatic Cylinders</h5>
                                </div>
                            </a>
                        </button>
                        <button class="nav-link card border-0 rounded-0" id="pills-solenoid-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-solenoid" type="button" role="tab" aria-controls="pills-solenoid"
                            aria-selected="false">
                            <a href="#" class="text-decoration-none">
                                <div class="card-body p-2">
                                    <h5 class="card-produk">Fluid Solenoid Valve</h5>
                                </div>
                            </a>
                        </button>
                        <button class="nav-link card border-0 rounded-0" id="pills-air-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-air" type="button" role="tab" aria-controls="pills-air"
                            aria-selected="false">
                            <a href="#" class="text-decoration-none">
                                <div class="card-body p-2">
                                    <h5 class="card-produk">Air Source Treatment Units</h5>
                                </div>
                            </a>
                        </button>
                        <button class="nav-link card border-0 rounded-0" id="pills-accessories-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-accessories" type="button" role="tab"
                            aria-controls="pills-accessories" aria-selected="false">
                            <a href="#" class="text-decoration-none">
                                <div class="card-body p-2">
                                    <h5 class="card-produk">Pneumatic Accessories</h5>
                                </div>
                            </a>
                        </button>
                        <button class="nav-link card border-0 rounded-0" id="pills-directional-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-directional" type="button" role="tab"
                            aria-controls="pills-directional" aria-selected="false">
                            <a href="#" class="text-decoration-none">
                                <div class="card-body p-2">
                                    <h5 class="card-produk">Directional Valves</h5>
                                </div>
                            </a>
                        </button>

                    </div>
                </div>
                <div class="col col-12 col-lg">
                    <div class="tab-kontent tab-kontent" id="v-pills-tabContent">
                        <div class="tab-pane fade show active text-dark" id="pills-pneumatic" role="tabpanel"
                            aria-labelledby="pills-pneumatic-tab" tabindex="0">


                            @foreach ($products as $product)
                                <div class="row mb-3">
                                    <div class="col-4 col-lg-2 align-self-center">
                                        <img src="../assets/img/gambar/image-home-pneumatics.png" class="img-fluid"
                                            alt="Pneumatics">
                                    </div>
                                    <div class="col-8 col-lg-10">
                                        <h5 class="text-blue">
                                            <span class="fw-normal">{{ $product->name }}</span>
                                        </h5>
                                        <div class="col py-2">
                                            <p class="text-justify">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                                nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                            </p>
                                        </div><!-- end col -->
                                    </div>
                                </div>
                            @endforeach


                        </div>
                        <div class="mt-4">
                            {{ $products->links() }}
                        </div>

                        <div class="tab-pane fade text-dark" id="pills-solenoid" role="tabpanel"
                            aria-labelledby="pills-solenoid-tab" tabindex="0">
                            Konten untuk Fluid Solenoid Valve
                        </div>
                        <div class="tab-pane fade text-dark" id="pills-air" role="tabpanel"
                            aria-labelledby="pills-air-tab" tabindex="0">
                            Konten untuk Air Source Treatment Units
                        </div>
                        <div class="tab-pane fade text-dark" id="pills-accessories" role="tabpanel"
                            aria-labelledby="pills-accessories-tab" tabindex="0">
                            Konten untuk Pneumatic Accessories
                        </div>
                        <div class="tab-pane fade text-dark" id="pills-directional" role="tabpanel"
                            aria-labelledby="pills-directional-tab" tabindex="0">
                            Konten untuk Directional Valves
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
