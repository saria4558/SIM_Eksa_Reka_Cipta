<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Guru;
use App\Models\Murid;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\JadwalPelajaran;
use App\Models\Ruangan;

class JadwalMapelSeeder extends Seeder
{
    public function run(): void
    {
        // === RUANGAN ===
        $ruang101 = Ruangan::create(['nama_ruangan' => 'Ruang 101']);
        $ruang102 = Ruangan::create(['nama_ruangan' => 'Ruang 102']);
        $labKomputer = Ruangan::create(['nama_ruangan' => 'Lab Komputer']);

        // === KELAS ===
        $kelasNama = [
            'X IPA 1', 'X IPA 2', 'XI IPA 1', 'XI IPA 2', 'XII IPA 1', 'XII IPA 2',
            'X IPS 1', 'X IPS 2', 'XI IPS 1', 'XI IPS 2', 'XII IPS 1', 'XII IPS 2'
        ];

        $kelas = [];
        foreach ($kelasNama as $kn) {
            $kelas[] = Kelas::create(['nama_kelas' => $kn]);
        }

        // === GURU & MAPEL ===
        $guruData = [
            ['nama'=>'Pak Budi','mapel'=>'Matematika'],
            ['nama'=>'Pak Bani','mapel'=>'Bahasa Indonesia'],
            ['nama'=>'Bu Rina','mapel'=>'Fisika'],
            ['nama'=>'Pak Anton','mapel'=>'Kimia'],
            ['nama'=>'Bu Sari','mapel'=>'Biologi'],
        ];

        $guruMapel = [];
        foreach ($guruData as $index => $data) {
            $userGuru = User::create([
                'username' => strtolower(str_replace(' ','',$data['nama'])),
                'email' => strtolower(str_replace(' ','',$data['nama'])).'@example.com',
                'password' => bcrypt('password'),
                'role' => 'guru',
            ]);

            $nip = '1980123120' . str_pad($index + 1, 2, '0', STR_PAD_LEFT); // NIP unik

            $guru = Guru::create([
                'user_id' => $userGuru->id,
                'nama' => $data['nama'],
                'nip' => $nip,
                'jk' => 'L',
                'mapel' => $data['mapel'],
                'alamat' => 'Jl. Pendidikan No.1',
                'no_hp' => '0812345678'.str_pad($index,1,'0',STR_PAD_LEFT),
                'tanggal_lahir' => '1980-01-01',
                'tempat_lahir' => 'Banyuwangi'
            ]);

            $mapel = Mapel::create([
                'nama_mapel' => $data['mapel'],
                'guru_id' => $guru->id,
            ]);

            $guruMapel[] = $mapel;
        }

        // === MURID ===
        $namaLaki = ['Ahmad','Budi','Cahyo','Deni','Eko','Fajar','Galih','Hendra','Irfan','Joko'];
        $namaPerempuan = ['Ayu','Bella','Citra','Diana','Eka','Fitri','Gita','Hana','Intan','Juli'];

        $globalMuridIndex = 0; // untuk NIS & NISN unik

        foreach ($kelas as $kelasItem) {
            for ($i=0; $i<10; $i++) { // 10 murid per kelas
                $isLaki = $i % 2 == 0;
                $nama = $isLaki ? $namaLaki[$i % count($namaLaki)] : $namaPerempuan[$i % count($namaPerempuan)];

                $username = strtolower($nama) . '_' . str_replace(' ','', $kelasItem->nama_kelas) . ($i+1);
                $email = $username . '@example.com';

                $userMurid = User::create([
                    'username' => $username,
                    'email' => $email,
                    'password' => bcrypt('password'),
                    'role' => 'murid',
                ]);

                $globalMuridIndex++;
                $nis = 2023000 + $globalMuridIndex;        // NIS unik
                $nisn = 99887762000 + $globalMuridIndex;  // NISN unik

                Murid::create([
                    'user_id' => $userMurid->id,
                    'nama' => $nama,
                    'nis' => $nis,
                    'kelas_id' => $kelasItem->id,
                    'nisn' => $nisn,
                    'jurusan' => str_contains($kelasItem->nama_kelas,'IPA')?'IPA':'IPS',
                    'tahun_masuk' => 2021,
                    'status' => 'aktif',
                    'jk' => $isLaki?'L':'P',
                    'tanggal_lahir' => '2005-01-01',
                    'tempat_lahir' => 'Banyuwangi',
                    'agama' => 'Islam',
                    'alamat' => 'Jl. Pelajar No.'.($i+1),
                    'nama_ayah' => 'Bapak '.$nama,
                    'nama_ibu' => 'Ibu '.$nama,
                    'telepon_ortu' => '081234567'.str_pad($i,3,'0',STR_PAD_LEFT),
                ]);
            }
        }

        // === JADWAL PELAJARAN ===
        $hari = ['Senin','Selasa','Rabu','Kamis','Jumat'];
        $jamMulai = ['07:00','08:30','10:00','11:30','13:00'];
        $jamSelesai = ['08:30','10:00','11:30','13:00','14:30'];

        foreach ($kelas as $kelasItem) {
            foreach ($hari as $index => $h) {
                $mapel = $guruMapel[$index % count($guruMapel)];
                $ruangan = [$ruang101, $ruang102, $labKomputer][$index % 3];

                JadwalPelajaran::create([
                    'kelas_id' => $kelasItem->id,
                    'mapel_id' => $mapel->id,
                    'guru_id' => $mapel->guru_id,
                    'ruangan_id' => $ruangan->id,
                    'hari' => $h,
                    'jam_mulai' => $jamMulai[$index],
                    'jam_selesai' => $jamSelesai[$index],
                ]);
            }
        }
    }
}
