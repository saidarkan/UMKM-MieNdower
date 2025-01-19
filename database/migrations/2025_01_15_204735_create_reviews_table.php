<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menu_id');  // Relasi ke menu
            $table->integer('rating');  // Rating bintang (1-5)
            $table->text('comment');  // Komentar
            $table->text('reply');  // Komentar
            $table->varchar('nama');  // Komentar


            // Menambahkan foreign key untuk relasi dengan tabel menu
            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
