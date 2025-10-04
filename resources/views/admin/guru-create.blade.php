@extends('admin.layout')

@section('title', 'Tambah Guru')

@section('content')
<div class="container py-4">
    <h1 class="mb-4 fw-bold text-primary">
        <i class="bi bi-plus-circle me-2"></i> Tambah Data Guru
    </h1>

    <div class="card shadow border-0">
        <div class="card-body">
            <form action="{{ route('admin.guru.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama Guru</label>
                    <input type="text" name="nama_guru" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">NIP</label>
                    <input type="text" name="nip" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mata Pelajaran</label>
                    <input type="text" name="mapel" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" name="foto" class="form-control" accept="image/*">
                </div>
                <button type="submit" class="btn btn-success">
                    <i class="bi bi-save me-2"></i> Simpan
                </button>
                <a href="{{ route('admin.guru') }}" class="btn btn-secondary">
                    Batal
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
