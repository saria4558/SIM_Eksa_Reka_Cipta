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
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gurus', function (Blueprint $table) {
            $table->string('npk')->nullable()->after('nuptk')->unique();
            $table->string('nik')->nullable()->after('nama')->unique();
            $table->string('nrg')->nullable()->after('npk')->unique();
            $table->string('peg_id')->nullable()->after('user_id')->unique();
        });
    }
};
