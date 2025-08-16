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
        'kelas_id',
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
        'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
    public function jadwalPelajaran()
    {
        return $this->hasMany(JadwalPelajaran::class, 'kelas_id', 'kelas_id');
    }

}
