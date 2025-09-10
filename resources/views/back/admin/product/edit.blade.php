@extends('back.layouts.layout')
@section('content')
    <section class="page-section">
        <div class="container">
            <h2>Edit Produk</h2>

            <form action="{{ route('back.admin.product.update', $product) }}" method="POST" enctype="multipart/form-data"
                id="productForm">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name">Nama Produk</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name', $product->name) }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="sku">SKU</label>
                    <input type="text" name="sku" id="sku"
                        class="form-control @error('sku') is-invalid @enderror" value="{{ old('sku', $product->sku) }}">
                    @error('sku')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="category_id">Kategori</label>
                    <select name="category_id" class="form-control @error('category_id') is-invalid @enderror" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @selected(old('category_id', $product->category_id) == $category->id)>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="order">Order</label>
                    <input type="number" name="order" class="form-control @error('order') is-invalid @enderror"
                        value="{{ old('order', $product->order ?? $maxOrder) }}" min="1">
                    @error('order')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description">Deskripsi</label>
                    <textarea name="description" id="editor" class="form-control @error('description') is-invalid @enderror"
                        rows="6">{{ old('description', $product->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <style>
                    .image-container-existing {
                        position: relative;
                    }

                    .image-container-existing input[type="checkbox"] {
                        opacity: 0;
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        cursor: pointer;
                        z-index: 2;
                    }

                    .image-container-existing input[type="checkbox"]:checked+img {
                        opacity: 0.4;
                        border: 3px solid #dc3545;
                    }

                    .image-container-existing input[type="checkbox"]:checked::after {
                        content: '\2716';
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        color: white;
                        background-color: #dc3545;
                        font-size: 40px;
                        font-weight: bold;
                        padding: 10px 20px;
                        border-radius: 50%;
                        pointer-events: none;
                        z-index: 1;
                    }

                    #image-preview-container {
                        display: flex;
                        flex-wrap: wrap;
                        gap: 1rem;
                        margin-top: 1rem;
                    }

                    .preview-item {
                        position: relative;
                        width: 150px;
                        height: 150px;
                        border: 1px solid #ddd;
                        border-radius: 0.375rem;
                        overflow: hidden;
                    }

                    .preview-item img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                    }

                    .preview-item .delete-btn {
                        position: absolute;
                        top: 5px;
                        right: 5px;
                        width: 25px;
                        height: 25px;
                        background-color: rgba(220, 53, 69, 0.8);
                        color: white;
                        border: none;
                        border-radius: 50%;
                        cursor: pointer;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        font-weight: bold;
                        line-height: 1;
                        padding-bottom: 2px;
                    }

                    .feature-row {
                        display: flex;
                        align-items: center;
                        gap: 10px;
                    }

                    .feature-row .col {
                        flex: 1;
                    }

                    .feature-row .remove-btn {
                        background-color: #dc3545;
                        color: white;
                        border: none;
                        border-radius: 0.25rem;
                        padding: 5px 10px;
                        cursor: pointer;
                    }
                </style>

                @if ($product->images->count())
                    <div class="mb-3">
                        <label class="form-label">Gambar Produk Saat Ini (Klik untuk hapus)</label>
                        <div class="d-flex flex-wrap gap-3">
                            @foreach ($product->images as $img)
                                <div class="image-container-existing">
                                    <input type="checkbox" name="delete_images[]" id="check{{ $img->id }}"
                                        value="{{ $img->id }}" title="Pilih untuk hapus gambar ini">
                                    <img src="{{ asset('storage/' . $img->image) }}" width="150" height="150"
                                        class="img-thumbnail" style="object-fit: cover;">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <div class="mb-3">
                    <label for="images" class="form-label">Tambah Gambar Produk Baru (bisa banyak)</label>
                    <input type="file" id="images" name="images[]"
                        class="form-control @error('images.*') is-invalid @enderror" multiple accept="image/*">
                    <div id="image-preview-container"></div>
                    @error('images.*')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="features">Fitur</label>
                    <div id="features-list">
                        @if ($product->features && is_array($product->features))
                            @foreach ($product->features as $key => $value)
                                <div class="row mb-2 feature-row">
                                    <div class="col"><input type="text" name="feature_keys[]" class="form-control"
                                            value="{{ $key }}" placeholder="Fitur"></div>
                                    <div class="col"><input type="text" name="feature_values[]" class="form-control"
                                            value="{{ $value }}" placeholder="Nilai"></div>
                                    <button type="button" class="remove-btn"
                                        onclick="this.parentElement.remove()">Hapus</button>
                                </div>
                            @endforeach
                        @else
                            <div class="row mb-2 feature-row">
                                <div class="col"><input type="text" name="feature_keys[]" class="form-control"
                                        placeholder="Fitur (misal: Working Medium)"></div>
                                <div class="col"><input type="text" name="feature_values[]" class="form-control"
                                        placeholder="Nilai (misal: Double Action)"></div>
                                <button type="button" class="remove-btn"
                                    onclick="this.parentElement.remove()">Hapus</button>
                            </div>
                        @endif
                    </div>
                    <button type="button" onclick="addFeatureRow()" class="btn btn-sm btn-secondary mt-2">+ Tambah
                        Fitur</button>
                    @error('feature_keys.*')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    @error('feature_values.*')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="download_url">Download File (URL)</label>
                    <input type="text" name="download_url"
                        class="form-control @error('download_url') is-invalid @enderror" placeholder="https://..."
                        value="{{ old('download_url', $product->download_url) }}">
                    @error('download_url')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-control @error('status') is-invalid @enderror">
                        <option value="1" {{ old('status', $product->status) == 1 ? 'selected' : '' }}>Active
                        </option>
                        <option value="0" {{ old('status', $product->status) == 0 ? 'selected' : '' }}>Nonaktif
                        </option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

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
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize CKEditor
            const editorElement = document.querySelector('#editor');
            if (editorElement) {
                ClassicEditor
                    .create(editorElement)
                    .catch(error => console.error('CKEditor Error:', error));
            }

            // Image preview for new uploads
            const imageInput = document.getElementById('images');
            const previewContainer = document.getElementById('image-preview-container');
            let fileStore = new DataTransfer();

            if (imageInput && previewContainer) {
                imageInput.addEventListener('change', function(event) {
                    for (const file of event.target.files) {
                        fileStore.items.add(file);
                    }
                    imageInput.files = fileStore.files;
                    renderPreviews();
                });

                function renderPreviews() {
                    previewContainer.innerHTML = '';
                    Array.from(fileStore.files).forEach((file, index) => {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const previewItem = document.createElement('div');
                            previewItem.className = 'preview-item';
                            const img = document.createElement('img');
                            img.src = e.target.result;
                            const deleteBtn = document.createElement('button');
                            deleteBtn.type = 'button';
                            deleteBtn.className = 'delete-btn';
                            deleteBtn.innerHTML = '&times;';
                            deleteBtn.dataset.index = index;

                            deleteBtn.addEventListener('click', function() {
                                if (confirm(
                                    'Anda yakin ingin menghapus pratinjau gambar ini?')) {
                                    const idxToRemove = parseInt(this.dataset.index, 10);
                                    const newFileStore = new DataTransfer();
                                    Array.from(fileStore.files).forEach((f, i) => {
                                        if (i !== idxToRemove) newFileStore.items.add(
                                        f);
                                    });
                                    fileStore = newFileStore;
                                    imageInput.files = fileStore.files;
                                    renderPreviews();
                                }
                            });

                            previewItem.appendChild(img);
                            previewItem.appendChild(deleteBtn);
                            previewContainer.appendChild(previewItem);
                        };
                        reader.readAsDataURL(file);
                    });
                }
            } else {
                console.error('Peringatan: Elemen #images atau #image-preview-container tidak ditemukan.');
            }
        });

        function addFeatureRow() {
            const html = `
                <div class="row mb-2 feature-row">
                    <div class="col"><input type="text" name="feature_keys[]" class="form-control" placeholder="Fitur"></div>
                    <div class="col"><input type="text" name="feature_values[]" class="form-control" placeholder="Nilai"></div>
                    <button type="button" class="remove-btn" onclick="this.parentElement.remove()">Hapus</button>
                </div>
            `;
            document.getElementById('features-list').insertAdjacentHTML('beforeend', html);
        }
    </script>
@endsection
