@extends('admin.layout')

@section('title', 'Data Berita')

@section('content')
<div class="container py-4">
    <h1 class="mb-4 fw-bold text-primary">
        <i class="bi bi-newspaper me-2"></i> Data Berita
    </h1>

    <div class="mb-3">
        <a href="{{ route('admin.berita.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-1"></i> Tambah Data
        </a>
    </div>

    <div class="card shadow border-0">
        <div class="card-body">
            <div class="table-responsive">
                <table id="beritaTable" class="table table-striped table-bordered">
                    <thead class="table-primary">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th>Tanggal</th>
                            <th>Gambar</th>
                            <th>User</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($berita as $index => $b)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>{{ $b->judul }}</td>
                                <td>{{ Str::limit($b->isi, 50) }}</td>
                                <td>{{ $b->tanggal }}</td>
                                <td class="text-center">
                                    @if($b->gambar)
                                        <img src="{{ asset('storage/' . $b->gambar) }}" alt="Gambar Berita" width="80">
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <td>{{ $b->user->name ?? 'Admin' }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.berita.edit', $b->id) }}" class="btn btn-sm btn-warning">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>

                                    <form action="{{ route('admin.berita.destroy', $b->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function () {
    $('#beritaTable').DataTable({
        responsive: true,
        autoWidth: false,
    });
});
</script>
@endpush
