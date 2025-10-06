
@extends('admin.layout')

@section('title', 'Data Galeri')

@section('content')
<div class="container py-4">
    <h1 class="mb-4 fw-bold text-primary">
        <i class="bi bi-images me-2"></i> Data Galeri
    </h1>

    <div class="card shadow border-0">
        <div class="card-body">
            <a href="{{ route('admin.galeri.create') }}" class="btn btn-primary mb-3">
                <i class="bi bi-plus-circle me-2"></i> Tambah Galeri
            </a>

            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Keterangan</th>
                            <th>File</th>
                            <th>Kategori</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($galeri as $index => $item)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td class="text-center">
                                @if($item->kategori == 'Foto')
                                    <img src="{{ asset('storage/' . $item->file) }}" 
                                         alt="Foto" width="100" class="rounded shadow-sm">
                                @else
                                    <video width="150" controls>
                                        <source src="{{ asset('storage/' . $item->file) }}" type="video/mp4">
                                        Browser tidak mendukung video.
                                    </video>
                                @endif
                            </td>
                            <td class="text-center">
                                <span class="badge bg-{{ $item->kategori == 'foto' ? 'success' : 'danger' }}">
                                    {{ ucfirst($item->kategori) }}
                                </span>
                            </td>
                            <td class="text-center">{{ $item->created_at->format('d M Y') }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.galeri.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('admin.galeri.destroy', $item->id) }}" 
                                      method="POST" class="d-inline"
                                      onsubmit="return confirm('Yakin hapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted">Belum ada data galeri</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
