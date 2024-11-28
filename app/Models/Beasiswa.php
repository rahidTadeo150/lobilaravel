<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;


class Beasiswa extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'beasiswa';
    protected $guarded = ['id'];


    public function Instansi() {
        return $this->belongsTo(Instansi::class, 'instansi_id');
    }

    public function Admin() {
        return $this->belongsTo(admin::class);
    }

    public function Status() {
        return $this->belongsTo(Status::class);
    }

    public function Tingkatan() {
        return $this->belongsTo(Tingkatan::class);
    }

    public function getTanggalPendaftaranAttribute($value) {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function getTanggalPenutupanAttribute($value) {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function getCreatedAtAttribute($value) {
        return Carbon::parse($value)->format('d-m-Y H:i:s');
    }

    public function getUpdatedAtAttribute($value) {
        return Carbon::parse($value)->format('d-m-Y H:i:s');
    }
}
