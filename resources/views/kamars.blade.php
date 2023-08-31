@extends('layouts.app')
@section('container')
        <div class="container">
            <div class="row mb-5">
                @foreach ($kamars as $kamar)
                <div class="col-md-3">
                    {{-- <h1>kamar</h1> --}}
                    <div class="card mt-3" style="width: 260px;">
                        @if ($kamar->status=='Tersedia') 
                            <div class="position-absolute p-3 py-2 text-light" style="background-color: rgba(61, 155, 18, 0.7)">Tersedia</div>
                            <a href="/kamar/{{$kamar->no}}" class="btn btn-dark mb-2 mx-2 position-absolute bottom-0 end-0 btn-sm" type="button" >Detail</a>
                        @elseif ($kamar->status=='Dipesan' || 'Tidak tersedia')
                            <div class="position-absolute p-3 py-2 text-light" style="background-color: rgba(255, 25, 0, 0.7)"> Tidak Tersedia</div>
                            <a href="/kamar/{{$kamar->no}}" class="btn btn-dark mb-2 mx-2 position-absolute bottom-0 end-0 btn-sm visually-hidden" type="button" >Detail</a>
                        @endif
                        
                        
                        <p class="position-absolute top-0 end-0 fs-1 mx-2">{{ $kamar->no }}</p>
                        
                        @if ($kamar->tipe=="Tipe 1")
                            <img src="img/tipe1.jpeg" class="card-img-top" alt="tipe 1" style="height: 130px;">
                            <p class="fs-6 mx-3 position-absolute bottom-0 start-0">Rp {{ $kamar->harga }}</p>
                        @else
                            <img src="img/tipe2.jpeg" class="card-img-top" alt="tipe 2" style="height: 130px;">
                            <p class="fs-6 mx-3 position-absolute bottom-0 start-0">Rp {{ $kamar->harga }}</p>

                        @endif
                        <div class="card-body">
                            <h6 class="card-title">{{ $kamar->tipe}}</h6>

                            <p class="mb-5">{{ $kamar->detail }}</p>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
@endsection