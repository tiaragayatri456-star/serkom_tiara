@extends('admin.layout')

@section('title', 'Edit Galeri')

@section('content')
<div class="container py-4">
    <h1 class="mb-4 fw-bold text-primary">
        <i class="bi bi-pencil-square me-2"></i> Edit Galeri
    </h1>

    <div class="card shadow border-0">
        <div class="card-body">
            <form action="{{ route('admin.galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

               
                <div class="mb-3">
                    <label class="form-label fw-bold">Judul</label>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror"
                           value="{{ old('judul', $galeri->judul) }}">
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

               
                <div class="mb-3">
                    <label class="form-label fw-bold">Keterangan</label>
                    <textarea name="keterangan" rows="3" class="form-control @error('keterangan') is-invalid @enderror">{{ old('keterangan', $galeri->keterangan) }}</textarea>
                    @error('keterangan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                
                <div class="mb-3">
                    <label class="form-label fw-bold">File Saat Ini</label>
                    <div class="mb-2 d-flex justify-content-center">
                        @if($galeri->kategori == 'foto')
                            <img src="{{ asset('storage/'.$galeri->file) }}" 
                                 alt="Preview" class="img-fluid rounded shadow-sm" 
                                 style="max-height: 200px;">
                        @elseif($galeri->kategori == 'video')
                            <video controls class="rounded shadow-sm" style="max-height: 250px; max-width:100%;">
                                <source src="{{ asset('storage/'.$galeri->file) }}" type="video/mp4">
                                Browser Anda tidak mendukung video.
                            </video>
                        @endif
                    </div>
                </div>

                
                <div class="mb-3">
                    <label class="form-label fw-bold">Ganti File (Opsional)</label>
                    <input type="file" name="file" class="form-control @error('file') is-invalid @enderror">
                    @error('file')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

               
                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.galeri') }}" class="btn btn-secondary me-2">
                        <i class="bi bi-arrow-left"></i> Batal
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save me-1"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
