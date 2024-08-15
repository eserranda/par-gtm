<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaJemaat extends Model
{
    protected $fillable = [
        'id_jemaat',
        'nama',
        'tgl_lahir',
        'kelas',
        'alamat',
    ];

    use HasFactory;
}
