@extends('admin.layout')

@section('title', 'Tambah Profil Sekolah')

@section('content')
<div class="container py-4">
    <h1 class="mb-4 fw-bold text-primary">
        <i class="bi bi-plus-circle me-2"></i> Tambah Profil Sekolah
    </h1>

    <div class="card shadow border-0">
        <div class="card-body">
            <form action="{{ route('admin.profil.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Sekolah</label>
                    <input type="text" name="nama_sekolah" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kepala Sekolah</label>
                    <textarea name="kepala_sekolah" class="form-control" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto Sekolah</label>
                    <input type="file" name="foto" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Logo</label>
                    <input type="file" name="logo" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">NPSN</label>
                    <input type="text" name="npsn" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" rows="2"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kontak</label>
                    <input type="text" name="kontak" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Visi Misi</label>
                    <textarea name="visi_misi" class="form-control" rows="2"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tahun Berdiri</label>
                    <input type="number" name="tahun_berdiri" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="4"></textarea>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.profil') }}" class="btn btn-secondary me-2">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
