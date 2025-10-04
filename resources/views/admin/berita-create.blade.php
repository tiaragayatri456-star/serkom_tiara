@extends('admin.layout')

@section('title', 'Tambah Berita')

@section('content')
<div class="container py-4">
    <h1 class="mb-4 fw-bold text-primary">
        <i class="bi bi-plus-circle me-2"></i> Tambah Berita
    </h1>

    <div class="card shadow border-0">
        <div class="card-body">
            <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul') }}" required>
                    @error('judul')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="isi" class="form-label">Isi Berita</label>
                    <textarea name="isi" id="isi" class="form-control" rows="5" required>{{ old('isi') }}</textarea>
                    @error('isi')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ old('tanggal', date('Y-m-d')) }}" required>
                    @error('tanggal')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar (opsional)</label>
                    <input type="file" name="gambar" id="gambar" class="form-control">
                    @error('gambar')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save me-1"></i> Simpan Berita
                </button>
                <a href="{{ route('admin.berita') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
