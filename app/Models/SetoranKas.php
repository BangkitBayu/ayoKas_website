<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetoranKas extends Model
{
    use HasFactory;

    protected $fillable = ['jumlah_bayar', 'keterangan', 'periode', 'tanggal_bayar'];

    private function setoran_kas()
    {
        return $this->hasMany(SetoranKas::class);
    }
}
