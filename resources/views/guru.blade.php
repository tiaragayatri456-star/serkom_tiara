@extends('template')

@section('title', 'Data Guru')

@section('content')
<div class="container py-5">
    <h1 class="mb-4 text-center">Daftar Guru</h1>

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped table-hover">
        <thead class="table-primary text-center">
            <tr>
                <th>No.</th>
                <th>Nama Guru</th>
                <th>NIP</th>
                <th>Mata Pelajaran</th>
            </tr>
        </thead>
        <tbody>
              @forelse ($gurus as $index => $g)
            <tr>
                <td class="text-center"> {{ $index + 1 }}</td>
                <td>{{ $g->nama_guru }}</td>
                <td>{{ $g->nip }}</td>
                <td>{{ $g->mapel }}</td>
            </tr>
            @empty
              <tr>
                <td colspan="6" class="text=center">Data guru belum tersedia</td>
              </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
