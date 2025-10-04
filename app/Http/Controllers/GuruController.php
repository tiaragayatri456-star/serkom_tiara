<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    //
     public function guru()
     {
  
    $guru = Guru::all();

    
    return view('admin.guru', compact('guru'));
}

     public function create()
{
    return view('admin.guru-create');
}

    public function store(Request $request)
{
    
    $request->validate([
        'nama_guru' => 'required',
        'nip' => 'required|unique:gurus',
        'mapel' => 'required',
        'foto' => 'nullable|image|max:2048'
    ]);

    
    Guru::create([
        'nama_guru' => $request->nama_guru,
        'nip' => $request->nip,
        'mapel' => $request->mapel,
        'foto' => $request->foto ? $request->file('foto')->store('foto-guru') : null
    ]);

    return redirect()->route('admin.guru')->with('success', 'Data guru berhasil ditambahkan');
}

     public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return view('admin.guru-edit', compact('guru'));
    }

    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);

        $request->validate([
            'nama_guru' => 'required',
            'nip'       => 'required|unique:gurus,nip,' . $id,
            'mapel'     => 'required',
            'foto'      => 'nullable|image|max:2048',
        ]);

      
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('foto-guru', 'public');
            $guru->foto = $fotoPath;
        }

        $guru->nama_guru = $request->nama_guru;
        $guru->nip       = $request->nip;
        $guru->mapel     = $request->mapel;
        $guru->save();

        return redirect()->route('admin.guru')->with('success', 'Data guru berhasil diperbarui!');
    }

    public function destroy($id)
{
    $guru = Guru::findOrFail($id);
    $guru->delete();

    return redirect()->route('admin.guru')->with('success', 'Data guru berhasil dihapus');
}

}

