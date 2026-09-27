<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catering extends Model
{
    use HasFactory;

    protected $table = 'catering';
    protected $primaryKey = 'id_catering';

    protected $fillable = [
        'tanggal',
        'waktu',
        'menu',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function presensi()
    {
        return $this->hasMany(Presensi::class, 'id_catering', 'id_catering');
    }

    public function laporan()
    {
        return $this->hasOne(Laporan::class, 'id_catering', 'id_catering');
    }
}