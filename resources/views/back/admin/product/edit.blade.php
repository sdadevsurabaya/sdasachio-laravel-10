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

                {{-- File: resources/views/products/edit.blade.php (contoh) --}}

                {{-- Tambahkan sedikit CSS untuk memberi efek visual pada gambar yang akan dihapus --}}
                <style>
                    .image-container-existing {
                        position: relative;
                    }

                    .image-container-existing input[type="checkbox"] {
                        /* Sembunyikan checkbox asli */
                        opacity: 0;
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        cursor: pointer;
                        z-index: 2;
                    }

                    /* Style untuk gambar saat checkbox dicentang */
                    .image-container-existing input[type="checkbox"]:checked+img {
                        opacity: 0.4;
                        border: 3px solid #dc3545;
                        /* Merah */
                    }

                    /* Tambahkan ikon 'X' di atas gambar saat dicentang */
                    .image-container-existing input[type="checkbox"]:checked::after {
                        content: '\2716';
                        /* Kode untuk tanda silang '✖' */
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
                        /* Agar tidak mengganggu klik */
                    }

                    /* CSS untuk preview upload baru dari jawaban sebelumnya */
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
                </style>

                {{-- GAMBAR YANG SUDAH ADA --}}
                @if ($product->images->count())
                    <div class="mb-3">
                        <label class="form-label">Gambar Produk Saat Ini (Klik untuk hapus)</label>
                        <div class="d-flex flex-wrap gap-3">
                            @foreach ($product->images as $img)
                                <div class="image-container-existing">
                                    {{--
                                    Checkbox ini kuncinya.
                                    - name="delete_images[]" akan mengirim array ID gambar yang mau dihapus.
                                    - value="{{ $img->id }}" adalah ID dari gambar di database.
                                    --}}
                                    <input type="checkbox" name="delete_images[]" id="check{{ $img->id }}" value="{{ $img->id }}"
                                        title="Pilih untuk hapus gambar ini">
                                    <img src="{{ asset('storage/' . $img->image) }}" width="150" height="150"
                                        class="img-thumbnail" style="object-fit: cover;">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- UPLOAD GAMBAR BARU --}}
                <div class="mb-3">
                    <label for="images" class="form-label">Tambah Gambar Produk Baru (bisa banyak)</label>
                    <input type="file" id="images" name="images[]" class="form-control" multiple accept="image/*">

                    {{-- Container untuk menampilkan preview gambar BARU --}}
                    <div id="image-preview-container"></div>
                </div>

                {{-- SCRIPT UNTUK PREVIEW GAMBAR BARU --}}
                <script>
                    document.addEventListener('DOMContentLoaded', function() {

                        // BAGIAN UNTUK GAMBAR LAMA SUDAH DIHAPUS.
                        // Fungsionalitas check/uncheck sekarang ditangani oleh CSS dan browser.

                        // ===================================================================
                        // BAGIAN UNTUK PRATINJAU GAMBAR BARU (TIDAK ADA PERUBAHAN)
                        // ===================================================================
                        const imageInput = document.getElementById('images');
                        const previewContainer = document.getElementById('image-preview-container');

                        // Hanya jalankan jika elemen input dan preview ada
                        if (imageInput && previewContainer) {
                            let fileStore = new DataTransfer();

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
                                            // Jika Anda juga ingin menghilangkan konfirmasi di sini,
                                            // hapus baris if(confirm(...)) dan kurung kurawalnya.
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
                                    }
                                    reader.readAsDataURL(file);
                                });
                            }
                        } else {
                            console.error('Peringatan: Elemen #images atau #image-preview-container tidak ditemukan.');
                        }
                    });
                </script>

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
