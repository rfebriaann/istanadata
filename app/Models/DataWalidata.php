<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataWalidata extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'data',
        'tahun',
        'indikator_id',
    ];

    public function indikator()
    {
        return $this->belongsTo(Indikator::class);
    }
    public function scopeSearch($query, $value){
        $query->where('indikator_id', 'like', "%{$value}%")->orWhere('uraian_indikator', 'like', "%{$value}%");
    }
}
