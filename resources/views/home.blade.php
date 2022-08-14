  @extends('layouts.main')
  @section('container')
  
  <div
  class="row align-items-md-stretch bg-light d-sm-flex align-items-center justify-content-between"
>
  <div class="col-md-7">
    <div class="h-100 p-5">
      <h1 class="display-6 fw-bold">Selamat Datang di Site Blog</h1>
      <p class="fs-5">Disini terdapat berita tentang teknologi, statistika, komputer, programming dan hal seru lainnya
      </p>
      <a class="btn btn-primary btn-md rounded-pill  mb-3 mt-3" href="/posts">Yuk Mulai Membaca</a>
    </div>
  </div>
  <div class="col-md-5">
    <div class="h-100 p-5">
      <img
        src="/img/jumbotron.svg"
        class="img-fluid w-100 d-sm-block"
        alt=""
      />
    </div>
  </div>
</div>

  @endsection
