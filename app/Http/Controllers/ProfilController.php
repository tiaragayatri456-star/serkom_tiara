<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProfilController extends Controller
{
    //
    public function profil()
     {
      $profil = Profil::all();
       return view('admin.profil', compact('profil'));

}
    public function create()
    {
        return view('admin.profil-create');
    }

    public function store(Request $request)
    {
       $data = $request->validate([
    'nama_sekolah'   => 'required|string|max:255',
    'kepala_sekolah' => 'nullable|string|max:255', 
    'foto'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    'logo'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    'npsn'           => 'nullable|string|max:50',
    'alamat'         => 'nullable|string',
    'kontak'         => 'nullable|string|max:50',
    'visi_misi'      => 'nullable|string',
    'tahun_berdiri'  => 'nullable|integer',
    'deskripsi'      => 'nullable|string',
]);


        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto_sekolah', 'public');
        }

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logo_sekolah', 'public');
        }

        Profil::create($data);

        return redirect()->route('admin.profil')->with('success', 'Profil berhasil ditambahkan');
    }

    public function edit($id)
    {
        $profil = Profil::findOrFail($id);
        return view('admin.profil-edit', compact('profil'));
    }

    public function update(Request $request, $id)
    {
        $profil = Profil::findOrFail($id);

        $data = $request->validate([
            'nama_sekolah'   => 'required|string|max:255',
            'kepala_sekolah' => 'nullable|string',
            'foto'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'logo'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'npsn'           => 'nullable|string|max:50',
            'alamat'         => 'nullable|string',
            'kontak'         => 'nullable|string|max:50',
            'visi_misi'      => 'nullable|string',
            'tahun_berdiri'  => 'nullable|integer',
            'deskripsi'      => 'nullable|string',
        ]);

        if ($request->hasFile('foto')) {
            if ($profil->foto && Storage::disk('public')->exists($profil->foto)) {
                Storage::disk('public')->delete($profil->foto);
            }
            $data['foto'] = $request->file('foto')->store('foto_sekolah', 'public');
        }

        if ($request->hasFile('logo')) {
            if ($profil->logo && Storage::disk('public')->exists($profil->logo)) {
                Storage::disk('public')->delete($profil->logo);
            }
            $data['logo'] = $request->file('logo')->store('logo_sekolah', 'public');
        }

        $profil->update($data);

        return redirect()->route('admin.profil')->with('success', 'Profil berhasil diperbarui');
    }

    public function destroy($id)
    {
        $profil = Profil::findOrFail($id);

        if ($profil->foto && Storage::disk('public')->exists($profil->foto)) {
            Storage::disk('public')->delete($profil->foto);
        }

        if ($profil->logo && Storage::disk('public')->exists($profil->logo)) {
            Storage::disk('public')->delete($profil->logo);
        }

        $profil->delete();

        return redirect()->route('admin.profil')->with('success', 'Profil berhasil dihapus');
    }

    

}
