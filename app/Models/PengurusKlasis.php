<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengurusKlasis extends Model
{

    protected $fillable = [
        'id_klasis',
        'nama',
        'bidang',
        'jabatan',
    ];

    use HasFactory;
}
