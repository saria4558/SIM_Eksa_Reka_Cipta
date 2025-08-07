<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Murid extends Model
{
    protected $table = 'murids';

    protected $fillable = [
        'nis', 'nisn', 'nama', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir','agama', 'alamat', 'telepon',
        'email', 'kelas', 'jurusan', 'tahun_masuk', 'status', 'nama_ayah', 'nama_ibu', 'pekerjaan_ayah', 'pekerjaan_ibu', 'telepon_ortu', 'alamat_ortu',
        'nama_wali', 'hubungan_wali', 'pekerjaan_wali', 'foto', 'no_kip', 'golongan_darah',
        'catatan_kesehatan',
        'catatan_prestasi',
        'catatan_pelanggaran',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
