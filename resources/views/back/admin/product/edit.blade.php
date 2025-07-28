@extends('layouts.layout')

@section('content')
    <section class="page-section">
        <div class="container">
            <h2>Edit Produk</h2>

            <form action="{{ route('back.admin.product.update', $product) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name">Nama Produk</label>
                    <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
                </div>

                <div class="mb-3">
                    <label for="sku">SKU</label>
                    <input type="text" name="sku" class="form-control" value="{{ $product->sku }}">
                </div>

                <div class="mb-3">
                    <label for="category_id">Kategori</label>
                    <select name="category_id" class="form-control" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @selected($product->category_id == $category->id)>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="description">Deskripsi</label>
                    <textarea name="description" id="editor" class="form-control" rows="6">{{ $product->description }}</textarea>
                </div>




                {{-- Gambar yang sudah ada --}}
                @if ($product->images->count())
                    <div class="mb-3">
                        <label>Gambar Produk Saat Ini</label>
                        <div class="d-flex flex-wrap gap-2">
                            @foreach ($product->images as $img)
                                <img src="{{ asset('storage/' . $img->image) }}" width="100" class="img-thumbnail">
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- Upload gambar baru --}}
                <div class="mb-3">
                    <label for="images">Tambah Gambar Produk Baru (bisa banyak)</label>
                    <input type="file" name="images[]" class="form-control" multiple>
                </div>

                {{-- FEATURES --}}
                <div class="mb-3">
                    <label for="features">FEATURES</label>
                    <div id="features-list">
                        @if ($product->features && is_array($product->features))
                            @foreach ($product->features as $key => $value)
                                <div class="row mb-2">
                                    <div class="col"><input type="text" name="feature_keys[]" class="form-control"
                                            value="{{ $key }}" placeholder="Fitur"></div>
                                    <div class="col"><input type="text" name="feature_values[]" class="form-control"
                                            value="{{ $value }}" placeholder="Nilai"></div>
                                </div>
                            @endforeach
                        @else
                            <div class="row mb-2">
                                <div class="col"><input type="text" name="feature_keys[]" class="form-control"
                                        placeholder="Fitur (misal: Working Medium)"></div>
                                <div class="col"><input type="text" name="feature_values[]" class="form-control"
                                        placeholder="Nilai (misal: Double Action)"></div>
                            </div>
                        @endif
                    </div>
                    <button type="button" onclick="addFeatureRow()" class="btn btn-sm btn-secondary">+ Tambah
                        Fitur</button>
                </div>

                <script>
                    function addFeatureRow() {
                        const html = `
            <div class="row mb-2">
                <div class="col"><input type="text" name="feature_keys[]" class="form-control" placeholder="Fitur"></div>
                <div class="col"><input type="text" name="feature_values[]" class="form-control" placeholder="Nilai"></div>
            </div>
        `;
                        document.getElementById('features-list').insertAdjacentHTML('beforeend', html);
                    }
                </script>



                {{-- Download URL --}}
                <div class="mb-3">
                    <label for="download_url">Download File (URL)</label>
                    <input type="text" name="download_url" class="form-control" placeholder="https://..."
                        value="{{ $product->download_url }}">
                </div>



                {{-- <button type="submit" class="btn btn-primary">Update Produk</button> --}}
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <div>
                        @if ($prevProductId)
                            <a href="{{ url('back/admin/product/' . $prevProductId . '/edit') }}"
                                class="btn btn-outline-secondary">
                                &larr; Previous
                            </a>
                        @endif
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">Update Produk ({{ $product->sku }})</button>
                    </div>

                    <div>
                        @if ($nextProductId)
                            <a href="{{ url('back/admin/product/' . $nextProductId . '/edit') }}"
                                class="btn btn-outline-secondary">
                                Next &rarr;
                            </a>
                        @endif
                    </div>
                </div>

            </form>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector('#editor')).catch(error => console.error(error));
    </script>
@endsection
