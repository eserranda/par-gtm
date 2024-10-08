<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $fillable = [
        'kegiatan',
        'waktu',
        'tempat',
        'pelaksana',
        'keterangan',
        'image',
    ];

    use HasFactory;
}
