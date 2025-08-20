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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Data Identitas
            $table->string('nip')->nullable();
            $table->string('nuptk')->nullable();
            $table->string('nrg')->nullable();
            $table->string('peg_id')->nullable();
            $table->string('npk')->nullable();
            $table->string('nama');
            $table->string('jabatan');
            $table->enum('jk', ['L', 'P']);
            $table->text('alamat');
            $table->string('no_hp');
            $table->enum('status_kepegawaian', ['Tetap', 'Honorer', 'Kontrak']);

            // Data Pribadi
            $table->string('nik')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('agama')->nullable();
            $table->string('golongan_darah')->nullable();

            // Data Kepegawaian
            $table->string('npsn_sekolah')->nullable();
            $table->string('unit')->nullable();
            $table->string('tugas_tambahan')->nullable();
            $table->date('tmt')->nullable();

            // Data Pendidikan
            $table->string('pendidikan_terakhir')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('nama_institusi_pendidikan_terakhir')->nullable();
            $table->year('tahun_lulus')->nullable();

            // Data Tambahan
            $table->string('keahlian_khusus')->nullable();
            $table->string('media_sosial')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('staff');
    }

};
