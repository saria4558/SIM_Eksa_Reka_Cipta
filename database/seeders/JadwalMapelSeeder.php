<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Guru;
use App\Models\Murid;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\JadwalPelajaran;

class JadwalMapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // === 1. KELAS ===
        $kelas1A1 = Kelas::create(['nama_kelas' => 'X IPA 1']);
        $kelas1S1 = Kelas::create(['nama_kelas' => 'X IPS 1']);
        $kelas2A1 = Kelas::create(['nama_kelas' => 'XI IPA 1']);
        $kelas2S1 = Kelas::create(['nama_kelas' => 'XI IPS 1']);
        $kelas3A1 = Kelas::create(['nama_kelas' => 'XII IPA 1']);
        $kelas3S1 = Kelas::create(['nama_kelas' => 'XII IPS 1']);

        // === 2. GURU ===
        $userGuru = User::create([
            'username' => 'Pak Budi',
            'email' => 'guru@example.com',
            'password' => bcrypt('password'),
            'role' => 'guru',
        ]);

        $guru = Guru::create([
            'user_id' => $userGuru->id,
            'nama' => 'Pak Budi',
            'nip' => '198012312005',
            'jk' => 'Laki - Laki',
            'mapel' => 'Matematika',
            'alamat' => 'Jl. Pendidikan No.1',
            'no_hp' => '081234567890',
            'tanggal_lahir' => '2004-06-25',
            'tempat_lahir' => 'Banyuwangi'

            
        ]);

        // === 3. MURID ===
        $userMurid = User::create([
            'username' => 'Ayu',
            'email' => 'ayu@example.com',
            'password' => bcrypt('password'),
            'role' => 'murid',
        ]);

        Murid::create([
            'user_id' => $userMurid->id,
            'nama' => 'Ayu',
            'nis' => '123456',
            'kelas_id' => $kelas1A1->id,
            'nisn' => '99887762675',
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

        // === 4. MATA PELAJARAN ===
        $mapel = Mapel::create([
            'nama_mapel' => 'Matematika',
            'guru_id' => $guru->id,
        ]);

        // === 5. JADWAL PELAJARAN ===
        JadwalPelajaran::create([
            'kelas_id' => $kelas1A1->id,
            'mapel_id' => $mapel->id,
            'hari' => 'Senin',
            'jam_mulai' => '07:00',
            'jam_selesai' => '08:30',
        ]);

        JadwalPelajaran::create([
            'kelas_id' => $kelas2A1->id,
            'mapel_id' => $mapel->id,
            'hari' => 'Selasa',
            'jam_mulai' => '09:00',
            'jam_selesai' => '10:30',
        ]);
    }
}
