<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('gurus', function (Blueprint $table) {
            // Tambahan identitas
            $table->string('nuptk')->nullable()->after('nip')->unique();
            $table->string('agama')->nullable()->after('tempat_lahir');

            // Data kepegawaian
            $table->string('status_kepegawaian')->nullable()->after('mapel'); // PNS, Honorer, dll
            $table->string('jabatan')->nullable()->after('status_kepegawaian');
            $table->date('tmt')->nullable()->after('jabatan');
            $table->string('pendidikan_terakhir')->nullable()->after('tmt');
            $table->string('jurusan_pendidikan')->nullable()->after('pendidikan_terakhir');
            $table->boolean('sertifikasi_guru')->default(false)->after('jurusan_pendidikan');
            $table->string('no_sertifikat')->nullable()->after('sertifikasi_guru');
            $table->string('golongan')->nullable()->after('no_sertifikat');
            $table->string('unit_penempatan')->nullable()->after('golongan');

            // Data tambahan
            $table->text('pengalaman_mengajar')->nullable()->after('unit_penempatan');
            $table->text('pelatihan')->nullable()->after('pengalaman_mengajar');
            $table->text('prestasi')->nullable()->after('pelatihan');

            // Status
            $table->boolean('status_aktif')->default(true)->after('prestasi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gurus', function (Blueprint $table) {
            $table->dropColumn([
                'nuptk', 'agama', 'email', 'foto',
                'status_kepegawaian', 'jabatan', 'tmt', 'pendidikan_terakhir', 'jurusan_pendidikan',
                'sertifikasi_guru', 'no_sertifikat', 'golongan', 'unit_penempatan',
                'pengalaman_mengajar', 'pelatihan', 'prestasi', 'status_aktif'
            ]);
        });
    }
};
