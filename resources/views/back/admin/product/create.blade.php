@extends('layouts.layout')

@section('content')
<section class="page-section">
<div class="container">
    <h2>Tambah Produk</h2>

    <form action="{{ route('back.admin.product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name">Nama Produk</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="sku">SKU</label>
            <input type="text" name="sku" class="form-control">
        </div>

        <div class="mb-3">
            <label for="category_id">Kategori</label>
            <select name="category_id" class="form-control" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="description">Deskripsi Produk</label>
            <textarea name="description" id="editor" class="form-control" rows="6"></textarea>
        </div>

        <div class="mb-3">
            <label for="image">Gambar Produk</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Simpan Produk</button>
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
