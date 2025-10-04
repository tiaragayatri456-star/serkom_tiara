@extends('admin.layout')

@section('title', 'Edit Data Siswa')

@section('content')
<div class="container py-4">
    <h1 class="mb-4 fw-bold text-primary">
        <i class="bi bi-pencil-square me-2"></i> Edit Data Siswa
    </h1>

    <div class="card shadow border-0">
        <div class="card-body">
            <form action="{{ route('admin.siswa.update', $siswa->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nisn" class="form-label">NISN</label>
                    <input type="text" class="form-control" id="nisn" name="nisn" value="{{ old('nisn', $siswa->nisn) }}" required>
                </div>

                <div class="mb-3">
                    <label for="nama_siswa" class="form-label">Nama Siswa</label>
                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ old('nama_siswa', $siswa->nama_siswa) }}" required>
                </div>

                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" required>
                        <option value="">-- Pilih --</option>
                        <option value="Laki-laki" {{ old('jenis_kelamin', $siswa->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ old('jenis_kelamin', $siswa->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="tahun_masuk" class="form-label">Tahun Masuk</label>
                    <input type="number" class="form-control" id="tahun_masuk" name="tahun_masuk" value="{{ old('tahun_masuk', $siswa->tahun_masuk) }}" required>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save me-2"></i>Update
                </button>
                <a href="{{ route('admin.siswa') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
