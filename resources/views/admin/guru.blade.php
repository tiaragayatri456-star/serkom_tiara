@extends('admin.layout')

@section('title', 'Data Guru')

@section('content')
<div class="container py-4">
    <h1 class="mb-4 fw-bold text-primary">
        <i class="bi bi-people-fill me-2"></i> Data Guru SMK YPC
    </h1>


    <div class="mb-3">
        <a href="{{ route('admin.guru.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-2"></i> Tambah Data
        </a>
    </div>

    <div class="card shadow border-0">
        <div class="card-body">
            <div class="table-responsive">
                <table id="guruTable" class="table table-striped table-bordered">
                    <thead class="table-primary">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama Guru</th>
                            <th>NIP</th>
                            <th>Mata Pelajaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($guru as $index => $g)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td class="text-center">
                                  <img src="{{ asset('storage/' . $g->foto) }}"
                                         alt="Foto {{ $g->nama_guru }}"
                                         width="60" height="60"
                                         class="rounded-circle border">
                                </td>
                                <td>{{ $g->nama_guru }}</td>
                                <td>{{ $g->nip }}</td>
                                <td>{{ $g->mapel }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.guru.edit', $g->id) }}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    <form action="{{ route('admin.guru.destroy', $g->id) }}" method="POST" class="d-inline"
                                          onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
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
    $('#guruTable').DataTable({
        responsive: true,
        autoWidth: false,
    });
});
</script>
@endpush
