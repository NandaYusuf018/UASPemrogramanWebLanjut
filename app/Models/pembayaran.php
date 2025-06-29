<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    protected $primaryKey = 'id_pembayaran';
    protected $fillable = ['id_sewa', 'tanggal_bayar', 'jumlah_bayar', 'metode_bayar', 'catatan'];

    public function penyewaan()
    {
        return $this->belongsTo(Penyewaan::class, 'id_sewa');
    }
}
