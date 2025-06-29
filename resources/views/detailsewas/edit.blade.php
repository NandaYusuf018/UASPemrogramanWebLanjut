@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Edit Detail Sewa</div>
    <div class="card-body">
        <form action="{{ route('detailsewas.update', $detailsewa->id_detail) }}" method="POST">
            @csrf @method('PUT')
            <div class="mb-3">
                <label>Penyewaan</label>
                <select name="id_sewa" class="form-control" required>
                    @foreach($penyewaans as $p)
                        <option value="{{ $p->id_sewa }}" {{ $detailsewa->id_sewa == $p->id_sewa ? 'selected' : '' }}>
                            {{ $p->id_sewa }} - {{ $p->customer->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Alat</label>
                <select name="id_alat" class="form-control" required>
                    @foreach($alats as $a)
                        <option value="{{ $a->id_alat }}" {{ $detailsewa->id_alat == $a->id_alat ? 'selected' : '' }}>
                            {{ $a->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Jumlah</label>
                <input type="number" name="jumlah" class="form-control" value="{{ $detailsewa->jumlah }}" required>
            </div>
            <div class="mb-3">
                <label>Subtotal</label>
                <input type="number" name="subtotal" class="form-control" value="{{ $detailsewa->subtotal }}" required>
            </div>
            <button class="btn btn-success">Update</button>
            <a href="{{ route('detailsewas.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection