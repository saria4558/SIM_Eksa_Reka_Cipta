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
        Schema::create('murids', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->string('nis')->unique();
            $table->string('nisn')->unique();
            $table->string('nama');
            $table->enum('jk', ['L', 'P']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->text('alamat');
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();
            
            $table->string('kelas'); // contoh: X IPA 1
            $table->string('jurusan'); // contoh: IPA, IPS, RPL
            $table->year('tahun_masuk');
            $table->enum('status', ['aktif', 'alumni', 'pindah', 'dikeluarkan'])->default('aktif');

            // Data Orang Tua
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('telepon_ortu')->nullable();
            $table->text('alamat_ortu')->nullable();

            // Data Wali (opsional)
            $table->string('nama_wali')->nullable();
            $table->string('hubungan_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();

            // Data Lain
            $table->string('foto')->nullable();
            $table->string('no_kip')->nullable();
            $table->string('golongan_darah')->nullable();
            $table->text('catatan_kesehatan')->nullable();
            $table->text('catatan_prestasi')->nullable();
            $table->text('catatan_pelanggaran')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('murids');
    }
};
