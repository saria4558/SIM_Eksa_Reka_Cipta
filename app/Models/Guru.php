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
        'jk',
        'mapel',
        'tanggal_lahir',
        'tempat_lahir',
        'alamat',
        // Kolom tambahan dari migrasi baru
        'nuptk',
        'agama',
        'status_kepegawaian',
        'jabatan',
        'tmt',
        'pendidikan_terakhir',
        'jurusan_pendidikan',
        'nama_sertifikasi',
        'no_sertifikat',
        'foto',
        'golongan',
        'unit_penempatan',
        'pengalaman_mengajar',
        'pelatihan',
        'prestasi',
        'status_aktif',
        'no_hp',
        'npk',
        'nik',
        'nrg',
        'peg_id',
        'sertifikasi_id'
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
