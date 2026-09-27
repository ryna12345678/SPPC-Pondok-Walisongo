
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    protected $table = 'presensi';
    protected $primaryKey = 'id_presensi';

    protected $fillable = [
        'id_santri',
        'id_catering',
        'status',
        'waktu_scan'
    ];

    protected $casts = [
        'waktu_scan' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function santri()
    {
        return $this->belongsTo(Santri::class, 'id_santri', 'id_santri');
    }

    public function catering()
    {
        return $this->belongsTo(Catering::class, 'id_catering', 'id_catering');
    }

    public function pengambilanLauk()
    {
        return $this->hasOne(PengambilanLauk::class, 'id_presensi', 'id_presensi');
    }
}
