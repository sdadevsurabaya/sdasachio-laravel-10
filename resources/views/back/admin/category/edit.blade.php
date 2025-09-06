@extends('back.layouts.layout')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h5 class="mb-0">Edit Kategori</h5>
  <a href="{{ route('back.admin.category.index') }}" class="btn btn-light">Kembali</a>
</div>

@if (session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif
@if ($errors->any())
  <div class="alert alert-danger">
    <div class="fw-semibold">Periksa kembali input Anda:</div>
    <ul class="mb-0">
      @foreach ($errors->all() as $e) <li>{{ $e }}</li> @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('back.admin.category.update', $category->id) }}" method="POST" enctype="multipart/form-data" class="card card-body">
  @csrf @method('PUT')
  @include('back.admin.category._form', ['category' => $category, 'parents' => $parents])
</form>

<div class="card mt-3">
  <div class="card-body d-flex justify-content-between align-items-center">
    <div>
      <div class="fw-semibold">Hapus Kategori</div>
      <small class="text-muted">Kategori tidak dapat dihapus jika masih memiliki subkategori atau produk terkait.</small>
    </div>
    <form action="{{ route('back.admin.category.destroy', $category->id) }}" method="POST"
          onsubmit="return confirm('Hapus kategori ini?');">
      @csrf @method('DELETE')
      <button class="btn btn-outline-danger">Hapus</button>
    </form>
  </div>
</div>
@endsection
