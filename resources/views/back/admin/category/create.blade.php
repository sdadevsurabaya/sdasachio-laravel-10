@extends('back.layouts.layout')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h5 class="mb-0">Tambah Kategori</h5>
  <a href="{{ route('back.admin.category.index') }}" class="btn btn-light">Kembali</a>
</div>

@if ($errors->any())
  <div class="alert alert-danger">
    <div class="fw-semibold">Periksa kembali input Anda:</div>
    <ul class="mb-0">
      @foreach ($errors->all() as $e) <li>{{ $e }}</li> @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('back.admin.category.store') }}" method="POST" enctype="multipart/form-data" class="card card-body">
  @csrf
  @include('back.admin.category._form', ['parents' => $parents])
</form>
@endsection
