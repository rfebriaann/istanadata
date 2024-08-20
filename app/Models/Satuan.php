<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Satuan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama_satuan',
    ];
    public function indikators()
    {
        return $this->hasMany(Indikator::class);
    }

    public function scopeSearch($query, $value){
        $query->where('nama_satuan', 'like', "%{$value}%");
    }
}
