<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Staff::create([
            'user_id' => 1,
            'nama' => 'Admin Sekolah',
            'nip' => '198001012005011001',
            'nuptk' => '1234567890123456',
            'nrg' => '2020202020',
            'peg_id' => 'PEG001',
            'npk' => 'NPK001',
            'jk' => 'L',
            'alamat' => 'Jl. Pendidikan No. 1',
            'no_hp' => '081234567890',
            'status_kepegawaian' => 'Tetap',
            'jabatan' => 'Tata Usaha',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => '1980-01-01',
            'agama' => 'Islam',
            'pendidikan_terakhir' => 'S1',
            'jurusan' => 'Administrasi Pendidikan',
            'nama_institusi_pendidikan_terakhir' => 'Universitas Negeri Jakarta',
            'tahun_lulus' => 2003,
        ]);

        Staff::create([
            'user_id' => 2,
            'nama' => 'Guru Matematika',
            'nip' => '198505052010121002',
            'nuptk' => '6543210987654321',
            'nrg' => '3030303030',
            'peg_id' => 'PEG002',
            'npk' => 'NPK002',
            'jk' => 'P',
            'alamat' => 'Jl. Merdeka No. 2',
            'no_hp' => '081298765432',
            'status_kepegawaian' => 'Honorer',
            'jabatan' => 'Guru Matematika',
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => '1985-05-05',
            'agama' => 'Kristen',
            'pendidikan_terakhir' => 'S2',
            'jurusan' => 'Pendidikan Matematika',
            'nama_institusi_pendidikan_terakhir' => 'Universitas Pendidikan Indonesia',
            'tahun_lulus' => 2008,
        ]);
    }
}
