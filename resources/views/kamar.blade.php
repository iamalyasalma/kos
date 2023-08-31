@extends('layouts.app')
@section('container')



  <div class="container">
    <div class="row">
        <div class="d-flex justify-content-center">
          <div class="col-4">
              <div id="carouselExampleDark" class="carousel carousel-dark slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner border border-secondary">
                <div class="carousel-item active" data-bs-interval="10000">
                  <img src="../img/single bed.png" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="card-title text-center flex-fill p-2 fs-5" style="background-color: rgba(255, 255, 255, 0.5)">Single Bed</h5>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="../img/lemari.png" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5  class="card-title text-center flex-fill p-2 fs-6" style="background-color: rgba(255, 255, 255, 0.5)">1 Lemari</h5>
                  </div>
                </div>
                <div class="carousel-item"  data-bs-interval="2000">
                  <img src="../img/meja belajar.png" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5  class="card-title text-center flex-fill p-2 fs-6" style="background-color: rgba(255, 255, 255, 0.5)">1 Meja Blejar</h5>
                  </div>
                </div>  
                <div class="carousel-item"  data-bs-interval="2000">
                  <img src="../img/kamar mandi3.png" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5  class="card-title text-center flex-fill p-2 fs-6" style="background-color: rgba(255, 255, 255, 0.5)">Kamar mandi di dalam kamar</h5>
                  </div>
                </div>  
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
        </div>
        
        <div class="col mx-5">
          <h4 class="fw-bold"> Kamar no. {{ $kamar->no }}</h4>
          <p class="fs-5">{{ $kamar->tipe }}</p>
          <p class="fs-4 fw-bold text-danger">Rp {{ $kamar->harga }}</p>

          @if ($kamar->tipe='Tipe 1')
            <p class="mt-3 text-body-tertiary">Ukuran Kamar : 3 x 4 <br>
            Ukuran Kamar Mandi : 1.5 x 1.5
            </p>
              
          @else
              
          @endif

          
          <button type="button" class="btn btn-secondary rounded-0 mt-5" style="width: 4cm">Pesan</button>
              
          
          
          
          

        </div>
      </div>
    </div>
</div>


@endsection