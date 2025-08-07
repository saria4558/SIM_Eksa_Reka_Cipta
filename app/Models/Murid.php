<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Murid extends Model
{
    protected $table = 'murids';

    protected $fillable = [
        'nis',
        'nisn',
        'nama',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'alamat',
        'telepon',
        'kelas',
        'jurusan',
        'tahun_masuk',
        'status',
        'nama_ayah',
        'nama_ibu',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'telepon_ortu',
        'alamat_ortu',
        'nama_wali',
        'hubungan_wali',
        'pekerjaan_wali',
        'no_kip',
        'golongan_darah',
        'catatan_kesehatan',
        'catatan_prestasi',
        'catatan_pelanggaran',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
