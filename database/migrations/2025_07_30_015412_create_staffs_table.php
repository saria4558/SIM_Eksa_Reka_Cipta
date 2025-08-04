<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->string('nama');
            $table->string('nip')->unique()->nullable(); // jika ada
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jk'); // Laki-laki / Perempuan
            $table->string('agama')->nullable();
            $table->string('jabatan'); // contoh: TU, Operator, Perpustakaan, dll
            $table->enum('status', ['Aktif', 'Tidak Aktif', 'Pensiun', 'Pindah'])->default('Aktif');
            $table->text('alamat')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('email_kantor')->nullable();
            $table->string('pendidikan_terakhir')->nullable();
            $table->string('foto')->nullable()->default('default.png');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('staffs');
    }
};