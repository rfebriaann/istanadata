<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Surat extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama_surat',
        'deskripsi',
        'tahun',
        'tgl_upload',
        'file',
        'opd_id'
    ];

    public function opd()
    {
        return $this->belongsTo(Opd::class);
    }
    public function scopeSearch($query, $value){
        $query->where('nama_surat', 'like', "%{$value}%")->orWhere('deskripsi', 'like', "%{$value}%");
    }
    
    protected function file(): Attribute
    {
        return Attribute::make(
            get: fn ($file) => url('/storage/assets/files/' . $file),
        );
    }
}
