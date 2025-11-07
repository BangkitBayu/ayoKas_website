<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatAktivitas extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipe_aktivitas',
        'keterangan',
        'total'
    ];

    private function riwayat_aktivitas()
    {
        return $this->hasMany(RiwayatAktivitas::class);
    }
}
