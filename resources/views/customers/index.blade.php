@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Pelanggan</h2>
    <a href="{{ route('customers.create') }}" class="btn btn-primary">Tambah Pelanggan</a>
</div>
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach($customers as $c)
        <tr>
            <td>{{ $c->id_pelanggan }}</td>
            <td>{{ $c->nama }}</td>
            <td>{{ $c->email }}</td>
            <td>{{ $c->no_telepon }}</td>
            <td>{{ $c->alamat }}</td>
            <td>
                <a href="{{ route('customers.edit', $c->id_pelanggan) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('customers.destroy', $c->id_pelanggan) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection