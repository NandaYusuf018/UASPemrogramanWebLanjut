@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Tambah Alat</div>
    <div class="card-body">
        <form action="{{ route('alats.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label>Harga Sewa</label>
                <input type="number" name="harga_sewa" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Stok</label>
                <input type="number" name="stok" class="form-control" required>
            </div>
            <button class="btn btn-success">Simpan</button>
            <a href="{{ route('alats.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection