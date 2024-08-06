<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramKerjaJemaat extends Model
{

    protected $fillable = [
        'id_jemaat',
        'bidang',
        'tujuan',
        'waktu',
        'tempat',
    ];

    public function jemaat()
    {
        return $this->belongsTo(Jemaat::class, 'id_jemaat');
    }
    use HasFactory;
}
