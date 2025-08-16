<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sertifikasi;
use App\Models\User;
use Carbon\Carbon;

class SertifikasiSeeder extends Seeder
{
    /**
     * Jalankan seeder.
     */
    public function run(): void
    {
        // Ambil user yang role-nya bukan murid
        $users = User::where('role', '!=', 'murid')->get();

        foreach ($users as $user) {
            Sertifikasi::create([
                'user_id'             => $user->id,
                'nama_sertifikasi'    => 'Sertifikasi Profesional ' . $user->username,
                'no_sertifikat'       => 'CERT-' . strtoupper(uniqid()),
                'penerbit_sertifikat' => 'Badan Sertifikasi Nasional',
                'tanggal_diterbitkan' => Carbon::now()->subMonths(rand(1, 12)),
                'tanggal_kadaluarsa'  => Carbon::now()->addMonths(rand(6, 24)),
                'deskripsi'           => 'Sertifikasi ini membuktikan kompetensi di bidang yang relevan.',
                'foto_sertifikat'     => 'default_sertifikat.jpg',
            ]);
        }
    }
}
