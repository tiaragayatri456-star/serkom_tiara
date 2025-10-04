@extends('template')

@section('title', 'Program Keahlian')

@section('content')
<div class="container py-5">

    <h1 class="mb-5 text-center fw-bold text-primary">
        <i class="bi bi-journal-code me-2"></i> Program Keahlian SMK YPC Tasikmalaya
    </h1>

    <style>
        .card-img-top {
            height: 220px;      
            object-fit: cover;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;

            transition: transform 0.6s ease-in-out; /* efek halus */
            animation: zoomInOut 6s infinite alternate ease-in-out; /* gerak otomatis */
        }

        /* Efek hover */
        .card:hover .card-img-top {
            transform: scale(1.08);
        }

        /* Animasi otomatis */
        @keyframes zoomInOut {
            from { transform: scale(1); }
            to { transform: scale(1.05); }
        }
    </style>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('images/re.jpg') }}" class="card-img-top" alt="PPLG">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">PPLG</h5>
                    <p class="card-text">Pengembangan Perangkat Lunak & Gim – fokus pada pemrograman, desain aplikasi, dan pembuatan game.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('images/unnamed-2.jpg') }}" class="card-img-top" alt="DPIB">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">DPIB</h5>
                    <p class="card-text">Desain Pemodelan & Informasi Bangunan – fokus pada perencanaan bangunan, arsitektur, dan konstruksi.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('images/dkv.jpg') }}" class="card-img-top" alt="DKV">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">DKV</h5>
                    <p class="card-text">Desain Komunikasi Visual – fokus pada desain grafis, multimedia, animasi, dan periklanan.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('images/samsung.jpg') }}" class="card-img-top" alt="STI">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">STI</h5>
                    <p class="card-text">Samsung Techenic Institut – fokus pada jaringan komunikasi, telekomunikasi, dan teknologi digital.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('images/teklin.png') }}" class="card-img-top" alt="Teklin">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">TEKLIN</h5>
                    <p class="card-text">Teknik Elektronika Industri – fokus pada instalasi listrik, kontrol industri, dan sistem tenaga.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('images/tkr.jpeg') }}" class="card-img-top" alt="TKR">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">TKR</h5>
                    <p class="card-text">Teknik Kendaraan Ringan – fokus pada perawatan, perbaikan, dan teknologi otomotif roda empat.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
