<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Guru;
use App\Models\Murid;
use App\Models\Kepsek;
use App\Models\Staff;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Guru
        $guru = User::create([
            'username' => 'guru1',
            'email' => 'guru1@example.com',
            'password' => Hash::make('password'),
            'role' => 'guru',
            'foto' => 'default.png'
        ]);
        Guru::create([
            'user_id' => $guru->id,
            'nama' => 'Pak Guru',
            'nip' => '1234567890',
            'jk' => 'L',
            'alamat' => 'Jl. Pendidikan No.1',
            'no_hp' => '081234567890',
            'mapel' => 'matematika',
            'tanggal_lahir' => '2004-06-25',
            'tempat_lahir' => 'Banyuwangi'
        ]);

        $user = User::create([
            'username' => 'gurusatu',
            'email' => 'gurusatu@example.com',
            'password' => Hash::make('password123'),
            'role' => 'guru'
        ]);

        // Buat data guru
        Guru::create([
            'user_id' => $user->id,
            'nama' => 'Budi Santoso',
            'nip' => '198012312010011001',
            'jk' => 'L',
            'mapel' => 'Matematika',
            'tanggal_lahir' => '1980-12-31',
            'tempat_lahir' => 'Banyuwangi',
            'alamat' => 'Jl. Raya No. 123',
            'nuptk' => '1234567890123456',
            'agama' => 'Islam',
            'status_kepegawaian' => 'PNS',
            'jabatan' => 'Guru Madya',
            'tmt' => '2010-01-01',
            'pendidikan_terakhir' => 'S1',
            'jurusan_pendidikan' => 'Pendidikan Matematika',
            'golongan' => 'IV/a',
            'status_aktif' => '1',
            'no_hp' => '081234567890',
            'npk' => 'NPK001',
            'nik' => '3501010101010001',
            'nrg' => 'NRG001',
            'peg_id' => 'PEG001',
        ]);

        // Murid
        $murid = User::create([
            'username' => 'murid1',
            'email' => 'murid1@example.com',
            'password' => Hash::make('password'),
            'role' => 'murid',
            'foto' => 'default.png'
        ]);
        Murid::create([
            'user_id' => $murid->id,
            'nama' => 'Ani Murid',
            'nis' => '20230101',
            'nisn' => '9988776655',
            // 'kelas' => 'XII IPA 1',
            'jurusan' => 'IPA',
            'tahun_masuk' => 2021,
            'status' => 'aktif',
            'jk' => 'P',
            'tanggal_lahir' => '2004-06-25',
            'tempat_lahir' => 'Banyuwangi',
            'agama' => 'Islam',
            'alamat' => 'Jl. Pelajar No.2',
            'nama_ayah' => 'Pak Budi',
            'nama_ibu' => 'Bu Ani',
            'telepon_ortu' => '089876543210',
        ]);

        $murid = User::create([
            'username' => 'murid2',
            'email' => 'murid2@example.com',
            'password' => Hash::make('password'),
            'role' => 'murid',
            'foto' => 'default.png'
        ]);
        Murid::create([
            'user_id' => $murid->id,
            'nama' => 'Ani Murid',
            'nis' => '202301011',
            'nisn' => '99887762655',
            // 'kelas' => 'XII IPS 2',
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
            'telepon_ortu' => '0898276543210',
        ]);

        // Kepsek
        $kepsek = User::create([
            'username' => 'kepsek1',
            'email' => 'kepsek1@example.com',
            'password' => Hash::make('password'),
            'role' => 'kepsek',
            'foto' => 'default.png'
        ]);
        Kepsek::create([
            'user_id' => $kepsek->id,
            'nama' => 'Bu Kepsek',
            'nip' => '1029384756',
            'tanggal_lahir' => '2004-06-25',
            'jk' => 'P',
            'alamat' => 'Jl. Kepemimpinan No.3',
            'no_hp' => '087712341234',
            'mulai_menjabat'=> '2020-09-23',
        ]);

        // Staff
        $staff = User::create([
            'username' => 'staff1',
            'email' => 'staff1@example.com',
            'password' => Hash::make('password'),
            'role' => 'staff',
            'foto' => 'default.png'
        ]);
        Staff::create([
            'user_id' => $staff->id,
            'nama' => 'Pak Staff',
            'nip' => '5647382910',
            'jabatan' => 'TU',
            'jk' => 'L',
            'alamat' => 'Jl. Administrasi No.4',
            'no_hp' => '086789012345',
        ]);
    }
}
