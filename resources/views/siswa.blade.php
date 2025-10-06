@extends('template')

@section('title', 'Data Siswa')

@section('content')
<div class="container py-5">
    <h1 class="mb-4 text-center">Daftar Siswa</h1>

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped table-hover">
        <thead class="table-primary text-center">
            <tr>
                <th>No.</th>
                <th>NISN</th>
                <th>Nama Siswa</th>
                <th>Jenis Kelamin</th>
                <th>Tahun Masuk</th>
            </tr>
        </thead>
        <tbody>
              @forelse ($siswas as $index => $s)
            <tr>
                <td class="text-center"> {{ $index + 1 }}</td>
                <td>{{ $s->nisn }}</td>
                <td>{{ $s->nama_siswa }}</td>
                <td>{{ $s->jenis_kelamin }}</td>
                <td>{{ $s->tahun_masuk }}</td>
            </tr>
            @empty
              <tr>
                <td colspan="6" class="text=center">Data siswa belum tersedia</td>
              </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
