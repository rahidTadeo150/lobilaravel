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
        Schema::create('beasiswa', function (Blueprint $table) {
            $table->id();
            $table->String('nama_beasiswa')->length(100);
            $table->foreignId('instansi_id');
            $table->String('link_pendaftaran')->length(255);
            $table->text('persyaratan');
            $table->date('tanggal_penutupan');
            $table->date('tanggal_pendaftaran');
            $table->String('foto_beasiswa');
            $table->foreignId('tingkatan_id');
            $table->foreignId('status_id');
            $table->foreignId('admin_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beasiswa');
    }
};
