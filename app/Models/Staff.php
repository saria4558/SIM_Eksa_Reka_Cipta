<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Staff extends Model
{
    protected $table = 'staff';

    protected $fillable = [
        'user_id',
        'nip',
        'nuptk',
        'nrg',
        'peg_id',
        'npk',
        'nama',
        'jabatan',
        'jk',
        'alamat',
        'no_hp',
        'status_kepegawaian',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'golongan_darah',
        'npsn_sekolah',
        'unit',
        'tugas_tambahan',
        'tmt',
        'pendidikan_terakhir',
        'jurusan',
        'nama_institusi_pendidikan_terakhir',
        'tahun_lulus',
        'keahlian_khusus',
        'media_sosial',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
