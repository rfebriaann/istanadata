<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKomoditas extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'kis_jenis_komoditas';

    public function komoditas()
    {
        return $this->belongsTo(Komoditas::class, 'komoditas_id');
    }
}
