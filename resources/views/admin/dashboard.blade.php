@extends('admin.layout')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container py-4">
    <h1 class="mb-4 fw-bold">Dashboard Admin</h1>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card text-center shadow border-0">
                <div class="card-body">
                    <i class="bi bi-person-badge-fill fs-1 text-primary mb-2"></i>
                    <h5 class="card-title">Jumlah Guru</h5>
                    {{-- <h2 class="fw-bold">{{ $jumlah_guru }}</h2> --}}
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="card text-center shadow border-0">
                <div class="card-body">
                    <i class="bi bi-people-fill fs-1 text-success mb-2"></i>
                    <h5 class="card-title">Jumlah Siswa</h5>
                    {{-- <h2 class="fw-bold">{{ $jumlah_siswa }}</h2> --}}
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center shadow border-0">
                <div class="card-body">
                    <i class="bi bi-newspaper fs-1 text-danger mb-2"></i>
                    <h5 class="card-title">Jumlah Berita</h5>
                    {{-- <h2 class="fw-bold">{{ $jumlah_berita }}</h2> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
