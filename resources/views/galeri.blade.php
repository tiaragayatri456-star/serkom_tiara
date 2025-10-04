@extends('template')

@section('content')
<div class="container">
    <h1 class="text-center mb-5 fw-bold">Galeri Kegiatan SMK YPC</h1>

    <div class="row">
        @foreach($galeris as $item)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/' . $item->gambar) }}" class="card-img-top" 
                     alt="{{ $item->judul }}" style="height: 250px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title text-center fw-bold">{{ $item->judul }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
