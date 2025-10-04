@extends('admin.layout')

@section('title', 'Edit Ekskul')

@section('content')
<div class="container py-4">
    <h1 class="mb-4 fw-bold text-primary">
        <i class="bi bi-pencil-square me-2"></i> Edit Ekskul
    </h1>

    <div class="card shadow border-0">
        <div class="card-body">
            <form action="{{ route('admin.ekstrakurikuler.update', $ekskul->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama_ekskul" class="form-label">Nama Ekskul</label>
                    <input type="text" name="nama_ekskul" id="nama_ekskul" 
                           class="form-control @error('nama_ekskul') is-invalid @enderror"
                           value="{{ old('nama_ekskul', $ekskul->nama_ekskul) }}">
                    @error('nama_ekskul') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="pembina" class="form-label">Pembina</label>
                    <input type="text" name="pembina" id="pembina" 
                           class="form-control @error('pembina') is-invalid @enderror"
                           value="{{ old('pembina', $ekskul->pembina) }}">
                    @error('pembina') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="jadwal_latihan" class="form-label">Jadwal Latihan</label>
                    <input type="text" name="jadwal_latihan" id="jadwal_latihan" 
                           class="form-control @error('jadwal_latihan') is-invalid @enderror"
                           value="{{ old('jadwal_latihan', $ekskul->jadwal_latihan) }}">
                    @error('jadwal_latihan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" rows="4" 
                              class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $ekskul->deskripsi) }}</textarea>
                    @error('deskripsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    @if($ekskul->gambar)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $ekskul->gambar) }}" 
                                 alt="{{ $ekskul->nama_ekskul }}" width="100" class="img-thumbnail">
                        </div>
                    @endif
                    <input type="file" name="gambar" id="gambar" 
                           class="form-control @error('gambar') is-invalid @enderror">
                    @error('gambar') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save me-2"></i> Update
                </button>
                <a href="{{ route('admin.ekstrakurikuler') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
