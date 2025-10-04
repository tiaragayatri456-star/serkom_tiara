@extends('admin.layout')

@section('title', 'Tambah Galeri')

@section('content')
<div class="container py-4">
    <h1 class="mb-4 fw-bold text-primary">
        <i class="bi bi-plus-circle me-2"></i> Tambah Galeri
    </h1>

    <div class="card shadow border-0">
        <div class="card-body">
            <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

               
                <div class="mb-3">
                    <label class="form-label fw-bold">Judul</label>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="Masukkan judul galeri" value="{{ old('judul') }}">
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                
                <div class="mb-3">
                    <label class="form-label fw-bold">Keterangan</label>
                    <textarea name="keterangan" rows="3" class="form-control @error('keterangan') is-invalid @enderror" placeholder="Masukkan keterangan">{{ old('keterangan') }}</textarea>
                    @error('keterangan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                
                <div class="mb-3">
                    <label class="form-label fw-bold">File (Foto/Video)</label>
                    <input type="file" name="file" class="form-control @error('file') is-invalid @enderror">
                    @error('file')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

              
                <div class="mb-3">
                    <label class="form-label fw-bold">Kategori</label>
                    <select name="kategori" class="form-select @error('kategori') is-invalid @enderror">
                        <option value="">-- Pilih Kategori --</option>
                        <option value="foto" {{ old('kategori') == 'foto' ? 'selected' : '' }}>Foto</option>
                        <option value="video" {{ old('kategori') == 'video' ? 'selected' : '' }}>Video</option>
                    </select>
                    @error('kategori')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

               
                <div class="mt-4">
                    <a href="{{ route('admin.galeri') }}" class="btn btn-secondary">
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
