@extends('layouts.layout')

@section('content')
    <section class="page-section">
        <div class="container">
            <div class="row">
                {{-- Gambar --}}
                @php
                    $images = $product->images;
                    $mainImage = $images->first();
                @endphp
                <div class="col-md-6 {{ !$mainImage ? 'd-none' : '' }}">


                    <div class="text-center mb-3">
                        @if ($mainImage && $mainImage->image)
                            <img id="main-image" src="{{ asset('storage/' . $mainImage->image) }}" class="img-fluid"
                                style="max-height: 300px;">
                        @else
                            <img id="main-image" src="{{ asset('images/no-image.png') }}" class="img-fluid"
                                style="max-height: 300px;">
                        @endif
                    </div>

                    @if ($images && $images->count())
                        <div class="d-flex justify-content-center gap-2">
                            @foreach ($images as $img)
                                @if ($img->image)
                                    <img src="{{ asset('storage/' . $img->image) }}" class="img-thumbnail"
                                        style="width: 80px; height: 80px; cursor: pointer;"
                                        onclick="changeMainImage('{{ asset('storage/' . $img->image) }}')">
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>

                {{-- Deskripsi --}}
                <div class="col-md-6">
                    <div class="text-muted mb-1">
                        SERIES: {{ strtoupper($product->name) }}
                    </div>
                    <h3 class="fw-bold">
                        {{ strtoupper($product->name) }} - {{ $product->sku ?? '-' }}
                    </h3>

                    <hr>

                    @if ($product->features)
                        <h5 class="mb-2">FEATURES</h5>
                        <ul class="list-unstyled">
                            @foreach ($product->features as $key => $val)
                                <li class="mb-1">
                                    <span class="text-primary">●</span>
                                    <strong>{{ $key }}:</strong> {{ $val }}
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="mt-4 d-flex gap-2">
                        <a href="{{ url('/contact?product=' . $product->name) }}" class="btn btn-primary text-white">Send
                            Inquiry</a>
                        @if ($product->download_url)
                            <a href="{{ $product->download_url }}" class="btn btn-dark text-white" target="_blank">Download
                                Catalog</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="mb-3">
                <div class="p-3">
                    {!! $product->description !!}
                </div>
            </div>
            <a href="{{ route('back.admin.product.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        function changeMainImage(url) {
            document.getElementById('main-image').src = url;
        }

        $(function() {
            $("img").addClass("img-fluid");
        });
    </script>
@endsection
