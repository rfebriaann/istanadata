<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, SoftDeletes, HasRoles;

    // public $guard_name = 'api';
    protected $guard_name = 'web';
    protected $fillable = [
        'nama', 'email', 'password', 'status', 'opd_id'
    ];

    public function opd()
    {
        return $this->belongsTo(Opd::class);
    }

    public function scopeSearch($query, $value){
        $query->where('nama', 'like', "%{$value}%")->orWhere('email', 'like', "%{$value}%");
    }
}
