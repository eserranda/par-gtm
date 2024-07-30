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
        Schema::create('program_kerja_klases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_klasis');
            $table->foreign('id_klasis')->references('id')->on('klases')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('bidang')->nullable();
            $table->string('tujuan')->nullable();
            $table->string('waktu')->nullable();
            $table->string('tempat')->nullable();
            $table->timestamps();
            // $table->string('sumber_anggaran')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_kerja_klases');
    }
};
