<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangSatu extends Model
{
    protected $fillable = [
        'nama_kegiatan',
        'waktu_dan_tempat',
        'tujuan',
        'sasaran_belanja',
        'sumber_biaya',
        'penanggung_jawab',
    ];
    use HasFactory;
}