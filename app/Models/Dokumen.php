<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dokumen extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama_dokumen',
        'deskripsi',
        'tahun_dokumen',
        // 'tgl_upload',
        'cover_dokumen',
        'file_dokumen',
        'file_dokumen_csv',
        'opd_id'
    ];
    public function opd()
    {
        return $this->belongsTo(Opd::class);
    }
    public function scopeSearch($query, $value){
        $query->where('nama_dokumen', 'like', "%{$value}%")->orWhere('deskripsi', 'like', "%{$value}%");
    }
    
    protected function file(): Attribute
    {
        return Attribute::make(
            get: fn ($file) => url('/storage/assets/files/' . $file),
        );
    }
}
