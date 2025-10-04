<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Profil;
use App\Models\Siswa;
use App\Models\Ekstrakurikuler;
use App\Models\Galeri;

class HomeController extends Controller
{

   public function profil()
{
    $profil = Profil::first(); 
    return view('profil', compact('profil'));
}

    public function ekstrakurikuler()
    {
       $ekstrakurikulers = Ekstrakurikuler::orderBy('nama_ekskul')->get(); 
       return view('ekstrakurikuler', compact('ekstrakurikulers'));
    }

    public function galeri()
    {
       $galeris = Galeri::orderBy('created_at','desc')->get();

        return view('galeri', compact('galeris'));
    }

    public function program()
    {
        return view('program');
    }
    
    public function berita()
    {
      $beritas = Berita::orderBy('tanggal', 'desc')->get(); 
      return view('berita', compact('beritas'));
    }
    public function dashboard()
    {
        $jumlah_guru = Guru::count();
        $jumlah_siswa = Siswa::count();
        $jumlah_berita = Berita::count();

        return view('admin.dashboard', compact('jumlah_guru', 'jumlah_siswa', 'jumlah_berita'));
    }

    public function home()
{
    $jumlah_guru = Guru::count();   
    $jumlah_siswa = Siswa::count(); 

    return view('home', compact('jumlah_guru', 'jumlah_siswa'));
}

}
  
