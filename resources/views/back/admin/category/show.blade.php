@extends('back.layouts.layout')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h5 class="mb-0">Detail Kategori</h5>
  <div class="d-flex gap-2">
    <a href="{{ route('back.admin.category.edit', $category->id) }}" class="btn btn-primary">Edit</a>
    <a href="{{ route('back.admin.category.index') }}" class="btn btn-light">Kembali</a>
  </div>
</div>

@if (session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card mb-3">
  <div class="card-body">
    <div class="row g-3">
      <div class="col-md-3">
        @if($category->image)
          <img src="{{ asset('storage/'.$category->image) }}" alt="" class="border rounded w-100" style="object-fit:cover;">
        @else
          <div class="bg-light border rounded d-flex align-items-center justify-content-center" style="height:180px;">Tidak ada gambar</div>
        @endif
      </div>
      <div class="col-md-9">
        <dl class="row mb-0">
          <dt class="col-sm-3">Nama</dt>
          <dd class="col-sm-9">{{ $category->name }}</dd>

          <dt class="col-sm-3">Slug</dt>
          <dd class="col-sm-9"><code>{{ $category->slug }}</code></dd>

          <dt class="col-sm-3">Parent</dt>
          <dd class="col-sm-9">{{ $category->parent?->name ?? '—' }}</dd>

          <dt class="col-sm-3">Deskripsi</dt>
          <dd class="col-sm-9">{!! nl2br(e($category->description ?? '—')) !!}</dd>

          <dt class="col-sm-3">Dibuat</dt>
          <dd class="col-sm-9">{{ $category->created_at?->format('Y-m-d H:i') ?? '—' }}</dd>

          <dt class="col-sm-3">Diubah</dt>
          <dd class="col-sm-9">{{ $category->updated_at?->format('Y-m-d H:i') ?? '—' }}</dd>
        </dl>
      </div>
    </div>
  </div>
</div>

<div class="row g-3">
  <div class="col-md-6">
    <div class="card h-100">
      <div class="card-header bg-light">Subkategori</div>
      <div class="card-body">
        @if($category->children->count())
          <ul class="mb-0">
            @foreach($category->children as $child)
              <li>
                <a href="{{ route('back.admin.category.show', $child->id) }}">{{ $child->name }}</a>
                <small class="text-muted">/ <code>{{ $child->slug }}</code></small>
              </li>
            @endforeach
          </ul>
        @else
          <div class="text-muted">Belum ada subkategori.</div>
        @endif
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card h-100">
      <div class="card-header bg-light">Produk Terkait</div>
      <div class="card-body">
        @if($category->products->count())
          <ul class="mb-0">
            @foreach($category->products as $p)
              <li>{{ $p->name }}</li>
            @endforeach
          </ul>
        @else
          <div class="text-muted">Belum ada produk.</div>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection
