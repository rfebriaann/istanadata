<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komoditas extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'kis_komoditas';

    public function riwayatHargass()
    {
        return $this->hasMany(RiwayatHargaKomoditas::class, 'komoditas_id');
    }

    public function jenisKomoditass()
    {
        return $this->hasMany(JenisKomoditas::class, 'komoditas_id');
    }

    public function satuan()
    {
        return $this->belongsTo(SatuanKomoditas::class);
    }

}
