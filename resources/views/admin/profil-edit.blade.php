@extends('admin.layout')

@section('title', 'Edit Profil Sekolah')

@section('content')
<div class="container py-4">
    <h1 class="mb-4 fw-bold text-primary">
        <i class="bi bi-pencil-square me-2"></i> Edit Profil Sekolah
    </h1>

    <div class="card shadow border-0">
        <div class="card-body">
            <form action="{{ route('admin.profil.update', $profil->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
                    <input type="text" name="nama_sekolah" id="nama_sekolah"
                           class="form-control @error('nama_sekolah') is-invalid @enderror"
                           value="{{ old('nama_sekolah', $profil->nama_sekolah) }}" required>
                    @error('nama_sekolah') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="kepala_sekolah" class="form-label">Kepala Sekolah</label>
                    <input type="text" name="kepala_sekolah" id="kepala_sekolah"
                           class="form-control @error('kepala_sekolah') is-invalid @enderror"
                           value="{{ old('kepala_sekolah', $profil->kepala_sekolah) }}">
                    @error('kepala_sekolah') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto Sekolah</label><br>
                    @if ($profil->foto)
                        <img src="{{ asset('storage/' . $profil->foto) }}" alt="Foto Sekolah" class="img-thumbnail mb-2" style="max-height: 150px;">
                    @endif
                    <input type="file" name="foto" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Logo Sekolah</label><br>
                    @if ($profil->logo)
                        <img src="{{ asset('storage/' . $profil->logo) }}" alt="Logo Sekolah" class="img-thumbnail mb-2" style="max-height: 150px;">
                    @endif
                    <input type="file" name="logo" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="npsn" class="form-label">NPSN</label>
                    <input type="text" name="npsn" id="npsn"
                           class="form-control"
                           value="{{ old('npsn', $profil->npsn) }}">
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control">{{ old('alamat', $profil->alamat) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="kontak" class="form-label">Kontak</label>
                    <input type="text" name="kontak" id="kontak"
                           class="form-control"
                           value="{{ old('kontak', $profil->kontak) }}">
                </div>

                <div class="mb-3">
                    <label for="visi_misi" class="form-label">Visi Misi</label>
                    <textarea name="visi_misi" id="visi" class="form-control">{{ old('visi', $profil->visi) }}</textarea>
                </div> 

                <div class="mb-3">
                    <label for="tahun_berdiri" class="form-label">Tahun Berdiri</label>
                    <input type="number" name="tahun_berdiri" id="tahun_berdiri"
                           class="form-control"
                           value="{{ old('tahun_berdiri', $profil->tahun_berdiri) }}">
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control">{{ old('deskripsi', $profil->deskripsi) }}</textarea>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.profil') }}" class="btn btn-secondary me-2">Batal</a>
                    <button type="submit" class="btn btn-primary">Perbarui</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
