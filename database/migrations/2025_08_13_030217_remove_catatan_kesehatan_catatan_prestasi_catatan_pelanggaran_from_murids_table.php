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
        Schema::table('murids', function (Blueprint $table) {
            // Hapus kolom catatan kesehatan, catatan prestasi, dan catatan pelanggaran
            $table->dropColumn([
                'catatan_kesehatan',
                'catatan_prestasi',
                'catatan_pelanggaran'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('murids', function (Blueprint $table) {
            // Tambahkan kembali kolom yang dihapus
            $table->text('catatan_kesehatan')->nullable()->after('alamat');
            $table->text('catatan_prestasi')->nullable()->after('catatan_kesehatan');
            $table->text('catatan_pelanggaran')->nullable()->after('catatan_prestasi');
        });
    }
};
