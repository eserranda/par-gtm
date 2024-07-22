<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    protected $fillable = [
        'nama_pengurus',
        'jabatan',
        'tahun_mulai',
        'tahun_selesai',
    ];

    use HasFactory;
}
