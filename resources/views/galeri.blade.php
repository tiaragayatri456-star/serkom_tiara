@extends('template')

@section('content')
<div class="container">
    <h1 class="text-center mb-5 fw-bold">Galeri Kegiatan SMK YPC</h1>

    <div class="row">
 @foreach($galeris as $item)
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            @if ($item->kategori == 'Video')
                <div style="height: 250px; border-radius:10px; overflow:hidden; position:relative;">
                    <video width="100%" height="250" controls>
                        <source src="{{ asset('storage/' . $item->file) }}" type="video/mp4">
                        Browser kamu tidak mendukung pemutar video.
                    </video>
                </div>
            @else
                <img src="{{ asset('storage/' . $item->file) }}" 
                     alt="{{ $item->judul }}" 
                     class="card-img-top" 
                     style="height: 250px; object-fit: cover; border-radius:10px;">
            @endif

            <div class="card-body">
                <h5 class="card-title text-center fw-bold">{{ $item->judul }}</h5>
            </div>
        </div>
    </div>
@endforeach

    </div>
</div>
@endsection
