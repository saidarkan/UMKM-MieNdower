<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            $table->string('pembuka');
            $table->string('judul1'); // Kolom judul
            $table->string('judul2');
            $table->text('deskripsi_judul'); // Kolom deskripsi_judul
            $table->string('subjudul'); // Kolom subjudul
            $table->text('deskripsi_subjudul'); // Kolom deskripsi_subjudul
            $table->binary('gambar'); // Kolom gambar (bisa diubah menjadi tipe file path jika perlu)

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepages');
    }
};
