<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Ekstrakurikuler;
use App\Models\Siswa;
use App\Models\Guru;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalSiswa' => Siswa::count(),
            'totalGuru' => Guru::count(),
            'totalBerita' => Berita::count(),
            'totalEkskul' => Ekstrakurikuler::count(),
        ]);
    }
}
