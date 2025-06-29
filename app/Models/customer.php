<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $primaryKey = 'id_pelanggan';
    protected $fillable = ['nama', 'email', 'no_telepon', 'alamat'];

    public function penyewaans()
    {
        return $this->hasMany(Penyewaan::class, 'id_pelanggan');
    }
}
