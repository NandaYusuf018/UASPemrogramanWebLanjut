<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyewaan extends Model
{
    protected $primaryKey = 'id_sewa';
    protected $fillable = ['id_pelanggan', 'tanggal_sewa', 'tanggal_kembali', 'status', 'total_harga'];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_pelanggan');
    }

    public function detailSewas()
    {
        return $this->hasMany(detail_sewa::class, 'id_sewa');
    }

    public function pembayarans()
    {
        return $this->hasMany(Pembayaran::class, 'id_sewa');
    }
}
