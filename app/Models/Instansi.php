<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    use HasFactory;
    protected $table = 'instansi';
    protected $guarded = ['id'];

    public function Beasiswa()
    {
        return $this->hasMany(Beasiswa::class);
    }
    public function Lomba()
    {
        return $this->hasMany(Lomba::class);
    }
}
