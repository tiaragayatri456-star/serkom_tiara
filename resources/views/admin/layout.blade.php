<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        body {
            overflow-x: hidden;
        }
        .sidebar {
            min-height: 100vh;
            width: 220px;
            background-color: #0d6efd;
            color: white;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 12px 18px;
        }
        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.15);
            border-radius: 4px;
        }
        .content {
            margin-left: 220px;
            padding: 20px;
        }
    </style>
</head>
<body>

    <div class="sidebar position-fixed top-0 start-0">
    @if (Auth::user()->role == 'Admin')
        <a href="/admin/dashboard">
            <i class="bi bi-house-fill me-2"></i> Dashboard
        </a>
    @endif

    @if(Auth::user()->role == 'Admin')
        <a href="{{ url('/admin/guru') }}"><i class="bi bi-person-badge-fill me-2"></i> Data Guru</a>
        <a href="{{ url('/admin/siswa') }}"><i class="bi bi-people-fill me-2"></i> Data Siswa</a>
        <a href="{{ url('/admin/berita') }}"><i class="bi bi-newspaper me-2"></i> Berita</a>
        <a href="{{ url('/admin/ekstrakurikuler') }}"><i class="bi bi-journal-code me-2"></i> Ekstrakurikuler</a>
        <a href="{{ url('/admin/profil') }}"><i class="bi bi-person-circle me-2"></i> Profil</a>
        <a href="{{ url('/admin/galeri') }}"><i class="bi bi-images me-2"></i> Galeri</a>

    @elseif(Auth::user()->role == 'Operator')
        <a href="{{ url('/admin/berita') }}"><i class="bi bi-newspaper me-2"></i> Berita</a>
        <a href="{{ url('/admin/ekstrakurikuler') }}"><i class="bi bi-journal-code me-2"></i> Ekstrakurikuler</a>
        <a href="{{ url('/admin/galeri') }}"><i class="bi bi-images me-2"></i> Galeri</a>
    @endif

    <a href="{{ url('/logout') }}" class="px-3 text-light mt-2 d-block">Logout</a>
</div>


    <div class="content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
