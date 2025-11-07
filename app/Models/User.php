<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable =["nama_kelas" , "asal_sekolah" , "password"];

    private function user() {
        return $this->hasMany(User::class);
    }
}
