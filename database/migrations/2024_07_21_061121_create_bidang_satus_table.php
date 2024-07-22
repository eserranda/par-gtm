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
        Schema::create('bidang_satus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kegiatan');
            $table->string('waktu_dan_tempat');
            $table->string('tujuan');
            $table->string('sasaran_belanja');
            $table->string('sumber_biaya');
            $table->string('penanggung_jawab');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bidang_satus');
    }
};