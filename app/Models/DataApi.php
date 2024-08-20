<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataApi extends Model
{
    use HasFactory;
    protected $fillable = [
        'kodeindikator', 'bidangurusan', 'indikator', 'unit', 'tahun1', 'tahun2', 'tahun3', 'tahun4', 'tahun5', 'tahun6', 'tahun7'
    ];
}
