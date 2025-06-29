@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Edit Pelanggan</div>
    <div class="card-body">
        <form action="{{ route('customers.update', $customer->id_pelanggan) }}" method="POST">
            @csrf @method('PUT')
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $customer->nama }}" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ $customer->email }}" required>
            </div>
            <div class="mb-3">
                <label>No Telepon</label>
                <input type="text" name="no_telepon" class="form-control" value="{{ $customer->no_telepon }}" required>
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" required>{{ $customer->alamat }}</textarea>
            </div>
            <button class="btn btn-success">Update</button>
            <a href="{{ route('customers.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection