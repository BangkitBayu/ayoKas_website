<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengeluaranKas extends Model
{
    use HasFactory;

    protected $fillable = [
        'keterangan',
        'jumlah_pengeluaran',
        'tanggal_pengeluaran'
    ];

    protected function pengeluaran_kas()
    {
        return $this->hasMany(PengeluaranKas::class);
    }
}
