<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Opd extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'kode_skpd',
        'uraian_skpd'
        
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function dataWalidatas()
    {
        return $this->hasMany(DataWalidata::class);
    }
    public function dokumens()
    {
        return $this->hasMany(Dokumen::class);
    }
    public function surats()
    {
        return $this->hasMany(Surat::class);
    }

    public function scopeSearch($query, $value){
        $query->where('kode_skpd', 'like', "%{$value}%")->orWhere('uraian_skpd', 'like', "%{$value}%");
    }
}
