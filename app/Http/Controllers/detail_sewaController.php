<?php

namespace App\Http\Controllers;

use App\Models\detail_sewa;
use App\Models\DetailSewa;
use App\Models\Penyewaan;
use App\Models\Alat;
use Illuminate\Http\Request;

class detail_sewaController extends Controller
{
    public function index()
    {
        $detailsewas = detail_sewa::with(['penyewaan', 'alat'])->get();
        return view('detailsewas.index', compact('detailsewas'));
    }

    public function create()
    {
        $penyewaans = Penyewaan::all();
        $alats = Alat::all();
        return view('detailsewas.create', compact('penyewaans', 'alats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_sewa' => 'required|exists:penyewaans,id_sewa',
            'id_alat' => 'required|exists:alats,id_alat',
            'jumlah' => 'required|integer|min:1',
            'subtotal' => 'required|numeric'
        ]);
        detail_sewa::create($request->all());
        return redirect()->route('detailsewas.index')->with('success', 'Detail sewa berhasil ditambahkan!');
    }

    public function edit(detail_sewa $detailsewa)
    {
        $penyewaans = Penyewaan::all();
        $alats = Alat::all();
        return view('detailsewas.edit', compact('detailsewa', 'penyewaans', 'alats'));
    }

    public function update(Request $request, detail_sewa $detailsewa)
    {
        $request->validate([
            'id_sewa' => 'required|exists:penyewaans,id_sewa',
            'id_alat' => 'required|exists:alats,id_alat',
            'jumlah' => 'required|integer|min:1',
            'subtotal' => 'required|numeric'
        ]);
        $detailsewa->update($request->all());
        return redirect()->route('detailsewas.index')->with('success', 'Detail sewa berhasil diupdate!');
    }

    public function destroy(detail_sewa $detailsewa)
    {
        $detailsewa->delete();
        return redirect()->route('detailsewas.index')->with('success', 'Detail sewa berhasil dihapus!');
    }
}