@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Penyewaan</h2>
    <a href="{{ route('penyewaans.create') }}" class="btn btn-primary">Tambah Penyewaan</a>
</div>
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Pelanggan</th>
            <th>Tgl Sewa</th>
            <th>Tgl Kembali</th>
            <th>Status</th>
            <th>Total Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach($penyewaans as $p)
        <tr>
            <td>{{ $p->id_sewa }}</td>
            <td>{{ $p->customer->nama }}</td>
            <td>{{ $p->tanggal_sewa }}</td>
            <td>{{ $p->tanggal_kembali }}</td>
            <td>
                <span class="badge bg-{{ $p->status == 'berjalan' ? 'primary' : ($p->status == 'dikembalikan' ? 'success' : 'danger') }}">
                    {{ ucfirst($p->status) }}
                </span>
            </td>
            <td>Rp{{ number_format($p->total_harga,0,',','.') }}</td>
            <td>
                <a href="{{ route('penyewaans.edit', $p->id_sewa) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('penyewaans.destroy', $p->id_sewa) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection