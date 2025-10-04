@extends('admin.layout')

@section('title', 'Edit Data Guru')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Edit Data Guru</h1>

    <form action="{{ route('admin.guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_guru" class="form-label">Nama Guru</label>
            <input type="text" class="form-control" name="nama_guru" value="{{ old('nama_guru', $guru->nama_guru) }}" required>
        </div>

        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="text" class="form-control" name="nip" value="{{ old('nip', $guru->nip) }}" required>
        </div>

        <div class="mb-3">
            <label for="mapel" class="form-label">Mata Pelajaran</label>
            <input type="text" class="form-control" name="mapel" value="{{ old('mapel', $guru->mapel) }}" required>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label><br>
            @if($guru->foto)
                <img src="{{ asset('storage/'.$guru->foto) }}" alt="Foto Guru" width="100" class="mb-2"><br>
            @endif
            <input type="file" class="form-control" name="foto">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.guru') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
