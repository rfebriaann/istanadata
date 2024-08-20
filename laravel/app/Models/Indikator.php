<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Indikator extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'kode_indikator',
        'uraian_indikator',
        'bidang_urusan_id',
        'satuan_id'
    ];
    public function satuan()
    {
        return $this->belongsTo(Satuan::class);
    }
    public function subKegiatans()
    {
        return $this->hasMany(SubKegiatan::class);
    }
    public function dataWalidatas()
    {
        return $this->hasMany(DataWalidata::class);
    }
    public function bidangUrusan()
    {
        return $this->belongsTo(BidangUrusan::class);
    }

    public function scopeSearch($query, $value){
        $query->where('kode_indikator', 'like', "%{$value}%")->orWhere('uraian_indikator', 'like', "%{$value}%");
    }
}
