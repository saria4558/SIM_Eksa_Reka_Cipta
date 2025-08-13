<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikasi extends Model
{
    use HasFactory;

    protected $table = 'tb_sertifikasi';

    protected $fillable = [
        'user_id',
        'nama_sertifikasi',
        'no_sertifikat',
        'penerbit_sertifikat',
        'tanggal_diterbitkan',
        'tanggal_kadaluarsa',
        'deskripsi',
        'foto_sertifikat',
    ];

    /**
     * Relasi ke User
     * Satu sertifikasi dimiliki oleh satu user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke Guru
     * Satu sertifikasi bisa digunakan oleh banyak guru.
     */
    public function gurus()
    {
        return $this->hasMany(Guru::class, 'sertifikasi_id');
    }
}
