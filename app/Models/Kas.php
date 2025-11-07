<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kas extends Model
{

    use HasFactory;

    protected $fillable = [
        'total',
        'periode',
        'keterangan',
        'tanggal'
    ];

    private function kas()
    {
        return $this->hasMany(Kas::class);
    }
}
