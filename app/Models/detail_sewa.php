<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_sewa extends Model
{
    protected $primaryKey = 'id_detail';
    protected $fillable = ['id_sewa', 'id_alat', 'jumlah', 'subtotal'];

    public function penyewaan()
    {
        return $this->belongsTo(Penyewaan::class, 'id_sewa');
    }

    public function alat()
    {
        return $this->belongsTo(Alat::class, 'id_alat');
    }
}
