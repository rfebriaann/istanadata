<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'kis_kecamatan';

    public function riwayatHargass()
    {
        return $this->hasMany(RiwayatHargaKomoditas::class, 'kecamatan_id');
    }
}
