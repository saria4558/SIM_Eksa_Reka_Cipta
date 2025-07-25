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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['guru','staff','kepala_sekolah','wali_murid']);
            $table->rememberToken();
            $table->timestamps();
        });


        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('nip')->unique();
            $table->timestamps();
        });


        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('posisi')->nullable();
            $table->timestamps();
        });

        Schema::create('murids', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kelas')->nullable();
            $table->foreignId('wali_murid_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('mapels', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mapel');
            $table->foreignId('guru_id')->constrained('gurus')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('tugas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->date('deadline')->nullable();
            $table->foreignId('mapel_id')->constrained('mapels')->onDelete('cascade');
            $table->foreignId('dibuat_oleh')->constrained('gurus')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('tugas_murid', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tugas_id')->constrained('tugas')->onDelete('cascade');
            $table->foreignId('murid_id')->constrained('murids')->onDelete('cascade');
            $table->string('status')->default('belum_dikumpulkan');
            $table->integer('nilai')->nullable();
            $table->text('jawaban')->nullable();
            $table->timestamps();
        });
        Schema::create('kalenders', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kegiatan');
            $table->date('tanggal');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });

        Schema::create('presensi_murid', function (Blueprint $table) {
            $table->id();
            $table->foreignId('murid_id')->constrained('murids')->onDelete('cascade');
            $table->foreignId('kalender_id')->constrained('kalenders')->onDelete('cascade'); // 🔥 link ke kalender
            $table->date('tanggal')->index();
            $table->enum('status',['hadir','izin','sakit','alpa']);
            $table->timestamps();
        });

        Schema::create('presensi_guru', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id')->constrained('gurus')->onDelete('cascade');
            $table->foreignId('kalender_id')->constrained('kalenders')->onDelete('cascade'); // 🔥 link ke kalender
            $table->date('tanggal')->index();
            $table->enum('status',['hadir','izin','sakit','alpa']);
            $table->timestamps();
        });

        Schema::create('presensi_staff', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->constrained('staffs')->onDelete('cascade'); // ganti ke staffs kalau sudah diubah
            $table->foreignId('kalender_id')->constrained('kalenders')->onDelete('cascade'); // 🔥 link ke kalender
            $table->date('tanggal')->index();
            $table->enum('status',['hadir','izin','sakit','alpa']);
            $table->timestamps();
        });


        Schema::create('raports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('murid_id')->constrained('murids')->onDelete('cascade');
            $table->foreignId('mapel_id')->constrained('mapels')->onDelete('cascade');
            $table->integer('nilai');
            $table->string('semester');
            $table->string('tahun_ajaran');
            $table->timestamps();
        });

        Schema::create('tagihans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('murid_id')->constrained('murids')->onDelete('cascade');
            $table->string('deskripsi');
            $table->integer('jumlah');
            $table->enum('status',['belum','lunas'])->default('belum');
            $table->timestamps();
        });

        Schema::create('jadwal_guru', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id')->constrained('gurus')->onDelete('cascade');
            $table->foreignId('mapel_id')->constrained('mapels')->onDelete('cascade');
            $table->string('hari');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->timestamps();
        });

        Schema::create('jadwal_murid', function (Blueprint $table) {
            $table->id();
            $table->foreignId('murid_id')->constrained('murids')->onDelete('cascade');
            $table->foreignId('mapel_id')->constrained('mapels')->onDelete('cascade');
            $table->string('hari');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->timestamps();
        });

        Schema::create('inventaris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->integer('jumlah');
            $table->string('kondisi')->nullable();
            $table->timestamps();
        });

        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat');
            $table->enum('jenis',['masuk','keluar']);
            $table->date('tanggal');
            $table->string('perihal');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
        public function down(): void
        {
            Schema::dropIfExists('surats');
            Schema::dropIfExists('inventaris');
            Schema::dropIfExists('jadwal_murid');
            Schema::dropIfExists('jadwal_guru');
            Schema::dropIfExists('tagihans');
            Schema::dropIfExists('raports');
            Schema::dropIfExists('presensi_guru');
            Schema::dropIfExists('presensi_staff');
            Schema::dropIfExists('presensi_murid');
            Schema::dropIfExists('kalenders');
            Schema::dropIfExists('tugas_murid');
            Schema::dropIfExists('tugas');
            Schema::dropIfExists('mapels');
            Schema::dropIfExists('murids');
            Schema::dropIfExists('staffs');
            Schema::dropIfExists('gurus');
            Schema::dropIfExists('users');
        }

};
