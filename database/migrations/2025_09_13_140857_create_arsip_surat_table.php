<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('arsip_surat', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat');
            $table->unsignedBigInteger('kategori_id'); // relasi ke kategori
            $table->string('judul');
            $table->string('file'); // untuk simpan nama/path file PDF
            $table->timestamps();

            $table->foreign('kategori_id')
                  ->references('id')->on('kategori_surat')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('arsip_surat');
    }
};
