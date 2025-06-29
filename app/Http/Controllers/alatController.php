<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use Illuminate\Http\Request;

class AlatController extends Controller
{
    public function index()
    {
        $alats = Alat::all();
        return view('alats.index', compact('alats'));
    }

    public function create()
    {
        return view('alats.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga_sewa' => 'required|numeric',
            'stok' => 'required|integer'
        ]);
        Alat::create($request->all());
        return redirect()->route('alats.index')->with('success', 'Data alat berhasil ditambahkan!');
    }

    public function edit(Alat $alat)
    {
        return view('alats.edit', compact('alat'));
    }

    public function update(Request $request, Alat $alat)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga_sewa' => 'required|numeric',
            'stok' => 'required|integer'
        ]);
        $alat->update($request->all());
        return redirect()->route('alats.index')->with('success', 'Data alat berhasil diupdate!');
    }

    public function destroy(Alat $alat)
    {
        $alat->delete();
        return redirect()->route('alats.index')->with('success', 'Data alat berhasil dihapus!');
    }
}