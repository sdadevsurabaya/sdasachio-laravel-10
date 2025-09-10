@extends('back.layouts.layout')
@section('content')
    <section class="page-section">
        <div class="container">
            <!-- Toast Container -->
            <div class="position-fixed top-0 end-0 p-3" style="z-index: 1050;">
                <div id="toastNotification" class="toast align-items-center text-white border-0" role="alert"
                    aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body" id="toastMessage"></div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                </div>
            </div>

            <h2>Produk</h2>
            <div class="row mb-3 align-items-center">
                <div class="col-md-6">
                    <form action="{{ route('back.admin.product.index') }}" method="GET" class="row g-3">
                        <div class="col-md-5">
                            <input type="text" name="search" class="form-control" placeholder="Cari nama atau SKU..."
                                value="{{ request('search') }}">
                        </div>
                        <div class="col-md-4">
                            <select name="category" class="form-select">
                                <option value="">Semua Kategori</option>
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->slug }}"
                                        {{ request('category') == $cat->slug ? 'selected' : '' }}>{{ $cat->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary w-100">Cari</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 text-end">
                    <button type="button" id="inlineEditButton" class="btn btn-primary me-3"
                        onclick="enableInlineEdit()">Enable Edit</button>
                    <button type="button" id="saveChangesButton" class="btn btn-success me-3" style="display: none;"
                        onclick="saveAllChanges()">Save Changes</button>
                    <button type="button" id="cancelButton" class="btn btn-secondary me-3" style="display: none;"
                        onclick="cancelEdit()">Cancel</button>
                    <a href="{{ route('back.admin.product.create') }}" class="btn btn-success">+ Tambah Produk</a>
                </div>
            </div>

            @if ($products->count())
                <div class="table-responsive">
                    <table class="table table-bordered" id="productTable">
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th>SKU</th>
                                <th>Kategori</th>
                                <th>Gambar</th>
                                <th>Status</th>
                                <th>Order</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr data-id="{{ $product->id }}">
                                    <td class="text-nowrap editable" data-field="name" data-original="{{ $product->name }}">
                                        {{ $product->name }}</td>
                                    <td class="editable" data-field="sku" data-original="{{ $product->sku }}">
                                        {{ $product->sku }}</td>
                                    <td class="text-nowrap">{{ $product->category?->name ?? '-' }}</td>
                                    <td>
                                        @if ($product->images->count())
                                            <div class="mb-3">
                                                <label>Gambar Produk Saat Ini</label>
                                                <div class="d-flex flex-wrap gap-2">
                                                    @foreach ($product->images as $img)
                                                        <img src="{{ asset('storage/' . $img->image) }}" width="100"
                                                            class="img-thumbnail">
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="text-center editable" data-field="status"
                                        data-original="{{ $product->status }}">{!! $product->status
                                            ? '<span class="badge bg-success">Active</span>'
                                            : '<span class="badge bg-danger">Nonaktif</span>' !!}</td>
                                    <td class="editable" data-field="order" data-original="{{ $product->order ?? 0 }}">
                                        {{ $product->order ?? 0 }}</td>
                                    <td class="text-nowrap">
                                        <a href="{{ route('back.admin.product.show', $product) }}"
                                            class="btn btn-sm btn-info">Detail</a>
                                        <a href="{{ route('back.admin.product.edit', $product) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#editDescriptionModal{{ $product->id }}">Edit
                                            Deskripsi</button>
                                        <form action="{{ route('back.admin.product.destroy', $product) }}" method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus produk ini?');"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                <!-- Modal for Description -->
                                <div class="modal fade" id="editDescriptionModal{{ $product->id }}" tabindex="-1"
                                    aria-labelledby="editDescriptionModalLabel{{ $product->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editDescriptionModalLabel{{ $product->id }}">
                                                    Edit Deskripsi: {{ $product->name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="descriptionForm{{ $product->id }}">
                                                    @csrf
                                                    @method('PATCH')
                                                    <div class="mb-3">
                                                        <label for="description{{ $product->id }}"
                                                            class="form-label">Deskripsi</label>
                                                        <textarea class="form-control" id="description{{ $product->id }}" name="description" rows="6">{{ $product->description }}</textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->withQueryString()->links('pagination::bootstrap-5') }}
                </div>
            @else
                <p class="text-muted">Tidak ada produk ditemukan.</p>
            @endif
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        let isEditMode = false;
        let changes = {};

        // Function to show toast notification
        function showToast(message, type) {
            const toast = document.getElementById('toastNotification');
            const toastMessage = document.getElementById('toastMessage');

            // Remove previous background classes
            toast.classList.remove('bg-success', 'bg-danger', 'bg-primary');
            // Add background class based on type
            toast.classList.add(type === 'success' ? 'bg-success' : 'bg-danger');
            toastMessage.textContent = message;

            const bsToast = new bootstrap.Toast(toast);
            bsToast.show();
        }

        // Add beforeunload event listener for refresh warning
        window.addEventListener('beforeunload', function(e) {
            if (isEditMode && Object.keys(changes).length > 0) {
                const confirmationMessage =
                    'Perubahan Anda akan hilang jika Anda meninggalkan halaman ini. Lanjutkan?';
                e.returnValue = confirmationMessage;
                return confirmationMessage;
            }
        });

        function enableInlineEdit() {
            if (isEditMode) return;
            isEditMode = true;

            // Disable the Enable Inline Edit button
            const editButton = document.getElementById('inlineEditButton');
            editButton.disabled = true;
            editButton.classList.add('disabled');

            // Show Save Changes and Cancel buttons
            document.getElementById('saveChangesButton').style.display = 'inline-block';
            document.getElementById('cancelButton').style.display = 'inline-block';

            // Convert editable cells to inputs
            const cells = document.querySelectorAll('#productTable .editable');
            cells.forEach(cell => {
                const productId = cell.parentElement.dataset.id;
                const field = cell.dataset.field;
                const originalValue = cell.dataset.original;

                if (field === 'status') {
                    cell.innerHTML = `
                        <select class="form-control" data-product-id="${productId}" data-field="${field}">
                            <option value="1" ${originalValue == 1 ? 'selected' : ''}>Active</option>
                            <option value="0" ${originalValue == 0 ? 'selected' : ''}>Nonaktif</option>
                        </select>`;
                } else {
                    cell.innerHTML =
                        `
                        <input type="text" class="form-control" value="${originalValue}" data-product-id="${productId}" data-field="${field}">`;
                }

                // Track changes on input
                const input = cell.querySelector('input, select');
                input.addEventListener('change', function() {
                    if (!changes[productId]) changes[productId] = {};
                    changes[productId][field] = this.value;
                });
            });
        }

        function cancelEdit() {
            location.reload();
        }

        function saveAllChanges() {
            // Confirm before saving
            if (!confirm('Apakah Anda yakin ingin menyimpan semua perubahan?')) {
                return;
            }

            // Process SKU changes (remove special characters, normalize spaces, slugify)
            Object.keys(changes).forEach(productId => {
                if (changes[productId].sku) {
                    let sku = changes[productId].sku;
                    sku = sku.replace(/[^a-zA-Z0-9\s-_]/g, '').replace(/\s+/g, ' ').trim().replace(/\s/g, '-');
                    changes[productId].sku = sku;
                }
            });

            // Send all changes in bulk
            const promises = Object.keys(changes).map(productId => {
                return fetch(`{{ url('back/admin/product') }}/${productId}`, {
                    method: 'PATCH',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify(changes[productId])
                }).then(response => response.json());
            });

            Promise.all(promises)
                .then(results => {
                    let allSuccess = true;
                    results.forEach((data, index) => {
                        if (!data.success) {
                            allSuccess = false;
                        }
                    });

                    // Update table cells to non-editable state
                    document.querySelectorAll('#productTable .editable').forEach(cell => {
                        const productId = cell.parentElement.dataset.id;
                        const field = cell.dataset.field;
                        const originalValue = cell.dataset.original;

                        if (changes[productId] && changes[productId][field]) {
                            cell.dataset.original = changes[productId][field];
                            if (field === 'status') {
                                cell.innerHTML = changes[productId][field] == 1 ?
                                    '<span class="badge bg-success">Active</span>' :
                                    '<span class="badge bg-danger">Nonaktif</span>';
                            } else {
                                cell.innerHTML = changes[productId][field];
                            }
                        } else {
                            // Revert unchanged cells
                            if (field === 'status') {
                                cell.innerHTML = originalValue == 1 ?
                                    '<span class="badge bg-success">Active</span>' :
                                    '<span class="badge bg-danger">Nonaktif</span>';
                            } else {
                                cell.innerHTML = originalValue;
                            }
                        }
                    });

                    // Reset edit mode
                    isEditMode = false;
                    document.getElementById('inlineEditButton').disabled = false;
                    document.getElementById('inlineEditButton').classList.remove('disabled');
                    document.getElementById('saveChangesButton').style.display = 'none';
                    document.getElementById('cancelButton').style.display = 'none';
                    changes = {};

                    // Show toast notification
                    if (allSuccess) {
                        showToast('Semua perubahan berhasil disimpan', 'success');
                    } else {
                        showToast('Beberapa perubahan gagal disimpan', 'error');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showToast('Terjadi kesalahan saat menyimpan perubahan', 'error');
                });
        }

        const editors = {};

        document.querySelectorAll('[id^=editDescriptionModal]').forEach(modal => {
            const productId = modal.id.replace('editDescriptionModal', '');
            const textarea = document.getElementById(`description${productId}`);

            modal.addEventListener('shown.bs.modal', () => {
                if (!editors[productId]) {
                    ClassicEditor
                        .create(textarea)
                        .then(editor => {
                            editors[productId] = editor;
                        })
                        .catch(error => {
                            console.error('CKEditor Error:', error);
                        });
                }
            });

            modal.addEventListener('hidden.bs.modal', () => {
                if (editors[productId]) {
                    editors[productId].destroy().then(() => {
                        delete editors[productId];
                    }).catch(error => {
                        console.error('CKEditor Destroy Error:', error);
                    });
                }
            });
        });

        document.querySelectorAll('[id^=descriptionForm]').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const productId = this.id.replace('descriptionForm', '');
                const editor = editors[productId];
                const description = editor ? editor.getData() : document.getElementById(
                    `description${productId}`).value;

                fetch(`{{ url('back/admin/product') }}/${productId}`, {
                        method: 'PATCH',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            description: description
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            showToast('Deskripsi berhasil disimpan', 'success');
                            bootstrap.Modal.getInstance(document.getElementById(
                                `editDescriptionModal${productId}`)).hide();
                        } else {
                            showToast('Gagal menyimpan deskripsi', 'error');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        showToast('Terjadi kesalahan', 'error');
                    });
            });
        });
    </script>
@endsection
