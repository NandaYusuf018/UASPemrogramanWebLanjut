<?php

namespace App\Http\Controllers;

use App\Models\Penyewaan;
use App\Models\Customer;
use Illuminate\Http\Request;

class PenyewaanController extends Controller
{
    public function index()
    {
        $penyewaans = Penyewaan::with('customer')->get();
        return view('penyewaans.index', compact('penyewaans'));
    }

    public function create()
    {
        $customers = Customer::all();
        return view('penyewaans.create', compact('customers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pelanggan' => 'required|exists:customers,id_pelanggan',
            'tanggal_sewa' => 'required|date',
            'tanggal_kembali' => 'required|date|after_or_equal:tanggal_sewa',
            'status' => 'required|in:berjalan,dikembalikan,terlambat',
            'total_harga' => 'required|numeric'
        ]);
        Penyewaan::create($request->all());
        return redirect()->route('penyewaans.index')->with('success', 'Data penyewaan berhasil ditambahkan!');
    }

    public function edit(Penyewaan $penyewaan)
    {
        $customers = Customer::all();
        return view('penyewaans.edit', compact('penyewaan', 'customers'));
    }

    public function update(Request $request, Penyewaan $penyewaan)
    {
        $request->validate([
            'id_pelanggan' => 'required|exists:customers,id_pelanggan',
            'tanggal_sewa' => 'required|date',
            'tanggal_kembali' => 'required|date|after_or_equal:tanggal_sewa',
            'status' => 'required|in:berjalan,dikembalikan,terlambat',
            'total_harga' => 'required|numeric'
        ]);
        $penyewaan->update($request->all());
        return redirect()->route('penyewaans.index')->with('success', 'Data penyewaan berhasil diupdate!');
    }

    public function destroy(Penyewaan $penyewaan)
    {
        $penyewaan->delete();
        return redirect()->route('penyewaans.index')->with('success', 'Data penyewaan berhasil dihapus!');
    }
}