<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EkstrakurikulerController extends Controller
{
    
    public function ekstrakurikuler()
    {
        $ekskul = Ekstrakurikuler::all();
        return view('admin.ekstrakurikuler', compact('ekskul'));
    }

    public function create()
    {
        return view('admin.ekstrakurikuler-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_ekskul'     => 'required|string|max:100',
            'pembina'        => 'required|string|max:100',
            'jadwal_latihan' => 'required|string|max:100',
            'deskripsi'      => 'nullable|string',
            'gambar'         => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('ekskul', 'public');
        }

        Ekstrakurikuler::create($data);

        return redirect()->route('admin.ekstrakurikuler')
                         ->with('success', 'Data ekskul berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $ekskul = Ekstrakurikuler::findOrFail($id);
        return view('admin.ekstrakurikuler-edit', compact('ekskul'));
    }

    public function update(Request $request, $id)
    {
        $ekskul = Ekstrakurikuler::findOrFail($id);

        $request->validate([
            'nama_ekskul'     => 'required|string|max:100',
            'pembina'        => 'required|string|max:100',
            'jadwal_latihan' => 'required|string|max:100',
            'deskripsi'      => 'nullable|string',
            'gambar'         => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            if ($ekskul->gambar && Storage::disk('public')->exists($ekskul->gambar)) {
                Storage::disk('public')->delete($ekskul->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('ekskul', 'public');
        }

        $ekskul->update($data);

        return redirect()->route('admin.ekstrakurikuler')
                         ->with('success', 'Data ekskul berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $ekskul = Ekstrakurikuler::findOrFail($id);

        if ($ekskul->gambar && Storage::disk('public')->exists($ekskul->gambar)) {
            Storage::disk('public')->delete($ekskul->gambar);
        }

        $ekskul->delete();

        return redirect()->route('admin.ekstrakurikuler')
                         ->with('success', 'Data ekskul berhasil dihapus!');
    }
}
