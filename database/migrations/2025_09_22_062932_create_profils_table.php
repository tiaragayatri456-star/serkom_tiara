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
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_sekolah');
            $table->string('kepala_sekolah');
            $table->string('foto');
            $table->string('logo');
            $table->string('npsn');
            $table->text('alamat');
            $table->string('kontak');
            $table->text('visi_misi');
            $table->year('tahun_berdiri');
            $table->text('deskripsi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profils');
    }
};
