@extends('layouts.layout')
<style>
    .item .title {
        font-size: 1.2rem;
    }

    .item ul li {
        font-size: 0.9rem;
        list-style-type: disc;
    }

    .item .select {
        font-size: 0.9rem
    }

    ol,
    ul {
        padding-left: 1.3rem !important;
    }

    ::marker {
        color: #005fb9;
        font-size: 1.2rem
    }
</style>
@section('content')
    @php
        // Ambil segment kedua setelah "/category/"
        $currentCategory = request()->segment(2);
    @endphp
    <section>
        <div class="container">
            <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-5 gx-3 row-gap-3 gx-xl-4">
                @foreach ($categories as $cat)
                    <div class="col">
                        <a href="{{ url('/category/' . $cat->slug) }}" class="text-decoration-none">
                            <div
                                class="card custom-card border-0 rounded-0 {{ $currentCategory === $cat->slug ? 'active' : '' }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $cat->local_title }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="border-bottom">
                <div class="row">
                    <div class="col col-12 col-lg-auto align-self-center mb-lg-0 mb-3 " style="width: 265px;">
                        {{-- <img src="../assets/img/gambar/image-home-pneumatics.png" class="img-fluid" alt="Pneumatics"> --}}
                    </div>
                    <div class="col col-12 col-lg">
                        <h5 class="display-lg-4 fs-2 text-blue">
                            <span class="fw-medium">Our Product Line</span>
                        </h5>
                        <div class="col py-2">
                            <p class="text-justify">
                                @lang('produk.product_subtitle')
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
                        @foreach ($categories as $cat)
                            @php
                                // bikin id unik untuk tab
                                $tabId = 'pills-' . Str::slug($cat->slug, '-');
                            @endphp
                            <button
                                class="nav-link card border-0 rounded-0 {{ $currentCategory === $cat->slug ? 'active' : '' }}"
                                id="{{ $tabId }}-tab" data-bs-toggle="pill" data-bs-target="#pills-content"
                                {{-- semua ke konten yang sama karena konten di-render dengan $products --}} type="button" role="tab" aria-controls="{{ $tabId }}"
                                aria-selected="{{ $currentCategory === $cat->slug ? 'true' : 'false' }}">
                                <a href="{{ url('/category/' . $cat->slug) }}" class="text-decoration-none">
                                    <div class="card-body p-2">
                                        <h5 class="card-produk">{{ $cat->local_title }}</h5>
                                    </div>
                                </a>
                            </button>
                        @endforeach
                    </div>
                </div>
                <div class="col col-12 col-lg">
                    <div class="tab-kontent tab-kontent" id="v-pills-tabContent">
                        <div class="tab-pane fade show active text-dark" id="pills-pneumatic" role="tabpanel"
                            aria-labelledby="pills-pneumatic-tab" tabindex="0">
                            @foreach ($products as $product)
                                <div class="row mb-3">
                                    <div class="col-4 col-lg-2 align-self-center">
                                        {{-- <img src="../assets/img/gambar/image-home-pneumatics.png" class="img-fluid"
                                            alt="Pneumatics"> --}}
                                        @php
                                            $mainImage = $product->images->first();
                                        @endphp
                                        <img src="{{ $mainImage ? asset('storage/' . $mainImage->image) : asset('assets/img/default.png') }}"
                                            class="img-fluid" alt="{{ $product->name }}">
                                    </div>
                                    <div class="col-8 col-lg-10">
                                        <div class="col py-2 item d-flex justify-content-between">

                                            @php
                                                $features = is_array($product->features)
                                                    ? $product->features
                                                    : json_decode($product->features, true);
                                            @endphp

                                            @if ($features)
                                                <div class="div">
                                                    <h5 class="title text-blue">
                                                        <span class="fw-normal">{{ $product->name }}</span>
                                                    </h5>
                                                    <ul class="mb-2">
                                                        @foreach ($features as $key => $value)
                                                            <li><strong>{{ $key }}:</strong> {{ $value }}
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            @if ($product->group_product && isset($subGroups[$product->group_product]))
                                                <div class="col-3 select mb-2 ">
                                                    <label class="form-label fw-semibold">Subordinate Category</label>

                                                    <select class="form-select"
                                                        onchange="if(this.value) window.location.href=this.value;">
                                                        <option selected disabled>Choose sub series</option>
                                                        @foreach ($subGroups[$product->group_product] as $sub)
                                                            <option
                                                                value="{{ url('category/' . $sub->category->slug . '/' . $sub->slug) }}">
                                                                {{ $sub->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            @endif

                                        </div><!-- end col -->
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        </div>
                        <div class="mt-5 justify-content-center d-flex">
                            {{ $products->withQueryString()->links('pagination::bootstrap-5') }}
                        </div>
                        <div class="tab-pane fade text-dark" id="pills-solenoid" role="tabpanel"
                            aria-labelledby="pills-solenoid-tab" tabindex="0">
                            Konten untuk Fluid Solenoid Valve
                        </div>
                        <div class="tab-pane fade text-dark" id="pills-air" role="tabpanel" aria-labelledby="pills-air-tab"
                            tabindex="0">
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
    <script>
        $('#nav-produk').addClass('active');
    </script>
@endsection
{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.custom-card');

        cards.forEach(card => {
            card.addEventListener('click', function(e) {
                e
                    .preventDefault(); // Biar nggak langsung pindah halaman (hapus kalau mau langsung redirect)

                // Hapus active dari semua card
                cards.forEach(c => c.classList.remove('active'));

                // Tambahkan active ke card yang diklik
                this.classList.add('active');
            });
        });
    });
</script> --}}
{{-- <script>
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.custom-card');

    // Cek card terakhir yang aktif di localStorage
    const activeUrl = localStorage.getItem('activeCardUrl');
    if (activeUrl) {
        cards.forEach(card => {
            const parentLink = card.closest('a');
            if (parentLink && parentLink.href === activeUrl) {
                card.classList.add('active');
            }
        });
    }

    // Event klik
    cards.forEach(card => {
        const parentLink = card.closest('a');
        if (parentLink) {
            parentLink.addEventListener('click', function() {
                // Simpan URL card yang diklik ke localStorage
                localStorage.setItem('activeCardUrl', this.href);
            });
        }
    });
});
</script> --}}
