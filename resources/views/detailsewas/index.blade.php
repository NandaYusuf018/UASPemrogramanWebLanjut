@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Detail Sewa</h2>
    <a href="{{ route('detailsewas.create') }}" class="btn btn-primary">Tambah Detail Sewa</a>
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
            <th>Nama Alat</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach($detailsewas as $d)
        <tr>
            <td>{{ $d->id_detail }}</td>
            <td>{{ $d->id_sewa }}</td>
            <td>{{ $d->penyewaan->customer->nama ?? '-' }}</td>
            <td>{{ $d->alat->nama ?? '-' }}</td>
            <td>{{ $d->jumlah }}</td>
            <td>Rp{{ number_format($d->subtotal,0,',','.') }}</td>
            <td>
                <a href="{{ route('detailsewas.edit', $d->id_detail) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('detailsewas.destroy', $d->id_detail) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection