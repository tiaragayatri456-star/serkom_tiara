@extends('admin.layout')

@section('title', 'Edit Berita')

@section('content')
<div class="container py-4">
    <h1 class="mb-4 fw-bold text-primary">
        <i class="bi bi-pencil-square me-2"></i> Edit Berita
    </h1>

    <div class="card shadow border-0 p-4">
        <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

           
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" id="judul" 
                       class="form-control @error('judul') is-invalid @enderror"
                       value="{{ old('judul', $berita->judul) }}" required>
                @error('judul')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

           
            <div class="mb-3">
                <label for="isi" class="form-label">Isi Berita</label>
                <textarea name="isi" id="isi" rows="5" 
                          class="form-control @error('isi') is-invalid @enderror" required>{{ old('isi', $berita->isi) }}</textarea>
                @error('isi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

           
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" 
                       class="form-control @error('tanggal') is-invalid @enderror"
                       value="{{ old('tanggal', $berita->tanggal) }}" required>
                @error('tanggal')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

           
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" name="gambar" id="gambar" 
                       class="form-control @error('gambar') is-invalid @enderror">
                @error('gambar')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                @if ($berita->gambar)
                    <div class="mt-2">
                        <p>Gambar saat ini:</p>
                        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar Berita" class="img-thumbnail" style="max-width: 200px;">
                    </div>
                @endif
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.berita') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left me-1"></i> Batal
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save me-1"></i> Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
