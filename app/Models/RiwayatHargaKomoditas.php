<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatHargaKomoditas extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'kis_riwayatharga_komoditas';

    public function komoditas()
    {
        return $this->belongsTo(Komoditas::class, 'komoditas_id');
        // return $this->hasManyThrough(JenisKomoditas::class, Komoditas::class,);
    }
    
    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id');
    }

    public function satuanKomoditas()
    {
        return $this->belongsTo(SatuanKomoditas::class, 'satuan_id');
    }
}
