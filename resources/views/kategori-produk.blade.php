@extends('layouts.layout')

@section('content')
    <section class="page-section">
        <div class="container">
            <h5 class="fs-3 text-blue">
                <span class="fw-medium">Our Product Line</span>
            </h5>
            <div class="col py-2">
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </p>
            </div><!-- end col -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 gx-3 row-gap-3 gx-xl-4">
                @foreach ($categories as $category)
                    <div class="col">
                        <a href="{{ route('category.show', $category->slug) }}" class="text-decoration-none">
                            <div class="card h-100 rounded-0 border-0">
                                <div class="card-header border-0 ratio ratio-1x1">
                                    <img src="../assets/img/gambar/image-home-pneumatics.png" class="object-fit-cover"
                                        alt="">
                                </div>
                                <div class="card-body ps-0">
                                    <div class="title">
                                        <h5 class="fw-medium text-blue ">{{ $category->name }}</h5>
                                    </div>
                                    <div class="desc">
                                        <p class="fw-light">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                            euismod tincidunt ut laoreet dolor
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach


            </div>
        </div><!-- end container -->
    </section>
@endsection
