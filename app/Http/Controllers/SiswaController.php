<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
     public function siswa() 
    {
      
        $siswa = Siswa::all();

        return view('admin.siswa', compact('siswa'));
    }

    public function create()
    {
      
        return view('admin.siswa-create');
    }

    public function store(Request $request)
{
    $request->validate([
        'nisn' => 'required|unique:siswas,nisn',
        'nama_siswa' => 'required',
        'jenis_kelamin' => 'required',
        'tahun_masuk' => 'required|integer',
    ]);

    Siswa::create($request->all());

    return redirect()->route('admin.siswa')->with('success', 'Data siswa berhasil ditambahkan');
}

 public function edit($id)
{
    $siswa = Siswa::findOrFail($id); 
    return view('admin.siswa-edit', compact('siswa'));
}

public function update(Request $request, $id)
{
    $siswa = Siswa::findOrFail($id);

    $request->validate([
        'nisn' => 'required|unique:siswas,nisn,' . $siswa->id,
        'nama_siswa' => 'required',
        'jenis_kelamin' => 'required',
        'tahun_masuk' => 'required|integer',
    ]);

    $siswa->update($request->all());

    return redirect()->route('admin.siswa')->with('success', 'Data siswa berhasil diperbarui');
}
  
     public function destroy($id)
{
    $siswa= Siswa::findOrFail($id);
    $siswa->delete();

    return redirect()->route('admin.siswa')->with('success', 'Data guru berhasil dihapus');
}
}

