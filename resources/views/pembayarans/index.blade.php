@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Pembayaran</h2>
    <a href="{{ route('pembayarans.create') }}" class="btn btn-primary">Tambah Pembayaran</a>
</div>
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>ID Sewa</th>
            <th>Nama Pelanggan</th>
            <th>Tanggal Bayar</th>
            <th>Jumlah Bayar</th>
            <th>Metode Bayar</th>
            <th>Catatan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pembayarans as $p)
        <tr>
            <td>{{ $p->id_pembayaran }}</td>
            <td>{{ $p->id_sewa }}</td>
            <td>{{ $p->penyewaan->customer->nama ?? '-' }}</td>
            <td>{{ $p->tanggal_bayar }}</td>
            <td>Rp{{ number_format($p->jumlah_bayar,0,',','.') }}</td>
            <td>{{ $p->metode_bayar }}</td>
            <td>{{ $p->catatan }}</td>
            <td>
                <a href="{{ route('pembayarans.edit', $p->id_pembayaran) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('pembayarans.destroy', $p->id_pembayaran) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection