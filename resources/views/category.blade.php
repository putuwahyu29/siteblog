@extends('layouts.main')
@section('container')
  <h1 class="mb-3 text-center">Kategori : {{ $category }}</h1>
  <div class="row justify-content-center mb-3">
    <div class="col-md-6">
      <form action="/posts">
        @if (request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('author'))
        <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cari.." name="search" value="{{ request('search') }}">
          <button class="btn btn-primary" type="submit">Cari</button>
        </div>
      </form>
    </div>
  </div>
  @if ($posts->count())
  <div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h3 class="card-title"> <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a> </h3>
      <p>
        <small class="text-muted">
          Dibuat oleh <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> di <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
        </small>
      </p>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Baca Selengkapnya</a>
    </div>
  </div>
  @else 
  <p class="text-center fs-4">Tidak ada post.</p>
  @endif

  <div class="container">
    <div class="row">
      @foreach ($posts->skip(1) as $post)
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7)"><a href="/categories/{{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
          <img src="https://source.unsplash.com/500x500?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
          <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p>
              <small class="text-muted">
                Dibuat oleh <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
              </small>
            </p>
            <p class="card-text">{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection

