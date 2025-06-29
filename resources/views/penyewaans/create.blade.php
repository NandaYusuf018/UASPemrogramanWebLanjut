@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Tambah Penyewaan</div>
    <div class="card-body">
        <form action="{{ route('penyewaans.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Pelanggan</label>
                <select name="id_pelanggan" class="form-control" required>
                    <option value="">-- Pilih Pelanggan --</option>
                    @foreach($customers as $c)
                        <option value="{{ $c->id_pelanggan }}">{{ $c->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Tanggal Sewa</label>
                <input type="date" name="tanggal_sewa" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Tanggal Kembali</label>
                <input type="date" name="tanggal_kembali" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-control" required>
                    <option value="berjalan">Berjalan</option>
                    <option value="dikembalikan">Dikembalikan</option>
                    <option value="terlambat">Terlambat</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Total Harga</label>
                <input type="number" name="total_harga" class="form-control" required>
            </div>
            <button class="btn btn-success">Simpan</button>
            <a href="{{ route('penyewaans.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection