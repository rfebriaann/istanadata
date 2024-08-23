<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatuanKomoditas extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'kis_satuan';

    public function riwayatHargass()
    {
        return $this->hasMany(RiwayatHargaKomoditas::class, 'satuan_id');
    }
}
