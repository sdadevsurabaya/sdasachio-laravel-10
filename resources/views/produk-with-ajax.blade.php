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
    <section>
        <div class="container">
            <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-5 gx-3 row-gap-3 gx-xl-4">
                <div class="col">
                    <a href="{{ url('/category/pneumatic_cylinders') }}" class="text-decoration-none">
                        <div class="card custom-card border-0 rounded-0">
                            <div class="card-body">
                                <h5 class="card-title">Pneumatic Cylinders</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{ url('/category/air_source_treatment_units') }}" class="text-decoration-none">
                        <div class="card border-0 custom-card rounded-0">
                            <div class="card-body">
                                <h5 class="card-title">Air Source Treatment Units</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{ url('/category/directional_valves') }}" class="text-decoration-none ">
                        <div class="card border-0 custom-card rounded-0">
                            <div class="card-body">
                                <h5 class="card-title">Directional Valves</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{ url('/category/fluid_solenoid_valve') }}" class="text-decoration-none">
                        <div class="card border-0 custom-card rounded-0">
                            <div class="card-body">
                                <h5 class="card-title">Fluid Solenoid Valve</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{ url('/category/pneumatic_accessories') }}" class="text-decoration-none">
                        <div class="card border-0 custom-card rounded-0">
                            <div class="card-body">
                                <h5 class="card-title">Pneumatic Accessories</h5>
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
                        {{-- <img src="../assets/img/gambar/image-home-pneumatics.png" class="img-fluid" alt="Pneumatics"> --}}
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
                <div class="col col-12 col-lg-auto trilling">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-tabs nav-link card border-0 rounded-0 active" id="pills-pneumatic-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-pneumatic" type="button" role="tab"
                            aria-controls="pills-pneumatic" aria-selected="true" data-slug="pneumatic_cylinders">
                            <a href="#" class="text-decoration-none">
                                <div class="card-body p-2">
                                    <h5 class="card-produk">Pneumatic Cylinders</h5>
                                </div>
                            </a>
                        </button>
                        <button class="nav-tabs nav-link card border-0 rounded-0" id="pills-air-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-air" type="button" role="tab" aria-controls="pills-air"
                            aria-selected="false" data-slug="air_source_treatment_units">
                            <a href="#" class="text-decoration-none">
                                <div class="card-body p-2">
                                    <h5 class="card-produk">Air Source Treatment Units</h5>
                                </div>
                            </a>
                        </button>
                        <button class="nav-tabs nav-link card border-0 rounded-0" id="pills-directional-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-directional" type="button" role="tab"
                            aria-controls="pills-directional" aria-selected="false" data-slug="directional_valves">
                            <a href="#" class="text-decoration-none">
                                <div class="card-body p-2">
                                    <h5 class="card-produk">Directional Valves</h5>
                                </div>
                            </a>
                        </button>
                        <button class="nav-tabs nav-link card border-0 rounded-0" id="pills-solenoid-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-solenoid" type="button" role="tab"
                            aria-controls="pills-solenoid" aria-selected="false" data-slug="fluid_solenoid_valve">
                            <a href="#" class="text-decoration-none">
                                <div class="card-body p-2">
                                    <h5 class="card-produk">Fluid Solenoid Valve</h5>
                                </div>
                            </a>
                        </button>

                        <button class="nav-tabs nav-link card border-0 rounded-0" id="pills-accessories-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-accessories" type="button" role="tab"
                            aria-controls="pills-accessories" aria-selected="false" data-slug="pneumatic_accessories">
                            <a href="#" class="text-decoration-none">
                                <div class="card-body p-2">
                                    <h5 class="card-produk">Pneumatic Accessories</h5>
                                </div>
                            </a>
                        </button>

                    </div>
                </div>
                <div class="col col-12 col-lg">
                    <div class="tab-kontent" id="v-pills-tabContent">
                        <div class="tab-pane fade show active text-dark" id="pills-pneumatic" role="tabpanel"
                            aria-labelledby="pills-pneumatic-tab" tabindex="0">
                            <div id="pneumatic-content">
                                @foreach ($products as $product)
                                    <div class="row mb-3">
                                        <div class="col-4 col-lg-2 align-self-center">
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
                                                    <div>
                                                        <h5 class="title text-blue">
                                                            <span class="fw-normal">{{ $product->name }}</span>
                                                        </h5>
                                                        <ul class="mb-2">
                                                            @foreach ($features as $key => $value)
                                                                <li><strong>{{ $key }}:</strong>
                                                                    {{ $value }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                @if ($product->group_product && isset($subGroups[$product->group_product]))
                                                    <div class="col-3 select mb-2">
                                                        <label class="form-label fw-semibold">Subordinate Category</label>
                                                        <select class="form-select" onchange="location = this.value;">
                                                            <option selected disabled>Choose sub series</option>
                                                            @foreach ($subGroups[$product->group_product] as $sub)
                                                                <option>
                                                                    {{-- <option value="{{ route('produk.detail', ['slugcategory' => $sub->category->slug, 'slugproduct' => $sub->slug]) }}"> --}}
                                                                    {{ $sub->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                            </div>
                            <div class="mt-5 justify-content-center d-flex" id="pneumatic-pagination">
                                {{ $products->withQueryString()->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                        <div class="tab-pane fade text-dark" id="pills-solenoid" role="tabpanel"
                            aria-labelledby="pills-solenoid-tab" tabindex="0">
                            <div id="solenoid-content"></div>
                            <div class="mt-5 justify-content-center d-flex" id="solenoid-pagination"></div>
                        </div>
                        <div class="tab-pane fade text-dark" id="pills-air" role="tabpanel"
                            aria-labelledby="pills-air-tab" tabindex="0">
                            <div id="air-content"></div>
                            <div class="mt-5 justify-content-center d-flex" id="air-pagination"></div>
                        </div>
                        <div class="tab-pane fade text-dark" id="pills-accessories" role="tabpanel"
                            aria-labelledby="pills-accessories-tab" tabindex="0">
                            <div id="accessories-content"></div>
                            <div class="mt-5 justify-content-center d-flex" id="accessories-pagination"></div>
                        </div>
                        <div class="tab-pane0825-4d8f-4f0b-a5c7-2e8f7a9b6e8a"
                            artifact_version_id="d9e7a1b2-3f4c-4e7b-9c8a-1f0b5a9c7d0e" title="produk.blade.php"
                            contentType="text/html">
                            <div class="tab-pane fade text-dark" id="pills-directional" role="tabpanel"
                                aria-labelledby="pills-directional-tab" tabindex="0">
                                <div id="directional-content"></div>
                                <div class="mt-5 justify-content-center d-flex" id="directional-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const currentUrl = window.location.pathname;
            const tabs = document.querySelectorAll('.nav-tabs');
            const baseUrl = '/api/category/';

            function fetchProducts(slug, contentId, paginationId) {
                fetch(`${baseUrl}${slug}`)
                    .then(response => response.json())
                    .then(data => {
                        const contentDiv = document.getElementById(contentId);
                        const paginationDiv = document.getElementById(paginationId);
                        contentDiv.innerHTML = '';
                        paginationDiv.innerHTML = '';

                        data.products.data.forEach(product => {
                            let featuresHtml = '';
                            if (product.features) {
                                const features = typeof product.features === 'string' ? JSON.parse(
                                    product.features) : product.features;
                                featuresHtml = '<ul class="mb-2">' +
                                    Object.entries(features).map(([key, value]) =>
                                        `<li><strong>${key}:</strong> ${value}</li>`).join('') +
                                    '</ul>';
                            }

                            let subGroupsHtml = '';
                            if (product.group_product && data.subGroups[product.group_product]) {
                                subGroupsHtml = `
                            <div class="col-3 select mb-2">
                                <label class="form-label fw-semibold">Subordinate Category</label>
                                <select class="form-select" onchange="location = this.value;">
                                    <option selected disabled>Choose sub series</option>
                                    ${data.subGroups[product.group_product].map(sub =>
                                        // `<option value="/produk/${sub.category.slug}/${sub.slug}">${sub.name}</option>`
                                        `<option value="">${sub.name}</option>`

                                    ).join('')}
                                </select>
                            </div>`;
                            }

                            const productHtml = `
                        <div class="row mb-3">
                            <div class="col-4 col-lg-2 align-self-center">
                                <img src="${product.images[0]?.image ? '/storage/' + product.images[0].image : '/assets/img/default.png'}" class="img-fluid" alt="${product.name}">
                            </div>
                            <div class="col-8 col-lg-10">
                                <div class="col py-2 item d-flex justify-content-between">
                                    <div>
                                        <h5 class="title text-blue">
                                            <span class="fw-normal">${product.name}</span>
                                        </h5>
                                        ${featuresHtml}
                                    </div>
                                    ${subGroupsHtml}
                                </div>
                            </div>
                        </div>
                        <hr>`;

                            contentDiv.insertAdjacentHTML('beforeend', productHtml);
                        });

                        const links = data.products.links;
                        let paginationHtml = '<nav><ul class="pagination">';
                        links.forEach(link => {
                            paginationHtml += `
                        <li class="page-item ${link.active ? 'active' : ''} ${!link.url ? 'disabled' : ''}">
                            <a class="page-link" href="${link.url || '#'}" data-slug="${slug}" ${!link.url ? 'onclick="return false;"' : ''}>
                                ${link.label.replace('&laquo;', '«').replace('&raquo;', '»')}
                            </a>
                        </li>`;
                        });
                        paginationHtml += '</ul></nav>';
                        paginationDiv.innerHTML = paginationHtml;

                        document.querySelectorAll('.page-link').forEach(link => {
                            link.addEventListener('click', function(e) {
                                e.preventDefault();
                                if (this.getAttribute('href') !== '#') {
                                    fetch(this.getAttribute('href'))
                                        .then(response => response.json())
                                        .then(data => fetchProducts(slug, contentId,
                                            paginationId));
                                }
                            });
                        });
                    })
                    .catch(error => console.error('Error fetching products:', error));
            }

            tabs.forEach(tab => {
                // console.log(tab);

                // tab.addEventListener('click', function(e) {
                //     e.preventDefault();
                const slug = tab.getAttribute('data-slug');
                const targetId = tab.getAttribute('data-bs-target').replace('#pills-', '');
                const contentId = `${targetId}-content`;
                const paginationId = `${targetId}-pagination`;
                // console.log('---------------------------------')
                // console.log(slug, '-', targetId, '-', contentId, '-', paginationId);
                // console.log('---------------------------------')
                if (currentUrl.includes(slug)) {
                    tab.classList.add('active');
                    document.getElementById(`pills-${targetId}`).classList.add('show', 'active');
                    fetchProducts(slug, contentId, paginationId);
                } else {
                    tab.classList.remove('active');
                    document.getElementById(`pills-${targetId}`).classList.remove('show', 'active');
                    fetchProducts(slug, contentId, paginationId);
                }

                // });
            });
        });
    </script>
@endsection
