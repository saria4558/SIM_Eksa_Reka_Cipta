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
            $table->foreignId('sertifikasi_id')
                  ->nullable()
                  ->constrained('tb_sertifikasi')
                  ->onDelete('set null')
                  ->after('id'); // atau sesuaikan dengan urutan kolom yang kamu mau
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gurus', function (Blueprint $table) {
            $table->dropForeign(['sertifikasi_id']);
            $table->dropColumn('sertifikasi_id');
        });
    }
};
