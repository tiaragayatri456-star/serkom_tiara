<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    
    public function galeri()
    {
        $galeri = Galeri::latest()->get();
        return view('admin.galeri', compact('galeri'));
    }

    public function create()
    {
        return view('admin.galeri-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'      => 'required|string|max:255',
            'keterangan' => 'nullable|string',
            'file'       => 'required|file|mimes:jpg,jpeg,png,mp4,mov,avi|max:10240', // max 10MB
            'kategori'   => 'required|in:foto,video',
        ]);

        $path = $request->file('file')->store('galeri', 'public');

        Galeri::create([
            'judul'      => $request->judul,
            'keterangan' => $request->keterangan,
            'file'       => $path,
            'kategori'   => $request->kategori,
            'tanggal'    => now(),
        ]);

        return redirect()->route('admin.galeri')->with('success', 'Data galeri berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeri-edit', compact('galeri'));
    }

  
public function update(Request $request, $id)
{
    $galeri = Galeri::findOrFail($id);

    $request->validate([
        'judul'      => 'required|string|max:255',
        'keterangan' => 'nullable|string',
        'file'       => 'nullable|file|mimes:jpg,jpeg,png,mp4,mov,avi|max:10240',
        'kategori'   => 'sometimes|in:foto,video',
    ]);

    $data = [
        'judul'      => $request->judul,
        'keterangan' => $request->keterangan,
        'kategori'   => $request->kategori ?? $galeri->kategori,
    ];

    if ($request->hasFile('file')) {
        if ($galeri->file && Storage::disk('public')->exists($galeri->file)) {
            Storage::disk('public')->delete($galeri->file);
        }

        $data['file'] = $request->file('file')->store('galeri', 'public');
    }

    $galeri->update($data);

    return redirect()->route('admin.galeri')->with('success', 'Data galeri berhasil diperbarui.');
}

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        if ($galeri->file && Storage::disk('public')->exists($galeri->file)) {
            Storage::disk('public')->delete($galeri->file);
        }

        $galeri->delete();

        return redirect()->route('admin.galeri')->with('success', 'Data galeri berhasil dihapus.');
    }
}
