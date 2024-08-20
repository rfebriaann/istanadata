<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BidangUrusan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'kode_bidang',
        'bidang_urusan',
        'opd_id'
    ];

    public function indikators()
    {
        return $this->hasMany(Indikator::class);
    }
    public function opd()
    {
        return $this->belongsTo(Opd::class);
    }

    public function scopeSearch($query, $value){
        $query->where('kode_bidang', 'like', "%{$value}%")->orWhere('bidang_urusan', 'like', "%{$value}%")->orWhere('opd_id', 'like', "%{$value}%");
    }
}
