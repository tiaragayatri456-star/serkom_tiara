<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Ekstrakurikuler;

use App\Models\Galeri;

use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalBerita' => Berita::count(),
            'totalEkskul' => Ekstrakurikuler::count(),
            'totalGaleri' => Galeri::count(),
        ]);
    }
}
