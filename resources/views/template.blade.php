<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - SekolahKu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f8ff;
        }
        .navbar {
            background: linear-gradient(90deg, #4facfe, #00f2fe);
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.3rem;
        }
        .nav-link {
            color: white !important;
            font-weight: 500;
            transition: 0.3s;
        }
        .nav-link:hover {
            color: #ffe082 !important;
        }
        .dropdown-menu {
            border-radius: 0.5rem;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .container {
            padding-top: 30px;
        }
        footer {
            margin-top: 50px;
            background: #4facfe;
            color: white;
            text-align: center;
            padding: 15px 0;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="bi bi-mortarboard-fill me-1"></i> SMK YPC
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-bold " href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ url('/profil') }}">Profil Sekolah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ url('/ekstrakurikuler') }}">Ekstrakurikuler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ url('/berita') }}">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ url('/program') }}">Program Keahlian</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ url('/guru') }}">Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ url('/siswa') }}">Siswa</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ url('/galeri') }}">Galeri</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

   <footer class="text-white pt-5" style="background-color:#4facfe, #00f2fe;">
  <div class="container">
    <div class="row">

      <div class="col-md-4 mb-4">
        <h5 class="fw-bold">About Us</h5>
        <hr style="width:50px; border:2px solid #4facfe;">
        <p><i class="fas fa-map-marker-alt me-2"></i>Jl.Komplek Pesantren Cintawana Singaparna Cikunten Kec.Singaparna</p>
        <p><i class="fas fa-phone me-2"></i>+62 82126263321</p>
        <p><i class="fas fa-envelope me-2"></i>smkypc@gmail.com</p>
        <div>
          <a href="#" class="btn btn-primary btn-sm"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="btn btn-info btn-sm"><i class="fab fa-twitter"></i></a>
          <a href="#" class="btn btn-danger btn-sm"><i class="fab fa-instagram"></i></a>
          <a href="#" class="btn btn-danger btn-sm"><i class="fab fa-youtube"></i></a>
          <a href="#" class="btn btn-warning btn-sm"><i class="fab fa-tiktok"></i></a>
          <a href="#" class="btn btn-success btn-sm"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>


      <div class="col-md-4 mb-4">
        <h5 class="fw-bold">Link Penting</h5>
        <hr style="width:50px; border:2px solid #4facfe;">
        <ul class="list-unstyled">
          <li><a href="/" class="text-white text-decoration-none">Beranda</a></li>
          <li><a href="/profil" class="text-white text-decoration-none">Profil</a></li>
          <li><a href="/guru" class="text-white text-decoration-none">Data Guru</a></li>
          <li><a href="/siswa" class="text-white text-decoration-none">Data Siswa</a></li>
          <li><a href="/kontak" class="text-white text-decoration-none">Kontak</a></li>
        </ul>
      </div>

      <div class="col-md-4 mb-4">
      <div class="p-3 rounded" style="background-color: rgba(108,117,125,0.6);">
       <h5 class="fw-bold">SMK YPC</h5>
       <p>Mewujudkan Generasi yang Unggul, Berprestasi, dan Berakhlak Mulia</p>
        </div>
</div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</body>
</html>
