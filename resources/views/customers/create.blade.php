@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Tambah Pelanggan</div>
    <div class="card-body">
        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>No Telepon</label>
                <input type="text" name="no_telepon" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" required></textarea>
            </div>
            <button class="btn btn-success">Simpan</button>
            <a href="{{ route('customers.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection