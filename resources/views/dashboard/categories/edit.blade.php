@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Kategori</h1>
</div>
<div class="col-lg-8">
  <form method="post" action="/dashboard/categories/{{ $category->slug}}" class="mb-5">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nama Kategori</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name',$category->name) }}" required autofocus>
      @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control  @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug',$category->slug) }}" required>
      @error('slug')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
    </div>
    <a href="/dashboard/categories" class="btn btn-success"><span data-feather="arrow-left"></span>
      Batal
    </a>
    <button type="submit" class="btn btn-primary">Perbarui Kategori</button>
  </form>
</div>
<script>
  const name = document.getElementById('name');
  const slug = document.getElementById('slug');

  name.addEventListener('change', function() {
    fetch('/dashboard/categories/checkSlug?name=' + name.value)
      .then(response => response.json())
      .then(data => {
        slug.value = data.slug;
      });
  });
</script> 
@endsection