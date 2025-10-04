@extends('admin.layout')

@section('title', 'Data Ekskul')

@section('content')
<div class="container py-4">
    <h1 class="mb-4 fw-bold text-primary">
        <i class="bi bi-people-fill me-2"></i> Data Ekstrakurikuler
    </h1>

    <div class="mb-3">
        <a href="{{ route('admin.ekstrakurikuler.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-2"></i> Tambah Ekskul
        </a>
    </div>

    <div class="card shadow border-0">
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-primary text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama Ekskul</th>
                        <th>Pembina</th>
                        <th>Jadwal Latihan</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($ekskul as $index => $e)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $e->nama_ekskul }}</td>
                            <td>{{ $e->pembina }}</td>
                            <td>{{ $e->jadwal_latihan }}</td>
                            <td>{{ Str::limit($e->deskripsi, 50) }}</td>
                            <td class="text-center">
                                @if($e->gambar)
                                    <img src="{{ asset('storage/' . $e->gambar) }}" 
                                         alt="{{ $e->nama }}" 
                                         width="80" 
                                         class="img-thumbnail rounded">
                                @else
                                    <span class="text-muted">Tidak ada</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route('admin.ekstrakurikuler.edit', $e->id) }}" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('admin.ekstrakurikuler.destroy', $e->id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted">Belum ada data ekskul</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
