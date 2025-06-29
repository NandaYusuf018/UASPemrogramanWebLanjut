@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Alat</h2>
    <a href="{{ route('alats.create') }}" class="btn btn-primary">Tambah Alat</a>
</div>
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga Sewa</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach($alats as $a)
        <tr>
            <td>{{ $a->id_alat }}</td>
            <td>{{ $a->nama }}</td>
            <td>{{ $a->deskripsi }}</td>
            <td>Rp{{ number_format($a->harga_sewa,0,',','.') }}</td>
            <td>{{ $a->stok }}</td>
            <td>
                <a href="{{ route('alats.edit', $a->id_alat) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('alats.destroy', $a->id_alat) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection