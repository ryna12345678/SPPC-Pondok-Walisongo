<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    protected $table = 'santri';
    protected $primaryKey = 'id_santri';

    protected $fillable = [
        'nama',
        'kelas',
        'asrama',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function pesertaCatering()
    {
        return $this->hasOne(PesertaCatering::class, 'id_santri', 'id_santri');
    }

    public function qrcode()
    {
        return $this->hasOne(Qrcode::class, 'id_santri', 'id_santri');
    }

    public function presensi()
    {
        return $this->hasMany(Presensi::class, 'id_santri', 'id_santri');
    }
}