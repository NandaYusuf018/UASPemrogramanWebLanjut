@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Tambah Detail Sewa</div>
    <div class="card-body">
        <form action="{{ route('detailsewas.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Penyewaan</label>
                <select name="id_sewa" class="form-control" required>
                    <option value="">-- Pilih Penyewaan --</option>
                    @foreach($penyewaans as $p)
                        <option value="{{ $p->id_sewa }}">{{ $p->id_sewa }} - {{ $p->customer->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Alat</label>
                <select name="id_alat" class="form-control" required>
                    <option value="">-- Pilih Alat --</option>
                    @foreach($alats as $a)
                        <option value="{{ $a->id_alat }}">{{ $a->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Jumlah</label>
                <input type="number" name="jumlah" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Subtotal</label>
                <input type="number" name="subtotal" class="form-control" required>
            </div>
            <button class="btn btn-success">Simpan</button>
            <a href="{{ route('detailsewas.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection