@extends('back.layouts.layout')
@section('content')
    <section class="page-section">
        <div class="container">
            <h2>Produk</h2>

            <form action="{{ route('back.admin.product.index') }}" method="GET" class="row mb-3">
                <div class="col-md-4">
                    <input type="text" name="search" class="form-control" placeholder="Cari nama atau SKU..."
                        value="{{ request('search') }}">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{ route('back.admin.product.create') }}" class="btn btn-success">+ Tambah Produk</a>
                </div>
            </form>

            @if ($products->count())
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th>SKU</th>
                                <th>Kategori</th>
                                <th>Gambar</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td class="text-nowrap">{{ $product->name }}</td>
                                    <td>{{ $product->sku }}</td>
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
                                    <td class="text-center">{!! $product->status
                                        ? '<span class="badge bg-success">Active</span>'
                                        : '<span class="badge bg-danger">Nonaktif</span>' !!}</td>

                                    <td class="text-nowrap">
                                        <a href="{{ route('back.admin.product.show', $product) }}"
                                            class="btn btn-sm btn-info">Detail</a>

                                        <a href="{{ route('back.admin.product.edit', $product) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        {{-- Tambahkan tombol delete di kemudian hari --}}
                                        <form action="{{ route('back.admin.product.destroy', $product) }}" method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus produk ini?');"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>

                                    </td>
                                </tr>
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
