@extends('back.layouts.layout')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h5 class="mb-0">Kategori</h5>
  <a href="{{ route('back.admin.category.create') }}" class="btn btn-primary">
    + Tambah Kategori
  </a>
</div>

@if (session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif
@if (session('error'))
  <div class="alert alert-danger">{{ session('error') }}</div>
@endif

<form method="GET" class="row g-2 mb-3">
  <div class="col-md-4">
    <input type="text" name="search" value="{{ $search }}" class="form-control" placeholder="Cari nama / slug">
  </div>
  <div class="col-md-4">
    <select name="parent_id" class="form-select">
      <option value="">— Semua Parent —</option>
      @foreach($allParents as $p)
        <option value="{{ $p->id }}" @selected((string)$parentId===(string)$p->id)>{{ $p->name }}</option>
      @endforeach
    </select>
  </div>
  <div class="col-md-2">
    <button class="btn btn-outline-primary w-100">Filter</button>
  </div>
  @if(request()->has('search') || request()->has('parent_id'))
  <div class="col-md-2">
    <a href="{{ route('back.admin.category.index') }}" class="btn btn-outline-secondary w-100">Reset</a>
  </div>
  @endif
</form>

<div class="table-responsive">
  <table class="table table-hover align-middle">
    <thead>
      <tr>
        <th style="width: 60px;">Img</th>
        <th>Nama</th>
        <th>Slug</th>
        <th>Parent</th>
        <th class="text-center">Sub</th>
        <th class="text-center">Produk</th>
        <th class="text-center">status</th>
        <th class="text-center">opsi</th>
      </tr>
    </thead>
    <tbody>
      @forelse($categories as $c)
        <tr>
          <td>
            @if($c->image)
              <img src="{{ asset('storage/'.$c->image) }}" alt="" class="rounded" style="width:50px;height:50px;object-fit:cover;">
            @else
              <div class="bg-light border rounded d-inline-flex align-items-center justify-content-center" style="width:50px;height:50px;">—</div>
            @endif
          </td>
          <td class="fw-semibold">
            <a href="{{ route('back.admin.category.show', $c->id) }}" class="text-decoration-none">{{ $c->name }}</a>
          </td>
          <td><code class="text-muted">{{ $c->slug }}</code></td>
          <td>{{ $c->parent?->name ?? '—' }}</td>
          <td class="text-center">{{ $c->children_count }}</td>
          <td class="text-center">{{ $c->products_count }}</td>
          <td class="text-center">{!! $c->status ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">Nonaktif</span>' !!}</td>
          <td class="text-center">
            <a href="{{ route('back.admin.category.edit', $c->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
            <form action="{{ route('back.admin.category.destroy', $c->id) }}" method="POST" class="d-inline"
                  onsubmit="return confirm('Hapus kategori ini?');">
              @csrf @method('DELETE')
              <button class="btn btn-sm btn-outline-danger">Hapus</button>
            </form>
          </td>
        </tr>
      @empty
        <tr><td colspan="7" class="text-center text-muted">Tidak ada data.</td></tr>
      @endforelse
    </tbody>
  </table>
</div>

<div class="mt-3">
  {{ $categories->links() }}
</div>
@endsection
