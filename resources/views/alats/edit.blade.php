@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Edit Alat</div>
    <div class="card-body">
        <form action="{{ route('alats.update', $alat->id_alat) }}" method="POST">
            @csrf @method('PUT')
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $alat->nama }}" required>
            </div>
            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control" required>{{ $alat->deskripsi }}</textarea>
            </div>
            <div class="mb-3">
                <label>Harga Sewa</label>
                <input type="number" name="harga_sewa" class="form-control" value="{{ $alat->harga_sewa }}" required>
            </div>
            <div class="mb-3">
                <label>Stok</label>
                <input type="number" name="stok" class="form-control" value="{{ $alat->stok }}" required>
            </div>
            <button class="btn btn-success">Update</button>
            <a href="{{ route('alats.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection