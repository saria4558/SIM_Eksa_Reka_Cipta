<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Murid;
use Illuminate\Support\Facades\Hash;

class Murid2Seeder extends Seeder
{
    public function run(): void
    {
        $murid = User::create([
            'username' => 'murid3',
            'email' => 'murid3@example.com',
            'password' => Hash::make('password'),
            'role' => 'murid',
            'foto' => 'default.png'
        ]);

        Murid::create([
            'user_id' => $murid->id,
            'nama' => 'Ani Murid 3',
            'nis' => '202304011',
            'nisn' => '994762655',
            'kelas' => 'XII IPS 2',
            'jurusan' => 'IPS',
            'tahun_masuk' => 2021,
            'status' => 'aktif',
            'jk' => 'P',
            'tanggal_lahir' => '2004-06-25',
            'tempat_lahir' => 'Banyuwangi',
            'agama' => 'Islam',
            'alamat' => 'Jl. Pelajar No.2',
            'nama_ayah' => 'Pak Budi',
            'nama_ibu' => 'Bu Ani',
            'telepon_ortu' => '08984543210',
        ]);
    }
}
