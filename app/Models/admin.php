<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class admin extends Authenticatable
{
    use HasFactory;
    protected $table = 'admin';
    protected $guarded = ['id'];
    protected $casts = [
        'password' => 'hashed'
    ];

    public function Beasiswa()
    {
        return $this->hasMany(Beasiswa::class);
    }
}
