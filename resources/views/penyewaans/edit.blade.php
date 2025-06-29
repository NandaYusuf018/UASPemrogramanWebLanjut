@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Edit Penyewaan</div>
    <div class="card-body">
        <form action="{{ route('penyewaans.update', $penyewaan->id_sewa) }}" method="POST">
            @csrf @method('PUT')
            <div class="mb-3">
                <label>Pelanggan</label>
                <select name="id_pelanggan" class="form-control" required>
                    @foreach($customers as $c)
                        <option value="{{ $c->id_pelanggan }}" {{ $penyewaan->id_pelanggan == $c->id_pelanggan ? 'selected' : '' }}>{{ $c->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Tanggal Sewa</label>
                <input type="date" name="tanggal_sewa" class="form-control" value="{{ $penyewaan->tanggal_sewa }}" required>
            </div>
            <div class="mb-3">
                <label>Tanggal Kembali</label>
                <input type="date" name="tanggal_kembali" class="form-control" value="{{ $penyewaan->tanggal_kembali }}" required>
            </div>
            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-control" required>
                    <option value="berjalan" {{ $penyewaan->status == 'berjalan' ? 'selected' : '' }}>Berjalan</option>
                    <option value="dikembalikan" {{ $penyewaan->status == 'dikembalikan' ? 'selected' : '' }}>Dikembalikan</option>
                    <option value="terlambat" {{ $penyewaan->status == 'terlambat' ? 'selected' : '' }}>Terlambat</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Total Harga</label>
                <input type="number" name="total_harga" class="form-control" value="{{ $penyewaan->total_harga }}" required>
            </div>
            <button class="btn btn-success">Update</button>
            <a href="{{ route('penyewaans.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection