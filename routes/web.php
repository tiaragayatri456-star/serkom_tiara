<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\GaleriController;

//tampilan umum
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/profil', [HomeController::class, 'profil'])->name('profil');
Route::get('/ekstrakurikuler', [HomeController::class, 'ekstrakurikuler'])->name('ekstrakurikuler');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('galeri');
Route::get('/program', [HomeController::class, 'program'])->name('program');
Route::get('/berita', [HomeController::class, 'berita'])->name('berita');


//login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Route::middleware(['admin'])->prefix('admin')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    
    // Guru
    Route::get('/admin/guru', [GuruController::class, 'guru'])->name('admin.guru');
    Route::get('/guru/create', [GuruController::class, 'create'])->name('admin.guru.create');
    Route::post('/guru', [GuruController::class, 'store'])->name('admin.guru.store');
    Route::get('/guru/{id}/edit', [GuruController::class, 'edit'])->name('admin.guru.edit');
    Route::put('/guru/{id}', [GuruController::class, 'update'])->name('admin.guru.update');
    Route::delete('/guru/{id}', [GuruController::class, 'destroy'])->name('admin.guru.destroy');

    // Siswa
    Route::get('/admin/siswa', [SiswaController::class, 'siswa'])->name('admin.siswa');
    Route::get('/siswa/create', [SiswaController::class, 'create'])->name('admin.siswa.create');
    Route::post('/siswa', [SiswaController::class, 'store'])->name('admin.siswa.store');
    Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('admin.siswa.edit');
    Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('admin.siswa.update');
    Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('admin.siswa.destroy');

    // Berita
    Route::get('/admin/berita', [BeritaController::class, 'berita'])->name('admin.berita');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('admin.berita.create');
    Route::post('/berita', [BeritaController::class, 'store'])->name('admin.berita.store');
    Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('admin.berita.edit');
    Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('admin.berita.update');
    Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('admin.berita.destroy');

    // Profil
    Route::get('/admin/profil', [ProfilController::class, 'profil'])->name('admin.profil');
    Route::get('/profil/create', [ProfilController::class, 'create'])->name('admin.profil.create');
    Route::post('/profil', [ProfilController::class, 'store'])->name('admin.profil.store');
    Route::get('/profil/{id}/edit', [ProfilController::class, 'edit'])->name('admin.profil.edit');
    Route::put('/profil/{id}', [ProfilController::class, 'update'])->name('admin.profil.update');
    Route::delete('/profil/{id}', [ProfilController::class, 'destroy'])->name('admin.profil.destroy');

    // Ekstrakurikuler
    Route::get('/admin/ekstrakurikuler', [EkstrakurikulerController::class, 'ekstrakurikuler'])->name('admin.ekstrakurikuler');
    Route::get('/ekstrakurikuler/create', [EkstrakurikulerController::class, 'create'])->name('admin.ekstrakurikuler.create');
    Route::post('/ekstrakurikuler', [EkstrakurikulerController::class, 'store'])->name('admin.ekstrakurikuler.store');
    Route::get('/ekstrakurikuler/{id}/edit', [EkstrakurikulerController::class, 'edit'])->name('admin.ekstrakurikuler.edit');
    Route::put('/ekstrakurikuler/{id}', [EkstrakurikulerController::class, 'update'])->name('admin.ekstrakurikuler.update');
    Route::delete('/ekstrakurikuler/{id}', [EkstrakurikulerController::class, 'destroy'])->name('admin.ekstrakurikuler.destroy');

    // Galeri
    Route::get('/admin/galeri', [GaleriController::class, 'galeri'])->name('admin.galeri');
    Route::get('/galeri/create', [GaleriController::class, 'create'])->name('admin.galeri.create');
    Route::post('/galeri', [GaleriController::class, 'store'])->name('admin.galeri.store');
    Route::get('/galeri/{id}/edit', [GaleriController::class, 'edit'])->name('admin.galeri.edit');
    Route::put('/galeri/{id}', [GaleriController::class, 'update'])->name('admin.galeri.update');
    Route::delete('/galeri/{id}', [GaleriController::class, 'destroy'])->name('admin.galeri.destroy');
// });

//operator
Route::middleware(['auth', 'role:Operator'])->prefix('operator')->group(function () {
    Route::get('/dashboard', function () {
        return view('operator.dashboard'); 
    })->name('operator.dashboard');

   
});
