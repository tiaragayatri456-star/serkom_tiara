@extends('template')

@section('title', 'Ekstrakurikuler')

@section('content')
<div class="container py-4">
    <h1 class="mb-5 text-center fw-bold text-primary">
        <i class="bi bi-journal-code me-2"></i> Ekstrakurikuler SMK YPC TASIKMALAYA
    </h1>

    <style>
        .card-img-top {
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 20px rgba(0,0,0,0.2);
        }

        .card:hover .card-img-top {
            transform: scale(1.1);
        }

        .info-ekskul {
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 0.3rem;
        }
    </style>

    <div class="row g-4">
        @forelse($ekstrakurikulers as $ekskul)
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow-sm">
                @if($ekskul->gambar)
                    <img src="{{ asset('storage/'.$ekskul->gambar) }}" class="card-img-top" alt="{{ $ekskul->nama }}">
                @endif
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">{{ $ekskul->nama_ekskul }}</h5>
                    <p class="card-text">{{ $ekskul->deskripsi }}</p>
                    <p class="info-ekskul"><strong>Pembina:</strong> {{ $ekskul->pembina }}</p>
                    <p class="info-ekskul"><strong>Latihan:</strong> {{ $ekskul->jadwal_latihan }}</p>
                </div>
            </div>
        </div>
        @empty
            <p class="text-center">Belum ada data ekstrakurikuler.</p>
        @endforelse
    </div>
</div>
@endsection
