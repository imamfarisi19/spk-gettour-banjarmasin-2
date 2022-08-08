<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempat_wisatas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->boolean('isAktif');
            $table->text('linkInternet');
            $table->foreignId('kategori_wisata_id');
            $table->foreignId('kelurahan_id');
            $table->double('latitude');
            $table->double('longitude');
            $table->text('deskripsi');
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tempat_wisatas');
    }
};
