<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengambilanLauk extends Model
{
    protected $table = 'pengambilan_lauk';
    protected $primaryKey = 'id_pengambilan';

    protected $fillable = [
        'id_presensi',
        'jumlah_lauk'
    ];

    public function presensi()
    {
        return $this->belongsTo(Presensi::class, 'id_presensi', 'id_presensi');
    }
}