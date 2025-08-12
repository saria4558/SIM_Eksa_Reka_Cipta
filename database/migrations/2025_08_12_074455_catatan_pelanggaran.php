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
        Schema::create('catatan_pelanggaran', function (Blueprint $table) {
            $table->id();

            // Relasi ke murid
            $table->foreignId('murid_id')
                ->constrained('murids')
                ->onDelete('cascade');

            // Relasi ke guru
            $table->foreignId('guru_id')
                ->constrained('gurus')
                ->onDelete('cascade');

            $table->string('nama_pelanggaran');
            $table->text('deskripsi')->nullable();
            $table->enum('tingkat', ['ringan', 'sedang', 'berat'])->default('ringan');
            $table->string('sanksi')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
