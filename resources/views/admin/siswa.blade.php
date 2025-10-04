@extends('admin.layout')

@section('title', 'Data Murid')

@section('content')
<div class="container py-4">
    <h1 class="mb-4 fw-bold text-primary">
        <i class="bi bi-people-fill me-2"></i> Data Siswa SMK YPC
    </h1>

    <div class="mb-3">
        <a href=" {{ route('admin.siswa.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle-fill me-2"></i>Tambah Data
        </a>
    </div>

    <div class="card shadow border-0">
        <div class="card-body">
            <div class="table-responsive">
                <table id="muridTable" class="table table-striped table-bordered">
                    <thead class="table-primary">
                        <tr class="text-center">
                            <th>No</th>
                            <th>NISN</th>
                            <th>Nama Siswa</th>
                            <th>Jenis Kelamin</th>
                            <th>Tahun Masuk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $index => $s)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>{{ $s->nisn }}</td>
                                <td>{{ $s->nama_siswa }}</td>
                                <td>{{ $s->jenis_kelamin }}</td>
                                <td>{{ $s->tahun_masuk }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.siswa.edit', $s->id) }}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i>Edit
                                    </a>
                                    <form action="{{ route('admin.siswa.destroy', $s->id) }}" method="POST" class="d-inline"
                                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus
                                            <i class="bi bi-t"></i>
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
    $('#muridTable').DataTable({
        responsive: true,
        autoWidth: false,
    });
});
</script>
@endpush
