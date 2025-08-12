<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatatanPelanggaran extends Model
{
    protected $fillable = [
        'murid_id',
        'guru_id',
        'nama_pelanggaran',
        'deskripsi',
        'tingkat',
        'sanksi'
    ];

    public function murid()
    {
        return $this->belongsTo(Murid::class);
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
