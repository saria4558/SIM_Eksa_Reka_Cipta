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
        // Drop tabel jadwal_guru jika ada
        Schema::dropIfExists('jadwal_guru');

        // Drop tabel jadwal_murid jika ada
        Schema::dropIfExists('jadwal_murid');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Kalau butuh rollback, bisa buat ulang tabelnya
        Schema::create('jadwal_guru', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // tambah kolom lain sesuai kebutuhanmu
        });

        Schema::create('jadwal_murid', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // tambah kolom lain sesuai kebutuhanmu
        });
    }
};
