<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alat extends Model
{
    protected $primaryKey = 'id_alat';
    protected $fillable = ['nama', 'deskripsi', 'harga_sewa', 'stok'];

    public function detailSewas()
    {
        return $this->hasMany(detail_sewa::class, 'id_alat');
    }
}
