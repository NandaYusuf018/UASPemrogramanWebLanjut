@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Edit Pembayaran</div>
    <div class="card-body">
        <form action="{{ route('pembayarans.update', $pembayaran->id_pembayaran) }}" method="POST">
            @csrf @method('PUT')
            <div class="mb-3">
                <label>Penyewaan</label>
                <select name="id_sewa" class="form-control" required>
                    @foreach($penyewaans as $p)
                        <option value="{{ $p->id_sewa }}" {{ $pembayaran->id_sewa == $p->id_sewa ? 'selected' : '' }}>
                            {{ $p->id_sewa }} - {{ $p->customer->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Tanggal Bayar</label>
                <input type="date" name="tanggal_bayar" class="form-control" value="{{ $pembayaran->tanggal_bayar }}" required>
            </div>
            <div class="mb-3">
                <label>Jumlah Bayar</label>
                <input type="number" name="jumlah_bayar" class="form-control" value="{{ $pembayaran->jumlah_bayar }}" required>
            </div>
            <div class="mb-3">
                <label>Metode Bayar</label>
                <input type="text" name="metode_bayar" class="form-control" value="{{ $pembayaran->metode_bayar }}" required>
            </div>
            <div class="mb-3">
                <label>Catatan</label>
                <textarea name="catatan" class="form-control">{{ $pembayaran->catatan }}</textarea>
            </div>
            <button class="btn btn-success">Update</button>
            <a href="{{ route('pembayarans.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection