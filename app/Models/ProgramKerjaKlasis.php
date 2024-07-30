<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramKerjaKlasis extends Model
{
    protected $fillable = [
        'id_klasis',
        'bidang',
        'tujuan',
        'waktu',
        'tempat',
    ];

    public function klasis()
    {
        return $this->belongsTo(Klasis::class, 'id_klasis');
    }

    use HasFactory;
}
