@extends('template')

@section('title', 'Berita')

@section('content')
<div class="container py-5">

    <h1 class="mb-5 text-center fw-bold text-primary">
        <i class="bi bi-newspaper me-2"></i> Berita SMK YPC Tasikmalaya
    </h1>

    <style>
        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
            transition: transform 0.5s ease-in-out;
        }

        .card:hover .card-img-top {
            transform: scale(1.08);
        }
    </style>

    <div class="row g-4">
        @forelse($beritas as $berita)
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                @if($berita->gambar)
                    <img src="{{ asset('storage/'.$berita->gambar) }}" class="card-img-top" alt="{{ $berita->judul }}">
                @endif
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">{{ $berita->judul }}</h5>
                    <p class="text-muted mb-2">{{ \Carbon\Carbon::parse($berita->tanggal)->format('d F Y') }}</p>
                    <p class="card-text">{{ \Illuminate\Support\Str::limit($berita->isi, 120) }}</p>
                    <a href="{{ route('admin.berita', $berita->id) }}" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        @empty
            <p class="text-center">Belum ada berita.</p>
        @endforelse
    </div>

</div>
@endsection
