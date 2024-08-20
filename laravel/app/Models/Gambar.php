<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gambar extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama_gambar',
        'deskripsi',
        'tahun_dokumen',
        'tgl_upload',
        'file_gambar',
        'opd_id'
    ];
    public function opd()
    {
        return $this->belongsTo(Opd::class);
    }

    public function scopeSearch($query, $value){
        $query->where('nama_gambar', 'like', "%{$value}%")->orWhere('deskripsi', 'like', "%{$value}%");
    }
}
