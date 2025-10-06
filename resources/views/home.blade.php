@extends('template')

@section('title', 'Beranda')

@section('content')

  <style>
    .galeri-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .galeri-img:hover {
        transform: translateY(-8px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
    }

    .card-img-top {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card-img-top:hover {
        transform: translateY(-8px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
    }

    .carousel-caption {
        right: auto;
        left: 5%;
        bottom: 20%;
        text-align: left;
        max-width: 600px;
        padding: 20px;
        border-radius: 10px;
    }

    .grayscale {
        filter: grayscale(100%);
        opacity: 0.8;
    }
  </style>

  @if (Request::is('/'))
  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="{{ asset('images/pc.jpg') }}" class="d-block w-100" alt="Banner 1" />
              <div class="carousel-caption">
                  <h5 class="fw-bold text-white">Website Resmi</h5>
                  <h1 class="display-4 fw-bold text-white">SMK YPC TASIKMALAYA</h1>
                  <p class="lead text-white">Sekolah Pusat Keunggulan, Siap Menghadapi Dunia Industri dan Kerja</p>
                  <a href="{{ url('/profil') }}" class="btn btn-light btn-lg mt-3">Selengkapnya</a>
              </div>
          </div>
      </div>
  </div>
  @endif

 <div class="my-5">
   <h5 class="mt-3 fw-bold">Kepala Sekolah</h5>
   <hr>
    <div class="row align-items-center g-4">
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/uj.png') }}"
                 alt="Kepala Sekolah"
                 class="img-fluid rounded-circle shadow-sm"
                 style="max-width: 220px;">
            <h5 class="mt-3 fw-bold">Drs. Ujang Sanusi M.M</h5>
            <small class="text-muted">Kepala Sekolah SMK YPC Tasikmalaya</small>
        </div>
        <div class="col-md-8">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <p class="fst-italic mb-3">
                        "Selamat datang di website resmi <strong>SMK YPC Tasikmalaya</strong>.
                        Kami berkomitmen untuk mencetak generasi yang unggul dalam prestasi,
                        berakhlak mulia, serta siap menghadapi tantangan dunia industri dan kerja."
                    </p>
                    <p>
                        Melalui pendidikan yang berkualitas, lingkungan belajar yang kondusif,
                        serta dukungan penuh dari tenaga pendidik yang profesional, kami berharap
                        seluruh siswa dapat berkembang menjadi pribadi yang <strong>mandiri, kompeten,
                        dan bermanfaat</strong> bagi masyarakat.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

 <div class="row text-center mb-5 mt-5">
    <div class="col-md-6 mb-3">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <h5 class="card-title fw-bold">Jumlah Guru</h5>
                <p class="display-6 fw-semibold text-success">{{ $jumlah_guru }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <h5 class="card-title fw-bold">Jumlah Siswa</h5>
                <p class="display-6 fw-semibold text-primary">{{ $jumlah_siswa }}</p>
            </div>
        </div>
    </div>
</div>



  <div class="mb-5">
      <h5 class="mt-3 fw-bold">Kegiatan Sekolah</h5>
      <hr>
      <div class="row g-4">
          <div class="col-md-4">
              <div class="card h-100 shadow-sm">
                  <img src="{{ asset('images/lks.jpg') }}" class="card-img-top" alt="Berita 1">
                  <div class="card-body">
                      <h5 class="card-title fw-bold">Lomba LKS 2025</h5>
                      <p class="card-text">SMK YPC berhasil meraih Juara 1 LKS tingkat nasional.</p>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card h-100 shadow-sm">
                  <img src="{{ asset('images/manasik.jpg') }}" class="card-img-top" alt="Berita 2">
                  <div class="card-body">
                      <h5 class="card-title fw-bold">Manasik Haji</h5>
                      <p class="card-text">Siswa kelas 11 melakukan kegiatan manasik haji.</p>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card h-100 shadow-sm">
                  <img src="{{ asset('images/pramuka.jpg') }}" class="card-img-top" alt="Berita 3">
                  <div class="card-body">
                      <h5 class="card-title fw-bold">Upacara Hari Pramuka</h5>
                      <p class="card-text">Seluruh siswa dan guru mengikuti upacara dalam memperingati Hari Pramuka 14 Agustus.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>


  <div class="mb-5">
      <h5 class="mt-3 fw-bold">Galeri Kegiatan</h5>
      <hr>
      <div class="row g-3">
          @foreach (['satu.jpg', 'dua.jpg', 'ldks.jpg', '17.jpg'] as $image)
          <div class="col-6 col-md-3">
              <img src="{{ asset('images/' . $image) }}" class="galeri-img" alt="Galeri">
          </div>
          @endforeach
      </div>
  </div>


  <div class="my-5">
      <h5 class="mt-3 fw-bold">Testimoni Alumni</h5>
      <hr>
      <div class="row g-4">
          <div class="col-md-6">
              <div class="card shadow-sm h-100">
                  <div class="card-body">
                      <p class="fst-italic">"SMK YPC memberi saya bekal yang cukup untuk langsung bekerja setelah lulus."</p>
                      <h6 class="fw-bold mb-0">Angga Pamula</h6>
                      <small class="text-muted">Alumni 2022 - TKJ</small>
                  </div>
              </div>
          </div>
          <div class="col-md-6">
              <div class="card shadow-sm h-100">
                  <div class="card-body">
                      <p class="fst-italic">"Lingkungan sekolah sangat mendukung perkembangan karakter anak saya."</p>
                      <h6 class="fw-bold mb-0">Ade Wahyudi</h6>
                      <small class="text-muted">Orang Tua Siswa</small>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection
