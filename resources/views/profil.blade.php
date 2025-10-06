@extends('template')

@section('title', 'Profil Sekolah')

@section('content')
<div class="container py-5">

    <h1 class="mb-5 text-center fw-bold text-primary">
        <i class="bi bi-mortarboard-fill me-2"></i> Profil SMK YPC Tasikmalaya
    </h1>

    <div class="card shadow border-0 mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="card-header bg-gradient bg-dark text-white fw-bold">
            <i class="bi bi-person-badge-fill me-2"></i> Kepala Sekolah
        </div>
        <div class="card-body">
           <div class="row align-items-center">
    <div class="col-md-4 mb-3 mb-md-0 text-center">
        <img src="{{ asset('images/uj.png') }}" 
             alt="Kepala Sekolah SMK YPC Tasikmalaya" 
             class="img-fluid rounded-circle shadow-sm" 
             style="max-width: 220px;">
    </div>

    <div class="col-md-8">
        @if($profil && $profil->deskripsi)
            {!! $profil->deskripsi !!}
        @else
            <p>Belum ada sambutan kepala sekolah.</p>
        @endif
    </div>
</div>
    </div>


    <div class="card shadow-lg border-0 mb-5 wow fadeInUp" data-wow-delay="0.2s">
        <div class="card-header bg-gradient bg-primary text-white fw-bold">
            <i class="bi bi-info-circle me-2"></i> Tentang Sekolah
        </div>
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-5 mb-3 mb-md-0">
                    <img src="{{ asset('images/s.jpg') }}" 
                         alt="Gedung SMK YPC Tasikmalaya" 
                         class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-md-7">
                    <p class="mb-3">
                        SMK YPC Tasikmalaya berada di bawah naungan <strong>Yayasan Pesantren Cintawana</strong>,
                        salah satu pesantren tertua di Tasikmalaya. Berdiri sejak tahun 1998, SMK YPC hingga kini
                        tetap eksis dan menjunjung nilai-nilai <strong>Islamic, Mandiri, Kompeten</strong>, serta berakhlak mulia.
                    </p>
                    <p class="mb-0">
                        Visi dan misi SMK YPC Tasikmalaya berfokus pada pembentukan generasi muda yang unggul dalam
                        akademik, keterampilan, akhlak, serta mampu memberi manfaat bagi masyarakat, bangsa, dan agama.
                    </p>
                </div>
            </div>
        </div>
    </div>

  
    <div class="card shadow border-0 mb-5 wow fadeInUp" data-wow-delay="0.3s">
        <div class="card-header bg-gradient bg-success text-white fw-bold">
            <i class="bi bi-lightbulb-fill me-2"></i> Visi
        </div>
        <div class="card-body text-center">
            <blockquote class="blockquote mb-0 fst-italic">
                <p class="fs-5">"Menjadi SMK yang unggul dalam prestasi, didasari IMTAK, dihiasi Akhlakul Karimah, 
                dibekali dengan IPTEK serta mampu bersaing pada tingkat Nasional dan Global."</p>
            </blockquote>
        </div>
    </div>

 
    <div class="card shadow border-0 mb-5 wow fadeInUp" data-wow-delay="0.4s">
        <div class="card-header bg-gradient bg-info text-white fw-bold">
            <i class="bi bi-flag-fill me-2"></i> Misi
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Meningkatkan profesionalisme dan akuntabilitas kinerja.</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Menumbuhkan semangat keunggulan dan kompetitif.</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Mewujudkan lingkungan pendidikan kondusif, kreatif, dan berprestasi.</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Menyelenggarakan pendidikan aktif, efektif, efisien, dan berkualitas.</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Menghasilkan tenaga kerja profesional sesuai tuntutan industri.</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Membekali peserta didik agar mampu mengembangkan diri.</li>
            </ul>
        </div>
    </div>

    <div class="card shadow border-0 mb-5 wow fadeInUp" data-wow-delay="0.5s">
        <div class="card-header bg-gradient bg-warning text-dark fw-bold">
            <i class="bi bi-award-fill me-2"></i> Akreditasi
        </div>
        <div class="card-body">
            <p>
                SMK YPC Tasikmalaya mendapat status akreditasi <strong>Grade A</strong> dengan nilai <strong>92</strong>
                dari <strong>BAN-S/M</strong> pada tahun <strong>2018</strong>.
            </p>

            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="card text-center border-success shadow-sm">
                        <div class="card-body">
                            <h1 class="display-2 text-success fw-bold">A</h1>
                            <p class="lead mb-1">92 / 100</p>
                            <small class="text-muted">Nilai Akreditasi</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <table class="table table-hover table-bordered mt-3 mt-md-0 shadow-sm">
                        <thead class="table-success">
                            <tr>
                                <th>Standar Penilaian</th>
                                <th>Nilai (%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>Standar Isi</td><td>97%</td></tr>
                            <tr><td>Standar Proses</td><td>89%</td></tr>
                            <tr><td>Standar Kelulusan</td><td>89%</td></tr>
                            <tr><td>Standar Pendidik</td><td>86%</td></tr>
                            <tr><td>Standar Sarana & Prasarana</td><td>96%</td></tr>
                            <tr><td>Standar Pengelolaan</td><td>92%</td></tr>
                            <tr><td>Standar Pembiayaan</td><td>96%</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
@endsection
