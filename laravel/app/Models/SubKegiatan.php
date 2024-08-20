<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubKegiatan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'kode_subkegiatan',
        'urai_subkegiatan',
        'indikator_id'
    ];
    public function indikator()
    {
        return $this->belongsTo(Indikator::class);
    }
}
