@php
  $isEdit = isset($category);
@endphp

<div class="mb-3">
  <label class="form-label">Nama <span class="text-danger">*</span></label>
  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
         value="{{ old('name', $isEdit ? $category->name : '') }}" required>
  @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
  <label class="form-label">Slug (opsional)</label>
  <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror"
         value="{{ old('slug', $isEdit ? $category->slug : '') }}" placeholder="kosongkan untuk otomatis">
  @error('slug') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
  <label class="form-label">Parent</label>
  <select name="parent_id" class="form-select @error('parent_id') is-invalid @enderror">
    <option value="">— Tanpa Parent —</option>
    @foreach($parents as $p)
      <option value="{{ $p->id }}"
        @selected(old('parent_id', $isEdit ? $category->parent_id : '') == $p->id)>
        {{ $p->name }}
      </option>
    @endforeach
  </select>
  @error('parent_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
  <label class="form-label">Deskripsi</label>
  <textarea name="description" rows="4" class="form-control @error('description') is-invalid @enderror"
            placeholder="Deskripsi kategori">{{ old('description', $isEdit ? $category->description : '') }}</textarea>
  @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
  <label class="form-label">Gambar</label>
  @if($isEdit && $category->image)
    <div class="d-flex align-items-center gap-3 mb-2">
      <img src="{{ asset('storage/'.$category->image) }}" alt="" class="border rounded"
           style="width:80px;height:80px;object-fit:cover;">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" id="remove_image" name="remove_image">
        <label class="form-check-label" for="remove_image">Hapus gambar saat simpan</label>
      </div>
    </div>
  @endif
  <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
  <div class="form-text">jpg, jpeg, png, gif, webp • maks 2MB</div>
  @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="d-flex gap-2">
  <button class="btn btn-primary">{{ $isEdit ? 'Simpan Perubahan' : 'Simpan' }}</button>
  <a href="{{ route('back.admin.category.index') }}" class="btn btn-secondary">Batal</a>
</div>
