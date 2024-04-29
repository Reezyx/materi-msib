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
        Schema::create('mata_kuliah_diambil', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->unsignedBigInteger('matkul_id');
            $table->unsignedBigInteger('mahasiswa_id');
            $table->timestamps();

            $table->foreign('matkul_id')->references('id')->on('mata_kuliah');
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mata_kuliah_diambil');
    }
};
