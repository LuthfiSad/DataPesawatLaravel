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
        Schema::create('pesawats', function (Blueprint $table) {
            $table->id();
            $table->String('kode_pesawat')->unique();
            $table->String('nama_pesawat');
            $table->String('type');
            $table->year('tahun_rakit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesawats');
    }
};
