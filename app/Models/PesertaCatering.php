<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PesertaCatering extends Model
{
    protected $table = 'peserta_catering';
    protected $primaryKey = 'id_peserta';

    protected $fillable = [
        'id_santri',
        'status'
    ];

    public function santri()
    {
        return $this->belongsTo(Santri::class, 'id_santri', 'id_santri');
    }
}