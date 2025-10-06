<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{

    public function berita()
    {
        $berita = Berita::all();
        return view('admin.berita', compact('berita'));
    }

    // untuk menampilkan form tambah data baru
    public function create()
    {
        return view('admin.berita-create');
    }

    // untuk menyimpan data yang dikirim dari form  create
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->tanggal = $request->tanggal;
        $berita->user_id ; 

        if ($request->hasFile('gambar')) {
            $berita->gambar = $request->file('gambar')->store('berita', 'public');
        }

        $berita->save();

        return redirect()->route('admin.berita')->with('success', 'Berita berhasil ditambahkan!');
    }

    //Menampilkan form edit
    public function edit($id)
    {

    $berita = Berita::findOrFail($id);
    return view('admin.berita-edit', compact('berita'));

    }

  // untuk menyimpan perubahan data
  public function update(Request $request, $id)
 {
    $berita = Berita::findOrFail($id);

    $request->validate([
        'judul'   => 'required|string|max:255',
        'isi'     => 'required|string',
        'tanggal' => 'required|date',
        'gambar'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $berita->judul   = $request->judul;
    $berita->isi     = $request->isi;
    $berita->tanggal = $request->tanggal;

    if ($request->hasFile('gambar')) {
        if ($berita->gambar) {
            Storage::disk('public')->delete($berita->gambar);
        }
        $berita->gambar = $request->file('gambar')->store('berita', 'public');
    }

    $berita->save();

    return redirect()->route('admin.berita')->with('success', 'Berita berhasil diperbarui!');
}

 //untuk mengahapus data
public function destroy($id)
{
    $berita = Berita::findOrFail($id);

    if ($berita->gambar) {
        Storage::disk('public')->delete($berita->gambar);
    }

    $berita->delete();

    return redirect()->route('admin.berita')->with('success', 'Berita berhasil dihapus!');
}

}
