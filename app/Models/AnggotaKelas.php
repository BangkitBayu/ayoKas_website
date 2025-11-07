<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaKelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'status',
        'kontak'
    ];

    private function anggota_kelas() {
        return $this->hasMany(AnggotaKelas::class);
    }
}
