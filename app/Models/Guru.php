<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Guru extends Model
{
    protected $table = 'gurus';

    protected $fillable = [
        'user_id',
        'nama',
        'nip',
        'mapel',
        'alamat',
        'jk',

        // Kolom tambahan dari migrasi baru
        'nuptk',
        'agama',
        'status_kepegawaian',
        'jabatan',
        'tmt',
        'pendidikan_terakhir',
        'jurusan_pendidikan',
        'sertifikasi_guru',
        'no_sertifikat',
        'golongan',
        'unit_penempatan',
        'pengalaman_mengajar',
        'pelatihan',
        'prestasi',
        'status_aktif'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function mapels()
    {
        return $this->hasMany(Mapel::class);
    }
}
