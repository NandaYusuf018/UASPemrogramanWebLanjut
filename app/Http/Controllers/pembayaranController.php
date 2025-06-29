<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Penyewaan;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayarans = Pembayaran::with('penyewaan')->get();
        return view('pembayarans.index', compact('pembayarans'));
    }

    public function create()
    {
        $penyewaans = Penyewaan::all();
        return view('pembayarans.create', compact('penyewaans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_sewa' => 'required|exists:penyewaans,id_sewa',
            'tanggal_bayar' => 'required|date',
            'jumlah_bayar' => 'required|numeric',
            'metode_bayar' => 'required',
            'catatan' => 'nullable'
        ]);
        Pembayaran::create($request->all());
        return redirect()->route('pembayarans.index')->with('success', 'Data pembayaran berhasil ditambahkan!');
    }

    public function edit(Pembayaran $pembayaran)
    {
        $penyewaans = Penyewaan::all();
        return view('pembayarans.edit', compact('pembayaran', 'penyewaans'));
    }

    public function update(Request $request, Pembayaran $pembayaran)
    {
        $request->validate([
            'id_sewa' => 'required|exists:penyewaans,id_sewa',
            'tanggal_bayar' => 'required|date',
            'jumlah_bayar' => 'required|numeric',
            'metode_bayar' => 'required',
            'catatan' => 'nullable'
        ]);
        $pembayaran->update($request->all());
        return redirect()->route('pembayarans.index')->with('success', 'Data pembayaran berhasil diupdate!');
    }

    public function destroy(Pembayaran $pembayaran)
    {
        $pembayaran->delete();
        return redirect()->route('pembayarans.index')->with('success', 'Data pembayaran berhasil dihapus!');
    }
}