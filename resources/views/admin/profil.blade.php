@extends('admin.layout')

@section('title', 'Profil Sekolah')

@section('content')
<div class="container py-4">
    <h1 class="mb-4 fw-bold text-primary">
        <i class="bi bi-bank me-2"></i> Profil Sekolah
    </h1>

    {{-- Tombol Tambah Data --}}
    <div class="mb-3">
        <a href="{{ route('admin.profil.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-1"></i> Tambah Profil
        </a>
    </div>

    <div class="card shadow border-0">
        <div class="card-body">
            <div class="table-responsive">
                <table id="profilTable" class="table table-striped table-bordered align-middle">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama Sekolah</th>
                            <th>Kepala Sekolah</th>
                            <th>Foto</th>
                            <th>Logo</th>
                            <th>NPSN</th>
                            <th>Alamat</th>
                            <th>Kontak</th>
                            <th>Visi Misi</th>
                            <th>Tahun Berdiri</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profil as $index => $p)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>{{ $p->nama_sekolah }}</td>
                                <td>{{ $p->kepala_sekolah }}</td>
                                <td>
                                    @if($p->foto)
                                        <img src="{{ asset('storage/' . $p->foto) }}" alt="Foto Sekolah" width="80">
                                    @endif
                                </td>
                                <td>
                                    @if($p->logo)
                                        <img src="{{ asset('storage/' . $p->logo) }}" alt="Logo" width="60">
                                    @endif
                                </td>
                                <td>{{ $p->npsn }}</td>
                                <td>{{ $p->alamat }}</td>
                                <td>{{ $p->kontak }}</td>
                                <td>{{ $p->visi_misi }}</td>
                                <td>{{ $p->tahun_berdiri }}</td>
                                <td>{{ $p->deskripsi }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.profil.edit', $p->id) }}" class="btn btn-sm btn-warning">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('admin.profil.destroy', $p->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin mau hapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash"></i>
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
    $('#profilTable').DataTable({
        responsive: true,
        autoWidth: false,
    });
});
</script>
@endpush
