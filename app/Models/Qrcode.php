<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qrcode extends Model
{
    protected $table = 'qrcode';
    protected $primaryKey = 'id_qrcode';

    protected $fillable = [
        'id_santri',
        'kode_qr'
    ];

    public function santri()
    {
        return $this->belongsTo(Santri::class, 'id_santri', 'id_santri');
    }
}